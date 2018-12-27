<?php get_header(); ?>
<main>
  <div id="index" class="main">
    <section class="visual">
     <div class="hero">
       <picture>
         <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/hero_sp.jpg">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/hero_pc.jpg" alt="株式会社ライフライン">
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
          <div class="banner-item"><a href="<?php echo home_url(); ?>/cat_recruit_way/new/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/banner-banner-item2.jpg" alt="新着求人をチェック"></a></div>
          <div class="banner-item"><a href="<?php echo home_url(); ?>/cat_recruit_way/regular/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/banner-banner-item4.jpg" alt="正社員求人をチェック"></a></div>
          <div class="banner-item"><a href="<?php echo home_url(); ?>/cat_blog/feature_recruit/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/banner-banner-item6.jpg" alt="ピックアップ求人情報"></a></div>
        </div>
      </div>
    </section>
    <section class="anchor c-anchor">
      <div class="anchor-inner">
        <ul class="anchor-list">
          <li class="anchor-item"><a href="#recommend">新着求人</a></li>
          <li class="anchor-item"><a href="#recruitfeature">求人特集</a></li>
          <li class="anchor-item"><a href="#companyfeature">企業特集</a></li>
          <li class="anchor-item"><a href="#knowhow">転職成功ノウハウ</a></li>
        </ul>
      </div>
    </section>
    <section id="recommend" class="recommend">
      <div class="recommend-inner c-container">
        <div class="c-section-title">
          <h2 class="heading">おすすめ新着求人</h2>
          <p class="lead">石川県・福井県・富山県の<br class="u-sp">新着おすすめ求人を随時更新！</p>
        </div>
        <div class="c-recruitList">
          <?php
          $loop = new WP_Query (array(
            'post_type'			=> 'recruit',
            'posts_per_page'	=> 6
          ));
          while ($loop -> have_posts()) : $loop -> the_post();
          ?>
          <?php get_template_part('components/recruit-list'); ?>
          <?php endwhile; ?>
        </div>
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/recruit/">求人情報一覧</a></div>
      </div>
    </section>
    <section id="recruitfeature" class="feature">
      <div class="feature-inner c-container">
        <div class="c-section-title">
          <h2 class="heading">求人特集</h2>
          <p class="lead">このコーナーでは、求人 転職のプロであるライフラインが様々な視点でピックアップした求人を特集としてまとめています。<br>職種や働き方、地域などでまとめているので新しい視点であなたにあった求人が見つかるかも。</p>
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
    <section id="companyfeature" class="feature">
      <div class="feature-inner c-container">
        <div class="c-section-title">
          <h2 class="heading">企業特集</h2>
          <p class="lead">このコーナーでは、ライフラインがおすすめする、石川県・福井県で今一番の注目企業のお仕事情報をインタビュー形式で一挙掲載。<br>地元の成長企業や大手企業、外資系企業など、あなたにぴったりのお仕事を見つけてください。</p>
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
        <h2 class="heading">プロが教える転職成功ノウハウ</h2>
        <p class="lead">就職・転職のプロであるライフラインのスタッフが贈る、お役立ち転職ノウハウ<br>面接や履歴書の書き方など転職を成功に導くための有益な情報が盛りだくさん。はじめての方でも役立つノウハウをご紹介します。</p>
      </div>
      <div class="knowhow-inner c-container">
        <h3 class="c-block-title">履歴書・職務経歴書について</h3>
        <div class="knowhow-post">
          <div class="knowhow-block">
            <div class="knowhow-post__pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/knowhow_img_1.jpg" alt=""></div>
            <div class="knowhow-post__text">
              転職活動を始める際、必ず用意しなければならない書類が「履歴書」と「職務経歴書」です。転職活動が上手くいくか否かの最初の鍵となります。仕事に対する姿勢や志望度合を判断していますので、丁寧な印象を持ってもらえるよう心掛けましょう。履歴書の基本ルールや、書き方のポイントなど、採用担当者の心に響く履歴書作りのコツを徹底的に解説します！最低限のマナーはしっかり押さえた上で、あなた自身のことが伝わる履歴書・職務経歴書の作成ノウハウを学んでいきましょう。
            </div>
          </div>
<!--
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
-->
<!--
          <div class="knowhow-post__answer">
            <h4>【回答例】</h4>
            <p>
              ダミーです。（他社サイトから引用しています）<br>
              毎日太郎と申します。<br>
              前職では、飲料メーカーのマーケティング職としてキャンペーンの企画やランディングページのディレクションに携わってまいりました。「◯◯キャンペーン」では前年比120％の応募数を獲得し、社内表彰を受賞しました。<br>
              今後は、自社のマーケティングだけでなく、幅広い業種のマーケティングに挑戦していきたいと思い、キャンペーン企画を強みに多様な企業をクライアントとして持つ御社に応募させていただきました。本日はどうぞよろしくお願いいたします。
            </p>
          </div>
-->
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
                    'terms' => 'resume'
                  )
                )
              );
              $domestic_post = get_posts($args);
              if($domestic_post) : foreach($domestic_post as $post) : setup_postdata( $post ); ?>
              <li class="knowhow-blog-list__item">
                <a href="<?php the_permalink(); ?>">
                  <figure class="thumb">
                    <?php 
                    $image = get_field('blog_thumbnail');
                    $size = 'blog_thumb';
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                  </figure>
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
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/cat_blog/resume/">履歴書・職務経歴書についての記事一覧</a></div>
      </div>
      <div class="knowhow-inner c-container">
        <h3 class="c-block-title">面接対策について</h3>
        <div class="knowhow-post">
          <div class="knowhow-block">
            <div class="knowhow-post__pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/knowhow_img_2.jpg" alt=""></div>
            <div class="knowhow-post__text">
              面接は企業が応募者に対して採用を判断するだけでなく、応募者にとっても入社する企業を見極めるための重要な場です。面接は制限時間が指定される場合もあり、その中で自分の良さを伝えなければなりません。実際の面接では短い時間での発言を求められるので、アピールするためのコツが必要です。効果的にアピールできるよう、世代別でのPRポイントやNGポイントをご紹介していきます。好印象を与える事ができる面接ノウハウについて学んでみましょう。
            </div>
          </div>
<!--
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
-->
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
                    'terms' => 'interview'
                  )
                )
              );
              $domestic_post = get_posts($args);
              if($domestic_post) : foreach($domestic_post as $post) : setup_postdata( $post ); ?>
              <li class="knowhow-blog-list__item">
                <a href="<?php the_permalink(); ?>">
                  <figure class="thumb">
                    <?php 
                    $image = get_field('blog_thumbnail');
                    $size = 'blog_thumb';
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                  </figure>
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
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/cat_blog/interview/">面接対策に関する記事一覧</a></div>
      </div>
    </section>
    <section id="about" class="about">
      <div class="about-inner c-container">
        <div class="c-section-title">
          <h2 class="heading">世の中が思いつかない<br class="u-sp">圧倒的に凄いもの</h2>
        </div>
        <div class="about-info">
          <p class="text">『美しい女性を口説こうと思ったとき、ライバルがバラを１０本贈ったら、<br class="u-lg-max">
            君は１５本贈るかい？そう思った時点で君の負けだ。その女性が何を望んでいるのか、見極めることが重要なんだ』<br class="u-lg-max">
            これはスティーブ・ジョブズがiMacの開発をしていた当時、周囲に語った言葉です。<br class="u-lg-max">
            ライバルよりも少しいいものを目指すのではなく、世の中が思いつかない圧倒的に凄いものをつくることが重要なのだと。<br class="u-lg-max">
            ライフラインでは偉大なスティーブ・ジョブズからヒントをもらい、<br class="u-lg-max">
            これまでにない来店型の民間版ハローワークとなるスピードジョブズを立ち上げました。<br class="u-lg-max">
              私たちは今後も人材と企業を結ぶ次世代型ソリューションとして、多くの方々の“生命線”として歩み続けます。
          </p>
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
              <div class="name">本社<div class="map"><a href="https://goo.gl/maps/qkd5kU3bTKn" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/info-company.jpg" alt="本社外観"></figure>
                <p>〒921-8013<br>
                  石川県金沢市新神田2丁目14番21号<br>
                  <a href="tel:0762918001">TEL：076-291-8001</a><br>
                  FAX：076-291-8010<br>
                </p>
              </div>
            </div>
            <div class="info-company-list__item">
              <div class="name">福井支店<div class="map"><a href="https://goo.gl/maps/PrT85wZfCV22" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/info-company2.jpg" alt="福井支社外観"></figure>
                <p>
                  〒910-0837<br>
                  福井県福井市高柳1丁目708番地<br>レリアン103<br>
                  <a href="tel:0776433000">TEL：0776-43-3000</a><br>
                  FAX：0776-43-3100<br>
                </p>
              </div>
            </div>
            <div class="info-company-list__item">
              <div class="name">スピードジョブズ金沢店<div class="map"><a href="https://goo.gl/maps/LQFC9APmzE92" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/info-company3.jpg" alt="スピードジョブス金沢店外観"></figure>
                <p>
                  〒921-8801<br>
                  石川県野々市市御経塚二丁目91番地<br>2階210−03区画<br>
                  <a href="tel:0762595190">TEL：076-259-5190</a><br>
                    FAX：076-259-5191<br>
                </p>
              </div>
            </div>
            <div class="info-company-list__item">
              <div class="name">スピードジョブズ小松店<div class="map"><a href="https://goo.gl/maps/6ZGUx2R1fAo" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/info-company4.jpg" alt="スピードジョブス小松店外観"></figure>
                <p>
                  〒923-8585<br>
                  石川県小松市清六町315番地<br>イオンモール新小松2F<br>
                  <a href="tel:0761231145">TEL：0761-23-1145</a><br>
                  FAX：0761-23-1144<br>
                </p>
              </div>
            </div>
            <div class="info-company-list__item">
              <div class="name">スピードジョブズ福井店<div class="map"><a href="https://goo.gl/maps/2pcJUg4k3iA2" target="_blank">Google Map</a></div></div>
              <div class="adress">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/info-company5.jpg" alt="スピードジョブズ福井店外観"></figure>
                <p>
                  〒918-8015<br>
                  福井県福井市花堂南2丁目16番1号<br>ショッピングシティベル1F<br>
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
          <div class="fb-banner"><a href="https://www.facebook.com/ishikawarecruit/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/lifeline-fb_banner.jpg" alt=""></a></div>
<!--
          <div class="info-sns__fb">
            <div class="fb-page" data-href="https://www.facebook.com/ishikawarecruit/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ishikawarecruit/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ishikawarecruit/">ライフライン</a></blockquote></div>
          </div>
-->
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>





