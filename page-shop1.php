<?php
/**
 * Template Name: 大宮黒猫店
 */
global $wp_path;
global $site_url;

$business_notice_image = function_exists('get_field') ? neko_get_image_url(get_field('shop_business_notice_image'), 'large') : '';
$event_notice_image = function_exists('get_field') ? neko_get_image_url(get_field('shop_event_notice_image'), 'large') : '';
$business_notice_image = $business_notice_image ?: $wp_path . '/assets/img/shop-info/Placeholder-image.png';
$event_notice_image = $event_notice_image ?: $wp_path . '/assets/img/shop-info/Placeholder-image.png';

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout">

    <div class="Access layout-content">
        <div class="inner-content">
            <h3 class="Access-content-title">
                店舗一覧
            </h3>
            <div class="Access-content">
                <div class="Access-itemimg">
                    <div class="titlebox">
                        <h3 class="title">
                            <img src="<?= $wp_path; ?>/assets/img/sozai/icon01.svg" alt="ShopInfo">
                            大宮黒猫店
                        </h3>
                        <img src="<?= $wp_path; ?>/assets/img/access/2.jpg" alt="ShopInfo">
                    </div>
                    <div class="titlebox">
                        <img src="<?= $wp_path; ?>/assets/img/access/access1.png" alt="ShopInfo">
                    </div>
                    
                </div>
                <div class="Access-itemtable">
                    <h3 class="title">
                        調整
                    </h3>
                    <table class="shop-info-table">
                        <tr>
                            <th>住所</th>
                            <td>〒330-0804<br>埼玉県さいたま市大宮区堀の内2丁目235-1</td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>048-606-3490</td>
                        </tr>
                        <tr>
                        <th>営業時間</th>
                            <td>
                                【平日】<br>
                                　13:00~19:00<br><br>
                                【土日祝】<br>
                                　10:00~19:00（１階）<br>
                                　11:00~19:00（２階）<br>
                                予約不要 （2Fの貸切部屋のみ予約可）<br>
                            </td>
                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td>木曜日</td>
                        </tr>
                        <tr>
                            <th>年齢制限 </th>
                            <td>特にありません。<br>
                                ただし小学生以下のお客様は保護者同伴が必要となります。<br>
                                ※1歳未満のお子様は料金が無料となります。
                            </td>
                        </tr>
                        <tr>
                            <th>予約制度</th>
                            <td>
                            ※HPまたはお電話にて承ります<br>（当日予約はお電話ください）<br>
                            ※混雑時は整理券をお渡しして再度ご来店いただく形となります。
                            </td>
                        </tr>
                        <tr>
                            <th>駐車場</th>
                            <td>あり<br>
                            アクセスは下記をご参照ください
                            </td>
                        </tr>
                        <tr>
                            <th>駐輪場</th>
                            <td>専用スペースはありませんが、店舗横に2～3台停められるスペースがあります。
                            </td>
                        </tr>
                    </table>
                    <div class="access-info">
                        <h3>＜公共交通機関をご利用の方＞</h3>
                        <ul>
                            <li>●大宮駅東口より 徒歩17分<br>
                                １大宮駅東口を出て、目の前の横断歩道を渡りすぐに左へ進む<br>
                                ２ドン・キホーテさんを通り過ぎて少し進んで右手側の一番街という商店街に入る<br>
                                ３商店街を抜けて目の前の横断歩道を渡り正面にある、焼き鳥みや田さん沿いに左に曲がり、一の宮通りを進む<br>
                                ４一の宮通り抜けると氷川神社入口の交差点が出てくるので、横断歩道を２つとも渡る<br>
                                ５道なり（清水園さんが右手）にまっすぐ進むとセブンイレブンさんが左斜め前に見える堀の内の交差点が出てくるのでそれも直進する<br>
                                ６堀の内交差点からは2,3分で右手側に出てくる大宮黒猫店に到着する<br><br>
                            </li>
                            <li>
                                ●堀の内バス停より 徒歩1分<br>
                                （東武バス・大50（大宮駅東口-宮下）宮下行　8乗り場<br>
                                【大宮駅東口/東武バス→堀の内/東武バス】堀の内バス停より徒歩1分
                            </li>
                        </ul>

                        <h3>＜お車をご利用の方＞</h3>
                        <ul>
                            <li>駐車場3台分有り</li>
                            ※Googlemapで『タイムズ大宮堀の内第5』とお調べいただき、そのタイムズさんの手前にある月極駐車場の左奥2つ<br>
                            （駐車場の壁に店舗の名前を貼ってあります。空いていなければ、申し訳ございませんが近隣のコインパーキングをご利用ください。）
                            </li>
                        </ul>

                        <h3>＜自転車をご利用の方＞</h3>
                        <ul>
                            <li>●駐輪場案内<br>
                            店舗右横の室外機の隣にお停めください。
                            </li>
                        </ul>

                        <h3>＜バイクをご利用の方＞</h3>
                        <ul>
                            <li>
                                店舗横には止めるスペースがないため、<br>
                                お客様用駐車場へお停めください。   
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="cycle-image">
                <img src="<?= $wp_path; ?>/assets/img/sozai/cycle03.png" alt="ShopInfo">
                <img src="<?= $wp_path; ?>/assets/img/access/parking02.png" alt="ShopInfo">
            </div>
        </div>
    </div>

    <div id="NEWS" class="News layout-content">
        <div class="inner-content">
            <h2 class="News__title">
                大宮黒猫店からのお知らせ
            </h2>
            <div class="News__content">
                <div class="others">
                    <div class="others__content">
                        <?php neko_render_info_links('oomiya', 3); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Info layout-content">
        <div class="Info__content">
            <h3 id="menu1" class="Info__title">
                営業時間のお知らせ
                <img src="<?php echo esc_url($business_notice_image); ?>" alt="営業時間のお知らせ">
            </h3>

            <h3 id="menu2" class="Info__title">
                イベント情報のお知らせ
                <img src="<?php echo esc_url($event_notice_image); ?>" alt="イベント情報のお知らせ">
            </h3>
        </div>
        <div class="Info__text-content">
            <p class="Info__text">
                詳しくは下記のリンクからチェック！
            </p>
            <a class="Info__link" href="#">URL(インスタ)</a>
            <a class="Info__link" href="#">URL(X)</a>
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div class="SNS layout-content">
        <div class="inner-content">
            <h2 class="commonH2 Title">
                SNS
                <img src="<?= $wp_path; ?>/assets/img/sozai/ul00.svg" alt="About">
            </h2>
            <div class="SNS-content">
                <h3 class="title">
                    猫ちゃんの活動を更新中！<br>
                    ぜひフォローしてね！
                </h3>
                <div class="SNS-button">
                    <button id="SNS-button-item-instagram" class="SNS-button-item">
                        Instagram
                    </button>
                    <button id="SNS-button-item-twitter" class="SNS-button-item">
                        X(旧Twitter)
                    </button>
                    <button id="SNS-button-item-line" class="SNS-button-item">
                        公式LINE
                    </button>
                </div>
                <div class="SNS-items">
                    <div id="SNS-items-instagram">
                        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                    </div>
                    <div id="SNS-items-twitter" style="max-height: 600px; overflow: scroll;">
                        <a class="twitter-timeline" href="https://twitter.com/cafeichigokuro?ref_src=twsrc%5Etfw">Tweets by cafeichigokuro</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div id="SNS-items-line">
                        <!-- LINE追加 -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div id="RESERVE" class="Reserve layout-content">
        <div class="inner-content">
            <h2 class="commonH2 Title">
                Reserve
                <img src="<?= $wp_path; ?>/assets/img/sozai/ul00.svg" alt="About">
            </h2>
            <div class="Reserve-content">
                <h3 class="title">
                    ご予約はこちら
                    <span class="sub-title">
                    ２Fのみご予約可能です。
                    </span>
                    <span class="sub-title">
                    ※180分ご利用されたい方は、1時間の枠を3枠ご予約をお願いいたします。<br>（例）13時から180分利用の場合→13時、14時、15時の3枠予約
                    </span>
                    <span class="sub-title">
                    ※当日のご予約は必ずお電話にてのご連絡をお願いいたします。
                    </span>
                </h3>
                <div class="Reserve-form">
                <?php echo do_shortcode('[booking_package id=1]'); ?>
                </div>
            </div>
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div id="" class="Reserve layout-content">
        <div class="inner-content">
            <h2 class="commonH2 Title">
                introduction
                <img src="<?= $wp_path; ?>/assets/img/sozai/ul00.svg" alt="About">
            </h2>

            <div class="Reserve-content">
                <h3 class="title">
                    ねこ紹介
                </h3>
                
                <div class="cat-cards">
                    <?php
                    $args = array(
                        'post_type' => 'cats',
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            array(
                                'key' => 'select_page',
                                'value' => 'oomiya',
                                'compare' => '='
                            )
                        )
                    );
                    
                    $cats_query = new WP_Query($args);
                    
                    if ($cats_query->have_posts()) :
                        while ($cats_query->have_posts()) : $cats_query->the_post();
                            $name = get_field('name');
                            $sex = neko_clean_select_value(get_field('sex'));
                            $neko_img = get_field('neko_img');
                            $birthday = get_field('birthday');
                    ?>
                        <div class="cat-card">
                            <div class="cat-image">
                                <?php if ($neko_img) : ?>
                                    <img src="<?php echo esc_url($neko_img['url']); ?>" alt="<?php echo esc_attr($name); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="cat-info">
                                <div class="cat-name-sex">
                                    <h4 class="cat-name"><?php echo esc_html($name); ?></h4>
                                    <?php if ($sex) : ?>
                                        <span class="cat-sex"><?php echo esc_html($sex); ?></span>
                                    <?php endif; ?>
                                </div>

                                <p class="cat-details">
                                    <?php if ($birthday) : ?>
                                        <span class="cat-birthday"><?php echo esc_html($birthday); ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="mark-content">
            <img src="<?= $wp_path; ?>/assets/img/neko/mark01.png" alt="黒猫">
        </div>
	</div>




</main>

<?php
get_template_part('./template/footer');
?>
