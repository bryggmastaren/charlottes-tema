<?php
/* 
Template Name: Contact Form
 */
?>

<?php get_header(); ?>

<div class="contact-form">

<h1>Here's our contact form!</h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="my-content-wrapper">
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>