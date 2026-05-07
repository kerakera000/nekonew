<?php
/**
 * 固定ページ生成
 */

function create_custom_pages_with_optional_parents() {
  $pages = [
//     [
//       'title' => 'ベビーシッター',
//       'slug' => 'sitter',
//       'parent_slug' => '',
//     ],
    [
      'title' => 'ねこモデル',
      'slug' => 'picture',
      'parent_slug' => '',
    ],
    [
      'title' => 'クラウドファンディング',
      'slug' => 'crowdfunding',
      'parent_slug' => '',
      'template' => 'page-crowdfunding.php',
    ],
    [
      'title' => '大宮黒猫店',
      'slug' => 'shop1',
      'parent_slug' => '',
      'template' => 'page-shop1.php',
    ],
    [
      'title' => '川越白猫店',
      'slug' => 'shop2',
      'parent_slug' => '',
      'template' => 'page-shop2.php',
    ],
    [
      'title' => '大宮黒猫店の里親募集',
      'slug' => 'shop1-adoption',
      'parent_slug' => 'shop1',
    ],
    [
      'title' => '川越白猫店の里親募集',
      'slug' => 'shop2-adoption',
      'parent_slug' => 'shop2',
    ],

  ];

  foreach ($pages as $page) {
    $parent_page_id = 0;
    if (!empty($page['parent_slug'])) {
      $query = new WP_Query(array(
        'name'        => $page['parent_slug'],
        'post_type'   => 'page',
        'post_status' => 'publish',
        'numberposts' => 1
      ));

      if ($query->have_posts()) {
        $query->the_post();
        $parent_page_id = get_the_ID();
        wp_reset_postdata();
      }
    }

    $existing_page_query = new WP_Query(array(
      'post_type'   => 'page',
      'post_status' => 'publish',
      'name'        => $page['slug'],
      'post_parent' => $parent_page_id,
      'numberposts' => 1
    ));

    if ($existing_page_query->have_posts()) {
      $existing_page_query->the_post();
      if (!empty($page['template'])) {
        update_post_meta(get_the_ID(), '_wp_page_template', $page['template']);
      }
      wp_reset_postdata();
      continue;
    }

    $inserted_page_id = wp_insert_post(array(
      'post_title'   => $page['title'],
      'post_content' => isset($page['content']) ? $page['content'] : '',
      'post_status'  => 'publish',
      'post_type'    => 'page',
      'post_name'    => $page['slug'],
      'post_parent'  => $parent_page_id
    ));

    if (!empty($page['template']) && !is_wp_error($inserted_page_id)) {
      update_post_meta($inserted_page_id, '_wp_page_template', $page['template']);
    }
  }
}

add_action('after_setup_theme', 'create_custom_pages_with_optional_parents');
?>
