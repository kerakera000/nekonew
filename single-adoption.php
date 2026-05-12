<?php
/**
 * 里親募集カスタム投稿の詳細ページテンプレート
 */

global $wp_path;

if ( ! function_exists( 'neko_adoption_field' ) ) {
    function neko_adoption_field( $field_name, $post_id = null ) {
        if ( ! function_exists( 'get_field' ) ) {
            return '';
        }

        return get_field( $field_name, $post_id );
    }
}

if ( ! function_exists( 'neko_adoption_text' ) ) {
    function neko_adoption_text( $value ) {
        if ( is_array( $value ) ) {
            return '';
        }

        return trim( (string) $value );
    }
}

if ( ! function_exists( 'neko_adoption_rich_text' ) ) {
    function neko_adoption_rich_text( $value ) {
        $value = neko_adoption_text( $value );
        if ( '' === $value ) {
            return '';
        }

        return wp_kses_post( wpautop( $value ) );
    }
}

if ( ! function_exists( 'neko_adoption_shop_name' ) ) {
    function neko_adoption_shop_name( $value ) {
        $value = neko_clean_select_value( (string) $value );

        $shops = array(
            'oomiya' => '大宮黒猫店',
            'newshop' => '川越クレアモール店',
            '大宮黒猫店' => '大宮黒猫店',
            'クレアモール川越店' => '川越クレアモール店',
            '川越クレアモール店' => '川越クレアモール店',
            'newshop：クレアモール川越店' => '川越クレアモール店',
            'newshop：川越クレアモール店' => '川越クレアモール店',
        );

        return isset( $shops[ $value ] ) ? $shops[ $value ] : $value;
    }
}

get_template_part( './template/head' );
get_template_part( './template/header' );
?>

<main class="main-layout">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php
            $post_id = get_the_ID();

            $name = neko_adoption_text( neko_adoption_field( 'name', $post_id ) );
            $display_name = $name ?: get_the_title();
            $birthday = neko_adoption_text( neko_adoption_field( 'birthday', $post_id ) );
            $sex = neko_adoption_text( neko_clean_select_value( neko_adoption_field( 'sex', $post_id ) ) );
            $color = neko_adoption_text( neko_adoption_field( 'color', $post_id ) );
            $microchip = neko_adoption_text( neko_adoption_field( 'microchip', $post_id ) );
            $shop_name = neko_adoption_shop_name( neko_adoption_field( 'select_page', $post_id ) );

            $image_url = neko_get_image_url( neko_adoption_field( 'neko_img', $post_id ), 'large' );
            if ( ! $image_url && has_post_thumbnail() ) {
                $image_url = get_the_post_thumbnail_url( $post_id, 'large' );
            }
            if ( ! $image_url ) {
                $image_url = $wp_path . '/assets/img/shop-info/Placeholder-image.png';
            }

            $lead_text = neko_adoption_rich_text( neko_adoption_field( 'detail_text', $post_id ) );
            if ( ! $lead_text ) {
                $lead_text = apply_filters( 'the_content', get_the_content() );
            }

            $inspection_history = neko_adoption_rich_text( neko_adoption_field( 'inspection_history', $post_id ) );
            $prevention_history = neko_adoption_rich_text( neko_adoption_field( 'prevention_history', $post_id ) );
            $past_history = neko_adoption_rich_text( neko_adoption_field( 'past_history', $post_id ) );
            $treatment_history = neko_adoption_rich_text( neko_adoption_field( 'treatment_history', $post_id ) );

            $history_rows = array(
                '予防歴' => $prevention_history,
                '既往歴' => $past_history,
                '治療中' => $treatment_history,
            );
            ?>

            <div class="AdoptionDetail layout-content">
                <div class="inner-content AdoptionDetail__inner">
                    <div class="Adoption layout-content">
                        <div class="inner-content">
                            <div class="Adoption__titlebox">
                                <h3 class="title">
                                    <img src="<?php echo esc_url( $wp_path ); ?>/assets/img/sozai/icon01.svg" alt="">
                                    <?php echo esc_html( $shop_name ? $shop_name . ' 里親募集' : '里親募集' ); ?>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="AdoptionDetail__card">
                        <div class="AdoptionDetail__image">
                            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $display_name ); ?>">
                        </div>

                        <div class="AdoptionDetail__info">
                            <dl class="AdoptionDetail__infoList">
                                <div class="AdoptionDetail__infoItem">
                                    <dt>名前</dt>
                                    <dd><?php echo esc_html( $display_name ); ?></dd>
                                </div>

                                <?php if ( $birthday ) : ?>
                                    <div class="AdoptionDetail__infoItem">
                                        <dt>誕生日</dt>
                                        <dd><?php echo esc_html( $birthday ); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $sex ) : ?>
                                    <div class="AdoptionDetail__infoItem">
                                        <dt>性別</dt>
                                        <dd><?php echo esc_html( $sex ); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $color ) : ?>
                                    <div class="AdoptionDetail__infoItem">
                                        <dt>毛色</dt>
                                        <dd><?php echo esc_html( $color ); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $microchip ) : ?>
                                    <div class="AdoptionDetail__infoItem">
                                        <p><?php echo esc_html( $microchip ); ?></p>
                                    </div>
                                <?php endif; ?>
                            </dl>
                        </div>
                    </div>

                    <div class="AdoptionDetail__box">
                        <?php if ( $lead_text ) : ?>
                            <div class="AdoptionDetail__section-lead">
                                <?php echo $lead_text; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( $inspection_history ) : ?>
                            <div class="AdoptionDetail__section">
                                <h4 class="title">【検査歴】</h4>
                                <?php echo $inspection_history; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( array_filter( $history_rows ) ) : ?>
                            <div class="AdoptionDetail__section">
                                <h4 class="title">【予防・既往・治療歴】</h4>
                                <table class="AdoptionDetail__table">
                                    <tbody>
                                        <?php foreach ( $history_rows as $label => $body ) : ?>
                                            <?php if ( $body ) : ?>
                                                <tr>
                                                    <td class="AdoptionDetail__cell"><?php echo esc_html( $label ); ?></td>
                                                    <td class="AdoptionDetail__cell"><?php echo $body; ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_template_part( './template/footer' ); ?>
