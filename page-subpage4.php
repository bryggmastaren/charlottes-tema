<?php 
/* 
Template Name: Subpage 4
*/
?>


<?php get_header(); ?>

<div class="subpage-4-container">
    <div class="subpage-4-content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

    <aside class="subpage-4-img">
        <?php dynamic_sidebar('subpage-4-img'); ?>
    </aside>
</div>

<?php get_footer(); ?>