<?php
global $wp_path;
global $site_url;

get_template_part('./template/head');
get_template_part('./template/header');
?>

<main class="main-layout">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="Info layout-content">
                <div class="inner-content">
                    <h1 class="Info__title"><?php the_title(); ?></h1>

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
