<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_title("<h2>","</h2>") ?>
<?php the_content("<p>","</p>") ?>
    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
