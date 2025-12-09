<?php
/*
Template Name: Sidebar Page
*/
?>


<div class="content-wrapper">
    <main class="main-content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </main>

   
</div>
<?php get_sidebar(); ?>
