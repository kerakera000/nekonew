<?php
global $wp_path;
global $site_url;

$scope = isset($_GET['info_scope']) ? sanitize_key($_GET['info_scope']) : 'top';
$allowed_scopes = array('top', 'oomiya', 'newshop');
if (!in_array($scope, $allowed_scopes, true)) {
    $scope = 'top';
}

$scope_titles = array(
    'top' => 'その他のお知らせ',
    'oomiya' => '大宮黒猫店のお知らせ',
    'newshop' => '川越クレアモール店のお知らせ',
);

get_template_part('./template/head');
get_template_part('./template/header');
?>

<main class="main-layout InfoPage">
    <div class="Info layout-content">
        <div class="inner-content">
            <h1 class="Info__title"><?php echo esc_html($scope_titles[$scope]); ?></h1>

            <div class="InfoArchive">
                <?php
                $info_query = neko_get_info_posts($scope, -1);
                if ($info_query->have_posts()) :
                    while ($info_query->have_posts()) :
                        $info_query->the_post();
                ?>
                        <article class="InfoArchive__item">
                            <a class="InfoArchive__link" href="<?php the_permalink(); ?>">
                                <time class="InfoArchive__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                                </time>
                                <h2 class="InfoArchive__title"><?php the_title(); ?></h2>
                            </a>
                        </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="Info__description">現在、お知らせはありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('./template/footer'); ?>
