<?php
  include( get_template_directory().'/funcs/custom-posts.php' );
  include( get_template_directory().'/funcs/other.php' );
  include( get_template_directory().'/funcs/admin-menu.php' );
  include( get_template_directory().'/funcs/shortcode.php' );
  include( get_template_directory().'/funcs/custom-editor.php' );
  include( get_template_directory().'/funcs/elementor.php' );

  // ------------------------
  // widget
  // ------------------------
  $pattern = get_template_directory().'/funcs/widget/*.php';
  foreach ( glob( $pattern ) as $filename ) {
    include( $filename );
  }
?>