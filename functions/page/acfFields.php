<?php
/**
 * ACF ローカルフィールド定義
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
    acf_add_local_field_group(array(
        'key' => 'group_cats_adoption_fields',
        'title' => 'Cats Adoption Fields',
        'fields' => array(
            array(
                'key' => 'field_cats_select_page',
                'label' => '表示ページ',
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
                'key' => 'field_cats_adoption_stage',
                'label' => '里親ステージ',
                'name' => 'adoption_stage',
                'type' => 'select',
                'choices' => array(
                    'adoption' => '里親募集',
                    'before' => '里親募集前',
                ),
                'default_value' => array(
                    0 => '里親募集前',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array(
                'key' => 'field_cats_adoption_status',
                'label' => '里親ステータス',
                'name' => 'adoption_status',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'トライアル中 / 譲渡可能 など',
            ),
            array(
                'key' => 'field_cats_status',
                'label' => 'ステータス',
                'name' => 'status',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'ステータスを入力',
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
}
