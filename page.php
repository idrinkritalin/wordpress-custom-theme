<?php get_header()?>

  <div class="row">
    <div class="col-sm-12 blog-main">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title() ?></h2>
          </div> <!-- /.blog-post -->
          <?php the_content() ?>
        <?php endwhile; ?>
      <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
      <?php endif; ?>
    </div> <!-- /.blog-main -->
  </div> <!-- /.row -->

<?php get_footer()?>
