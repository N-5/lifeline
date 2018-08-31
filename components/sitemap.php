<?php
/**
 * sitemap.php
 */ ?>
<div class="footer-inner c-container">
  <div class="footer-nav">
    <h3 class="heading">求人情報<span>RECRUIT</span></h3>
    <div class="area">
      <div class="area-item">
        <div class="footer-nav-list">
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/recruit">新着求人</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-nav-list">
      <div class="area">
        <div class="area-item">
          <h4 class="name">地域別で求人をさがす</h4>
          <p class="title">石川県</p>
          <ul class="footer-nav-list__item item-col2">
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=kanazawa&post_job=&post_tag=">金沢市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=hakusan&post_job=&post_tag=">白山市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=nomi&post_job=&post_tag=">能美市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=komatsu&post_job=&post_tag=">小松市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=kaga&post_job=&post_tag=">加賀市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=石川県その他&post_job=&post_tag=">石川県その他</a></li>
          </ul>
        </div>
        <div class="area-item">
          <p class="title">福井県</p>
          <ul class="footer-nav-list__item item-col2">
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=fukuishi&post_job=&post_tag=">福井市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=sakai&post_job=&post_tag=">坂井市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=awar&post_job=&post_tag=">あわら市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=sabae&post_job=&post_tag=">鯖江市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=echizen&post_job=&post_tag=">越前市</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=福井県その他&post_job=&post_tag=">福井県その他</a></li>
          </ul>
        </div>
      </div>
      <div class="work">
        <h4 class="name">職種別で求人をさがす</h4>
        <div class="work-item">
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=製造&post_tag=">製造</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=軽作業（仕分け・ピッキング・検品）&post_tag=">軽作業（仕分け・ピッキング・検品）</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=接客・販売・サービス&post_tag=">接客・販売・サービス</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=営業&post_tag=">営業</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=医療・福祉・介護&post_tag=">医療・福祉・介護</a></li>
          </ul>
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=一般事務・営業事務・受付&post_tag=">一般事務・営業事務・受付</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=経理・財務・会計&post_tag=">経理・財務・会計</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=総務・人事・労務&post_tag=">総務・人事・労務</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=その他オフィスワーク&post_tag=">その他オフィスワーク</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=設計・施工管理（建築・土木）&post_tag=">設計・施工管理（建築・土木）</a></li>
          </ul>
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=開発・設計（電機・機械）&post_tag=">開発・設計（電気・機械）</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=生産管理・品質管理・生産技術&post_tag=">生産管理・品質管理・生産技術</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=クリエイティブ・デザイナー&post_tag=">クリエイティブ・デザイナー</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=it系（se・pg）&post_tag=">IT系（SE・PG）</a></li>
            <li><a href="<?php echo home_url(); ?>/?s=&post_area=&post_job=その他&post_tag=">その他</a></li>
          </ul>
        </div>
      </div>
      <div class="pickup">
        <h4 class="name">求人特集からさがす</h4>
        <!--<div class="pickup-item">
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/">土日休み&amp;正社員の求人特集</a></li>
          </ul>
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/">ものづくりのお仕事特集</a></li>
          </ul>
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/">未経験者OK！手に職がつくお仕事</a></li>
          </ul>
        </div>-->
      </div>
      <div class="feature">
        <h4 class="name">企業特集からさがす</h4>
        <!--<div class="feature-item">
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/">企業特集と同じ会社名が入ります。</a></li>
          </ul>
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/">NGKセラミックデバイス株式会社</a></li>
          </ul>
        </div>-->
      </div>
      <div class="about">
        <h3 class="heading">ライフラインについて<span>LIFE LINE</span></h3>
        <div class="about-item">
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
            <li><a href="http://lifeline-lg.com/speedjobs/" target="_blank">スピードジョブズ</a></li>
          </ul>
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/blog">お知らせ＆ブログ</a></li>
            <li><a href="<?php echo home_url(); ?>/cat_blog/recruiting-know-how">転職成功ノウハウ</a></li>
          </ul>
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
            <li><a href="<?php echo home_url(); ?>/entry">応募フォーム</a></li>
          </ul>
        </div>
      </div>
      <div class="menu">
        <h3 class="heading">サイトメニュー<span>MENU</span></h3>
        <div class="menu-item">
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/privacy">プライバシー・ポリシー</a></li>
          </ul>
          <ul class="footer-nav-list__item item-col1">
            <li><a href="<?php echo home_url(); ?>/sitemap">サイトマップ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-information">
      <div class="information-link"><a href="<?php echo home_url(); ?>/client"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer-infomationlink.jpg" alt="求人掲載をご希望の企業様へ"></a></div>
      <div class="information-text">
        <p class="subscript">お仕事探しのご相談、企業の採用担当者様</p>
        <p class="call"><a href="tel:0120555807">0120-555-807</a></p>
        <p class="time">営業時間 9:00〜18:00（土日をのぞく）</p>
        <p class="adress">
          <span>〒921-8013</span><br>
          <span>石川県金沢市新神田2丁目14番21号</span><br>
          TEL.076-291-8001 FAX.076-291-8010
        </p>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="logo"><a href="http://lifeholdings-lg.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer-logo.png" alt="LIFE LINE GROUP"></a></div>
      <p class="copyright">© 2018 LifeLine Co.,Ltd</p>
    </div>
  </div>
</div>