<?php get_header(); ?>

<div class="blog-post-container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    
        <div class="blog-post" id="single-post-content">
<div class="blog-post-text">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
       <h5><?php the_author(); ?></h5>
            <h6><?php echo get_the_date(); ?></h6>

            <p><?php the_excerpt(); ?></p>
</div>
            <?php if ( has_post_thumbnail() ) : ?>
                <img  class="blog-post-img"
                    srcset="<?php echo wp_get_attachment_image_srcset( get_post_thumbnail_id() ); ?>"
                    sizes="(max-width: 200px) 90vw, 200px"
                    loading="lazy"
                    alt="<?php the_title_attribute(); ?>"
                >
               
            <?php endif; ?>
 
     
        </div>

    <?php endwhile; ?>

</div>

<div class="pagination">
    <?php
    echo paginate_links([
        'prev_text' => __('« Previous'),
        'next_text' => __('Nästa »'),
    ]);
    ?>
</div>

<?php else : ?>
    <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>