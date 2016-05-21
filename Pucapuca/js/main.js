//フェードイン
$(function(){ 
  $('.container').hide();
  $('#menu').hide();
}); 

var i = 0; 
var int=0; 

$(window).bind("load", function() { 
  var int=setInterval("doFade(i)",500); //読み込む時間を指定
}); 

function doFade() { 
  var list = $('.top img').length; 
  if (i >= list) { 
      clearInterval(int); 
  } 
  $('.container').eq(i).fadeIn(2000); //フェードインの時間
  $('#menu').eq(i).fadeIn(2000);
  i++; 
}

$(function() {
	setTimeout(function() {
		for(var i=1; i<=2; i++) {
			setInterval( "slideShow(" + i + ")", 4000 ); 
		}
  },1500);
});

/* SlideShow */
function slideShow(i) {
   var $active = $('#photo' + i + ' img.active');

   if ( $active.length == 0 ) $active = $('#photo' + i + ' img:last');

   var $next =  $active.next().length ? $active.next()
      : $('#photo' + i + ' img:first');

   $active.addClass('last-active')
   		.animate({opacity: 0.0},1500);

   $next.css({opacity: 0.0})
      .addClass('active')
      .animate({opacity: 1.0}, 1500, function() {

        $active.removeClass('active last-active');
      });
}