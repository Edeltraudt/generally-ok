<?php
  $categories = get_the_category();
  $tags = get_the_tags();
  $description = get_the_excerpt();
?>

<article class="post posts__item" data-scroll-plain>
  <?php if (has_post_thumbnail()): ?>
    <div class="post__image">
      <?php echo get_the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <div class="post__content">
    <h3 class="post__headline"><?php the_title(); ?></h3>

    <?php if (!empty($description)): ?>
      <p class="post__description"><?= $description ?></p>
    <?php endif;?>

    <footer class="post__footer tag-list">
      <span class="tag -date">
        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date('M Y'); ?></time>
      </span>
      <?php
      if (!empty($tags)) {
        foreach ($tags as $tag) {
          echo '<span class="tag">' . $tag->name . '</span>';
        }
      }
      ?>
    </footer>
    <a href="<?php the_permalink(); ?>" class="post__link" aria-label="Read <?php the_title(); ?>"></a>
  </div>

</article>
