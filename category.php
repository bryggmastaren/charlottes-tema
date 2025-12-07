<?php get_header(); ?>


<h1><?php the_archive_title(); ?> </h1>

<p> this is a page for all my categories</p>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <h2> <a href="<?php the_permalink(); ?>"> <?php the_title();?></a> </h2>
        <p> <?php the_excerpt(); ?> </p>
    <?php endwhile; ?>

<?php else : ?>

<p> No posts found </p>
<?php endif; ?>


<?php get_footer(); ?>
