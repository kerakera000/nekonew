<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout">

    <div class="hero">
        <img class="max-layoutimg" src="<?= $wp_path; ?>/assets/img/sozai/ul03.svg" alt="猫カフェいちご">
        <div class="hero-content">
                <div class="hero-textcont">
                    <div class="swiper heroSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?= $wp_path; ?>/assets/img/neko/1.jpg" alt="About">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= $wp_path; ?>/assets/img/neko/2.jpg" alt="About">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= $wp_path; ?>/assets/img/neko/3.jpg" alt="About">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= $wp_path; ?>/assets/img/neko/4.jpg" alt="About">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= $wp_path; ?>/assets/img/neko/5.jpg" alt="About">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= $wp_path; ?>/assets/img/neko/6.jpg" alt="About">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= $wp_path; ?>/assets/img/neko/7.jpg" alt="About">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= $wp_path; ?>/assets/img/neko/8.jpg" alt="About">
                            </div>
                        </div>
                    </div>
                </div>
            <div class="herobackimg"></div>
        </div>
    </div>

    <img class="max-layoutimg" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div class="Price Sitter layout-content">
        <div class="title-area">
            <h1>ペットシッター</h1>
        </div>

        <div class="price-title">
            <span class="price-title__tagtext">\ おすすめ /</span>
            <h2 class="price-title__titletext">会員になっておすすめする</h2>
        </div>

        <div class="card1">
            <div class="inner-content inner800 items">
                <div class="card1__item">
                    <div class="card1__item__title">
                        <!-- <span class="card1__item__title__tagtext">お子様が急に体調を崩された時に</span> -->
                        <h3 class="card1__item__title__titletext">ペットシッター
                        Ichigoについて</h3>
                    </div>

                    <div class="card1__item__content">
                        <p class="card1__item__content__text">
                        ペットホテルに預けたいけど初め
                        ての場所で慣れてくれるか不安、
                        他のペットの鳴き声がストレスに
                        なるかもしれないという⽅向けに
                        、住み慣れたご⾃宅でのお留守番
                        をお⼿伝いするペットシッターを
                        ⾏っております。<br><br>
                        ご旅⾏や冠婚葬祭の際などにお気
                        軽にご利⽤下さい。<br><br>
                        ⻑⽣きするペットの伴⾛者として
                        ペットの⽣活サービスを提供して
                        参ります。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="inner-content inner800 items">
                <div class="card1__item">
                    <div class="card1__item__title">
                        <!-- <span class="card1__item__title__tagtext">お子様が急に体調を崩された時に</span> -->
                        <h3 class="card1__item__title__titletext">〜ペットシッターIchigo〜</h3>
                    </div>

                    <div class="card1__item__content">
                        <p class="card1__item__content__text">
                        〒337-0043
                        埼⽟県さいたま市⾒沼区中川１３５ 松沢店舗 1階B
                        ☎ 048-633-4410
                        営業時間／10：00〜19：00
                        お問い合わせはホームページまたはお電話から
                        </p><br>
                        <a class="card1__item__content__text" href="https://ichigoomiyakuro.net">
                        https://ichigoomiyakuro.net/
                        </a><br><br>
                        <p class="card1__item__content__text">
                            第⼀種動物取扱業者<br>
                            登録番号：第1035号<br>
                            種別：保管<br>
                            登録年⽉⽇：2023年12⽉1⽇<br>
                            有効期限の末⽇：2028年11⽉30⽇<br>
                            責任者：村社 誠
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<?php
get_template_part('./template/footer');