<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=yes">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/barba.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script-min.js"></script>
<!-- wp_head -->
<?php wp_head(); ?>
<!-- ie -->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
<![endif]-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WJPRKJX');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJPRKJX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header id="header" class="header">
  <div class="c-container">
    <h1 class="header-sitename">
      <a href="<?php echo home_url(); ?>">
        <div class="disription">石川県 金沢市 福井県 福井市 富山県で<br>転職するならライフライン<span class="hide" style="font-size:0;">｜豊富な転職・求人情報で支援する金沢・福井最大級の求人転職サイト</span></div>
        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/LifeLine_sm_logo.svg" alt="株式会社ライフライン" class="logo-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/LifeLine_lg_logo.svg" alt="株式会社ライフライン" class="logo-lg"></div>
      </a>
    </h1>
    <div class="header-menu">
      <div class="header-menu_humbuger">
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <p class="menu"><span class="open">MENU</span><span class="close">CLOSE</span></p>
    </div>
    <div class="header-inquiry u-lg-max">
      <ul class="header-inquiry__text">
        <li class="item"><a href="<?php echo home_url(); ?>#info">事業所・店舗情報</a></li>
        <li class="item"><a href="<?php echo home_url(); ?>/client/">企業のご担当者様</a></li>
        <li class="item"><a href="tel:0120555807">お電話でのお問い合わせ</a></li>
      </ul>
      <div class="header-inquiry__tel"><a href="tel:0120555807">0120-555-807</a></div>
      <div class="header-inquiry__btn">
        <div class="c-button button-pen is-subscription"><a href="<?php echo home_url(); ?>/entry/">簡単1分応募</a></div>
        <div class="c-button is-contact"><a href="<?php echo home_url(); ?>/contact/">来社予約・転職相談</a></div>
        <div class="c-button is-speed"><a href="https://lifeline-lg.com/speedjobs/" target="_blank">
          <span class="jp">店舗型ご相談窓口</span><span class="en">Speed Jobs</span></a>
        </div>
      </div>
    </div>
    <nav class="header-gnav u-lg-max">
      <ul class="header-gnav__list">
        <li class="item"><a href="<?php echo home_url(); ?>/recruit/">転職・求人情報をさがす</a></li>
        <li class="item"><a href="<?php echo home_url(); ?>/cat_blog/feature/">求人特集</a></li>
        <li class="item"><a href="<?php echo home_url(); ?>/cat_recruit_way/regular/">正社員求人</a></li>
        <li class="item"><a href="<?php echo home_url(); ?>/cat_recruit_way/dispatch/">派遣求人</a></li>
      </ul>
    </nav>
  </div>
  <div class="header-navsp">
    <p class="navsp-entry">＼ まずは無料WEBエントリー ／</p>
    <?php get_template_part('components/c-btnArea'); ?>
    <div class="searchform c-searchform">
      <?php get_template_part('components/search-form'); ?>
    </div>
    <div class="navsp-list">
      <div class="item"><a href="<?php echo home_url(); ?>/recruit/">求人情報一覧</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/cat_blog/feature/">ピックアップ特集</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/cat_blog/news/">お知らせ</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/client/">求人掲載をお考えの企業様へ</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/privacy/">プライバシー・ポリシー</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></div>
    </div>
    <div class="navsp-sns">
      <div class="sns-fb"><a href="https://www.facebook.com/ishikawarecruit/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-sns1.png" alt="FOLLOW ME!"></a></div>
      <div class="sns-fb"><a href="https://line.me/R/ti/p/c7-u3URgu1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-sns2.png" alt="LINEで相談"></a></div>
    </div>
  </div>
</header>
<div id="barba-wrapper">
  <div class="barba-container">
    <div <?php body_class(); ?>>
    <?php if ( !is_home() && !is_front_page() ) : ?>
    <div class="c-breadcrumbs">
      <div class="c-container" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
      </div>
    </div>
    <?php endif; ?>
