'use strict';

(function($){
  // トップへのスムーズスクロール
  $('a[href^="#"]').click(function(event){
    var id = $(this).attr('href');
    var target = $(id).offset().top;
    $('html, body').animate({scrollTop:target}, 700);
    event.preventDefault();
  });

  // フッターのナビゲーションのプルダウンメニュー（スマートフォンサイズ）
  $(window).on('load resize', function(){
    if(768 > $(window).width()){
      $('.footer-nav .list-group').css('display','none');
      $('.footernav-title').on('click',function(){
        $(this).next('.list-group').not(':animated').slideToggle();
      });
    }else{
      $('.footer-nav .list-group').css('display','block');
    }
  });
})(jQuery);
