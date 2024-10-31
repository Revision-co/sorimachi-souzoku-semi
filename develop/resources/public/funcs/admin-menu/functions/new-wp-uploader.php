<script>
  (function($) {
    /**
     * WP アップローダー
     */
    function new_wp_uploader(_uniq_id) {
      var custom_uploader;
      $('input:button[name=' + _uniq_id + '__slect]').click(function(e) {
        e.preventDefault();
        if (custom_uploader) {
          custom_uploader.open();
          return;
        }
        custom_uploader = wp.media({
          title: '画像を選択してください',
          // ライブラリの一覧は画像のみにする
          library: {
            type: 'image'
          },
          button: {
            text: '画像の選択'
          },
          // 選択できる画像を1枚のみにする => false
          multiple: false
        });
        /**
         * 画像選択時
         */
        custom_uploader.on('select', function() {
          var images = custom_uploader.state().get('selection');
          images.each(function(file) {
            // リセット
            $('#' + _uniq_id + '__thumb').empty();
            $('#' + _uniq_id).val('');
            // 画像取得してセット
            $('#' + _uniq_id).val(file.attributes.sizes.full.url);
            $('#' + _uniq_id + '__thumb').append('<img src="' + file.attributes.sizes.full.url + '">');
          });
        });
        custom_uploader.open();
      });
      /**
       * クリアボタン クリック時
       */
      $('input:button[name=' + _uniq_id + '__clear]').click(function() {
        $('#' + _uniq_id).val('');
        $('#' + _uniq_id + '__thumb').empty();
      });
    };
    new_wp_uploader('<?php echo $variable; ?>');

    $(".hex").each(function() {
      $(this).blur(function() {
        $(this).prev().val($(this).val());
      })
      $(this).prev().blur(function() {
        $(this).next().val($(this).val());
      })
    })
  })(jQuery);
</script>