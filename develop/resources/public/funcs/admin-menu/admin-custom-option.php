<?php
  // ------------------------
  // テーマオプション
  // ------------------------
  
  function add_custom_options() {
  ?>
  <div class="custom_option [&_*]:!leading-6 [&_h2]:font-bold [&_h3]:font-bold [&_h4]:font-bold [&_h5]:font-bold [&_h6]:font-bold [&_h2]:!text-[20px] [&_h3]:!text-[18px] [&_p]:!mt-[15px] [&_h4]:!text-[14px] [&_h4]:!mt-[15px] [&_h4]:!mb-[5px] [&_h5]:!text-[12px] [&_h5]:!mt-[15px] [&_h5]:!mb-[5px] [&_textarea]:w-[100%] [&_textarea]:h-[100px] [&_input[type='text']]:w-[100%]">
    <div class="wrap">
      <h2>テーマオプション</h2>
      <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
        <div class="metabox-holder">
          <div class="postbox">
            <h3 class='hndle'><span>カラー設定</span></h3>
            <div class="inside">
              <div class="main">
                <p class="setting_description">サイト内の複数箇所で共通で使用される色の設定を行います。</p>
                <h4>テキストカラー</h4>
                <label class="flex items-center"><input type="color" id="text_color" name="text_color" class="add-css" value="<?php echo get_option('text_color'); ?>">　色選択　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('text_color'); ?>" placeholder="#000000"></label>
                <h4>ボーダーカラー</h4>
                <label class="flex items-center"><input type="color" id="border_color" name="border_color" class="add-css" value="<?php echo get_option('border_color'); ?>">　色選択　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('border_color'); ?>" placeholder="#000000"></label>
                <!-- <h4>背景カラー</h4>
                <label class="flex items-center"><input type="color" id="background_color" name="background_color" class="add-css" value="<?php echo get_option('background_color'); ?>">　色選択　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('background_color'); ?>" placeholder="#000000"></label> -->
                <h4>リンクカラー</h4>
                <label class="flex items-center"><input type="color" id="link_color" name="link_color" class="add-css" value="<?php echo get_option('link_color'); ?>">　色選択　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('link_color'); ?>" placeholder="#000000"></label>
              </div>
              <?php submit_button(); ?>
            </div>
          </div>
          <div class="postbox">
            <h3 class='hndle'><span>フォントサイズ設定</span></h3>
            <div class="inside">
              <div class="main">
                <p class="setting_description">フォントサイズを設定します。</p>
              </div>
              <h4>タイトル フォントサイズ</h4>
              <h5>PC</h5>
              <select name="fs_ttl_pc" id="fs_ttl_pc">
                <?php
                  for($i = 10; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'rem" ' . selected($i * 0.1 . 'rem', get_option('fs_ttl_pc')) . '>'.$i * 0.1.'rem</option>';
                  }
                ?>
              </select>
              <h5>SP</h5>
              <select name="fs_ttl_sp" id="fs_ttl_sp">
                <?php
                  for($i = 10; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'rem" ' . selected($i * 0.1 . 'rem', get_option('fs_ttl_sp')) . '>'.$i * 0.1.'rem</option>';
                  }
                ?>
              </select>
              <h4>文章 フォントサイズ</h4>
              <h5>PC</h5>
              <select name="fs_txt_pc" class="add-css" id="fs_txt_pc">
                <?php
                  for($i = 10; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'rem" ' . selected($i * 0.1 . 'rem', get_option('fs_txt_pc')) . '>'.$i * 0.1.'rem</option>';
                  }
                ?>
              </select>
              <h5>SP</h5>
              <select name="fs_txt_sp" class="add-css" id="fs_txt_sp">
                <?php
                  for($i = 10; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'rem" ' . selected($i * 0.1 . 'rem', get_option('fs_txt_sp')) . '>'.$i * 0.1.'rem</option>';
                  }
                ?>
              </select>
              <?php submit_button(); ?>
            </div>
          </div>
          <div class="postbox">
            <h3 class='hndle'><span>文字間・行間の設定</span></h3>
            <div class="inside">
              <h4>行間</h4>
              <h5>PC</h5>
              <select name="lh_pc" class="add-css" id="lh_pc">
                <?php
                  for($i = 10; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'" ' . selected($i * 0.1 . '', get_option('lh_pc')) . '>'.$i * 0.1.'</option>';
                  }
                ?>
              </select>
              <h5>SP</h5>
              <select name="lh_sp" class="add-css" id="lh_sp">
                <?php
                  for($i = 10; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'" ' . selected($i * 0.1 . '', get_option('lh_sp')) . '>'.$i * 0.1.'</option>';
                  }
                ?>
              </select>
              <h4>文字間</h4>
              <h5>PC</h5>
              <select name="ls_pc" class="add-css" id="ls_pc">
                <?php
                  for($i = 0; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'em" ' . selected($i * 0.1 . 'em', get_option('ls_pc')) . '>'.$i * 0.1.'em</option>';
                  }
                ?>
              </select>
              <h5>SP</h5>
              <select name="ls_sp" class="add-css" id="ls_sp">
                <?php
                  for($i = 0; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'em" ' . selected($i * 0.1 . 'em', get_option('ls_sp')) . '>'.$i * 0.1.'em</option>';
                  }
                ?>
              </select>
              <?php submit_button(); ?>
            </div>
          </div>
          <div class="postbox">
            <h3 class='hndle'><span>transition設定</span></h3>
            <div class="inside">
              <p>※ホバー効果やアコーディオン開閉の秒数</p>
              <select name="transition" class="add-css mt-3" id="transition">
                <?php
                  for($i = 1; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'s" ' . selected($i * 0.1 . 's', get_option('transition')) . '>'.$i * 0.1.'s</option>';
                  }
                ?>
              </select>
              <?php submit_button(); ?>
            </div>
          </div>
          <div class="postbox">
            <h3 class='hndle'><span>フォントファミリー設定</span></h3>
            <div class="inside">
              <div class="main">
                <p class="setting_description">フォントファミリーを設定します。</p>
              </div>
              <h4>リンク</h4>
              リンク : <textarea name="ff_link" placeholder='<link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">'><?php echo get_option('ff_link'); ?></textarea>
              <h4>タイトル</h4>
              <ul>
                <li>
                  CSS : <input type="text" name="ff_ttl" placeholder='font-family: "Roboto", sans-serif;' width="100%" value='<?php echo get_option('ff_ttl'); ?>'>
                </li>
              </ul>
              <h4>文章</h4>
              <ul>
                <li>
                  CSS : <input type="text" name="ff_txt" placeholder='font-family: "Roboto", sans-serif;' width="100%" value='<?php echo get_option('ff_txt'); ?>'>
                </li>
              </ul>
              <?php submit_button(); ?>
            </div>
          </div>
          <div class="postbox">
            <h3 class='hndle'><span>下層ページ メインビジュアルレイアウト</span></h3>
            <div class="inside">
              <div class="main">
                <p class="setting_description">下層ページのメインビジュアルレイアウトを以下のパターンから設定します。</p>
              </div>
              <br>
              <label class="flex items-center justify-start mt-[5px]"><input type="color" id="mv_c_t" name="mv_c_t" value="<?php echo get_option('mv_c_t'); ?>">　テキストカラー　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_c_t'); ?>" placeholder="#000000"></label>
              <br>
              <!-- メディアファイル選択 -->
              <h4 id='anchor01'>メインビジュアル画像</h4>
              <p>※画像を表示するタイプを選択した場合のみ有効</p>
              <?php $variable = 'mv_img'; ?>
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
              <br>
              <h4>フォントサイズ</h4>
              <h5>PC</h5>
              <select name="fs_mv_pc" class="add-css" id="fs_mv_pc">
                <?php
                  for($i = 10; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'rem" ' . selected($i * 0.1 . 'rem', get_option('fs_mv_pc')) . '>'.$i * 0.1.'rem</option>';
                  }
                ?>
              </select>
              <h5>SP</h5>
              <select name="fs_mv_sp" class="add-css" id="fs_mv_sp">
                <?php
                  for($i = 10; $i <= 100; $i++) {
                    echo '<option value="'.$i * 0.1.'rem" ' . selected($i * 0.1 . 'rem', get_option('fs_mv_sp')) . '>'.$i * 0.1.'rem</option>';
                  }
                ?>
              </select>
              <br>
              <br>
              <h4>高さ</h4>
              <h5>PC</h5>
              <select name="mv_h_pc" id="mv_h_pc">
                <?php
                  for($i = 1; $i <= 100; $i++) {
                    echo '<option value="'.$i.'rem" ' . selected($i . 'rem', get_option('mv_h_pc')) . '>'.$i.'rem</option>';
                  }
                ?>
              </select>
              <h5>SP</h5>
              <select name="mv_h_sp" id="mv_h_sp">
                <?php
                  for($i = 1; $i <= 100; $i++) {
                    echo '<option value="'.$i.'rem" ' . selected($i . 'rem', get_option('mv_h_sp')) . '>'.$i.'rem</option>';
                  }
                ?>
              </select>
              <br>
              <br>
              <hr>
              <ul>
                <li>
                  <label><input name="mv_l" type="radio" value="patternA" checked <?php echo checked('patternA', get_option('mv_l')); ?>>パターンA</label>
                  <br>
                  <div class="flex gap-[1rem]">
                    <label class="flex items-center"><input type="color" id="mv_l_bgc_a" name="mv_l_bgc_a" value="<?php echo get_option('mv_l_bgc_a'); ?>">　背景色　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_l_bgc_a'); ?>" placeholder="#000000"></label>
                    <label class="flex items-center"><input type="color" id="mv_l_fc_a" name="mv_l_fc_a" value="<?php echo get_option('mv_l_fc_a'); ?>">　文字色　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_l_fc_a'); ?>" placeholder="#000000"></label>
                  </div>
                  ※画像は各固定ページのアイキャッチ画像が入ります
                  <br>
                  <div class="flex gap-x-[0.5rem]">
                    <a href="https://gyazo.com/0de4ea2aa9b981ecdce7b82f0bea733d" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                    <a href="https://gyazo.com/01dcdbe19fb976b3b5e20f820bcaa7a5" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                  </div>
                </li>
                <hr>
                <li>
                  <label><input name="mv_l" type="radio" value="patternB" <?php echo checked('patternB', get_option('mv_l')); ?>>パターンB</label>
                  <br>
                  <div class="flex gap-[1rem]">
                    <label class="flex items-center"><input type="color" id="mv_l_bgc_b" name="mv_l_bgc_b" value="<?php echo get_option('mv_l_bgc_b'); ?>">　背景色　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_l_bgc_b'); ?>" placeholder="#000000"></label>
                    <label class="flex items-center"><input type="color" id="mv_l_fc_b" name="mv_l_fc_b" value="<?php echo get_option('mv_l_fc_b'); ?>">　文字色　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_l_fc_b'); ?>" placeholder="#000000"></label>
                  </div>
                  ※画像は各固定ページのアイキャッチ画像が入ります
                  <div class="flex gap-x-[0.5rem]">
                    <a href="https://gyazo.com/232605e96f0ff6f2a25e9867198317fb" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                    <a href="https://gyazo.com/36ac298dcdacfc2701206d999c9aa6a8" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                  </div>
                </li>
                <hr>
                <li>
                  <label><input name="mv_l" type="radio" value="patternC" <?php echo checked('patternC', get_option('mv_l')); ?>>パターンC</label>
                  <br>
                  <label><input name="mv_center" type="checkbox" value="center" <?php echo checked('center', get_option('mv_center')); ?>>テキストセンター</label>
                  <br>
                  ※画像は各固定ページのアイキャッチ画像が入ります
                  <div class="flex gap-x-[0.5rem]">
                    <a href="https://gyazo.com/c8eb6047db89e940f5b819d2f26c92f3" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                    <a href="https://gyazo.com/009aeea6d8fea5fd7394b3421fd77c5c" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                  </div>
                </li>
                <hr>
                <li>
                  <label><input name="mv_l" type="radio" value="patternD" <?php echo checked('patternD', get_option('mv_l')); ?>>パターンD</label>
                  <br>
                  <label><input name="mv_center" type="checkbox" value="center" <?php echo checked('center', get_option('mv_center')); ?>>テキストセンター</label>
                  <br>
                  ※画像は各固定ページのアイキャッチ画像が入ります
                  <div class="flex gap-x-[0.5rem]">
                    <a href="https://gyazo.com/b5762b952715ffdb274cc4824ff29dea" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                    <a href="https://gyazo.com/2ed9b51d670316591bba74c7202b9b7c" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                  </div>
                </li>
                <hr>
                <li>
                  <label><input name="mv_l" type="radio" value="patternE" <?php echo checked('patternE', get_option('mv_l')); ?>>パターンE</label>
                  <div class="flex gap-x-[0.5rem] mb-[.5rem]">
                    <a href="https://gyazo.com/c7ff2415798ccb203c939d3e12ded851" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                    <a href="https://gyazo.com/79e21d6ca016322736a1df2995f64eeb" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                  </div>
                  <div class="flex gap-[1rem]">
                    <label class="flex items-center"><input type="color" id="mv_c_l_e" name="mv_c_l_e" value="<?php echo get_option('mv_c_l_e'); ?>">　左カラー　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_c_l_e'); ?>" placeholder="#000000"></label>
                    <label class="flex items-center"><input type="color" id="mv_c_r_e" name="mv_c_r_e" value="<?php echo get_option('mv_c_r_e'); ?>">　右カラー　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_c_r_e'); ?>" placeholder="#000000"></label>
                  </div>
                </li>
                <hr>
                <li>
                  <label><input name="mv_l" type="radio" value="patternF" <?php echo checked('patternF', get_option('mv_l')); ?>>パターンF</label>
                  <div class="flex gap-x-[0.5rem] mb-[.5rem]">
                    <a href="https://gyazo.com/068bca221a469d039633e106ff4fad8e" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                    <a href="https://gyazo.com/07202063ea4700fce071c8ad3ea4df13" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                  </div>
                  <div class="flex gap-[1rem]">
                    <label class="flex items-center"><input type="color" id="mv_c_l_f" name="mv_c_l_f" value="<?php echo get_option('mv_c_l_f'); ?>">　左カラー　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_c_l_f'); ?>" placeholder="#000000"></label>
                    <label class="flex items-center"><input type="color" id="mv_c_r_f" name="mv_c_r_f" value="<?php echo get_option('mv_c_r_f'); ?>">　右カラー　<input type="text" class="hex !w-[5rem] placeholder:!text-[#b8b8b8]" value="<?php echo get_option('mv_c_r_f'); ?>" placeholder="#000000"></label>
                  </div>
                </li>
                <hr>
                <li>
                  <label><input name="mv_l" type="radio" value="patternG" <?php echo checked('patternG', get_option('mv_l')); ?>>パターンG</label>
                  <br>
                  ※画像は各固定ページのアイキャッチ画像が入ります
                  <div class="flex gap-x-[0.5rem]">
                    <a href="https://gyazo.com/f7b9f9d5a758024a8be43a25fa1b9d50" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                    <a href="https://gyazo.com/717e5a4864290b98941bfd052aaf2001" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                  </div>
                </li>
                <hr>
                <li>
                  <label><input name="mv_l" type="radio" value="patternH" <?php echo checked('patternH', get_option('mv_l')); ?>>パターンH</label>
                  <br>
                  ※画像は各固定ページのアイキャッチ画像が入ります
                  <div class="flex gap-x-[0.5rem]">
                    <a href="https://gyazo.com/157b719cbd8364d11cc69c06766d639c" target="_blank" class="text-[#2271b1] underline">デザイン参考（PC)</a>
                    <a href="https://gyazo.com/cceda0c2f39aed3e9dd8258ae1d47e8a" target="_blank" class="text-[#2271b1] underline">デザイン参考（SP)</a>
                  </div>
                </li>
              </ul>
              <?php submit_button(); ?>
            </div>
          </div>
          <div class="postbox">
            <h3 class='hndle'><span>下層ページの余白設定</span></h3>
            <div class="inside">
              <div class="main">
                <p class="setting_description">下層ページの余白の左右の余白設定になります。</p>
              </div>
              <h5>PC</h5>
              <select name="page_padding_pc" id="page_padding_pc">
                <option value="大" <?php selected('大', get_option('page_padding_pc')); ?>>大</option>
                <option value="中" <?php selected('中', get_option('page_padding_pc')); ?>>中</option>
                <option value="小" <?php selected('小', get_option('page_padding_pc')); ?>>小</option>
              </select>
              <h5>SP</h5>
              <select name="page_padding_sp" id="page_padding_sp">
                <option value="大" <?php selected('大', get_option('page_padding_sp')); ?>>大</option>
                <option value="中" <?php selected('中', get_option('page_padding_sp')); ?>>中</option>
                <option value="小" <?php selected('小', get_option('page_padding_sp')); ?>>小</option>
              </select>
              <?php submit_button(); ?>
            </div>
          </div>
          <div class="postbox">
            <h3 class='hndle'><span>代替え画像 登録</span></h3>
            <div class="inside">
              <div class="main">
                <p class="setting_description">投稿などで画像がないときに代替え画像を設定する</p>
              </div>
              <!-- メディアファイル選択 -->
              <?php $variable = 'alternative_img'; ?>
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
              <?php submit_button(); ?>
            </div>
          </div>
        </div>
        <?php
          settings_fields('thema_option');
          do_settings_sections('thema_option');

          include( get_template_directory().'/funcs/admin-menu/functions/optioin-auto.php' );
        ?>
      </form>
    </div>
  </div>
  <?php
  }
  
  add_action('admin_menu', 'custom_options');

  function custom_options() {
    add_menu_page(
      'テーマオプション',
      'テーマオプション',
      'manage_options',
      'custom_options',
      'add_custom_options',
      'dashicons-admin-generic',
      4
    );
    add_action('admin_init', 'register_custom_options');
  }

  function register_custom_options() {
    if(!empty($_POST['options'])) {
      $options = preg_split('/,/', $_POST['options']);
  
      foreach($options as $option) {
        register_setting('thema_option', $option);
      }
    }
  }
?>