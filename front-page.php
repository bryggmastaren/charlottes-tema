
<?php get_header() ?> <!-- visar Texten där logon ska vara -->

<div class="hero-page-container">
<div class="bg-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/screenshot.png); height:40vh; width:100%; background-size:cover; background-position:center;"> <h1 class="hero-title">Välkommen till bloggen!</h1> </div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"> <?php the_title();?></a> </h2>
<h5> <?php the_author() ?> </h5>
<h6> <?php the_date() ?> </h6>
<p> <?php the_content() ?> </p>

<?php endwhile; ?>

<?php else : ?>
<p> No posts found </p>


<?php endif; ?>
<!-- < ? php get_template_part('template-parts/footer');?> -->

  <title><?php bloginfo('name'); ?></title>
  </div>
  
  <?php get_footer() ?>
