<?php get_header(); ?>

<div class="archive-container">
<h1><?php the_archive_title(); ?></h1>

<div class="blog-post-container">

<?php if (have_posts()) : ?>
    
    <?php while (have_posts()) : the_post(); ?>
        <div class="blog-post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h5><?php the_author(); ?></h5>
            <h6><?php echo get_the_date(); ?></h6>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; ?>

</div> <!-- blog-post-container -->

<div class="pagination">
    <?php
    echo paginate_links(array(
        'prev_text' => __('« Previous', 'textdomain'),
        'next_text' => __('Nästa »', 'textdomain'),
    ));
    ?>
</div>

<?php else : ?>
    <p>No posts found</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>