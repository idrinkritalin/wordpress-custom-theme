<?php
  // Register and hook the Nav Walker class

  require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';

  function wpb_theme_setup() {
    add_theme_support('post-thumbnails');

    register_nav_menus([
      'primary' => __('Main Menu', 'stefanocustom'),
      'footer' => __('Footer Menu', 'stefanocustom')
    ]);
  }

  add_action('after_setup_theme', 'wpb_theme_setup', 10, 1);

  // Excerpt length control
  function set_excerpt_length(){
    return 45;
  }

  add_filter('excerpt_length', 'set_excerpt_length', 10, 1);
