<?php 

  /* 全てのPHPエラーを非表示にする */
  error_reporting(0);

  //-----------------------------------------------------
  //widgetsの設定
  //-----------------------------------------------------
  function my_widgets_init() {
    register_sidebar( array(
      'name' => 'main sidebar',
      'id' => 'main_sidebar',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ));

    register_sidebar( array(
      'name' => 'sub sidebar',
      'id' => 'sub_sidebar',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ));
  }
  add_action( 'widgets_init', 'my_widgets_init' );

  //-----------------------------------------------------
  //郵便番号 住所自動入力
  //-----------------------------------------------------
  wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );

  //-----------------------------------------------------
  // 投稿メニューを非表示
  //-----------------------------------------------------
  function remove_menus () {
    global $menu;
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'index.php' );
  }
  add_action('admin_menu', 'remove_menus');

  /*--------------------------------------------------------
  Customize mce editor font sizes
  --------------------------------------------------------*/
  if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
    function wpex_mce_text_sizes( $initArray ){
        $initArray['fontsize_formats'] = "1.0rem 1.1rem 1.2rem 1.3rem 1.4rem 1.5rem 1.6rem 1.7rem 1.8rem 1.9rem 2.0rem 2.1rem 2.2rem 2.3rem 2.4rem 2.5rem 2.6rem 2.7rem 2.8rem 2.9rem 3.0rem 3.1rem 3.2rem 3.3rem 3.4rem 3.5rem 3.6rem 3.7rem 3.8rem 3.9rem 4.0rem 4.1rem 4.2rem 4.3rem 4.4rem 4.5rem 4.6rem 4.7rem 4.8rem 4.9rem 5.0rem";
        return $initArray;
    }
  }
  add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

  /*-----------------------------------------
  ビジュアルエディタの余計な機能を無効化する
  -----------------------------------------*/
  function override_mce_options( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;

    return $init_array;
  }

  add_filter( 'tiny_mce_before_init', 'override_mce_options' );

  /*-----------------------------------------
  ビジュアルエディタにCSSを適用
  -----------------------------------------*/

  add_editor_style('common/css/editor.css');

  /*-----------------------------------------
  サムネイルがないときはダミー画像を使用する
  -----------------------------------------*/
  function thumbnail_alternative() {
    $thumb = !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_option('alternative_img');
    return $thumb;
  }

  /*-----------------------------------------
  PC・SP判定
  -----------------------------------------*/
  function ua_smt (){
    //ユーザーエージェントを取得
    $ua = $_SERVER['HTTP_USER_AGENT'];
    //スマホと判定する文字リスト
    $ua_list = array('iPhone','iPad','iPod','Android');
    foreach ($ua_list as $ua_smt) {
      //ユーザーエージェントに文字リストの単語を含む場合はTRUE、それ以外はFALSE
      if (strpos($ua, $ua_smt) !== false) {
        return true;
      }
    } return false;
  }
  
?>