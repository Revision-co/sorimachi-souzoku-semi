<?php
  function add_elementor_widget_categories( $elements_manager ) {

    $elements_manager->add_category(
      'original',
      [
        'title' => esc_html__( 'オリジナル', 'textdomain' ),
        'icon' => 'fa fa-plug',
      ]
    );

  }
  add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );
?>