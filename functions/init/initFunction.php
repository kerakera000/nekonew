<?php
/**
 * WP初期設定関数群
 */

// 管理メニューの一部非表示
function remove_menus()
{
    // カスタム投稿タイプのスラッグ
    $custom_post_type = 'temppage';

    // カスタム投稿タイプのメニューを非表示にする
    remove_menu_page('edit.php?post_type=' . $custom_post_type);
}
add_action('admin_menu', 'remove_menus');


// 日本語スラッグの禁止
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
  if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
    $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
  }
  return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );



//固定ページエディタ非表示
function my_remove_post_editor_support()
{
  remove_post_type_support('page', 'editor');
}
// 編集の可否
add_action('init', 'my_remove_post_editor_support');


// 固定ページ子階層の設定
// ex) page-{親slug}__{子slug}
function page_templates_slug($templates)
{
  global $wp_query;

  $template = get_page_template_slug();
  $pagename = $wp_query->query['pagename'];

  if ($pagename && !$template) {
    $pagename = str_replace('/', '__', $pagename);
    $decoded = urldecode($pagename);

    if ($decoded == $pagename) {
      array_unshift($templates, "page-{$pagename}.php");
    }
  }

  return $templates;
}

add_filter('page_template_hierarchy', 'page_templates_slug');

//　画像サイズ別自動生成のカット
/*function not_create_imgsize($sizes) {
  unset($sizes['thumbnail']);
  unset($sizes['medium']);
  unset($sizes['medium_large']);
  unset($sizes['large']);
  unset($sizes['1536x1536']);
  unset($sizes['2048x2048']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_imgsize');*/

// 特定ページでエディタ非表示
/*add_action( 'init', function() {
	remove_post_type_support( 'life', 'editor' );
	remove_post_type_support( 'other', 'editor' );
	remove_post_type_support( 'coupon', 'editor' );
}, 99);*/


?>