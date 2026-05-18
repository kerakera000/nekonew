<?php
/**
 * ACF ローカルフィールド定義
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
    acf_add_local_field_group(array(
        'key' => 'group_cats_profile_fields',
        'title' => '猫紹介 Fields',
        'fields' => array(
            array(
                'key' => 'field_cats_select_page',
                'label' => '表示店舗',
                'name' => 'select_page',
                'type' => 'select',
                'choices' => array(
                    'oomiya' => '大宮黒猫店',
                    'newshop' => '川越クレアモール店',
                ),
                'default_value' => array(
                    0 => 'oomiya',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array(
                'key' => 'field_cats_name',
                'label' => '名前',
                'name' => 'name',
                'type' => 'text',
                'default_value' => '',
            ),
            array(
                'key' => 'field_cats_sex',
                'label' => '性別',
                'name' => 'sex',
                'type' => 'select',
                'choices' => array(
                    'おとこのこ' => 'おとこのこ',
                    'おんなのこ' => 'おんなのこ',
                ),
                'default_value' => array(
                    0 => 'おとこのこ',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array(
                'key' => 'field_cats_birthday',
                'label' => '生年月日',
                'name' => 'birthday',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'YYYY年MM月DD日',
            ),
            array(
                'key' => 'field_cats_neko_img',
                'label' => '猫の画像',
                'name' => 'neko_img',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cats',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(),
    ));

    acf_add_local_field_group(array(
        'key' => 'group_adoption_detail_fields',
        'title' => '里親募集 詳細ページ Fields',
        'fields' => array(
            array(
                'key' => 'field_adoption_color',
                'label' => '毛色',
                'name' => 'color',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'キジ色 / 茶白 など',
            ),
            array(
                'key' => 'field_adoption_microchip',
                'label' => 'マイクロチップ',
                'name' => 'microchip',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'マイクロチップ未装着 など',
            ),
            array(
                'key' => 'field_adoption_detail_text',
                'label' => '詳細本文',
                'name' => 'detail_text',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '性格、注意事項、保険加入状況など',
                'rows' => 6,
                'new_lines' => 'wpautop',
            ),
            array(
                'key' => 'field_adoption_inspection_history',
                'label' => '検査歴',
                'name' => 'inspection_history',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => 'FIV/FeLV検査結果：陰性 など',
                'rows' => 4,
                'new_lines' => 'wpautop',
            ),
            array(
                'key' => 'field_adoption_prevention_history',
                'label' => '予防歴',
                'name' => 'prevention_history',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => 'ノミダニ予防（毎月）など',
                'rows' => 4,
                'new_lines' => 'wpautop',
            ),
            array(
                'key' => 'field_adoption_past_history',
                'label' => '既往歴',
                'name' => 'past_history',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '既往歴があれば入力',
                'rows' => 4,
                'new_lines' => 'wpautop',
            ),
            array(
                'key' => 'field_adoption_treatment_history',
                'label' => '治療中',
                'name' => 'treatment_history',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '治療中の内容があれば入力',
                'rows' => 4,
                'new_lines' => 'wpautop',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'adoption',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(),
    ));

    acf_add_local_field_group(array(
        'key' => 'group_info_fields',
        'title' => 'お知らせ Fields',
        'fields' => array(
            array(
                'key' => 'field_info_shop',
                'label' => '表示店舗',
                'name' => 'info_shop',
                'type' => 'select',
                'choices' => array(
                    'all' => '全店舗',
                    'top' => 'topのみ',
                    'oomiya' => '大宮黒猫店',
                    'newshop' => '川越クレアモール店',
                ),
                'default_value' => 'all',
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array(
                'key' => 'field_info_template_enabled',
                'label' => 'テンプレート表示を使う',
                'name' => 'info_template_enabled',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 0,
            ),
            array(
                'key' => 'field_info_template_title',
                'label' => 'テンプレートタイトル',
                'name' => 'info_template_title',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'タイトルを入力（表示時に【】で囲まれます）',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_info_template_enabled',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_info_template_body',
                'label' => 'テンプレート本文',
                'name' => 'info_template_body',
                'type' => 'textarea',
                'default_value' => '',
                'rows' => 6,
                'new_lines' => 'wpautop',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_info_template_enabled',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_info_template_url',
                'label' => 'テンプレートURL',
                'name' => 'info_template_url',
                'type' => 'url',
                'default_value' => '',
                'placeholder' => 'https://example.com/',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_info_template_enabled',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_info_template_url_label',
                'label' => 'テンプレートURLラベル',
                'name' => 'info_template_url_label',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'リンク表示テキスト（未入力のときはURLを表示）',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_info_template_enabled',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_info_template_image',
                'label' => 'テンプレート画像',
                'name' => 'info_template_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_info_template_enabled',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'info',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(),
    ));

    acf_add_local_field_group(array(
        'key' => 'group_shop_notice_image_fields',
        'title' => '店舗ページ KV画像設定',
        'fields' => array(
            array(
                'key' => 'field_shop_business_notice_image',
                'label' => '営業時間のお知らせ KV画像',
                'name' => 'shop_business_notice_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_shop_event_notice_image',
                'label' => 'イベント情報のお知らせ KV画像',
                'name' => 'shop_event_notice_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-shop1.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-shop2.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(),
    ));

    acf_add_local_field_group(array(
        'key' => 'group_crowdfunding_report_fields',
        'title' => 'クラウドファンディング ご報告欄',
        'fields' => array(
            array(
                'key' => 'field_crowdfunding_report_image',
                'label' => 'ご報告画像',
                'name' => 'crowdfunding_report_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_crowdfunding_report_name',
                'label' => 'ご報告ラベル',
                'name' => 'crowdfunding_report_name',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'はちみつちゃん',
            ),
            array(
                'key' => 'field_crowdfunding_report_text',
                'label' => 'ご報告本文',
                'name' => 'crowdfunding_report_text',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => 'ご支援いただいた寄付金で避妊手術をさせていただきました。',
                'rows' => 4,
                'new_lines' => 'wpautop',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'crowdfunding_report',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(),
    ));

    acf_add_local_field_group(array(
        'key' => 'group_crowdfunding_name_fields',
        'title' => 'クラウドファンディング お名前掲載',
        'fields' => array(
            array(
                'key' => 'field_crowdfunding_display_name',
                'label' => '掲載名',
                'name' => 'crowdfunding_display_name',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'イトウユリコ様',
                'instructions' => '未入力の場合は投稿タイトルを表示します。',
            ),
            array(
                'key' => 'field_crowdfunding_name_note',
                'label' => '補足',
                'name' => 'crowdfunding_name_note',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '去勢・避妊手術サポーター',
                'instructions' => '入力すると掲載名の後ろに【補足】として表示します。',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'crowdfunding_name',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(),
    ));
}

if ( ! function_exists( 'neko_normalize_shop_value' ) ) {
    function neko_normalize_shop_value( $value ) {
        if ( is_array( $value ) ) {
            if ( isset( $value['value'] ) ) {
                $value = $value['value'];
            } elseif ( isset( $value['label'] ) ) {
                $value = $value['label'];
            } else {
                return $value;
            }
        }

        $value = (string) $value;
        $map = array(
            'oomiya' => 'oomiya',
            '大宮黒猫店' => 'oomiya',
            'oomiya：大宮黒猫店' => 'oomiya',
            'newshop' => 'newshop',
            'クレアモール川越店' => 'newshop',
            '川越クレアモール店' => 'newshop',
            'newshop：クレアモール川越店' => 'newshop',
            'newshop：川越クレアモール店' => 'newshop',
        );

        return isset( $map[ $value ] ) ? $map[ $value ] : $value;
    }
}

if ( ! function_exists( 'neko_load_select_page_field' ) ) {
    function neko_load_select_page_field( $field ) {
        $field['choices'] = array(
            'oomiya' => '大宮黒猫店',
            'newshop' => '川越クレアモール店',
        );

        $field['default_value'] = false;
        $field['allow_null'] = 1;

        return $field;
    }
}
add_filter( 'acf/load_field/name=select_page', 'neko_load_select_page_field' );

if ( ! function_exists( 'neko_load_select_page_value' ) ) {
    function neko_load_select_page_value( $value, $post_id, $field ) {
        return neko_normalize_shop_value( $value );
    }
}
add_filter( 'acf/load_value/name=select_page', 'neko_load_select_page_value', 10, 3 );

if ( ! function_exists( 'neko_update_select_page_value' ) ) {
    function neko_update_select_page_value( $value, $post_id, $field ) {
        return neko_normalize_shop_value( $value );
    }
}
add_filter( 'acf/update_value/name=select_page', 'neko_update_select_page_value', 10, 3 );
