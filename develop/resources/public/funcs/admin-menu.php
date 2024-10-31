<?php
  /* 管理画面に tailwind 追加 */
  function add_tailwind() {
    global $post;
    if(!empty($_GET['page']) && false !== strpos($_GET['page'], 'custom_')) {
      echo '
        <!-------------- Tailwind css ------------------------------------------------------------->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-------------- Tailwind css config ------------------------------------------------------------->
        <script>
          tailwind.config = {
            theme: {
              extend: {

              }
            }
          }
        </script>
        <!-------------- Tailwind css @layer ------------------------------------------------------------->
        <style type="text/tailwindcss">
          @layer utilities {

          }
        </style>
      ';
    }
  }
  add_action('admin_head', 'add_tailwind');

  // ------------------------
  // widget
  // ------------------------
  $pattern = get_template_directory().'/funcs/admin-menu/*.php';
  foreach ( glob( $pattern ) as $filename ) {
    include( $filename );
  }

?>