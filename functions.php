<?php

// 固定ページ自動生成
require get_template_directory(). '/functions/page/customPage.php';
// カスタムポスト
require get_template_directory(). '/functions/page/customPost.php';
// カスタムタクソノミー
require get_template_directory(). '/functions/page/customTaxonomy.php';
// Optionページ
// require get_template_directory(). '/functions/page/optionPage.php';
// ACFフィールド定義
require get_template_directory(). '/functions/page/acfFields.php';

if (! function_exists( 'neko_clean_select_value' ) ) {
    function neko_clean_select_value( $value ) {
        if ( is_array( $value ) ) {
            if ( isset( $value['label'] ) ) {
                return $value['label'];
            }
            if ( isset( $value['value'] ) ) {
                return $value['value'];
            }
            return '';
        }

        if ( is_string( $value ) && mb_strpos( $value, '：' ) !== false ) {
            $parts = explode( '：', $value, 2 );
            return trim( $parts[1] );
        }
        return $value;
    }
}

if (! function_exists( 'neko_get_image_url' ) ) {
    function neko_get_image_url( $image, $size = 'medium' ) {
        if ( is_array( $image ) ) {
            if ( ! empty( $image['sizes'][ $size ] ) ) {
                return $image['sizes'][ $size ];
            }
            if ( ! empty( $image['url'] ) ) {
                return $image['url'];
            }
            if ( ! empty( $image['ID'] ) ) {
                return wp_get_attachment_image_url( (int) $image['ID'], $size );
            }
        }

        if ( is_numeric( $image ) ) {
            return wp_get_attachment_image_url( (int) $image, $size );
        }

        if ( is_string( $image ) ) {
            return $image;
        }

        return '';
    }
}

if (! function_exists( 'neko_get_info_posts' ) ) {
    function neko_get_info_posts( $shop = '', $posts_per_page = 3 ) {
        $args = array(
            'post_type' => 'info',
            'posts_per_page' => $posts_per_page,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );

        if ( 'top' === $shop ) {
            $args['meta_query'] = array(
                'relation' => 'OR',
                array(
                    'key' => 'info_shop',
                    'value' => 'top',
                    'compare' => '=',
                ),
                array(
                    'key' => 'info_shop',
                    'value' => 'all',
                    'compare' => '=',
                ),
                array(
                    'key' => 'info_shop',
                    'compare' => 'NOT EXISTS',
                ),
            );
        } elseif ( $shop ) {
            $args['meta_query'] = array(
                'relation' => 'OR',
                array(
                    'key' => 'info_shop',
                    'value' => $shop,
                    'compare' => '=',
                ),
                array(
                    'key' => 'info_shop',
                    'value' => 'all',
                    'compare' => '=',
                ),
            );
        }

        return new WP_Query( $args );
    }
}

if (! function_exists( 'neko_render_info_links' ) ) {
    function neko_render_info_links( $shop = '', $posts_per_page = 3 ) {
        $info_query = neko_get_info_posts( $shop, $posts_per_page + 1 );

        if ( $info_query->have_posts() ) {
            $index = 0;
            while ( $info_query->have_posts() ) {
                $info_query->the_post();
                if ( $index >= $posts_per_page ) {
                    break;
                }
                if ( 0 < $index ) {
                    echo '<span class="others__border"></span>';
                }
                echo '<a class="others__news-link" href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a>';
                $index++;
            }
            wp_reset_postdata();
            if ( $info_query->post_count >= $posts_per_page ) {
                echo '<span class="others__border"></span>';
                echo '<a class="others__news-link others__more-link" href="' . esc_url( neko_get_info_archive_url( $shop ) ) . '">もっと見る</a>';
            }
            return;
        }

        echo '<span class="others__news-link">現在、お知らせはありません。</span>';
    }
}

if (! function_exists( 'neko_get_info_archive_url' ) ) {
    function neko_get_info_archive_url( $shop = '' ) {
        $scope = $shop ? $shop : 'top';
        return add_query_arg( 'info_scope', $scope, get_post_type_archive_link( 'info' ) );
    }
}

if (! function_exists( 'neko_flush_info_rewrite_once' ) ) {
    function neko_flush_info_rewrite_once() {
        $rewrite_version = '20260507_info_rewrite';
        if ( get_option( 'neko_rewrite_version' ) === $rewrite_version ) {
            return;
        }

        flush_rewrite_rules( false );
        update_option( 'neko_rewrite_version', $rewrite_version );
    }
}
add_action( 'init', 'neko_flush_info_rewrite_once', 20 );

// ページャー設定
// require get_template_directory(). '/functions/page/pager.php';
// 追加block
// require get_template_directory(). '/block/_blockLayout.php';

