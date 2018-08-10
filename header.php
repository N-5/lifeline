<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=yes">
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/barba.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

<!-- wp_head -->
<?php wp_head(); ?>
<!-- ie -->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
<![endif]-->
<!-- googleAnalytics -->
</head>
<body>
<noscript>
  <div class="noscript">サイトを快適に利用するためには、JavaScriptを有効にしてください。</div>
</noscript>
<header id="header" class="header">
  <div class="c-container">
    <h1 class="header-sitename">
      <a href="<?php echo home_url(); ?>">
        <div class="disription">石川県・福井県・富山県の転職なら<br>ライフラインの求人転職サイト</div>
      <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="株式会社ライフライン" class="logo-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-lg.png" alt="株式会社ライフライン" class="logo-lg"></div>
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
        <li class="item"><a href="<?php echo home_url(); ?>/kigyo">企業のご担当者様</a></li>
        <li class="item"><a href="tel:0120555807">お電話でのお問い合わせ</a></li>
      </ul>
      <div class="header-inquiry__tel"><a href="tel:0120555807">0120-555-807</a></div>
      <div class="header-inquiry__btn">
        <div class="c-button button-pen is-subscription"><a href="<?php echo home_url(); ?>/entry">簡単1分応募</a></div>
        <div class="c-button is-contact"><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></div>
        <div class="c-button is-speed"><a href="http://lifeline-lg.com/speedjobs/" target="_blank"><span class="jp">店舗型ご相談窓口</span><span class="en">Speed Jobs</span></a></div>
      </div>
    </div>
    <nav class="header-gnav u-lg-max">
       <ul class="header-gnav__list">
         <li class="item"><a href="<?php echo home_url(); ?>/recruit">転職・求人情報をさがす</a></li>
         <li class="item"><a href="<?php echo home_url(); ?>/cat_blog/feature" class="">求人特集</a></li>
         <li class="item"><a href="<?php echo home_url(); ?>?s=&post_area=&post_job=&post_tag=正社員求人" class="">正社員のお仕事</a></li>
         <li class="item"><a href="<?php echo home_url(); ?>?s=&post_area=&post_job=&post_tag=派遣求人" class="is-current">派遣のお仕事</a></li>
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
      <div class="item"><a href="<?php echo home_url(); ?>/recruit">求人情報一覧</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/feature">お役立ち情報</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/cat_blog/news">お知らせ</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/keisai">求人掲載をお考えの企業様へ</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/privacty">プライバシー・ポリシー</a></div>
      <div class="item"><a href="<?php echo home_url(); ?>/sitemap">サイトマップ</a></div>
    </div>
    <div class="navsp-sns">
      <div class="sns-fb"><a href="https://www.facebook.com/ishikawarecruit/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-sns1.png" alt=""></a></div>
      <div class="sns-fb"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-sns2.png" alt=""></a></div>
    </div>
  </div>
</header>
<div id="barba-wrapper">
  <div class="barba-container">

