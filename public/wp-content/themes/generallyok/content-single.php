<?php
  $categories = get_the_category();
  $tags = get_the_tags();
  $description = get_the_excerpt();
?>

<div class="article__content text-appear" data-scroll-plain>
  <?php the_content(); ?>

</div>
