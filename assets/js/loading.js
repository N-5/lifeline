

// barbajsをON にする
// PrefetchをON にする
$().ready(function(){
  Barba.Pjax.start();
  Barba.Prefetch.init();
  ls();
});

//Barba.js用トランジション設定
var FadeTransition = Barba.BaseTransition.extend({
  start: function() {
    //この関数は、遷移が開始されるとすぐに自動的に呼び出されます。
    
    //読み込みが終了し、古いページがフェードアウトするとすぐに、新しいページがフェードインします。
    Promise
      .all([this.newContainerLoading, this.fadeOut()])
      .then(this.fadeIn.bind(this));    
  },

  fadeOut: function() {
    
    $('#loader').removeClass('view-close');
    //this.oldContainerは古いコンテナのHTMLElementです。この場合はアニメーションでフェードアウトさせている。
    return $(this.oldContainer).animate({ opacity: 0 }).promise();
    
  },

  fadeIn: function() {
    var _this = this;
    //this.newContainerは、新しいコンテナのHTMLElementです。
    //この段階では、newContainerはDOM上にあります（barba-container内にあり、visibility：hiddenで囲まれています）。
    var $el = $(this.newContainer);
    $("#loader").addClass("view-close");
    $("body, html").animate({ scrollTop: 0 }, 0);
    //古いコンテナをdisplay:none;にした後、新しいコンテナに初期値を設定。
    $(this.oldContainer).hide();
    $el.css({
      visibility : 'visible',
      opacity : 0
    });

    $el.animate({ opacity: 1 }, 400, function() {
      //.done（）の記述で古いコンテナを自動的にDOMから削除。
      _this.done();
    });
  }

});
// returnに作ったトランジションを設定。
Barba.Pjax.getTransition = function() {
  return FadeTransition;
};

Barba.Dispatcher.on('transitionCompleted', function() {
  //ロードスクリプトを再度実行
  $(function(){
    ls();
  });
  // SPメニュー展開
  $('.header-menu').on('click',function(){
    $('.header-menu').toggleClass('is-active');
    $('.header').toggleClass('is-active');
  });
  $('.header-navsp a').on('click',function(){
    $('.header-menu').removeClass('is-active');
    $('.header').removeClass('is-active');
  });
  //SP固定メニュー展開
  $('.c-fixlist .js-panel').on('click',function(){
    $(this).toggleClass('is-active');
    $(this).next().toggle('is-active');
  });
  //FBを再描画
  if(!window.FB){
    var fbjs = document.createElement("script");
    fbjs.id = "facebook-jssdk";
    fbjs.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
    document.getElementsByTagName('body')[0].appendChild(fbjs);
  }else{
    $('.fb-like').attr('data-href', encodeURI(location.href));
    FB.XFBML.parse();
  }if(!window.FB){
    var fbjs = document.createElement("script");
    fbjs.id = "facebook-jssdk";
    fbjs.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
    document.getElementsByTagName('body')[0].appendChild(fbjs);
  }else{
    $('.fb-like').attr('data-href', encodeURI(location.href));
    FB.XFBML.parse();
  }
});

//Googleアナリティクスに情報を送る
//Barba.Dispatcher.on('initStateChange', function() {
//  if (typeof ga === 'function') {
//    ga('send', 'pageview', window.location.pathname.replace(/^\/?/, '/') + window.location.search);
//  }
//});


//新しいコンテナがロードされ、ラッパーに挿入された時。
Barba.Dispatcher.on('newPageReady', function(currentStatus, oldStatus, container, newPageRawHTML, rawHTML) {
  var head = document.head;
  var newPageRawHead = newPageRawHTML.match(/<head[^>]*>([\s\S.]*)<\/head>/i)[0];
  var newPageHead = document.createElement('head');
  newPageHead.innerHTML = newPageRawHead;
  
  var removeHeadTags = [ 
    "meta[name='keywords']"
    ,"meta[name='description']"
    ,"meta[property^='og']"
    ,"meta[name^='twitter']"
    ,"meta[itemprop]"
    ,"link[itemprop]"
    ,"link[rel='prev']"
    ,"link[rel='next']"
    ,"link[rel='canonical']"
  ].join(',');
  var headTags = head.querySelectorAll(removeHeadTags)
  for(var i = 0; i < headTags.length; i++ ){
    head.removeChild(headTags[i]);
  }
  var newHeadTags = newPageHead.querySelectorAll(removeHeadTags)

  for(var i = 0; i < newHeadTags.length; i++ ){
    head.appendChild(newHeadTags[i]);
  }

  
  return false;
});


