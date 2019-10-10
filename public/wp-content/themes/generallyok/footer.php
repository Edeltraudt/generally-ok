  </div>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/application.js"></script>
  <script>
    Pace.on('done', () => {
      setTimeout(() => {
        ScrollOut({
          cssProps: {
            scrollPercentY: true
          }
        });
        ScrollOut({
          once: true,
          targets: '[data-scroll-plain]'
        });
        ScrollOut({
          once: true,
          targets: 'img',
          scope: '.layout__content'
        });
      }, 250);
    });
  </script>
  <script>
    const sidebarElement = document.querySelector('#projects');

    if (sidebarElement) {
      const sidebar = new StickySidebar('#projects', {
        containerSelector: '#posts',
        innerWrapperSelector: '.posts',
        bottomSpacing: 120,
        topSpacing: 20
      });
    }
  </script>

  <?php wp_footer(); ?>
</body>

</html>
