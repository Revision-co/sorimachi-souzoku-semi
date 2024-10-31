<?php
  // ------------------------
  // カスタム投稿
  // ------------------------
  
  function add_custom_menu_custom_post() {
  ?>
  <div class="custom_option [&_*]:!leading-6 [&_h2]:font-bold [&_h3]:font-bold [&_h4]:font-bold [&_h5]:font-bold [&_h6]:font-bold [&_h2]:!text-[20px] [&_h3]:!text-[18px] [&_p]:!mt-[15px] [&_h4]:!text-[14px] [&_h4]:!mt-[15px] [&_h4]:!mb-[5px] [&_h5]:!text-[12px] [&_h5]:!mt-[15px] [&_h5]:!mb-[5px] [&_textarea]:w-[100%] [&_textarea]:h-[100px] [&_input[type='text']]:w-[100%]">
    <div class="wrap">
      <h2>カスタム投稿設定</h2>
      <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
        <div class="metabox-holder">
          <div class="postbox">
            <h3 class='hndle'><span>投稿数</span></h3>
            <div class="inside">
              <div class="main">
                <select name="post_num" id="post_num">
                  <?php
                    for($i = 0; $i <= 5; $i++) {
                      echo '<option value="'.$i.'" ' . selected($i . '', get_option('post_num')) . '>'.$i.'個</option>';
                    }
                  ?>
                </select>
              </div>
              <?php submit_button(); ?>
            </div>
          </div>
          <?php if(get_option('post_num') >= 1): ?>
          <div class="postbox">
            <h3 class='hndle'><span>投稿詳細</span></h3>
            <div class="inside">
              <?php for($i = 1; $i <= get_option('post_num'); $i++): ?>
              <div class="main">
                <h4><?php echo $i; ?>個目</h4>
                投稿名 : <input type="text" name="post_name<?php echo $i; ?>" placeholder="ブログ" value="<?php echo get_option('post_name'.$i); ?>">
                <br>
                <br>
                投稿スラッグ : <input type="text" name="post_slug<?php echo $i; ?>" placeholder="blog" value="<?php echo get_option('post_slug'.$i); ?>">
                <br>
                ※「施工事例」を設定したい場合は、スラッグを「case」にしてください。
                <br>
                <br>
                英語タイトル : <input type="text" name="post_enTtl<?php echo $i; ?>" placeholder="NEWS" value="<?php echo get_option('post_enTtl'.$i); ?>">
                <br>
                <br>
                サムネイル : 　<label><input name="post_thumb<?php echo $i; ?>" type="checkbox" value="true" <?php echo checked('true', get_option('post_thumb'.$i)); ?>>あり</label>
                <br>
                <br>
                カテゴリ : 　<label><input name="post_cat<?php echo $i; ?>" type="checkbox" value="true" <?php echo checked('true', get_option('post_cat'.$i)); ?>>あり</label>
                <br>
                <br>
                タグ : 　<label><input name="post_tag<?php echo $i; ?>" type="checkbox" value="true" <?php echo checked('true', get_option('post_tag'.$i)); ?>>あり</label>
                <br>
                <br>
                カテゴリ（サイドメニュー） : 　<label><input name="post_side_cat<?php echo $i; ?>" type="checkbox" value="true" <?php echo checked('true', get_option('post_side_cat'.$i)); ?>>あり</label>
                <br>
                <br>
                月別ソート（サイドメニュー） : 　<label><input name="post_side_month<?php echo $i; ?>" type="checkbox" value="true" <?php echo checked('true', get_option('post_side_month'.$i)); ?>>あり</label>
                <br>
                <br>
                サイドメニューの角丸 :　
                <select name="post_side_radius<?php echo $i; ?>" id="post_side_radius<?php echo $i; ?>">
                  <?php
                    for($num = 0; $num <= 50; $num++) {
                      echo '<option value="'.$num * 0.1.'rem" ' . selected($num * 0.1.'rem', get_option('post_side_radius'.$i)) . '>'.$num * 0.1.'rem</option>';
                    }
                  ?>
                </select>
                <br>
                <br>
                記事詳細のサムネイル : 　<label><input name="post_detail_thumb<?php echo $i; ?>" type="checkbox" value="true" <?php echo checked('true', get_option('post_detail_thumb'.$i)); ?>>あり</label>
                <br>
                <br>
                記事詳細の記事名タイトルの大きさ PC :　
                <select name="post_ttl_fontSize_pc<?php echo $i; ?>" id="post_ttl_fontSize_pc<?php echo $i; ?>">
                  <?php
                    for($num = 0; $num <= 100; $num++) {
                      echo '<option value="'.$num * 0.1.'rem" ' . selected($num * 0.1.'rem', get_option('post_ttl_fontSize_pc'.$i)) . '>'.$num * 0.1.'rem</option>';
                    }
                  ?>
                </select>
                <br>
                <br>
                記事詳細の記事名タイトルの大きさ SP :　
                <select name="post_ttl_fontSize_sp<?php echo $i; ?>" id="post_ttl_fontSize_sp<?php echo $i; ?>">
                  <?php
                    for($num = 0; $num <= 100; $num++) {
                      echo '<option value="'.$num * 0.1.'rem" ' . selected($num * 0.1.'rem', get_option('post_ttl_fontSize_sp'.$i)) . '>'.$num * 0.1.'rem</option>';
                    }
                  ?>
                </select>
                <br>
                <br>
                <h4><span>一覧ページ 記事表示数</span></h4>
                <div>
                  <div class="main mt-2">
                    <b>PC : </b>
                    <select name="post_display_pc<?php echo $i; ?>" id="post_display_pc<?php echo $i; ?>">
                      <?php
                        for($num = 1; $num <= 50; $num++) {
                          echo '<option value="'.$num.'" ' . selected($num, get_option('post_display_pc'.$i)) . '>'.$num.'個</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="main mt-2">
                    <b>SP : </b>
                    <select name="post_display_sp<?php echo $i; ?>" id="post_display_sp<?php echo $i; ?>">
                      <?php
                        for($num = 1; $num <= 50; $num++) {
                          echo '<option value="'.$num.'" ' . selected($num, get_option('post_display_sp'.$i)) . '>'.$num.'個</option>';
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <br>
                <h4>レイアウトパターン</h4>
                <h5>カテゴリ</h5>
                <label class="flex items-center mt-2">色 :　<input type="color" id="post_cat_color<?php echo $i; ?>" name="post_cat_color<?php echo $i; ?>" class="add-css" value="<?php echo get_option('post_cat_color'.$i); ?>">　色選択　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" name="post_cat_color<?php echo $i; ?>" value="<?php echo get_option('post_cat_color'.$i); ?>" placeholder="#000000"></label>
                <ul class="mt-3">
                  <li>
                    <label><input name="post_cat_pattern<?php echo $i; ?>" type="radio" value="patternA" checked <?php echo checked('patternA', get_option('post_cat_pattern'.$i)); ?>>パターンA（丸）</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                  <hr>
                  <li>
                    <label><input name="post_cat_pattern<?php echo $i; ?>" type="radio" value="patternB" <?php echo checked('patternB', get_option('post_cat_pattern'.$i)); ?>>パターンB（四角）</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                  <hr>
                  <li>
                    <label><input name="post_cat_pattern<?php echo $i; ?>" type="radio" value="patternC" <?php echo checked('patternC', get_option('post_cat_pattern'.$i)); ?>>パターンC（カテゴリーなし）</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                </ul>
                <br>
                <hr>
                <hr>
                <hr>
                <h5 class="!mt-[0]">記事一覧</h5>
                <p class="!mt-[0] mb-[1rem]">
                  パターンA：サムネイルあり・カテゴリーあり<br>
                  パターンB：サムネイルなし・カテゴリーあり<br>
                  パターンC：サムネイルなし・カテゴリーなし
                </p>
                <ul>
                  <li>
                    <label><input name="post_article_pattern<?php echo $i; ?>" type="radio" value="patternA-1" checked <?php echo checked('patternA-1', get_option('post_article_pattern'.$i)); ?>>パターンA-1</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                  <hr>
                  <li>
                    <label><input name="post_article_pattern<?php echo $i; ?>" type="radio" value="patternB-1" <?php echo checked('patternB-1', get_option('post_article_pattern'.$i)); ?>>パターンB-1</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                  <hr>
                  <li>
                    <label><input name="post_article_pattern<?php echo $i; ?>" type="radio" value="patternB-2" <?php echo checked('patternB-2', get_option('post_article_pattern'.$i)); ?>>パターンB-2</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                  <hr>
                  <li>
                    <label><input name="post_article_pattern<?php echo $i; ?>" type="radio" value="patternC-1" <?php echo checked('patternC-1', get_option('post_article_pattern'.$i)); ?>>パターンC-1</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                </ul>
                <br>
                <hr>
                <hr>
                <hr>
                <h5>ページネーション</h5>
                <ul>
                  <li>
                    <label><input name="post_pagenav_pattern<?php echo $i; ?>" type="radio" value="patternA" checked <?php echo checked('patternA', get_option('post_pagenav_pattern'.$i)); ?>>パターンA（丸）</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                  <hr>
                  <li>
                    <label><input name="post_pagenav_pattern<?php echo $i; ?>" type="radio" value="patternB" <?php echo checked('patternB', get_option('post_pagenav_pattern'.$i)); ?>>パターンA（四角）</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                  <hr>
                  <li>
                    <label><input name="post_pagenav_pattern<?php echo $i; ?>" type="radio" value="patternC" <?php echo checked('patternC', get_option('post_pagenav_pattern'.$i)); ?>>パターンC（テキストのみ）</label>
                    <!-- <div class="flex gap-x-[0.5rem]">
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                      <a href="https://gyazo.com/546d5e3583bb7ca66f041ed8366e78ab" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                    </div> -->
                  </li>
                </ul>
                <?php if(get_option('mv_l') === 'patternA' || get_option('mv_l') === 'patternB' || get_option('mv_l') === 'patternC' || get_option('mv_l') === 'patternD'): ?>
                <br>
                <b>メインビジュアル画像</b>
                <p>未設定の場合、<a href="<?php echo home_url('/wp-admin/admin.php?page=custom_options#anchor01') ?>" class="text-[#2271b1] underline">こちら</a>で設定した画像が表示されます。</p>
                <!-- メディアファイル選択 -->
                <?php $variable = 'post_img'.$i; ?>
                <div id="<?php echo $variable; ?>__thumb" class="uploded-thumb mb-5 [&>img]:object-cover [&>img]:w-[300px] [&>img]:h-[200px] mt-2">
                  <?php if (get_option($variable)) : ?>
                    <img src="<?php echo get_option($variable); ?>" alt="選択中の画像">
                  <?php endif ?>
                </div>
                <div class="flex gap-3">
                  <input type="text" id="<?php echo $variable; ?>" name="<?php echo $variable; ?>" value="<?php echo get_option($variable); ?>" readonly class="regular-text">
                  <input type="button" name="<?php echo $variable; ?>__slect" value="選択" class="inline-block px-5 py-1 mx-auto text-white bg-blue-600 rounded-full hover:bg-blue-700 md:mx-0">
                  <input type="button" name="<?php echo $variable; ?>__clear" value="クリア"<input type="button" name="<?php echo $variable; ?>__slect" value="選択" class="inline-block px-5 py-1 mx-auto text-white bg-[#aeaeae] rounded-full hover:bg-[#838383] md:mx-0">
                </div>
                <?php include( get_template_directory().'/funcs/admin-menu/functions/new-wp-uploader.php' ); ?>
                <!-- 〆メディアファイル選択 -->
                <?php endif; ?>
              </div>
              <br>
              <?php submit_button(); ?>
              <?php endfor; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
        <?php
          settings_fields('custom_post');
          do_settings_sections('custom_post');

          include( get_template_directory().'/funcs/admin-menu/functions/optioin-auto.php' );
        ?>
      </form>
    </div>
  </div>
  <?php
  }

  add_action('admin_menu', 'add_custom_post_submenu');

  function add_custom_post_submenu() {
    add_submenu_page(
      'custom_options',
      'カスタム投稿管理',
      'カスタム投稿',
      'manage_options',
      'custom_posts',
      'add_custom_menu_custom_post', 
      1
    );
    add_action('admin_init', 'register_custom_posts');
  }

  function register_custom_posts() {
    if(!empty($_POST['options'])) {
      $options = preg_split('/,/', $_POST['options']);

      foreach($options as $option) {
        register_setting('custom_post', $option);
      }
    }
  }

  /**
   * メディアアップローダーAPIを管理画面へ読み込ませる
   */
  add_action('admin_print_scripts', 'my_add_setting_media_api_scripts');
  function my_add_setting_media_api_scripts() {
    wp_enqueue_media();
  }
?>