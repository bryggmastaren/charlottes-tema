<?php
 
function load_theme_styles()
{
    // style.css i rotmappen
    $root_style = get_template_directory_uri() . '/style.css';
    $root_style_version = filemtime(get_template_directory() . '/style.css');

    wp_enqueue_style(
        'charlottes-root-style',
        $root_style,
        array(),
        $root_style_version,
        'all'
    );

    $sub_path = 'assets/css/';
    $path_to_style = get_template_directory_uri() . '/' . $sub_path;
    $style_version = filemtime(get_template_directory() . '/' . $sub_path . 'main-stylesheet.css');

    // main stylesheet (i assets)
    wp_enqueue_style(
        'charlottes-main-style',
        $path_to_style . 'main-stylesheet.css',
        array(),
        $style_version,
        'all'
    );
 
    // home stylesheet
    if (is_home()) {
        $home_style_version = filemtime(get_template_directory() . '/' . $sub_path . 'home-stylesheet.css');

        wp_enqueue_style(
            'charlottes-home-style',
            $path_to_style . 'home-stylesheet.css',
            array('charlottes-main-style'),
            $home_style_version,
            'all'
        );
    }

    // NYTT: subpages stylesheet (från rotmappen)
    if (is_page()) {
        $subpages_css_path = get_template_directory() . '/subpages.css';
        
        // Kolla om filen finns
        if (file_exists($subpages_css_path)) {
            $subpages_style_version = filemtime($subpages_css_path);
            
            wp_enqueue_style(
                'charlottes-subpages-style',
                get_template_directory_uri() . '/subpages.css',
                array('charlottes-main-style'),
                $subpages_style_version,
                'all'
            );
        }
    }
}

add_action('wp_enqueue_scripts', 'load_theme_styles');

// funktion ladda js filer
function load_js_files()
{
    $sub_path = 'assets/js/';
    $path_to_style = get_template_directory_uri() . '/' . $sub_path;
    $style_version = filemtime(get_template_directory() . '/' . $sub_path . 'main.js');

    wp_enqueue_script(
        'charlottes-scripts',
        $path_to_style . 'main.js',
        array(),
        $style_version,
        true
    );
}

add_action('wp_enqueue_scripts', 'load_js_files');

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}
add_action('init', 'register_my_menus');

add_theme_support('post-thumbnails');
add_image_size('custom-medium', 800, 600, false);

// olika widgetområden
function my_theme_register_sidebar() {
    // footer sidebar
    register_sidebar(array(
        'name' => 'Footer Sidebar',
        'id' => 'footer-sidebar',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ));
    
    // sidebar
    register_sidebar(array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

        register_sidebar(array(
        'name' => 'Subpage 1 Sidebar',
        'id' => 'subpage-1-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

        register_sidebar(array(
        'name' => 'Subpage 2 Sidebar',
        'id' => 'subpage-2-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

        register_sidebar(array(
        'name' => 'Subpage 4 Image',
        'id' => 'subpage-4-img',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}

add_action('widgets_init', 'my_theme_register_sidebar');

// Debug - ta bort detta senare
add_action('wp_head', function() {
    if (is_page_template()) {
        echo '<!-- Template: ' . get_page_template_slug() . ' -->';
    } else {
        echo '<!-- No template -->';
    }
});