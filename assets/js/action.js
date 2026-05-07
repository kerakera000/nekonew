(function ($) {

    $(document).ready(function () {
    // SPheaderButton のクリックイベント
    $('#SPheaderButton').on('click', function () {
      // クラスの追加/削除をトグル
      $(this).toggleClass('open');
      $('#SPHEADER').toggleClass('open');
    });

    // SPheaderButtonLP のクリックイベント
    $('#SPheaderButtonLP').on('click', function () {
      // クラスの追加/削除をトグル
      $(this).toggleClass('open');
      $('#SPHEADERLP').toggleClass('open');
    });

  });


})(jQuery)

document.addEventListener('DOMContentLoaded', function() {

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        loop: true,
        breakpoints: {
            768: {
                slidesPerView: 5,
            }
        }
    });
    var swiper = new Swiper(".heroSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        loop: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },

            980: {
                slidesPerView: 3,
            }
        }
    });

    var swiper = new Swiper(".aboutSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        loop: true,
        breakpoints: {
            630: {
                slidesPerView: 3,
            },
            930: {
                slidesPerView: 4,
            }
        }
    });

    // Price-Buttonのクリックイベント処理を追加
    $('#Price-Button1').on('click', function() {
        $('#Price-Tablecontent1').show();
        $('#Price-Tablecontent2').hide();
        // ボタンのアクティブ状態を切り替え
        $(this).addClass('active');
        $('#Price-Button2').removeClass('active');
    });

    $('#Price-Button2').on('click', function() {
        $('#Price-Tablecontent2').show();
        $('#Price-Tablecontent1').hide();
        // ボタンのアクティブ状態を切り替え
        $(this).addClass('active');
        $('#Price-Button1').removeClass('active');
    });

    // 初期表示時は Price-Tablecontent1 を表示
    $('#Price-Tablecontent1').show();
    $('#Price-Tablecontent2').hide();
    $('#Price-Button1').addClass('active');

    // SNSボタンのクリックイベント処理を追加
    $('#SNS-button-item-instagram').on('click', function() {
        $('#SNS-items-instagram').show();
        $('#SNS-items-twitter').hide();
        // ボタンのアクティブ状態を切り替え
        $(this).addClass('active');
        $('#SNS-button-item-twitter').removeClass('active');
    });

    $('#SNS-button-item-twitter').on('click', function() {
        $('#SNS-items-twitter').show();
        $('#SNS-items-instagram').hide();
        // ボタンのアクティブ状態を切り替え
        $(this).addClass('active');
        $('#SNS-button-item-instagram').removeClass('active');
    });

    // 初期表示時はinstagramを表示
    $('#SNS-items-instagram').show();
    $('#SNS-items-twitter').hide();
    $('#SNS-button-item-instagram').addClass('active');

    // Sitterボタンのクリックイベント処理
    // $('#SitterButton1').on('click', function() {
    //     $('#Sittercontent1').toggleClass('active');
    // });

    // QA Items の初期表示とトグル機能
    const qaItems = document.querySelectorAll('#QA-Items .item');
    const moreButton = document.getElementById('QA-more-button');
    const initialDisplayCount = 4;

    // 初期表示時は4つ以降を非表示
    qaItems.forEach((item, index) => {
        if (index >= initialDisplayCount) {
            item.style.display = 'none';
        }
    });

    // もっと見るボタンのクリックイベント
    moreButton.addEventListener('click', function() {
        qaItems.forEach((item, index) => {
            if (index >= initialDisplayCount) {
                if (item.style.display === 'none') {
                    item.style.display = 'flex';
                    moreButton.textContent = '閉じる';
                } else {
                    item.style.display = 'none';
                    moreButton.textContent = 'その他よくある質問';
                }
            }
        });
    });

});