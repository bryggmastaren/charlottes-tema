<?php get_header(); ?>

<!-- 
<img src="< ?php echo get_template_directory_uri(); ?>/assets/images/fallback.png" alt="Fallback Image" />  ÄNDRA HÄR -->

<h1>Här är mina blogginlägg</h1> 

<div class="blog-post-container">
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    <div class="blog-post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h5><?php the_author(); ?></h5>
    <h6><?php the_date(); ?></h6>
    <p><?php the_content(); ?></p>
    </div>
<?php endwhile; ?>

</div>
<div class="pagination">
    <?php
    // Paginering
   echo paginate_links(array(
        'prev_text' => __('« Previous', 'textdomain'),
        'next_text' => __('Nästa »', 'textdomain'),
    ));
    ?>
</div>

<?php else : ?>
    <p>No posts found</p>
<?php endif; ?>


<?php get_footer(); ?>
</body>
 <!-- Bästa sättet göra bild på detta är:
<img src=" < ? php echo get_template_directory_uri() ?>/assets/images/bild.jpg" /> --> 

<!-- Lägg till background-image i CSS istället för såhär:
<div style="background-image:url(' < ? php echo get_template_directory_uri() ?>/assets/images/bild.jpg" /> -->
</html>