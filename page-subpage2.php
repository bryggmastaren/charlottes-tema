<?php 
/* 
Template Name: Subpage 2
*/
?>

<?php get_header(); ?>

<div class="subpage-2-container">
    <aside class="subpage-2-sidebar">
        <?php dynamic_sidebar('subpage-2-sidebar'); ?>
    </aside>

    <div class="subpage-2-content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>