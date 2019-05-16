<?php


// Hide useless admin menu
function remove_admin_menu() {
//  remove_menu_page('edit.php');
//  remove_menu_page('edit-comments.php');
//  remove_menu_page('themes.php');
//  remove_menu_page( 'plugins.php' );
//  remove_menu_page( 'users.php' );
//  remove_menu_page( 'options-general.php' );
}
add_action('admin_menu', 'remove_admin_menu');

function update_nag_hide() {
  remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action( 'admin_init', 'update_nag_hide' );


function custom_post_title( $value, $post_id, $field  )
{
  if(isset($value) && $value != '') {
    $args = array(
      'ID'           => $post_id,
      'post_name' => sanitize_title($value)
    );
    wp_update_post( $args );
  } 
  return $value;
}
add_filter('acf/update_value/name=number', 'custom_post_title', 10, 3);


  // show_countをaタグ内に表示
  add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
  function my_list_categories( $output, $args ) {
    $output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
    return $output;
  }
  add_filter( 'get_archives_link', 'my_archives_link' );
  function my_archives_link( $output ) {
    $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
    return $output;
  }

  // サムネイルサイズ
  if ( function_exists( 'add_image_size' ) ) {
  	add_image_size( 'custom_size',134,134, true );
  	add_image_size( 'custom_size_detail', 300, 300, true );
  	add_image_size( 'jobri-thunb', 400, 400, true );
	add_image_size( 'blog_thumb', 240, 148, true );
  }

  // wp_titleの半角除去
  function my_title_fix($title, $sep, $seplocation){
      if(!$sep || $sep == "｜"){
          $title = str_replace(' '.$sep.' ', $sep, $title);
      }
      return $title;
  }
  add_filter('wp_title', 'my_title_fix', 10, 3);

//remove wp jquery
function my_delete_local_jquery() {
  wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );

//remove Emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// AIOSEO <link rel="prev/next">削除
add_filter('aioseop_prev_link', '__return_empty_string' );
add_filter('aioseop_next_link', '__return_empty_string' );





?>
