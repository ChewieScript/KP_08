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

$('.add-to-cart').on('click',function (e) {
    jQuery('.'+e.target.classList[1]).css('display','block');
    $(".tytoknoall").append('<div class="blockall"></div>');
    $('.blockall').on('click',function (e) {
        console.log(2);
        $('.blockall').remove();
        $('.blockcentr').css('display','none');

    });
});
