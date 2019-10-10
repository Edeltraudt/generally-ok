<?php
  get_header();
?>

<main class="article layout__content" data-scroll-plain>
  <div class="layout__header article__header-wrap">
    <header class="article__header">
      <h1 class="article__title headline"><?php the_title(); ?></h1>
      <?php if (!empty(get_the_tags())):  ?>
      <ul class="article__tags tag-list -large">
        <?php
        foreach (get_the_tags() as $tag) {
          echo '<li class="tag">' . $tag->name . '</li>';
        }
        ?>
      </ul>
      <?php endif; ?>
      <?php if (!empty(the_excerpt())): ?>
        <div class="article__subtitle info"><?php the_excerpt(); ?></div>
      <?php endif; ?>
    </header>
  </div>
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      get_template_part( 'content-single', get_post_format() );
    endwhile;
  endif;
  ?>

  <!-- scroll spacer -->
  <div class="layout__footer"></div>

</main>

<?php get_footer(); ?>
