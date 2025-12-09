<?php
/* 
Template Name: About Us
*/
?>

<?php get_header(); ?>

<div class="about-us-container">
    <div class="about-us-content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

    <aside class="about-us-sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>

<?php get_footer(); ?>