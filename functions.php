<?php

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

  // wp_head内のjQuery除去
  function my_delete_local_jquery() {
      wp_deregister_script('jquery');
  }
  add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );
  
  // AIOSEO <link rel="prev/next">削除
  add_filter('aioseop_prev_link', '__return_empty_string' );
  add_filter('aioseop_next_link', '__return_empty_string' );



  // カスタム投稿の管理画面ページ日付順ソート
  function set_post_types_admin_order( $wp_query ) {
    if (is_admin()) {
      $post_type = $wp_query->query['post_type'];
      if ( $post_type == 'recruitinfo' ) {
          $wp_query->set('orderby', 'date');
          $wp_query->set('order', 'DESC');
        }
      }
    }
  add_filter('pre_get_posts', 'set_post_types_admin_order');

  // カスタム投稿の月別アーカイブ
  global $my_archives_post_type;
  add_filter( 'getarchives_where', 'my_getarchives_where', 10, 2 );
  function my_getarchives_where( $where, $r ) {
    global $my_archives_post_type;
    if ( isset($r['post_type']) ) {
      $my_archives_post_type = $r['post_type'];
      $where = str_replace( '\'post\'', '\'' . $r['post_type'] . '\'', $where );
    } else {
      $my_archives_post_type = '';
    }
    return $where;
  }
  add_filter( 'get_archives_link', 'my_get_archives_link' );
  function my_get_archives_link( $link_html ) {
    global $my_archives_post_type;
    if ( '' != $my_archives_post_type )
      $add_link .= '?post_type=' . $my_archives_post_type;
  	$link_html = preg_replace("/href=\'(.+)\'\s/","href='$1".$add_link." '",$link_html);

    return $link_html;
  }


?>
