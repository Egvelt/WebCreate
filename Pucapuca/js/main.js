//フェードイン
$(function(){ 
  $('.top img').hide();
  $('#jp').hide();
  $('#eg').hide(); 
  $('#logo').hide();
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
  $('.top img').eq(i).fadeIn(1000); //フェードインの時間
  $('#jp').eq(i).fadeIn(1000);
  $('#eg').eq(i).fadeIn(1000);
  $('#logo').eq(i).fadeIn(1000);
  i++; 
} 