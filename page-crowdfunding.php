<?php
/**
 * Template Name: クラウドファンディング
 */
global $wp_path;

$crowdfunding_reports = new WP_Query(array(
    'post_type' => 'crowdfunding_report',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
));

$crowdfunding_names = new WP_Query(array(
    'post_type' => 'crowdfunding_name',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => array(
        'menu_order' => 'ASC',
        'date' => 'ASC',
    ),
));

get_template_part('./template/head');
get_template_part('./template/header');
?>

<main class="main-layout">
    <section class="Crowdfunding layout-content">
        <div class="inner-content Crowdfunding__inner">
            <h1 class="Crowdfunding__title">クラウドファンディング</h1>

            <div class="Crowdfunding__project">
                <p class="Crowdfunding__project-text">
                    埼玉・岩手に新店舗！<br>
                    猫の命と福祉が必要な人を<br>
                    同時に救うねこカフェを応援してほしい<br>
                    プロジェクト
                </p>
                <p class="Crowdfunding__date">2025年10月実施</p>
            </div>

            <div class="Crowdfunding__body">
                <p>このたびは「保護猫施設 全国展開に向けて」のプロジェクトにご賛同いただきまして、誠にありがとうございました。</p>
                <p>このプロジェクトは、猫たちの命を救い、新しい家族との出会いの場を提供すると共に、福祉施設利用者の社会参加を支えられるような場所をつくりたいという思いでスタート致しました。</p>
                <p>今回クラウドファンディングにご協力いただいた皆様のお気持ちに応えられるよう、今いる保護猫たちのケアやこれからの事業拡大に向けて、スタッフ一同よりいっそう精進し取り組んで参ります。</p>
                <p>今後の活動や成果は、ねこカフェいちごのSNSやHPにてご報告させていただきますので、今後とも応援してくださいますと幸いです。</p>
                <p>これからもねこカフェいちごをよろしくお願いします。</p>
            </div>

            <div class="Crowdfunding__supporters">
                <p class="Crowdfunding__supporters-heading">
                    クラウドファンディング<br>
                    ご支援者様(掲載OKの方々)
                </p>
                <div class="Crowdfunding__supporters-text">
                    <?php if ($crowdfunding_names->have_posts()) : ?>
                        <ul class="Crowdfunding__supporters-list">
                            <?php while ($crowdfunding_names->have_posts()) : $crowdfunding_names->the_post(); ?>
                                <?php
                                $supporter_name = function_exists('get_field') ? get_field('crowdfunding_display_name') : '';
                                $supporter_note = function_exists('get_field') ? get_field('crowdfunding_name_note') : '';
                                $supporter_name = $supporter_name ?: get_the_title();
                                ?>
                                <?php if ($supporter_name) : ?>
                                    <li class="Crowdfunding__supporters-item">
                                        <?php echo esc_html($supporter_name); ?>
                                        <?php if ($supporter_note) : ?>
                                            <span class="Crowdfunding__supporters-note">【<?php echo esc_html($supporter_note); ?>】</span>
                                        <?php endif; ?>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>
                            現在、ご支援者様の掲載はありません。
                        </p>
                    <?php endif; ?>
                </div>
                <p class="Crowdfunding__supporters-footer">
                    お名前を掲載させていただいた方をはじめ、<br>
                    ご支援をしてくださったすべての皆様にお礼申し上げます。
                </p>
            </div>

            <?php if ($crowdfunding_reports->have_posts()) : ?>
                <section class="CrowdfundingReport">
                    <h2 class="CrowdfundingReport__title">ご報告</h2>
                    <div class="CrowdfundingReport__list">
                        <?php while ($crowdfunding_reports->have_posts()) : $crowdfunding_reports->the_post(); ?>
                            <?php
                            $report_image = function_exists('get_field') ? get_field('crowdfunding_report_image') : '';
                            $report_name = function_exists('get_field') ? get_field('crowdfunding_report_name') : '';
                            $report_text = function_exists('get_field') ? get_field('crowdfunding_report_text') : '';
                            $report_image_url = function_exists('neko_get_image_url') ? neko_get_image_url($report_image, 'medium') : '';
                            $report_image_url = $report_image_url ?: get_the_post_thumbnail_url(get_the_ID(), 'medium');
                            $report_name = $report_name ?: get_the_title();
                            $report_text = $report_text ?: get_the_content();
                            ?>
                            <div class="CrowdfundingReport__content">
                                <?php if ($report_image_url) : ?>
                                    <div class="CrowdfundingReport__image-wrap">
                                        <img class="CrowdfundingReport__image" src="<?php echo esc_url($report_image_url); ?>" alt="<?php echo esc_attr($report_name ?: 'ご報告'); ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="CrowdfundingReport__text-area">
                                    <?php if ($report_name) : ?>
                                        <p class="CrowdfundingReport__name"><?php echo esc_html($report_name); ?></p>
                                    <?php endif; ?>
                                    <?php if ($report_text) : ?>
                                        <div class="CrowdfundingReport__text">
                                            <?php echo wp_kses_post(wpautop($report_text)); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_template_part('./template/footer'); ?>
