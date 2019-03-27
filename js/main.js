$(function(){

  //スライダー
  //クラスslideの要素の幅だよ（marginは含まない）
  let slideWidth = $('.slide').outerWidth();
  //slideクラスが付いているdivの数（５）
  let slideNum = $('.slide').length;
  let slideWrapperWidth = slideWidth * slideNum;
  let currentSlide = 0;
  //全体のスライド横幅をcssで当てる
  $('.slide-wrapper').css('width',slideWrapperWidth);

  //次へボタンが押されたときの処理
  $('.next-slider').on('click',function(){
    //最後のスライドだった場合の処理
    if(currentSlide === slideNum - 1){
      //処理の停止
      return false;
    }
    currentSlide++;
    slide();
  });
  $('.prev-slider').on('click',function(){
    //最初のスライドだった場合の処理
    if(currentSlide === 0){
      //処理の停止
      return false;
    }
    currentSlide--;
    slide();
  });

  function slide(){
    //押せば強制スタートの為にstop()
    $('.slide-wrapper').stop().animate({
      left:currentSlide * -slideWidth
    });
  }


});

