document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggleButton');  // ボタンの要素
    const talkDivs = document.querySelectorAll('.talk > div');
    // ボタンをクリックしたときに左右を逆転する処理
    toggleButton.addEventListener('click', function () {
        // `right`クラスを持つ全ての要素を取得し、`left`クラスに置き換える
        talkDivs.forEach(div => {
            if(div.classList.contains('right')){
                div.classList.remove('right');
                div.classList.add('left');
            }
            else if(div.classList.contains('left')){
                div.classList.remove('left');
                div.classList.add('right');
            }
        });
    });
});