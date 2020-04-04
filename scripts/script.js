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
function send_to_cart(id,name,cost) {
    $.ajax({
        method:'POST',
        url:'../ajaxHandler/addToCart.php',
        success: function(){
          location.reload()
        },
        data:{
            id:id,
            name:name,
            cost:cost
        }
    })
}
function delete_in_cart(id) {
    $.ajax({
        method:'POST',
        url:'../ajaxHandler/deleteInCart.php',
        data:{
            id:id,
        }
    }).done(function () {
        location.reload();
    })
}
$('.input_cartproduct').on('change',function(a){
  a.target.parentElement.nextElementSibling.innerHTML = a.target.parentElement.previousElementSibling.innerHTML *  a.target.value
})
