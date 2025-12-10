
<?php get_header(); ?>

<div class="search-container">
    <h1>SÖKRESULTAT</h1> 


    <div class="search-content">
    <div class="src-blog-post">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- <h2>< ?php the_title(); ?> </h2> -->
<?php the_title("<h2>","</h2>") ?>
<?php the_excerpt("<p>","</p>") ?>
</div>
<?php endwhile; ?>

<?php else : ?>
<p> No posts matched this query... </p>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>

