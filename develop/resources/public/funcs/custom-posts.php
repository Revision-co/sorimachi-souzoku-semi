<?php
  $post_num = get_option('post_num');


  function create_post_type() {
  
    for($i = 0; $i <= get_option('post_num'); $i++) {

      if(!empty(get_option('post_name'.$i)) && !empty(get_option('post_slug'.$i))) {
        //ランダムな文字列を生成する
  
        $post_name = get_option('post_name'.$i);
        $post_slug = get_option('post_slug'.$i);
        $post_supports = !empty(get_option('post_thumb'.$i)) ? array('title', 'editor', 'thumbnail') : array('title', 'editor');
        $post_cat = get_option('post_cat'.$i);
        $post_tag = get_option('post_tag'.$i);
        $post_side_cat = get_option('post_side_cat'.$i);
        $post_side_month = get_option('post_side_month'.$i);
  
        register_post_type( $post_slug,
          array(
            'label' => $post_name,
            'public' => true,
            'has_archive' => $post_slug,
            'menu_position' => 4,
            'show_in_rest' => true,
            'supports' => $post_supports,
          )
        );
  
        if(!empty($post_cat)) {
          register_taxonomy($post_slug.'-cat',$post_slug,
            array(
              'label' => 'カテゴリ',
              'public' => true,
              'show_ui' => true,
              'show_in_nav_menus' => true,
              'show_admin_column' => true,
              'hierarchical' => true,
              'query_var' => true
            )
          );
        }
  
        if(!empty($post_tag)) {
          register_taxonomy($post_slug.'-tag',$post_slug,
            array(
              'label' => 'タグ',
              'public' => true,
              'show_ui' => true,
              'show_in_nav_menus' => true,
              'show_admin_column' => true,
              'hierarchical' => true,
              'query_var' => true
            )
          );
        }
      }
    }
  }
  add_action( 'init', 'create_post_type' );
  add_theme_support( 'post-thumbnails' );
?>