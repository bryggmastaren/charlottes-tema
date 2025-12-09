<?php
/* 
Template Name: Subpage 1
*/
?> 
<?php get_header(); ?>

<div class="subpage-1-container">
    <div class="subpage-1-content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

    <aside class="subpage-1-sidebar">
        <?php dynamic_sidebar('subpage-1-sidebar'); ?>
    </aside>
</div>

<?php get_footer(); ?>