
  document.addEventListener('DOMContentLoaded',function(){
  document.getElementById("menuButton").addEventListener("click",function(){
  this.classList.toggle("active");
  document.getElementById("nav").classList.toggle("active");
})
});

//const parentMenu = document.querySelectorAll(".menu>li>a");
//for(let i =0; i<parentMenu.length;i++){
  //parentMenu[i].addEventListener("click",funtion(){

    //this.nextElementSibling.classList.toggle("acttive");
  //})
//}
