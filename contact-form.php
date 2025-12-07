<?php
/* 
Template Name: Contact Form
 */
?>

<?php get_header(); ?>

<h1>Here's our contact form!</h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_title("<h2>","</h2>") ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>