
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

const mySwiper=new Swiper('.swiper-container',{
  direction:'vertical',
  loop:true,

  pagination:{
    el:'.swiper-pagination',
    type:'bullets',
    clickable:true,
  },
  navigation:{
    nextEl:'.swiper-button-next',
    prevEl:'.swiper-button-prev',
  }
});
