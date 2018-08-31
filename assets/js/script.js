function ls(){

/* script.js */
$(document).ready(function(){

/* loading */
var h = $(window).height();
$('#progress ,#progress-bar').height(h).css('display','block');
//CSSにも同じ記述が必要
$('#container').css('display','none');

$(window).load(function () { //全ての読み込みが完了したら実行
  $('#progress').delay(900).fadeOut(800);
  $('#progress-bar').delay(600).fadeOut(300);
  $('#container').css('display', 'block');
});
//10秒たったら強制的にロード画面を非表示

function stopload(){
  $('#container').css('display','block');
  $('#progress').delay(900).fadeOut(800);
  $('#progress-bar').delay(600).fadeOut(300);
}
setTimeout(stopload,10000);
  
  
var topBtn = $('.c-pagetop');    
topBtn.click(function () {
  $('body,html').animate({
    scrollTop: 0
  }, 500);
  return false;
});

/* ブレークポイント769pxで画像の切り替え */
var $setElem = $('.imgchange'), 
pcName = '_pc',
spName = '_sp',
replaceWidth = 769;
$setElem.each(function(){
  var $this = $(this);
  var windowWidth = window.innerWidth ? window.innerWidth: $(window).width();
  // if(windowWidth >= replaceWidth){
  //    $(this).attr('src',$this.attr('src').replace(".jpg","_sp.jpg"));
  //    $(this).attr('src',$this.attr('src').replace(".png","_sp.png"));
  //  $(this).attr('src',$this.attr('src').replace(".gif","_sp.gif"));
  // }else{
  //    $(this).attr('src',$this.attr('src').replace(".jpg","_pc.jpg"));
  //    $(this).attr('src',$this.attr('src').replace(".png","_pc.png"));
  //    $(this).attr('src',$this.attr('src').replace(".gif","_pc.gif"));
  // }
  function imgSize(){
    var windowWidth = window.innerWidth ? window.innerWidth: $(window).width();
    if(windowWidth >= replaceWidth) {
      $this.attr('src',$this.attr('src').replace(spName,pcName)).css({visibility:'visible'});
    } else if(windowWidth < replaceWidth) {
      $this.attr('src',$this.attr('src').replace(pcName,spName)).css({visibility:'visible'});
    }
  }
  $(window).resize(function(){
    imgSize();
  });
  imgSize();
});

/* PC マウスオーバー時のフェード */
$('.over').stop().fadeTo(0,1.0);
$('.over').stop().hover(function(){
  $(this).stop().fadeTo(300,0.7);
}, function(){
  $(this).stop().fadeTo(300,1.0);
});

/* ページトップ */
$(window).scroll(function(){
  var st = $(window).scrollTop();
  if( st > 100 ){
    $('.c-pagetop').fadeIn();
    
  }else{
    $('.c-pagetop').fadeOut();
    
  }
});
$(window).scroll(function(){
  var sm = $(window).scrollTop();
  if( sm > 60 ){
    $('.header').addClass('is-scroll');
  }else{
    $('.header').removeClass('is-scroll');
  }
});
var start_pos = 0;
$(window).scroll(function(e){
  var current_pos = $(this).scrollTop();
  if (current_pos > start_pos) {
    $('.c-fixlist').removeClass('is-active');
  } else {
    $('.c-fixlist').addClass('is-active');
  }
  start_pos = current_pos;
});

/* アンカーにアニメートする */
$('a[href^=#]').click(function() {
 var speed = 400;
 var href= jQuery(this).attr("href");
 var target = jQuery(href == "#" || href == "" ? 'html' : href);
 var position = target.offset().top;
 jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
 return false;
});

/* PCのみ「tel」プロトコルが指定されたaタグを削除する */
var ua = navigator.userAgent;
if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
    $('.telhref span').each(function(){
        $(this).unwrap();
    });
}

/* nav settings */
$(function(){

  // ブラウザサイズチェック関数
  function checkSP(){
    var bp = 1024; //ブレイクポイント
    var x = $(window).width(); //ウインドウサイズ取得
    if( x < bp) return true;
  }

  // SPメニュー展開
  $('.header-menu').on('click',function(){
    $('.header-menu').toggleClass('is-active');
    $('.header').toggleClass('is-active');
  });

  // SPメニュー内アコーディオン
  $(".eventMenu").on('click', function() {
    if(checkSP()) $(this).next().stop().slideToggle().toggleClass("active");
  });

  // ブラウザサイズ可変時初期化処理
  $(window).on('resize',function(){
    if(!checkSP()) {
      $('.gnav').show(); //メニュー表示
      $('.menu').removeClass('open'); //クラス解除
      $('.eventMenu__sub').css({'display': 'block'}); //サブメニュー表示
    } else {
      $('.gnav').hide(); //メニュー非表示
      $('.menu').removeClass('open'); //クラス解除
      $('.eventMenu__sub').css({'display': 'none'}); //サブメニュー表示
    }
  });
});
$(window).scroll(function(){
  var wScroll = $(window).scrollTop();
  var pageHeight = $(window).height() - 1;
  $('.land').each(function(){
    var thisOffset = $(this).offset().top - pageHeight + 50;
    if( wScroll >  thisOffset ){
      $(this).addClass('ready');
    }
  });
});

//FB
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//document.ready
});
  
//loading script
};