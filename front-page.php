
<?php get_header() ?> <!-- visar Texten där logon ska vara -->


    <h1> Välkommen till hemsidan! </h1>

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

  <?php get_footer() ?>
