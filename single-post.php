<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1>
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
</h1>

<!-- bild-optimering -->
<?php if ( has_post_thumbnail() ) : ?>
    <img 
        srcset="<?php echo wp_get_attachment_image_srcset( get_post_thumbnail_id() ); ?>"
        sizes="(max-width: 300px) 100vw, (max-width: 300px) 50vw, 200px"
        loading="lazy"
        alt="<?php the_title_attribute(); ?>"
    >
<?php endif; ?>

<h5><?php the_author(); ?></h5>
<h6><?php the_date(); ?></h6>

<div class="post-content">
    <?php the_content(); ?>
</div>

<p>single-post</p>

<?php endwhile; endif; ?>

<?php get_footer(); ?>