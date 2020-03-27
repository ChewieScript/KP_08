$(document).ready(function (){
let swiper = new Swiper('.swiper-container', {
    spaceBetween: 10,
    speed: 500,
    loop:true,
    observer:true,
    effect:'flip',
    flipEffect: {
      rotate: 30,
      slideShadows: false,
    },
    keyboard: {
      enabled: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      type: 'bullets',
    },
    autoplay:{
          delay:5000,
          disableOnInteraction:false,
      },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })});

$(document).ready(function(){

    $(".tytoknoall").click(function(){
    $(".blockcentr").slideToggle("2000");
    $(".blockall").remove();
  });
})
function modal(n){
  let img=$('.product-wrap img');
  let arr=$('.add-to-cart');
  console.log(arr.index(n));
  $(".blockcentr").slideToggle("2000");
  $('.blockcentr img').attr('src',img[arr.index(n)].src);
  if($("div").hasClass("blockall"))
  $(".blockall").remove();
  else
  $(".tytoknoall").append('<div class="blockall"></div>');
};