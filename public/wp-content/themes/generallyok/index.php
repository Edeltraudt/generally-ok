<?php get_header(); ?>

<?php
  $args_blog = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'blog'
  );
  $args_projects = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'projects'
  );
  $arr_blog = new WP_Query( $args_blog );
  $arr_projects = new WP_Query( $args_projects );


?>

<header class="layout__header" data-scroll>
  <h2 class="intro text-appear" data-scroll-plain>I sometimes think me smart, and now you’ll all be able to see it too.</h2>
  <a class="button text-appear" data-scroll-plain href="">Cleanse me</a>
</header>

<main class="layout__content" data-scroll-plain>
  <div class="layout__posts" id="posts">
    <section class="layout__blog blog" id="blog">
      <div class="posts">
        <div class="posts__header text-appear" data-scroll-plain>
          <div class="posts__expand"></div>
          <h2 class="posts__headline">Blog</h2>
          <button class="posts__expand-button js-blog"></button>
        </div>

        <div class="posts__list">
          <?php
            if ( $arr_blog->have_posts() ) :
              while ( $arr_blog->have_posts() ) :
                $arr_blog->the_post();
                get_template_part('content', get_post_format());
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </section>
    <section class="layout__projects projects" id="projects">
      <div class="posts">
        <div class="posts__header text-appear" data-scroll-plain>
          <div class="posts__expand"></div>
          <h2 class="posts__headline">Projects</h2>
          <button class="posts__expand-button js-projects"></button>
        </div>

        <div class="posts__list">
          <?php
            if ( $arr_projects->have_posts() ) :
              while ( $arr_projects->have_posts() ) :
                $arr_projects->the_post();
                get_template_part('content', get_post_format());
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
