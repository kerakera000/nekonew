<?php
global $wp_path;
global $site_url;
?>

<header class="header">
    <a href="/">
        <img class="header--logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/sozai/logo.svg" alt="">
    </a>
    <div id="SPHEADER" class="header--linkbox">
        <a class="link" href="/#ABOUT">
            <span class="text">
                お店について
            </span>
        </a>
        <a class="link" href="/#HOWTOUSE">
            <span class="text">
                楽しみ方
            </span>
        </a>
        <a class="link" href="/#SHOPINFO">
            <span class="text">
                お店の様子
            </span>
        </a>
        <button class="link box">
            <span class="text">
                店舗
            </span>
            <div class="linkbox">
                <a class="text" href="/index.php/shop1/">
                    大宮黒猫店
                </a>
                <a class="text" href="/index.php/shop2/">
                    川越クレアモール店
                </a>
            </div>
        </button>
        <a class="link" href="/#PRICE">
            <span class="text">
                ご利用料金
            </span>
        </a>
        <a class="link" href="/#ONLINESHOP">
            <span class="text">
                オンラインショップ
            </span>
        </a>
        <button class="link box">
            <span class="text">
                里親募集
            </span>
            <div class="linkbox">
                <a class="text" href="/index.php/shop1-adoption/">
                    大宮黒猫店
                </a>
                <a class="text" href="/index.php/shop2-adoption/">
                    川越クレアモール店
                </a>
            </div>
        </button>
        <a class="link" href="<?php echo esc_url(home_url('/crowdfunding/')); ?>">
            <span class="text">
                クラウドファンディング
            </span>
        </a>
        <a class="link" href="<?php echo esc_url(home_url('/picture/')); ?>">
            <span class="text">
                ねこモデル実施中
            </span>
        </a>
        <a class="link" href="/#INFORMATION">
            <span class="text">
                お問い合わせ
            </span>
        </a>
    </div>
</header>

<header id="SPheaderButton" class="SP-header">
    <span class="line1"></span>
    <span class="line2"></span>
    <span class="line3"></span>
</header>
