<?php
global $wp_path;
global $site_url;
wp_reset_postdata();
?>

<!-- footer -->

<footer class="footer">
    <div class="inner-content container">
        <div class="footer-content">
            <img class="footer-content--logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/sozai/logo.svg" alt="">
        </div>
        <div class="footer-content--linkbox">
            <div class="footer-content--linkbox--linkrow">
                <a class="footer-content--linkbox--linkrow--text" href="/#ABOUT">
                    <span>
                        お店について
                    </span>
                </a>
                <a class="footer-content--linkbox--linkrow--text" href="/#HOWTOUSE">
                    <span>
                        楽しみ方
                    </span>
                </a>
                <a class="footer-content--linkbox--linkrow--text" href="/#SHOPINFO">
                    <span>
                        お店の様子
                    </span>
                </a>
                <!--<a class="footer-content--linkbox--linkrow--text" href="/#RESERVE">
                    <span>
                        来店予約
                    </span>
                </a>-->
                <a class="footer-content--linkbox--linkrow--text" href="/#PRICE">
                    <span>
                        ご利用料金
                    </span>
                </a>
                <a class="footer-content--linkbox--linkrow--text" href="/#INFORMATION">
                    <span>
                        お問い合わせ
                    </span>
                </a>
            </div>
            <div class="footer-content--linkbox--linkrow">
<!--                 <a class="footer-content--linkbox--linkrow--text" href="/index.php/sitter/">
                    <span>
                        シッターサービス
                    </span>
                </a> -->
                <a class="footer-content--linkbox--linkrow--text" href="<?php echo esc_url(home_url('/picture/')); ?>">
                    <span>
                        撮影サービス
                    </span>
                </a>
                <a class="footer-content--linkbox--linkrow--text" href="<?php echo esc_url(home_url('/crowdfunding/')); ?>">
                    <span>
                        クラウドファンディング
                    </span>
                </a>
            </div>
            <!-- <div class="footer-content--linkbox--linkrow">
                <a class="footer-content--linkbox--linkrow--text" href="">
                    <span>
                        会社概要
                    </span>
                </a>
                <a class="footer-content--linkbox--linkrow--text" href="">
                    <span>
                        個人情報保護方針
                    </span>
                </a>
                <a class="footer-content--linkbox--linkrow--text" href="">
                    <span>
                        ご利用規約
                    </span>
                </a>
            </div> -->
        </div>
    </div>
</footer>
</div>

<!-- Javascript -->
<script src="<?= $wp_path;?>/assets/js/common.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
