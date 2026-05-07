// 通常のjs
document.addEventListener('DOMContentLoaded', function() {
    console.log("起動テスト");

    // ボタンのクリックイベント
    const button = document.getElementById('SitterButton1');
    button.addEventListener('click', function() {
        const content = document.getElementById('Sittercontent1');
        content.classList.toggle('active');
        console.log("クリック");
    });

    // トライアルボタンのクリックイベント
    const priceButton1 = document.getElementById('Price-Button2-1');
    priceButton1.addEventListener('click', function() {
        const content1 = document.getElementById('Price-Tablecontent2-1');
        const content2 = document.getElementById('Price-Tablecontent2-2');
        content1.classList.add('active');
        content2.classList.remove('active');
    });

    // ビジターボタンのクリックイベント
    const priceButton2 = document.getElementById('Price-Button2-2');
    priceButton2.addEventListener('click', function() {
        const content1 = document.getElementById('Price-Tablecontent2-1');
        const content2 = document.getElementById('Price-Tablecontent2-2');
        content2.classList.add('active');
        content1.classList.remove('active');
    });

    // 詳細を開くボタンのクリックイベント
    const openButton1 = document.getElementById('open-button1');
    openButton1.addEventListener('click', function() {
        const subtext1 = document.getElementById('subtext1');
        subtext1.classList.toggle('active');
        
        // ボタンのテキストを切り替える
        if (subtext1.classList.contains('active')) {
            this.textContent = '詳細を閉じる';
        } else {
            this.textContent = '詳細を開く';
        }
    });

    // 詳細を開くボタンのクリックイベント
    const openButton2 = document.getElementById('open-button2');
    openButton2.addEventListener('click', function() {
        const subtext2 = document.getElementById('subtext2');
        subtext2.classList.toggle('active');
        
        // ボタンのテキストを切り替える
        if (subtext2.classList.contains('active')) {
            this.textContent = '詳細を閉じる';
        } else {
            this.textContent = '詳細を開く';
        }
    });

});

window.addEventListener('load', () => {
    // 追加: 画面幅が700px以下なら何もしない
    if (window.innerWidth <= 700) return;

    const typebox = document.querySelector('#typebox1');
    const categorybox = document.querySelector('#categorybox1');
    console.log("起動テスト2");

    if (typebox && categorybox) {
        const updateHeight = () => {
            const typeboxHeight = typebox.offsetHeight;
            categorybox.style.height = `${typeboxHeight}px`;
        };

        const observer = new MutationObserver(updateHeight);
        observer.observe(typebox, { attributes: true, childList: true, subtree: true });

        updateHeight();
        window.addEventListener('resize', updateHeight);
    }
});