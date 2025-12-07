
<?php get_header(); ?>
<?php get_template_part('template-parts/header');?>
    <h1> SÖKRESULTAT</h1>

    
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- <h2>< ?php the_title(); ?> </h2> -->
<?php the_title("<h2>","</h2>") ?>
<?php the_excerpt("<p>","</p>") ?>
<?php endwhile; ?>

<?php else : ?>
<p> No posts matched this query... </p>
<?php endif; ?>

<?php get_template_part('template-parts/footer');?>
<?php get_footer(); ?>