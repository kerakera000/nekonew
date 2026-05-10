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

    <img class="max-layoutimg" src="<?= $wp_path; ?>/assets/img/sozai/ul02.svg" alt="猫カフェいちご">

    <div id="NEWS" class="News layout-content">
        <div class="inner-content">
            <h2 class="News__title">
                猫カフェお知らせ一覧
            </h2>
            <div class="News__content">
                <div class="News__list monnthly">
                    <div class="News__cont-title"><?php echo date('n'); ?>月営業日のお知らせ</div>
                    <a class="shop" href="<?php echo home_url('/shop1/#menu1'); ?>">大宮黒猫店</a>
                    <a class="shop" href="<?php echo home_url('/shop2/#menu1'); ?>">川越クレアモール店</a>
                </div>

                <div class="News__list events">
                    <div class="News__cont-title">イベント情報のお知らせ</div>
                    <a class="shop" href="<?php echo home_url('/shop1/#menu2'); ?>">大宮黒猫店</a>
                    <a class="shop" href="<?php echo home_url('/shop2/#menu2'); ?>">川越クレアモール店</a>
                </div>

                <div class="others">
                    <div class="News__cont-title">その他のお知らせ</div>
                    <div class="others__content">
                        <?php neko_render_info_links('top', 3); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ABOUT" class="About layout-content">
        <div class="About-content">
            <h3 class="About-title">
                猫カフェいちごについて
            </h3>
            <img class="bg-img" src="<?= $wp_path; ?>/assets/img/sozai/bg00.svg" alt="About">
            <div class="swiper aboutSwiper About-images">
                <div class="swiper-wrapper">
                    <div class="swiper-slide image">
                        <img src="<?= $wp_path; ?>/assets/img/neko/10.jpg" alt="猫カフェいちご">
                    </div>
                    <div class="swiper-slide image">
                        <img src="<?= $wp_path; ?>/assets/img/neko/11.jpg" alt="About">
                    </div>
                    <div class="swiper-slide image">
                        <img src="<?= $wp_path; ?>/assets/img/neko/12.jpg" alt="About">
                    </div>
                    <div class="swiper-slide image">
                        <img src="<?= $wp_path; ?>/assets/img/neko/13.jpg" alt="About">
                    </div>
                </div>
            </div>
            <div class="About-text">
                <p class="text">
                普段の時間に少しの特別感を。<br>
                猫のいる空間で心温まるひとときをお過ごしください。<br><br>

                ねこカフェいちごでは保護された猫をねこスタッフとして迎え入れております。<br>
                どの子も責任をもって、感染症・寄生虫予防、健康管理など徹底して行っております。<br><br>

                人や環境に慣れるまでに時間のかかることの多い保護猫ですが、小さい頃から愛情をこめ、家族同然のように育てておりますので人慣れしている子が多いです。<br><br>

                ですので初めての方でも安心してお楽しみいただけます！<br><br>

                お客様には、ねこスタッフとのふれあいを通して猫への理解を深め、<br>
                もっと猫を好きになってもらいたいと思っております。<br><br>

                ぜひ、ねこスタッフ達に癒されに来てください！

                </p>
            </div>
        </div>
    </div>

    <img class="max-layoutimg" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div id="HOWTOUSE" class="HowToUse layout-content">
        <div class="inner-content">
            <h2 class="commonH2 Title">
                How to use
                <img src="<?= $wp_path; ?>/assets/img/sozai/ul00.svg" alt="About">
            </h2>
            <div class="HowToUse-content">
                <h3 class="HowToUse-title">
                    いちごの楽しみ方
                </h3>
                <div class="HowToUse-items">
                    <div class="item-img">
                        <img src="<?= $wp_path; ?>/assets/img/neko/14.jpg" alt="Menu">
                    </div>
                    <div class="item-content">
                        <h4 class="title">1.猫と遊ぶ</h4>
                        <p class="text">
                        ねこカフェいちごには若い猫が多く、遊ぶことやおやつが好きな子がたくさんいます。<br>
                        触れ合いはみんな大好きですし、抱っこできる子もいます！<br>
                        触り方や抱っこの仕方など、初めての方でもスタッフがサポートいたしますので、安心してご利用ください。
                        </p>
                    </div>
                </div>

                <div class="HowToUse-items reverse">
                    <div class="item-img">
                        <img src="<?= $wp_path; ?>/assets/img/neko/15.jpg" alt="Menu">
                    </div>
                    <div class="item-content">
                        <h4 class="title">2.ゆったりと過ごす</h4>
                        <p class="text">
                            大宮黒猫店の1階の天井には透明な床のキャットウォークがあります。<br>
                            ねこスタッフを下からのアングルで見られるので肉球や香箱座りの裏側など、普段撮れないような写真も撮れます！<br><br>

                            また大宮店の２階は予約可能の貸し切りスペースとなっており、<br>
                            ゆったりと過ごせる工夫もしております。<br>
                            ご家族・カップル・友人同士はもちろん、<br>
                            おひとり様でも人目を気にせずお過ごしいただけます。<br>
                            ２階のねこちゃんは、ご予約いただければお選びいただくことも可能ですので、<br>
                            ご希望のねこスタッフとお過ごしください。<br>
                            （休憩中や体調不良、ねこちゃん同士の相性などによって、<br>
                            ご希望に添えないことがございますので、予めご了承ください。）
                        </p>
                    </div>
                </div>

                <div class="youtube-content">
                    <p class="text">この動画を見るとわかりやすいです！</p>
                    <iframe src="https://www.youtube.com/embed/xLnUd9qetqg?si=U4wGNtLwpecljTOM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="HowToUse-items">
                    <div id="categorybox1" class="item-img">
                        <img src="<?= $wp_path; ?>/assets/img/neko/16.png" alt="Menu">
                    </div>
                    <div id="typebox1" class="item-content">
                        <h4 class="title">3.ねこグッズ</h4>
                        <p class="text">
                        ねこカフェいちごではそれぞれのねこスタッフの写真を使ったグッズを、多数ご用意しております。<br>
                        推しのねこスタッフができましたら、ぜひ帰り際にご覧ください！<br><br>
                        </p>
                    </div>
                </div>

                <div id="ONLINESHOP" class="onlineshop">
                    <h3 class="title">BASE(オンラインショップ)でも販売中！</h3>
                    <p class="text">
                    オンラインサイトでしか取り扱っていないねこカフェ商品も多数ございますので、ぜひご覧下さいませ。<br>
                    </p>
                    <a href="#" class="shop-link">オンラインショップはこちらへ</a>
                </div>
            </div>
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div id="PRICE" class="Price layout-content">
        <div class="inner-content">
            <h2 class="commonH2 Title">
                Price
                <img src="<?= $wp_path; ?>/assets/img/sozai/ul00.svg" alt="About">
            </h2>
            <div class="Price-content">
                <div class="inner800 center">
                    <div id="Price-Button1" class="Price-item">
                        <img src="<?= $wp_path; ?>/assets/img/sozai/icon01.svg" alt="ShopInfo">
                        <h3 class="title">大宮黒猫店</h3>
                    </div>
                    <!--<div id="Price-Button2" class="Price-item">
                        <img src="<?= $wp_path; ?>/assets/img/sozai/icon01.svg" alt="ShopInfo">
                        <h3 class="title">見沼茶トラ店</h3>
                    </div>-->
                </div>
            </div>
            <div id="Price-Tablecontent1" class="Price-Tablecontent">
                <h3 class="table-title">フリースペース</h3>
                <table class="price-table">
                    <thead>
                        <tr>
                        <th class="price-table__header">時間</th>
                        <th class="price-table__header">料金（大人）</th>
                        <th class="price-table__header">料金（小学生以下）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="price-table__cell">30分</td>
                        <td class="price-table__cell">¥1,320（税込）</td>
                        <td class="price-table__cell">¥1,100（税込）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">60分</td>
                        <td class="price-table__cell">¥1,980（税込）</td>
                        <td class="price-table__cell">¥1,320（税込）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">90分</td>
                        <td class="price-table__cell">¥2,420（税込）</td>
                        <td class="price-table__cell">¥1,650（税込）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">120分</td>
                        <td class="price-table__cell">¥3,520（税込）</td>
                        <td class="price-table__cell">¥2,420（税込）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">延長10分毎</td>
                        <td class="price-table__cell" colspan="2">¥308（税込）</td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="table-title">ゆったり貸切スペース</h3>
                <table class="price-table">
                    <thead>
                        <tr>
                        <th class="price-table__header">時間</th>
                        <th class="price-table__header">料金（大人）</th>
                        <th class="price-table__header">料金（小学生以下）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="price-table__cell">60分</td>
                        <td class="price-table__cell">¥2,200（税込）</td>
                        <td class="price-table__cell">¥1,650（税込）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">180分</td>
                        <td class="price-table__cell">¥4,180（税込）</td>
                        <td class="price-table__cell">¥2,200（税込）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">延長10分毎</td>
                        <td class="price-table__cell" colspan="2">¥308（税込）</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="price-list">
                    <li class="item">
                        ※1歳未満は無料となります
                    </li>
                    <li class="item">
                        ※お待ちのお客様がいる場合や、3時間でご利用の場合は延長できません。
                    </li>
                    <li class="item">
                    ※ワンドリンク制220円（税込）になります。
                    </li>
                    <li class="item">
                    ※キャッシュレス決済を推奨しております。ご協力よろしくお願いいたします。
                    </li>
                    <li class="item">
                    ※おやつは110円（税込）からご用意があります。
                    </li>
                </ul>
            </div>

            <div class="methods">
                <h3 class="methods__title">お支払い方法一覧</h3>
                <div class="methods__item">
                    <img src="<?= $wp_path; ?>/assets/img/price/method-credit.jpg" alt="image-1" class="image-1">
                    <img src="<?= $wp_path; ?>/assets/img/price/method-IC.jpg" alt="image-2" class="image-2">
                    <img src="<?= $wp_path; ?>/assets/img/price/method-IC2.png" alt="image-3" class="image-3">
                </div>
                <div class="methods__text">
                    <span class="text1">現金払い可</span>
                    <span class="text2">※キャッシュレス決済推奨</span>
                </div>
            </div>

            <!--<div id="Price-Tablecontent2" class="Price-Tablecontent">
                <table class="price-table">
                    <thead>
                        <tr>
                        <th class="price-table__header">時間</th>
                        <th class="price-table__header">料金（大人）</th>
                        <th class="price-table__header">料金（小学生以下）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="price-table__cell">30分</td>
                        <td class="price-table__cell">¥1,000（税抜）</td>
                        <td class="price-table__cell">¥700（税抜）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">60分</td>
                        <td class="price-table__cell">¥1,600（税抜）</td>
                        <td class="price-table__cell">¥1,000（税抜）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">90分</td>
                        <td class="price-table__cell">¥2,200（税抜）</td>
                        <td class="price-table__cell">¥1,300（税抜）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">120分~180分</td>
                        <td class="price-table__cell">¥3,000（税抜）</td>
                        <td class="price-table__cell">¥1,800（税抜）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">延長10分毎</td>
                        <td class="price-table__cell" colspan="2">¥250（税抜）</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
                <ul class="price-list">
                    <li class="item">
                        ※ミニおやつ　¥100
                    </li>
                    <li class="item">
                        ※おやつ　　　¥300
                    </li>
                    <li class="item">
                        ※特別おやつ　¥500
                    </li>
                </ul>
                <ul class="price-list">
                    <li class="item">
                        ※1歳未満は無料となります
                    </li>
                    <li class="item">
                    ※お待ちのお客様がいる場合や、3時間でご利用の場合は延長できません。
                    </li>
					<li class="item">
                        ※ワンドリンク制200円（税抜）になります。（試供ドリンクは無くなります。）
                    </li>
                </ul>
                <h3 class="table-title">2Fゆったり貸切スペース</h3>
                <table class="price-table">
                    <thead>
                        <tr>
                        <th class="price-table__header">時間</th>
                        <th class="price-table__header">料金（大人）</th>
                        <th class="price-table__header">料金（小学生以下）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="price-table__cell">60分</td>
                        <td class="price-table__cell">¥1,800</td>
                        <td class="price-table__cell">¥1,300</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">180分</td>
                        <td class="price-table__cell">¥3,600</td>
                        <td class="price-table__cell">¥2,000</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">延長10分毎</td>
                        <td class="price-table__cell" colspan="2">¥250</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">おやつ（数量限定）</td>
                        <td class="price-table__cell" colspan="2">¥300</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="price-list">
                    <li class="item">
                        ※11歳未満は無料となります
                    </li>
                    <li class="item">
                        ※2次のお客様がいる場合や、3時間でご利用の場合は延長できません。
                    </li>
                </ul>
            </div>-->
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div id="SHOPINFO" class="ShopInfo layout-content">
        <div class="inner-content">
            <h2 class="commonH2 Title">
                Shop Info
                <img src="<?= $wp_path; ?>/assets/img/sozai/ul00.svg" alt="About">
            </h2>
            <div class="ShopInfo-content">
                <div class="ShopInfo-images">
                    <h3 class="title">
                        お店の様子
                    </h3>
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
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

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="ShopInfo-textcontent">
                <h3 class="title">
                    ご利用時の注意事項
                </h3>
                <div class="ShopInfo-text">
                    <p class="text">
                       小学生以下（12歳以下）のお子様は保護者様の同伴が必要になります。<br>
						<span class="note">※中学生以上でもご利用の仕方に問題がある場合、または懸念される場合は保護者様の同伴をお願いする場合があります。</span><br>
抱っこは出来ますが、猫ちゃんが嫌がる様子があればすぐ離していただくようお願いしております。お子様による抱っこは極力ご遠慮いただいておりますが、猫が自分から膝に乗ってきた場合や、保護者様がお子様のお膝に載せてあげる場合は大丈夫です。<br>
                        皆様と猫達にとって快適で心地のいい空間となるようご理解ご協力の程、よろしくお願い申し上げます。

                    </p>
                    <ul class="list">
                        <li class="item">
                        <span>・</span> 食べ物持込禁止(蓋つきの飲み物は持込可能)
                        </li>
                        <li class="item">
                        <span>・</span> 猫ちゃんを撮影するときはフラッシュをOFFにしてください。
                        </li>
                        <li class="item">
                        <span>・</span> 写真や動画をSNS等に載せる際は他のお客様の顔などが映らないようにしてください。
                        </li>
                        <li class="item">
                        <span>・</span> 動物のアレルギーがある方は、必ず医師の指導の下、対策をしてから当店をご利用下さい。
                        入店によるアレルギー反応が生じた場合、当店は一切責任を負いません。
                        </li>
                        <li class="item">
                        <span>・</span> 猫等、室内設備等による怪我や衣類の損傷が生じた場合、当店は一切責任を負いません。
                        </li>
                        <li class="item">
                        <span>・</span> 他の動物、おもちゃの持ち込みは禁止させて頂いております。<br>
                            (新品のおもちゃの持ち込みは可能ですが、種類によってはご利用いただけない場合がございます。)
                        </li>
                        <li class="item">
                        <span>・</span> 匂いの強い香水のご使用はお控えください。
                        </li>
                        <li class="item">
                        <span>・</span> 入退室の際はアルコールによる消毒をお願いします。
                        </li>
                        <li class="item">
                        <span>・</span> 店内では必ず靴下をご着用ください。裸足で来られた方は使い捨てスリッパをご購入いただきます。
                        </li>
                        <li class="item">
                        <span>・</span> スタッフの注意を受け入れていただけない場合や、スタッフ、猫スタッフへの危険が及ぶと判断した場合は即退店していただきます。<br>
その際はご利用時間に満たしていない場合でも、ご案内時の料金でお支払いいただきます。<br>
							返金もできかねますのでご了承ください。
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div class="Access layout-content">
        <div class="inner-content">
            <h3 class="Access-content-title">
                店舗一覧
            </h3>
            <p class="Access-content-text">
                猫カフェ予約ページはこちら
            </p>
            <div class="Access-content">
                <div class="Access-itemimg flex">
                    <a href="<?= $site_url; ?>/index.php/shop1" class="titlebox top-shoplist">
                        <h3 class="title">
                            <img src="<?= $wp_path; ?>/assets/img/sozai/icon01.svg" alt="ShopInfo">
                            大宮黒猫店
                        </h3>
                        <img src="<?= $wp_path; ?>/assets/img/access/2.jpg" alt="ShopInfo">
                        <div class="link">
                          詳細ページ
                        </div>
                    </a>
                    <a href="<?= $site_url; ?>/index.php/shop2" class="titlebox">
                        <h3 class="title">
                            <img src="<?= $wp_path; ?>/assets/img/sozai/icon01.svg" alt="ShopInfo">
                            川越クレモアール店
                        </h3>
                        <img src="<?= $wp_path; ?>/assets/img/shop2/shop.jpg" alt="ShopInfo">
                        <div class="link">
                          詳細ページ
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">


            <!--<div id="Price-Tablecontent2" class="Price-Tablecontent">
                <table class="price-table">
                    <thead>
                        <tr>
                        <th class="price-table__header">時間</th>
                        <th class="price-table__header">料金（大人）</th>
                        <th class="price-table__header">料金（小学生以下）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="price-table__cell">30分</td>
                        <td class="price-table__cell">¥1,000（税抜）</td>
                        <td class="price-table__cell">¥700（税抜）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">60分</td>
                        <td class="price-table__cell">¥1,600（税抜）</td>
                        <td class="price-table__cell">¥1,000（税抜）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">90分</td>
                        <td class="price-table__cell">¥2,200（税抜）</td>
                        <td class="price-table__cell">¥1,300（税抜）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">120分~180分</td>
                        <td class="price-table__cell">¥3,000（税抜）</td>
                        <td class="price-table__cell">¥1,800（税抜）</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">延長10分毎</td>
                        <td class="price-table__cell" colspan="2">¥250（税抜）</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
                <ul class="price-list">
                    <li class="item">
                        ※ミニおやつ　¥100
                    </li>
                    <li class="item">
                        ※おやつ　　　¥300
                    </li>
                    <li class="item">
                        ※特別おやつ　¥500
                    </li>
                </ul>
                <ul class="price-list">
                    <li class="item">
                        ※1歳未満は無料となります
                    </li>
                    <li class="item">
                    ※お待ちのお客様がいる場合や、3時間でご利用の場合は延長できません。
                    </li>
					<li class="item">
                        ※ワンドリンク制200円（税抜）になります。（試供ドリンクは無くなります。）
                    </li>
                </ul>
                <h3 class="table-title">2Fゆったり貸切スペース</h3>
                <table class="price-table">
                    <thead>
                        <tr>
                        <th class="price-table__header">時間</th>
                        <th class="price-table__header">料金（大人）</th>
                        <th class="price-table__header">料金（小学生以下）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="price-table__cell">60分</td>
                        <td class="price-table__cell">¥1,800</td>
                        <td class="price-table__cell">¥1,300</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">180分</td>
                        <td class="price-table__cell">¥3,600</td>
                        <td class="price-table__cell">¥2,000</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">延長10分毎</td>
                        <td class="price-table__cell" colspan="2">¥250</td>
                        </tr>
                        <tr>
                        <td class="price-table__cell">おやつ（数量限定）</td>
                        <td class="price-table__cell" colspan="2">¥300</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="price-list">
                    <li class="item">
                        ※11歳未満は無料となります
                    </li>
                    <li class="item">
                        ※2次のお客様がいる場合や、3時間でご利用の場合は延長できません。
                    </li>
                </ul>
            </div>-->
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div class="QA layout-content">
        <div class="inner-content">
            <h2 class="commonH2 Title">
                Q&A
                <img src="<?= $wp_path; ?>/assets/img/sozai/ul00.svg" alt="About">
            </h2>
            <div class="QA-content">
                <h3 class="title">
                    よくある質問
                </h3>
                <div id="QA-Items" class="QA-items">
                    <div class="item">
                        <h4 class="title">Q.店内は裸足で入れますか？</h4>
                        <p class="text">
                            裸足での入店はできません。<br>
                            店内では必ず靴下をご着用ください。<br>
                            裸足で来られた方は使い捨てスリッパをご購入いただきます。
                        </p>
                    </div>
                    <div class="item">
                        <h4 class="title">Q.予約は必要ですか？</h4>
                        <p class="text">
                            予約は必要ありません。ただし、2階の貸切部屋は事前にご予約ができますので、土日祝などの混みやすい日はご予約をおすすめしております。
                            前日までのご予約は、HPの予約ページにて承ります。店舗からの承認メールが届きましたらご予約確定となります。
                            HPでのご予約は1か月前から承っております。
                            また、当日のご予約はお電話でのみ承っており、その際に空き状況などをご案内させていただきます。
                        </p>
                    </div>
                    <div class="item">
                        <h4 class="title">Q.駐車場や駐輪場はありますか？</h4>
                        <p class="text">
                        お車は『タイムズ大宮堀の内町第5』に3台停められます。
                        駐輪場はございませんが、店舗横に2～3台でしたら停められます。
                        詳しくは、店舗一覧よりご確認をお願いいたします。
                        </p>
                    </div>
                    <div class="item">
                        <h4 class="title">Q.年齢制限はありますか？</h4>
                        <p class="text">
                            年齢制限はございません。<br>
                            ただし、小学生以下のお子様がご利用の場合は、保護者様の同伴が必要となります。<br>
                        </p>
                    </div>

                    <div class="item">
                        <h4 class="title">Q.おやつやおもちゃの持ち込みはしていいですか？</h4>
                        <p class="text">
                            おやつは、ご持参されたものをその場で猫たちにあげることはできませんが、スタッフから猫たちへご飯の時間や定休日にご褒美として頂いたおやつをふるまわせていただきます。
                            おもちゃはまたたび付き以外でしたら、スタッフが現物を確認させていただき、問題なければ使用していただけます。
                            ただし、遊んでいる最中に壊れてしまう場合もございますので、あらかじめご了承ください。
                        </p>
                    </div>

                    <div class="item">
                        <h4 class="title">Q.現金でもお支払できますか？</h4>
                        <p class="text">
                            キャッシュレス決済を推奨しておりますが、現金でのお支払いも可能です。<br>
                            お会計の際はスタッフにお申し出ください。
                        </p>
                    </div>

                    <div class="item">
                        <h4 class="title">Q.食事はできますか？</h4>
                        <p class="text">
                        当店ではお食事の提供は行っておりません。
                        </p>
                    </div>

                    <div class="item">
                        <h4 class="title">Q.混雑する時間はありますか？</h4>
                        <p class="text">
                            休日の13時〜17時は比較的混雑しやすく、混雑状況によっては整理券をお配りし、指定のお時間に再来店していただく場合がございます。
                            混雑を避けてのご利用を希望の場合は、平日のご利用をおすすめしております。
                        </p>
                    </div>

                    <div class="item">
                        <h4 class="title">Q.車いすの人でも入店できますか？</h4>
                        <p class="text">
                        当店にバリアフリーの設備がないため、ご満足いただけるご利用の案内ができない可能性もございますが、事前にご連絡いただければ空いているお時間の案内や、車いすのままでも安心してご利用ができるようスタッフが付き添うなどの対応を検討いたしますので、1か月前など余裕をもってご連絡いただければと思います。
                        また、必ず補助をしてくださる方との同伴でのご利用をお願いいたします。
                        </p>
                    </div>

                    <div class="item">
                        <h4 class="title">Q.勉強や仕事をするために利用してもいいですか？</h4>
                        <p class="text">
                        2階の貸切部屋でしたら、勉強やリモートワークでご利用いただけます。
                        </p>
                    </div>
                </div>

                <div class="QA-more">
                    <button id="QA-more-button" class="more-link">
                        その他よくある質問
                    </button>
                </div>
            </div>
        </div>
    </div>

    <img class="max-layoutimg m50" src="<?= $wp_path; ?>/assets/img/sozai/ul05.svg" alt="猫カフェいちご">

    <div id="INFORMATION" class="Information layout-content">
        <div class="inner-content">
            <h2 class="commonH2 Title">
                Infomation
                <img src="<?= $wp_path; ?>/assets/img/sozai/ul00.svg" alt="About">
            </h2>
            <div class="Information-content">
                <div class="Information-form">
                    <h3 class="title">
                        お問い合わせ
                    </h3>
                    <form id="contact-form" class="wpcf7-form init" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeTL2LogtlQ3QPJr3NQqNSr2LJCFY7J_CBL7mBmZumP3BZi-g/formResponse" method="POST" target="hidden-iframe">
                        <div class="form">
                            <p>
                                <label>お名前<br>
                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="entry.594324727" required>
                                </label>
                            </p>
                            <p>
                                <label>メールアドレス<br>
                                    <input type="email" size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" name="entry.528124993" required>
                                </label>
                            </p>
                            <p>
                                <label>件名<br>
                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="entry.1191024705">
                                </label>
                            </p>
                            <p>
                                <label>お問い合わせ内容<br>
                                    <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea" name="entry.1841478543"></textarea>
                                </label>
                            </p>
                            <p class="submit-button">
                                <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="送信">
                                <span class="wpcf7-spinner"></span>
                            </p>
                        </div>
                        <!-- 送信完了メッセージ -->
                        <div id="success-message" style="display: none; background: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 5px; margin-top: 20px;">
                            <strong>送信完了</strong><br>
                            お問い合わせありがとうございます。内容を確認次第、ご連絡いたします。
                        </div>
                    </form>
                    <!-- 非表示のiframe -->
                    <iframe name="hidden-iframe" style="display: none;"></iframe>
                </div>
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('contact-form');
                const successMessage = document.getElementById('success-message');
                
                form.addEventListener('submit', function(e) {
                    // フォームを送信
                    setTimeout(function() {
                        // 送信完了メッセージを表示
                        successMessage.style.display = 'block';
                        // フォームをリセット
                        form.reset();
                        // ページトップにスクロール（オプション）
                        successMessage.scrollIntoView({ behavior: 'smooth' });
                    }, 1000); // 1秒後に実行
                });
            });
            </script>
            <p class="Information-text">※メールが届かないお客様へ<br>
            返信メールが迷惑フォルダへ着信している可能性があるため、予約登録後、<br>
            お客様の迷惑フォルダをご確認頂けますようお願い致します。<br>
            それでも、着信していない場合は、お手数ですが当店までお電話頂けますと幸いでございます。</p>
        </div>
    </div>
    

</main>

<?php
get_template_part('./template/footer');
?>
