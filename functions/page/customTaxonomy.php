<?php
/**
 * カスタムタクソノミー
 */

register_taxonomy(
  'new-temppage',
  array('temppage'),
  array(
    'label' => 'カテゴリ',
    'public' => true,'show_ui' => true,
    'hierarchical' => true,
    'query_var' => true,
    'show_in_rest' => true,
  )
);

// 猫の店舗カテゴリー
/*---------------------------------------------*/
register_taxonomy(
  'cat-shop',
  array('cats'),
  array(
    'label' => '店舗',
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'query_var' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'labels' => array(
      'name' => '店舗',
      'singular_name' => '店舗',
      'search_items' => '店舗を検索',
      'all_items' => 'すべての店舗',
      'parent_item' => '親店舗',
      'parent_item_colon' => '親店舗:',
      'edit_item' => '店舗を編集',
      'update_item' => '店舗を更新',
      'add_new_item' => '新しい店舗を追加',
      'new_item_name' => '新しい店舗名',
      'menu_name' => '店舗',
    ),
  )
);

// 初期店舗カテゴリーを作成
/*---------------------------------------------*/
function create_default_cat_shop_terms() {
  $shops = array(
    array(
      'name' => '大宮黒猫店',
      'slug' => 'omiya-kuroneko',
      'description' => '大宮駅近くの黒猫をテーマにした店舗'
    ),
    array(
      'name' => '川越白猫店',
      'slug' => 'kawagoe-shironeko',
      'description' => '川越駅近くの白猫をテーマにした店舗'
    )
  );

  foreach ($shops as $shop) {
    if (!term_exists($shop['slug'], 'cat-shop')) {
      wp_insert_term(
        $shop['name'],
        'cat-shop',
        array(
          'slug' => $shop['slug'],
          'description' => $shop['description']
        )
      );
    }
  }
}
add_action('init', 'create_default_cat_shop_terms');

?>