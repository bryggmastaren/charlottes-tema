<?php get_header(); ?>
<?php get_template_part('template-parts/header');?> <!-- visar länkarna -->

<h1>Här är mina blogginlägg</h1>
<!-- 
<img src="< ?php echo get_template_directory_uri(); ?>/assets/images/fallback.png" alt="Fallback Image" />  ÄNDRA HÄR -->

<div class="bg-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/screenshot.png); height:300px; width:100%; background-size:cover; background-position:center;">


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h5><?php the_author(); ?></h5>
    <h6><?php the_date(); ?></h6>
    <p><?php the_content(); ?></p>
<?php endwhile; ?>

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


<?php get_template_part('template-parts/footer');?>
</body>
 <!-- Bästa sättet göra bild på detta är:
<img src=" < ? php echo get_template_directory_uri() ?>/assets/images/bild.jpg" /> --> 

<!-- Lägg till background-image i CSS istället för såhär:
<div style="background-image:url(' < ? php echo get_template_directory_uri() ?>/assets/images/bild.jpg" /> -->
</html>