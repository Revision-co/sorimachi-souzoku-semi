<?php
  // ------------------------
  // カスタムCSS・JS
  // ------------------------
   
  function add_custom_menu_custom_css_js() {
  ?>
  <div class="custom_option [&_*]:!leading-6 [&_h2]:font-bold [&_h3]:font-bold [&_h4]:font-bold [&_h5]:font-bold [&_h6]:font-bold [&_h2]:!text-[20px] [&_h3]:!text-[18px] [&_p]:!mt-[15px] [&_h4]:!text-[14px] [&_h4]:!mt-[15px] [&_h4]:!mb-[5px] [&_h5]:!text-[12px] [&_h5]:!mt-[15px] [&_h5]:!mb-[5px] [&_textarea]:w-[100%] [&_textarea]:h-[100px] [&_input[type='text']]:w-[100%]">
    <div class="wrap">
      <h2>カスタムCSS・JS設定</h2>
      <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
        <div class="metabox-holder">
          <div class="postbox">
            <h3 class='hndle'><span>カスタムCSS</span></h3>
            <div class="inside">
              <p>
                デザインやレイアウトを調整したい場合にご使用ください。<br>
                こちらに任意のCSSを登録することで、追加CSSとして読み込ませることができ、テーマファイルを直接編集することなく安全にカスタマイズを行って頂けます。<br>
                また、こちらに登録してあるCSSはテーマのアップデート時にもリセットされることなく引き継がれます。<br>
                記入例：.example { font-size:12px; }<br>
                styleタグは不要です。
              </p>
              <ul>
                <li>
                  <h4 class='hndle'><span>PC</span></h3>
                  <textarea name="custom_css_pc" placeholder=''><?php echo get_option('custom_css_pc'); ?></textarea>
                </li>
                <li>
                  <h4 class='hndle'><span>SP</span></h3>
                  <textarea name="custom_css_sp" placeholder=''><?php echo get_option('custom_css_sp'); ?></textarea>
                </li>
              </ul>
              <?php submit_button(); ?>
            </div>
          </div>
          <div class="postbox">
            <h3 class='hndle'><span>カスタムJS</span></h3>
            <div class="inside">
              <p>
                headタグの末尾に出力されます。scriptタグを含めてGoogleAnalyticsのスクリプトなどを入力してください。
              </p>
              <br>
              <ul>
                <li>
                  <textarea name="custom_js" placeholder=''><?php echo get_option('custom_js'); ?></textarea>
                </li>
              </ul>
              <?php submit_button(); ?>
            </div>
          </div>
        </div>
        <?php
          settings_fields('custom_css_js');
          do_settings_sections('custom_css_js');

          include( get_template_directory().'/funcs/admin-menu/functions/optioin-auto.php' );
        ?>
      </form>
    </div>
  </div>
  <?php
  }
  
  add_action('admin_menu', 'add_custom_css_js_submenu');

  function add_custom_css_js_submenu() {
    add_submenu_page(
      'custom_options',
      'カスタムCSS・JS管理',
      'カスタムCSS・JS',
      'manage_options',
      'custom_css_js',
      'add_custom_menu_custom_css_js', 
      1
    );
    add_action('admin_init', 'register_custom_css_js');
  }

  function register_custom_css_js() {
    if(!empty($_POST['options'])) {
      $options = preg_split('/,/', $_POST['options']);

      foreach($options as $option) {
        register_setting('custom_css_js', $option);
      }
    }
  }
?>