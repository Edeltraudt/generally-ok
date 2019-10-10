<!DOCTYPE html>
<html lang="de" class="loading">

<head>
  <title><?php wp_title(' – ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php if(function_exists("body_class") && !is_404()){body_class();} else echo 'class="default"'?>>
  <div class="layout">
    <h1 class="layout__title title">
      <a class="title__link" href="<?php echo get_bloginfo( 'wpurl' );?>">
        <strong class="mask-appear" data-scroll-plain>Generally</strong>
        <span class="mask-appear" data-scroll-plain>OK</span>
      </a>
    </h1>
    <div class="layout__logo logo" data-scroll-plain></div>
    <div class="layout__nav-spacer nav--spacer" data-scroll-plain></div>
    <nav class="layout__nav nav" data-scroll-plain>
      <a href="#content-start" class="nav__skip" id="skipNav">Skip Navigation</a>
      <ul class="nav__list">
        <li class="nav--spacer"></li>
        <li class="nav__item">
          <button class="nav__link js-blog">Blog<span class="nav__link__clone" aria-hidden="true">Blog</span></button>
        </li>
        <li class="nav__item">
          <button class="nav__link js-projects">Projects<span class="nav__link__clone" aria-hidden="true">Projects</span></button>
        </li>
        <li class="nav__item">
          <a class="nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.6 31.8" id="icon-github">
              <title>Github Logo</title>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3 0C7.3 0 0 7.3 0 16.3c0 7.2 4.7 13.3 11.1 15.5.8.1 1.1-.4 1.1-.8v-2.8c-4.5 1-5.5-2.2-5.5-2.2-.7-1.9-1.8-2.4-1.8-2.4-1.5-1 .1-1 .1-1 1.6.1 2.5 1.7 2.5 1.7 1.5 2.5 3.8 1.8 4.7 1.4.1-1.1.6-1.8 1-2.2-3.6-.4-7.4-1.8-7.4-8.1 0-1.8.6-3.2 1.7-4.4-.1-.3-.7-2 .2-4.2 0 0 1.4-.4 4.5 1.7 1.3-.4 2.7-.5 4.1-.5 1.4 0 2.8.2 4.1.5 3.1-2.1 4.5-1.7 4.5-1.7.9 2.2.3 3.9.2 4.3 1 1.1 1.7 2.6 1.7 4.4 0 6.3-3.8 7.6-7.4 8 .6.5 1.1 1.5 1.1 3V31c0 .4.3.9 1.1.8 6.5-2.2 11.1-8.3 11.1-15.5C32.6 7.3 25.3 0 16.3 0z"></path>
            </svg>
          </a>
        </li>
      </ul>
    </nav>
    <div id="content-start"></div>
