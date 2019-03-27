$(function(){

  // トップページの画像スライド
  $('.slide-img').slick({
    accessibility: true,
    autoplay: true,
    autoplaySpeed: 2500,
    dots: true,
    fade: false,
  });


  // トグルメニュー
  $('.js-toggle').on('click',function(){
    $(this).toggleClass('on');
    $(this).siblings().slideToggle();
  });


});

