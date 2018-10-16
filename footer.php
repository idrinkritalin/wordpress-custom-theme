      </div> <!-- /.container -->

      <footer class="blog-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h3><?php bloginfo('name'); ?></h3>
              <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo(); ?></p>
              <a href="#">Back to top</a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 list">
              <ul>
              <?php
                wp_nav_menu( array(
                  'theme_location'    => 'footer',
                  'depth'             => 1,
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
              ?>
              </ul>
            </div>
          </div>
        </div>
    </footer>

    <?php wp_footer() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  </body>
</html>
