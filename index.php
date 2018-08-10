<?php get_header(); ?>
<main>
  <div id="index" class="main">
    <section class="visual">
     <div class="hero">
       <picture>
         <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/hero_sp.jpg">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/hero_pc.jpg" alt="">
       </picture>
     </div>
      <div class="searchform c-searchform">
        <div class="searchform-heading">求人を探す</div>
        <?php get_template_part('components/search-form'); ?>
      </div>
    </section>
    <section class="banner">
      <div class="banner-inner c-container">
        <div class="banner-list">
          <div class="banner-item"><a href="http://lifeline-lg.com/speedjobs/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/banner-banner-item1.jpg" alt="新着求人をチェック"></a></div>
          <div class="banner-item"><a href="<?php echo home_url(); ?>/recruit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/banner-banner-item2.jpg" alt="speed Jobs"></a></div>
        </div>
      </div>
    </section>
    <section class="anchor c-anchor">
      <div class="anchor-inner">
        <ul class="anchor-list">
          <li class="anchor-item"><a href="#recommend">おすすめ求人リスト</a></li>
          <li class="anchor-item"><a href="#feature">求人特集</a></li>
          <li class="anchor-item"><a href="#knowhow">就職・転職ノウハウ集</a></li>
          <li class="anchor-item"><a href="#info">事務所・店舗情報</a></li>
        </ul>
      </div>
    </section>
    <section id="recommend" class="recommend">
      <div class="recommend-inner c-container">
        <div class="c-section-title">
          <h2 class="heading">おすすめ求人リスト</h2>
          <p class="lead">ダミーです。今一押しの人気求人情報をまとめました。おすすめの本文が入ります。</p>
        </div>
        <div class="c-recruitList">
          <?php
          $loop = new WP_Query (array(
            'post_type'			=> 'recruit',
            'order'				=> 'DESC',
            'posts_per_page'	=> 6,
            'offset' => 2
          ));
          while ($loop -> have_posts()) : $loop -> the_post();
          ?>
          <?php get_template_part('components/recruit-list'); ?>
          <?php endwhile; ?>
        </div>
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/recruit">求人情報一覧</a></div>
      </div>
    </section>
    <section id="feature" class="feature">
      <div class="feature-inner c-container">
        <div class="c-section-title">
          <h2 class="heading">求人特集</h2>
          <p class="lead">ダミーです。会社の企業理念や、社内環境、待遇など、会社で選びたい方向けに、素敵な企業をピックアップしました。</p>
        </div>
        <div class="feature-banner">
          <ul class="feature-banner-list">
            <?php
            $args = array(
              'post_type' => 'blog',
              'posts_per_page' => 4,
              'tax_query' => array(
                array(
                  'taxonomy' => 'cat_blog',
                  'field' => 'slug',
                  'terms' => 'feature_recruit'
                )
              )
            );
            $domestic_post = get_posts($args);
            if($domestic_post) : foreach($domestic_post as $post) : setup_postdata( $post ); ?>
            <li class="feature-banner-item" style="background-image:url('<?php the_field('feature_thumb_pc'); ?>);">
              <a href="<?php the_permalink(); ?>">
                <p class="heading"><?php the_field('feature_company'); ?>
                  <span>
                    <?php if(mb_strlen($post->post_title, 'UTF-8')>36){
                      $title= mb_substr($post->post_title, 0, 18, 'UTF-8');
                      echo $title.'...';
                    }else{
                      echo $post->post_title;
                    } ?>
                  </span></p>
              </a>
            </li>
            <?php endforeach; ?>
            <?php else : ?>
            <?php endif;
            wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/cat_blog/feature_recruit/">ピックアップ求人情報</a></div>
      </div>
    </section>
    <section id="feature" class="feature">
      <div class="feature-inner c-container">
        <div class="c-section-title">
          <h2 class="heading">企業特集</h2>
          <p class="lead">ダミーです。会社の企業理念や、社内環境、待遇など、会社で選びたい方向けに、素敵な企業をピックアップしました。</p>
        </div>
        <div class="feature-banner">
          <ul class="feature-banner-list">
            <?php
            $args = array(
              'post_type' => 'blog',
              'posts_per_page' => 4,
              'tax_query' => array(
                array(
                  'taxonomy' => 'cat_blog',
                  'field' => 'slug',
                  'terms' => 'feature-company'
                )
              )
            );
            $domestic_post = get_posts($args);
            if($domestic_post) : foreach($domestic_post as $post) : setup_postdata( $post ); ?>
            <li class="feature-banner-item" style="background-image:url('<?php the_field('feature_thumb_pc'); ?>);">
              <a href="<?php the_permalink(); ?>">
                <p class="heading"><?php the_field('feature_company'); ?>
                <span>
                  <?php if(mb_strlen($post->post_title, 'UTF-8')>36){
                    $title= mb_substr($post->post_title, 0, 18, 'UTF-8');
                    echo $title.'...';
                  }else{
                    echo $post->post_title;
                  } ?>
                </span></p>
              </a>
            </li>
            <?php endforeach; ?>
            <?php else : ?>
            <?php endif;
            wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/cat_blog/feature-company/">企業特集一覧</a></div>
      </div>
    </section>
    <section id="knowhow" class="knowhow">
      <div class="c-section-title">
        <h2 class="heading">就職・転職のプロが教える<br class="u-lg">就職・転職ノウハウ集</h2>
        <p class="lead">応募したい企業は見つかりましたか？エントリーしたら、さっそく応募に備えましょう。履歴書や面接などの明日から使えるノウハウを多数掲載！</p>
      </div>
      <div class="knowhow-inner c-container">
        <h3 class="c-block-title">面接について</h3>
        <div class="knowhow-post">
          <div class="knowhow-block">
            <div class="knowhow-post__pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/knowhow_img_1.jpg" alt=""></div>
            <div class="knowhow-post__text">
              転職の面接でよくある質問とプロの回答例をご紹介。転職面接で定番の「自己紹介」「自己PR」などの質問から、面接の序盤・中盤・終盤などシーン別のよくある質問、年代、キャリア別のよくある質問などを網羅。想定問答から、採用担当者の質問の意図と回答例や、面接時のマナーなども学べる面接対策の決定版です。
            </div>
          </div>
          <h3 class="knowhow-post__title">自己紹介でよくある質問</h3>
          <div class="knowhow-post__question">
            <h4>「自己紹介をお願いします。」</h4>
            <p>
              先に自由な自己紹介を求められる場合も多くあります。<br>
              この時、企業の担当者が知りたい事はなんでしょうか？<br>
              応募者の第一印象やコミニケーション能力、自社で活躍するイメージも見ています。<br><br>
              企業で生かせるあなた自身の職務経験を簡潔に答えられるようにしておきましょう。<br>
              ・氏名<br>
              ・職務経歴<br>
              ・応募企業で活かせるポイント<br>
            </p>
          </div>
          <div class="knowhow-post__answer">
            <h4>【回答例】</h4>
            <p>
              ダミーです。（他社サイトから引用しています）<br>
              毎日太郎と申します。<br>
              前職では、飲料メーカーのマーケティング職としてキャンペーンの企画やランディングページのディレクションに携わってまいりました。「◯◯キャンペーン」では前年比120％の応募数を獲得し、社内表彰を受賞しました。<br>
              今後は、自社のマーケティングだけでなく、幅広い業種のマーケティングに挑戦していきたいと思い、キャンペーン企画を強みに多様な企業をクライアントとして持つ御社に応募させていただきました。本日はどうぞよろしくお願いいたします。
            </p>
          </div>
          <div class="knowhow-blog">
            <ul class="knowhow-blog-list">
              <?php
              $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 4,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'cat_blog',
                    'field' => 'slug',
                    'terms' => 'recruiting-know-how'
                  )
                )
              );
              $domestic_post = get_posts($args);
              if($domestic_post) : foreach($domestic_post as $post) : setup_postdata( $post ); ?>
              <li class="knowhow-blog-list__item">
                <a href="<?php the_permalink(); ?>">
                  <figure class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/sample.jpg" alt=""></figure>
                  <p class="title">
                    <time class="time"><span><?php the_time('Y年n月j日'); ?></span></time>
                    <?php if(mb_strlen($post->post_title, 'UTF-8')>30){
                      $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title.'...';
                    }else{
                      echo $post->post_title;
                    } ?>
                  </p>
                </a>
              </li>
              <?php endforeach; ?>
              <?php else : ?>
              <li class="knowhow-blog-list__item">表示する記事がありません。</li>
              <?php endif;
              wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
        <div class="c-button button-type-list"><a href="">身だしなみについての記事一覧</a></div>
      </div>
      <div class="knowhow-inner c-container">
        <h3 class="c-block-title">身だしなみについて</h3>
        <div class="knowhow-post">
          <div class="knowhow-block">
            <div class="knowhow-post__pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/knowhow_img_1.jpg" alt=""></div>
            <div class="knowhow-post__text">
              転職の面接でよくある質問とプロの回答例をご紹介。転職面接で定番の「自己紹介」「自己PR」などの質問から、面接の序盤・中盤・終盤などシーン別のよくある質問、年代、キャリア別のよくある質問などを網羅。想定問答から、採用担当者の質問の意図と回答例や、面接時のマナーなども学べる面接対策の決定版です。
            </div>
          </div>
          <h3 class="knowhow-post__title">自己紹介でよくある質問</h3>
          <div class="knowhow-post__question">
            <h4>「自己紹介をお願いします。」</h4>
            <p>
              先に自由な自己紹介を求められる場合も多くあります。<br>
              この時、企業の担当者が知りたい事はなんでしょうか？<br>
              応募者の第一印象やコミニケーション能力、自社で活躍するイメージも見ています。<br><br>
              企業で生かせるあなた自身の職務経験を簡潔に答えられるようにしておきましょう。<br>
              ・氏名<br>
              ・職務経歴<br>
              ・応募企業で活かせるポイント<br>
            </p>
          </div>
          <div class="knowhow-post__answer">
            <h4>【回答例】</h4>
            <p>
              ダミーです。（他社サイトから引用しています）<br>
              毎日太郎と申します。<br>
              前職では、飲料メーカーのマーケティング職としてキャンペーンの企画やランディングページのディレクションに携わってまいりました。「◯◯キャンペーン」では前年比120％の応募数を獲得し、社内表彰を受賞しました。<br>
              今後は、自社のマーケティングだけでなく、幅広い業種のマーケティングに挑戦していきたいと思い、キャンペーン企画を強みに多様な企業をクライアントとして持つ御社に応募させていただきました。本日はどうぞよろしくお願いいたします。
            </p>
          </div>
          <div class="knowhow-blog">
            <ul class="knowhow-blog-list">
              <?php
              $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 4,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'cat_blog',
                    'field' => 'slug',
                    'terms' => 'recruiting-know-how'
                  )
                )
              );
              $domestic_post = get_posts($args);
              if($domestic_post) : foreach($domestic_post as $post) : setup_postdata( $post ); ?>
              <li class="knowhow-blog-list__item">
                <a href="<?php the_permalink(); ?>">
                  <figure class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/sample.jpg" alt=""></figure>
                  <p class="title">
                    <time class="time"><span><?php the_time('Y年n月j日'); ?></span></time>
                    <?php if(mb_strlen($post->post_title, 'UTF-8')>30){
                      $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title.'...';
                    }else{
                      echo $post->post_title;
                    } ?>
                  </p>
                </a>
              </li>
              <?php endforeach; ?>
              <?php else : ?>
              <li class="knowhow-blog-list__item">表示する記事がありません。</li>
              <?php endif;
              wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
        <div class="c-button button-type-list"><a href="">身だしなみについての記事一覧</a></div>
      </div>
    </section>
    <section id="about" class="about">
      <div class="about-inner c-container">
        <div class="c-section-title title_type_left">
          <h2 class="heading">このサイトは<br class="u-lg">株式会社ライフラインが運営する就職・転職サイトです</h2>
        </div>
        <div class="about-info">
          <p class="text">ライフラインの運営する転職求人サイトでは、<br class="u-lg-max">
            金沢を始めとした北陸（石川県・福井県・富山県）の<br class="u-lg-max">
            厳選した求人転職情報を毎週更新しております。<br class="u-lg-max">
            また、こちらに掲載している求人に関してのご相談は、<br class="u-lg-max">
            お電話、エントリー、お問い合わせフォームの他に、<br class="u-lg-max">
            お近くの事業所やSpeed Jobs店舗でも<br class="u-lg-max">
            受け付けております。
          </p>
          <figure class="picture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/about-picture.jpg" alt=""></figure>
        </div>
      </div>
    </section>
    <section id="info" class="info">
      <div class="info-inner c-container">
        <div class="info-company">
          <div class="c-section-title title_type_left">
            <h2 class="heading">事務所・店舗情報</h2>
          </div>
          <div class="info-company-list">
            <div class="info-company-list__item">
              <div class="name">本社<div class="map"><a href="https://goo.gl/maps/eDWTcejevkm" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/info-company.jpg" alt=""></figure>
                <p>〒921-8013<br>
                  石川県金沢市新神田2丁目14番21号<br>
                  <a href="tel:0762918001">TEL：076-291-8001</a><br>
                  FAX：076-291-8010<br>
                </p>
              </div>
            </div>
            <div class="info-company-list__item">
              <div class="name">福井支社<div class="map"><a href="https://goo.gl/maps/PrT85wZfCV22" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <p>
                  〒910-0837<br>
                  福井県福井市高柳1丁目708番地　レリアン103<br>
                  <a href="tel:0776433000">TEL：0776-43-3000</a><br>
                  FAX：0776-43-3100<br>
                </p>
              </div>
            </div>
            <div class="info-company-list__item">
              <div class="name">スピードジョブス金沢店<div class="map"><a href="https://goo.gl/maps/LQFC9APmzE92" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <p>
                  〒921-8801<br>
                  石川県野々市市御経塚二丁目91番地　2階210−03区画<br>
                  <a href="tel:0762595190">TEL：076-259-5190</a><br>
                    FAX：076-259-5191<br>
                </p>
              </div>
            </div>
            <div class="info-company-list__item">
              <div class="name">スピードジョブス小松店<div class="map"><a href="https://goo.gl/maps/6ZGUx2R1fAo" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <p>
                  〒923-8585<br>
                  石川県小松市清六町315番地　イオンモール新小松2F<br>
                  <a href="tel:0761231145">TEL：0761-23-1145</a><br>
                  FAX：0761-23-1144<br>
                </p>
              </div>
            </div>
            <div class="info-company-list__item">
              <div class="name">スピードジョブズ福井店<div class="map"><a href="https://goo.gl/maps/2pcJUg4k3iA2" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <p>
                  〒918-8015<br>
                  福井県福井市花堂南2丁目16番1号　ショッピングシティベル1F<br>
                  <a href="tel:0776436213">TEL：0776-43-6213</a><br>
                  FAX：0776-43-6214<br>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="info-sns">
          <div class="c-section-title title_type_left">
            <h2 class="heading">公式Facebook</h2>
          </div>
          <div class="info-sns__fb">
            <div class="fb-page" data-href="https://www.facebook.com/ishikawarecruit/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ishikawarecruit/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ishikawarecruit/">ライフライン</a></blockquote></div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>





