<?php
/**
 * カスタム投稿タイプ
 */

function create_post_type() {
  // Post
  /*---------------------------------------------*/
  register_post_type(
    'temppage',
    array(
      'label' => 'テンプレート投稿',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'show_in_rest' => true,
      'show_ui' => true,
      'supports' => array(
        'title',
        'thumbnail'
      ),
    )
  );

  // 猫の紹介投稿
  /*---------------------------------------------*/
  register_post_type(
    'cats',
    array(
      'label' => '猫の紹介',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'show_in_rest' => true,
      'show_ui' => true,
      'menu_icon' => 'dashicons-pets',
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt'
      ),
    )
  );

  // 里親募集投稿
  /*---------------------------------------------*/
  register_post_type(
    'adoption',
    array(
      'label' => '里親募集',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 6,
      'show_in_rest' => true,
      'show_ui' => true,
      'menu_icon' => 'dashicons-heart',
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt'
      ),
    )
  );

  // お知らせ投稿
  /*---------------------------------------------*/
  register_post_type(
    'info',
    array(
      'label' => 'お知らせ',
      'public' => true,
      'publicly_queryable' => true,
      'has_archive' => true,
      'rewrite' => array(
        'slug' => 'info',
        'with_front' => false,
      ),
      'query_var' => true,
      'menu_position' => 7,
      'show_in_rest' => true,
      'show_ui' => true,
      'menu_icon' => 'dashicons-megaphone',
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt'
      ),
    )
  );

  // クラウドファンディングご報告投稿
  /*---------------------------------------------*/
  register_post_type(
    'crowdfunding_report',
    array(
      'label' => 'CFご報告',
      'labels' => array(
        'name' => 'CFご報告',
        'singular_name' => 'CFご報告',
        'add_new_item' => 'CFご報告を追加',
        'edit_item' => 'CFご報告を編集',
      ),
      'public' => false,
      'publicly_queryable' => false,
      'has_archive' => false,
      'show_in_rest' => true,
      'show_ui' => true,
      'menu_position' => 8,
      'menu_icon' => 'dashicons-clipboard',
      'supports' => array(
        'title',
        'editor',
        'thumbnail'
      ),
    )
  );

  // クラウドファンディングお名前掲載投稿
  /*---------------------------------------------*/
  register_post_type(
    'crowdfunding_name',
    array(
      'label' => 'CFお名前掲載',
      'labels' => array(
        'name' => 'CFお名前掲載',
        'singular_name' => 'CFお名前掲載',
        'add_new_item' => '掲載名を追加',
        'edit_item' => '掲載名を編集',
      ),
      'public' => false,
      'publicly_queryable' => false,
      'has_archive' => false,
      'show_in_rest' => true,
      'show_ui' => true,
      'menu_position' => 9,
      'menu_icon' => 'dashicons-groups',
      'supports' => array(
        'title',
        'page-attributes'
      ),
    )
  );
}
add_action( 'init', 'create_post_type' );

if ( ! function_exists( 'adoption_post_columns' ) ) {
  function adoption_post_columns( $columns ) {
    $new_columns = array();
    foreach ( $columns as $key => $label ) {
      $new_columns[ $key ] = $label;
      if ( 'title' === $key ) {
        $new_columns['select_page'] = '店舗';
      }
    }
    return $new_columns;
  }
}

if ( ! function_exists( 'adoption_post_custom_column' ) ) {
  function adoption_post_custom_column( $column, $post_id ) {
    if ( 'select_page' !== $column ) {
      return;
    }

    $value = get_field( 'select_page', $post_id );
    if ( ! $value ) {
      echo '—';
      return;
    }

    $map = array(
      'oomiya' => '大宮黒猫店',
      'newshop' => '川越クレアモール店',
      'newshop：クレアモール川越店' => '川越クレアモール店',
      'oomiya：大宮黒猫店' => '大宮黒猫店',
      'newshop：川越クレアモール店' => '川越クレアモール店',
      '大宮黒猫店' => '大宮黒猫店',
      'クレアモール川越店' => '川越クレアモール店',
      '川越クレアモール店' => '川越クレアモール店',
    );

    echo esc_html( isset( $map[ $value ] ) ? $map[ $value ] : $value );
  }
}

add_filter( 'manage_adoption_posts_columns', 'adoption_post_columns' );
add_action( 'manage_adoption_posts_custom_column', 'adoption_post_custom_column', 10, 2 );

if ( ! function_exists( 'info_post_columns' ) ) {
  function info_post_columns( $columns ) {
    $new_columns = array();
    foreach ( $columns as $key => $label ) {
      $new_columns[ $key ] = $label;
      if ( 'title' === $key ) {
        $new_columns['info_shop'] = '投稿先';
      }
    }
    return $new_columns;
  }
}

if ( ! function_exists( 'info_post_custom_column' ) ) {
  function info_post_custom_column( $column, $post_id ) {
    if ( 'info_shop' !== $column ) {
      return;
    }

    $value = get_field( 'info_shop', $post_id );
    if ( ! $value ) {
      echo '全店舗';
      return;
    }

    $value = neko_clean_select_value( $value );
    $map = array(
      'all' => '全店舗',
      'top' => 'topのみ',
      'oomiya' => '大宮黒猫店',
      'newshop' => '川越クレアモール店',
      '全店舗' => '全店舗',
      'topのみ' => 'topのみ',
      '大宮黒猫店' => '大宮黒猫店',
      '川越クレアモール店' => '川越クレアモール店',
    );

    echo esc_html( isset( $map[ $value ] ) ? $map[ $value ] : $value );
  }
}

add_filter( 'manage_info_posts_columns', 'info_post_columns' );
add_action( 'manage_info_posts_custom_column', 'info_post_custom_column', 10, 2 );

if ( ! function_exists( 'info_post_admin_column_width' ) ) {
  function info_post_admin_column_width() {
    $screen = get_current_screen();
    if ( ! $screen || 'edit-info' !== $screen->id ) {
      return;
    }
    echo '<style>.column-info_shop{width:22%;}</style>';
  }
}
add_action( 'admin_head', 'info_post_admin_column_width' );
?>
