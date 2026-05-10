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

    <section class="neko-model layout-content">
        <div class="inner-content neko-model__inner">
            <h1 class="neko-model__title">ねこカフェいちご ねこモデルについて</h1>

            <p class="neko-model__lead">
                ねこカフェいちごのスタッフたちが、猫用品の宣伝や広告(その他も要相談)での撮影協力をさせていただきます。
            </p>

            <div class="neko-model__block">
                <h2 class="neko-model__heading">利用料金一覧(税込)</h2>
                <table class="neko-model__table">
                    <tbody>
                        <tr>
                            <th class="neko-model__cell neko-model__cell--blank"></th>
                            <th class="neko-model__cell">時間制</th>
                            <th class="neko-model__cell">料金</th>
                        </tr>
                        <tr>
                            <th class="neko-model__cell" rowspan="2">当社が依頼する<br>プロによる撮影</th>
                            <td class="neko-model__cell">1時間〜3時間</td>
                            <td class="neko-model__cell">33,000円</td>
                        </tr>
                        <tr>
                            <td class="neko-model__cell">3時間〜8時間</td>
                            <td class="neko-model__cell">77,000円</td>
                        </tr>
                        <tr>
                            <th class="neko-model__cell">店舗スタッフ<br>による撮影</th>
                            <td class="neko-model__cell">なし</td>
                            <td class="neko-model__cell">22,000円</td>
                        </tr>
                        <tr>
                            <th class="neko-model__cell">依頼者による<br>店舗での撮影</th>
                            <td class="neko-model__cell">1時間毎<br><span>（最大8時間）</span></td>
                            <td class="neko-model__cell">11,000円</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="neko-model__block">
                <h2 class="neko-model__heading">ねこモデル料金(税込)</h2>
                <table class="neko-model__table">
                    <tbody>
                        <tr>
                            <th class="neko-model__cell" rowspan="2">指定あり</th>
                            <td class="neko-model__cell">仔猫(2~12ヶ月)</td>
                            <td class="neko-model__cell">一匹あたり<br>22,000円</td>
                        </tr>
                        <tr>
                            <td class="neko-model__cell">成猫</td>
                            <td class="neko-model__cell">一匹あたり<br>11,000円</td>
                        </tr>
                        <tr>
                            <th class="neko-model__cell" rowspan="2">指定なし</th>
                            <td class="neko-model__cell">仔猫(2~12ヶ月)</td>
                            <td class="neko-model__cell">88,000円</td>
                        </tr>
                        <tr>
                            <td class="neko-model__cell">成猫</td>
                            <td class="neko-model__cell">77,000円</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="neko-model__note">※ご指定のない場合、たくさんの猫たちが写った撮影もいたします。</p>

            <div class="neko-model__detail">
                <section class="neko-model__text-block">
                    <h2 class="neko-model__heading">撮影に関する詳細</h2>
                    <ul class="neko-model__list">
                        <li>
                            撮影場所は店舗にて行います。プロカメラマンや依頼者による撮影の場合は基本的には定休日の木曜に承ります。
                            依頼者様のご意向で、営業日での撮影をご希望の場合は、時間料金を別途1時間33,000円いただいております。<br>
                        </li>
                        <li>撮影は1階ふれあいスペースと2階貸切部屋のどちらもご利用いただけます。</li>
                        <li>プロカメラマンと店舗スタッフによる撮影には、スケジュールの兼ね合いもありデータの提出に1〜2ヶ月要する場合があります。あらかじめご了承ください。</li>
                    </ul>
                </section>

                <section class="neko-model__text-block">
                    <h2 class="neko-model__heading">撮影に関するご注意とお願い</h2>
                    <ul class="neko-model__list">
                        <li>フラッシュでの撮影はご遠慮いただいております。</li>
                        <li>当店の猫たち以外の動物の入店は出来ません。</li>
                        <li>大きい音は出さないようお願いいたします。</li>
                        <li>好きな猫スタッフを選べますが、それぞれの性格や体調により、ご要望にお応えできない可能性があります。あらかじめご了承ください。</li>
                        <li>
                            撮影で起用できる子猫は2ヶ月からとなります。<br>
                            ※子猫がいない場合もありますので、あらかじめご了承ください。
                        </li>
                    </ul>
                </section>
            </div>

            <section class="neko-model__samples">
                <p class="neko-model__contact">
                    ご依頼やお問い合わせは<br>
                    <a href="<?php echo esc_url(home_url('/#INFORMATION')); ?>">『お問い合わせ』メール</a>からお願いいたします。
                </p>

                <h2 class="neko-model__sample-title">スタッフ撮影の見本はこちら↓</h2>

                <div class="neko-model__sample-grid">
                    <img src="<?php echo esc_url($wp_path); ?>/assets/img/neko-model/neko-model-1.jpg" alt="スタッフ撮影見本1">
                    <img src="<?php echo esc_url($wp_path); ?>/assets/img/neko-model/neko-model-2.jpg" alt="スタッフ撮影見本2">
                    <img src="<?php echo esc_url($wp_path); ?>/assets/img/neko-model/neko-model-3.jpg" alt="スタッフ撮影見本3">
                    <img src="<?php echo esc_url($wp_path); ?>/assets/img/neko-model/neko-model-4.jpg" alt="スタッフ撮影見本4">
                </div>
            </section>

            <section class="neko-model__movie">
                <div class="neko-model__movie-frame">
                    <iframe
                        src=""
                        title="ねこモデル撮影動画"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>
    </section>

</main>

<?php
get_template_part('./template/footer');
?>
