<?php get_header(); ?>
<?php get_template_part('template-parts/header');?>
<h1><?php the_archive_title(); ?> </h1>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <h2> <a href="<?php the_permalink(); ?>"> <?php the_title();?></a> </h2>
        <p> <?php the_excerpt(); ?> </p>
    <?php endwhile; ?>

<?php else : ?>

<p> No posts found </p>
<?php endif; ?>

<?php get_template_part('template-parts/footer');?>