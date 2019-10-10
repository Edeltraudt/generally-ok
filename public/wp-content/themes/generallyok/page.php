<?php get_header(); ?>

<main class="article plain layout__content" data-scroll-plain>
  <header class="plain__header layout__header">
    <h1 class="plain__title headline"><?php the_title(); ?></h1>
    <p class="plain__subtitle info">Description</p>
  </header>

  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      get_template_part( 'content-single', get_post_format() );
    endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>
