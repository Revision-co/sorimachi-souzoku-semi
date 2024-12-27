<?php
// [nigataPdf]ショートコードを登録
function display_nigata_pdf_shortcode()
{
  // ACFでカスタムフィールド '新潟オフィス_pdf' の値を取得
  $pdf_url = get_post_meta(2097, '新潟オフィス_pdf', true);

  // 値が存在する場合、リンクとして出力
  if ($pdf_url) {
    return wp_get_attachment_url($pdf_url);
  }
}
add_shortcode('nigataPdf', 'display_nigata_pdf_shortcode');

// [nagaokaPdf]ショートコードを登録
function display_nagaoka_pdf_shortcode()
{
  // ACFでカスタムフィールド '長岡オフィス_pdf' の値を取得
  $pdf_url = get_post_meta(2097, '長岡オフィス_pdf', true);

  // 値が存在する場合、リンクとして出力
  if ($pdf_url) {
    return wp_get_attachment_url($pdf_url);
  }
}
add_shortcode('nagaokaPdf', 'display_nagaoka_pdf_shortcode');

function display_nigata_access_shortcode()
{
  $content = get_post_meta(2097, '新潟オフィス_アクセス詳細', true);

  if ($content) {
    return apply_filters('the_content', $content);
  }
}
add_shortcode('nigataAccess', 'display_nigata_access_shortcode');


function display_nagaoka_access_shortcode()
{
  $content = get_post_meta(2097, '長岡オフィス_アクセス詳細', true);

  if ($content) {
    return apply_filters('the_content', $content);
  }
}
add_shortcode('nagaokaAccess', 'display_nagaoka_access_shortcode');
