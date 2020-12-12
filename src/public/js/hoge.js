
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
