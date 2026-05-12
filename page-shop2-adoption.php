<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout">

    <div class="Adoption layout-content">
        <div class="inner-content">
            <div class="Adoption__titlebox">
                <h3 class="title">
                    <img src="<?= $wp_path; ?>/assets/img/sozai/icon01.svg" alt="ShopInfo">
                    川越クレアモール店
                </h3>
            </div>
        </div>
    </div>

    <?php
    $args = array(
        'post_type' => 'adoption',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'select_page',
                'value' => array(
                    'クレアモール川越店',
                    '川越クレアモール店',
                    'newshop',
                    'newshop：クレアモール川越店',
                    'newshop：川越クレアモール店'
                ),
                'compare' => 'IN'
            ),
            array(
                'relation' => 'OR',
                array(
                    'key' => 'adoption_stage',
                    'value' => array('里親募集', 'adoption', 'adoption：里親募集'),
                    'compare' => 'IN'
                ),
                array(
                    'key' => 'adoption_stage',
                    'value' => array('里親募集前', 'before', 'before：里親募集前'),
                    'compare' => 'IN'
                )
            )
        )
    );

    $cats_query = new WP_Query($args);
    $adoption_cats = array();
    $before_cats = array();

    if ($cats_query->have_posts()) {
        while ($cats_query->have_posts()) {
            $cats_query->the_post();

            $cat = array(
                'ID' => get_the_ID(),
                'name' => get_field('name') ?: get_the_title(),
                'sex' => neko_clean_select_value(get_field('sex')),
                'image_url' => neko_get_image_url(get_field('neko_img'), 'medium') ?: get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: $wp_path . '/assets/img/shop-info/Placeholder-image.png',
                'birthday' => get_field('birthday'),
                'status' => get_field('adoption_status') ?: get_field('status'),
                'stage' => get_field('adoption_stage') ?: get_field('stage'),
            );

            $stage = (string) neko_clean_select_value($cat['stage']);
            if ($stage !== '') {
                if (
                    $stage === '里親募集前'
                    || $stage === 'before'
                    || $stage === 'before：里親募集前'
                    || strpos($stage, '里親募集前') !== false
                ) {
                    $before_cats[] = $cat;
                } elseif (
                    $stage === '里親募集'
                    || $stage === 'adoption'
                    || $stage === 'adoption：里親募集'
                    || strpos($stage, '里親募集') !== false
                ) {
                    $adoption_cats[] = $cat;
                }
            }
        }
        wp_reset_postdata();
    }
    ?>

    <div class="Adoption layout-content">
        <div class="inner-content">
            <h4 class="Adoption__title">
                里親募集
            </h4>
            <?php if (!empty($adoption_cats)) : ?>
                <div class="adoption-cat-cards">
                    <?php foreach ($adoption_cats as $cat) : ?>
                        <a class="adoption-cat-card-link" href="<?php echo esc_url(get_permalink($cat['ID'])); ?>">
                            <div class="adoption-cat-card">
                                <div class="adoption-cat-image">
                                    <?php if ($cat['image_url']) : ?>
                                        <img src="<?php echo esc_url($cat['image_url']); ?>" alt="<?php echo esc_attr($cat['name']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="adoption-cat-info">
                                    <div class="adoption-cat-name-sex">
                                        <h4 class="adoption-cat-name"><?php echo esc_html($cat['name']); ?></h4>
                                        <?php if ($cat['sex']) : ?>
                                            <span class="adoption-cat-sex"><?php echo esc_html($cat['sex']); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="adoption-cat-details">
                                        <?php if ($cat['birthday']) : ?>
                                            <span class="adoption-cat-birthday"><?php echo esc_html($cat['birthday']); ?></span>
                                        <?php endif; ?>
                                    </p>
                                    <p class="cat-status"><?php echo esc_html($cat['status'] ?: 'トライアル中'); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <p class="adoption-description">現在、里親募集中の猫はいません。</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="AdoptionBefore layout-content">
        <div class="inner-content">
            <h4 class="Adoption__title">
                里親募集前
            </h4>
            <?php if (!empty($before_cats)) : ?>
                <div class="adoption-cat-cards">
                    <?php foreach ($before_cats as $cat) : ?>
                        <a class="adoption-cat-card-link" href="<?php echo esc_url(get_permalink($cat['ID'])); ?>">
                            <div class="adoption-cat-card">
                                <div class="adoption-cat-image">
                                    <?php if ($cat['image_url']) : ?>
                                        <img src="<?php echo esc_url($cat['image_url']); ?>" alt="<?php echo esc_attr($cat['name']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="adoption-cat-info">
                                    <div class="adoption-cat-name-sex">
                                        <h4 class="adoption-cat-name"><?php echo esc_html($cat['name']); ?></h4>
                                        <?php if ($cat['sex']) : ?>
                                            <span class="adoption-cat-sex"><?php echo esc_html($cat['sex']); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="adoption-cat-details">
                                        <?php if ($cat['birthday']) : ?>
                                            <span class="adoption-cat-birthday"><?php echo esc_html($cat['birthday']); ?></span>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <p class="adoption-description">現在、里親募集前の猫はいません。</p>
            <?php endif; ?>
        </div>
    </div>

</main>

<?php
get_template_part('./template/footer');
?>
