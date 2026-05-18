<?php
global $wp_path;
global $site_url;

get_template_part('./template/head');
?>
<?php
get_template_part('./template/header');
?>
<main class="main-layout InfoPageFrame">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="Info layout-content">
                <div class="inner-content">
                    <?php
                    $template_enabled = function_exists('get_field') ? get_field('info_template_enabled') : false;
                    $template_title = function_exists('get_field') ? get_field('info_template_title') : '';
                    $template_body = function_exists('get_field') ? get_field('info_template_body') : '';
                    $template_url = function_exists('get_field') ? get_field('info_template_url') : '';
                    $template_url_label = function_exists('get_field') ? get_field('info_template_url_label') : '';
                    $template_image = function_exists('get_field') ? get_field('info_template_image') : '';
                    $template_image_url = function_exists('neko_get_image_url') ? neko_get_image_url($template_image, 'large') : '';
                    $has_template_content = $template_title || $template_body || $template_url || $template_image_url;
                    ?>
                    <?php if (!$template_enabled || !$template_title) : ?>
                        <h1 class="Info__title"><?php the_title(); ?></h1>
                    <?php endif; ?>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="Info__gallery">
                            <div class="Info__gallery-item">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="Info__description">
                        <?php the_content(); ?>
                    </div>

                    <?php if ($template_enabled && $has_template_content) : ?>
                        <div class="InfoTemplate">
                            <?php if ($template_title) : ?>
                                <h2 class="InfoTemplate__title">【<?php echo esc_html($template_title); ?>】</h2>
                            <?php endif; ?>

                            <?php if ($template_body) : ?>
                                <div class="InfoTemplate__body">
                                    <?php echo wp_kses_post(wpautop($template_body)); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($template_url) : ?>
                                <a class="InfoTemplate__url" href="<?php echo esc_url($template_url); ?>" target="_blank" rel="noopener">
                                    <?php echo esc_html($template_url_label ? $template_url_label : $template_url); ?>
                                </a>
                            <?php endif; ?>

                            <?php if ($template_image_url) : ?>
                                <div class="InfoTemplate__image">
                                    <img src="<?php echo esc_url($template_image_url); ?>" alt="<?php echo esc_attr($template_title ?: get_the_title()); ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    $gallery_images = function_exists('get_field') ? get_field('gallery_images') : array();
                    if ($gallery_images) :
                    ?>
                        <div class="Info__gallery">
                            <?php foreach ($gallery_images as $image) : ?>
                                <?php $image_url = neko_get_image_url($image, 'large'); ?>
                                <?php if ($image_url) : ?>
                                    <div class="Info__gallery-item">
                                        <img src="<?php echo esc_url($image_url); ?>" alt="">
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_template_part('./template/footer'); ?>
</div>
