
document.addEventListener('DOMContentLoaded',function(){
  document.getElementById("menuButton").addEventListener("click",function(){
  this.classList.toggle("active");
  document.getElementById("nav").classList.toggle("active");
})
});

function jinjya(){
  document.getElementById("input_message").value="神社・寺";
}
function miyage(){
  document.getElementById("input_message").value="お土産";
}
function hotel(){
  document.getElementById("input_message").value="宿";
}



let mySwiper = new Swiper ('.swiper-container', {
  loop: true, //最後に達したら先頭に戻る

  pagination: {
    el: '.swiper-pagination', //ページネーションの要素
    type: 'bullets', //ページネーションの種類
    clickable: true, //クリックに反応させる
  },

  navigation: {
    nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
  },

  scrollbar: {
    el: '.swiper-scrollbar', //要素の指定
  },
})