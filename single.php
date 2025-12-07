<?php get_header() ?>

    <h1> Oj något har gått snett! </h1>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h2> <?php the_title();?> </h2>
        <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail('custom-medium');
} else {
    // fallbackbild om inget är uppladdat
    echo '<img src="' . get_template_directory_uri() . '/assets/images/fallback.png" alt="Fallbackbild">';
} ?>

<h5> <?php the_author() ?> </h5>
<h6> <?php the_date() ?> </h6>
<p> <?php the_content() ?> </p>

<?php endwhile; ?>

<?php else : ?>
<p> No posts found </p>


<?php endif; ?>

<?php get_template_part('template-parts/footer');?>



