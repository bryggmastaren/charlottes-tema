<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php bloginfo('name'); ?></title>
   <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
   <?php wp_head() ?>
</head>

<body>

<header>
    <nav>
    <a href="<?php echo home_url(); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" 
         alt="<?php bloginfo('name') ; ?>" 
         class="site-logo">
        
</a>
        <?php
        wp_nav_menu( 
            array(
            'theme_location' => 'header-menu',
            'container'      => false,
            'menu_class'     => 'charlottes-header-menu'
        ) );
        ?>
     <?php get_template_part('template-parts/searchform'); ?>
    </nav>

   
</header>