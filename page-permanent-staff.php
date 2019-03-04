<?php get_header(); ?>
<main>
  <div id="permanent-staff" class="main">
    <div class="c-headingLarge">
      <h2 class="heading"><!-- 正社員  --></h2>
    </div>
    <div class="c-container">
      <section class="lp-lead">
        <div class="c-section-title_lp">
          <h2 class="heading"><span>人材紹介のしくみ</span></h2>
        </div>
        <div class="lp-lead-top">
          <div class="lp-lead-top__detail">
            <h3 class="heading">人材紹介とは</h3>
            <p class="c-text">人材紹介サービスとは、職業紹介事業を行う事業者（ライフライン）が企業の求人依頼を受けて、それに該当する人材（転職希望者）を企業へ紹介するサービスです。</p>
          </div>
          <figure class="lp-lead-top__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/permanent-staff/lead-top.jpg" alt=""></figure>
        </div>
        <div class="lp-lead-under">
          <figure class="lp-lead-under__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/permanent-staff/lead-under.jpg" alt=""></figure>
          <div class="lp-lead-under__detail">
            <h3 class="heading">人材紹介のメリット</h3>
            <p class="c-text">専任のコーディネーターが細やかにカウンセリングするので、転職後のビジョンやどんなキャリアを得たいかを明確にできます。最適な求人案件を紹介して、転職に関するさまざまなコンサルティングや、面接の日程や雇用条件の交渉などのサービスを無料で受けることができます。在職中でも無理なく効率的に転職活動を行うことができます。</p>
          </div>
        </div>
      </section>
      <section class="lp-flow">
        <div class="c-section-title_lp">
          <h2 class="heading"><span>登録〜入社までの流れ</span></h2>
          <p class="c-text">人材紹介がはじめての方や、ライフラインへの登録がはじめての方のために、就業までの流れをわかりやすくご説明します。仕事をご紹介する上では、各拠点のライフラインにお越しいただき、登録手続きを行っていただく必要があります。</p>
        </div>
        <div class="flow-list">
          <div class="flow-list__item">
            <div class="heading"><span>Step1</span><br>来社予約</div>
            <div class="detail">希望拠点・日時を選んで下記の来社用予約フォームか電話で予約をしてください。</div>
          </div>
          <div class="flow-list__item">
            <div class="heading"><span>Step2</span><br>来社・ご登録</div>
            <div class="detail">ご予約の日時に指定の登録場所にご来社ください。</div>
          </div>
          <div class="flow-list__item">
            <div class="heading"><span>Step3</span><br>カウンセリング</div>
            <div class="detail">丁寧なヒアリングで、ご経験やご希望条件に合ったお仕事をお探しします。</div>
          </div>
          <div class="flow-list__item">
            <div class="heading"><span>Step4</span><br>エントリー、書類選考・面接</div>
            <div class="detail">専門のコンサルタントが応募企業との面接日程調整などを行います。</div>
          </div>
          <div class="flow-list__item">
            <div class="heading"><span>Step5</span><br>内定</div>
            <div class="detail">給与・採用条件の交渉や入社日の調整など内定から入社までの期間もサポートします。</div>
          </div>
        </div>
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/contact/">予約フォームはこちら</a></div>
      </section>
      <section class="lp-colum colum_first">
        <div class="c-section-title">
          <h2 class="heading">履歴書・職務経歴書に関する<br class="u-sp">お役立ちコラム</h2>
          <p class="lead">転職時に必ず迷ってしまう履歴書や職務経歴書の書き方や注意点をご紹介。<br>転職活動を上手に行うために是非参考にしてみてください。
          </p>
        </div>
        <div class="c-knowhow-blog">
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
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/cat_blog/resume/">履歴書・職務経歴書についての記事一覧</a></div>
      </section>
      <section class="lp-colum">
        <div class="c-section-title">
          <h2 class="heading">面接対策に関するお役立ちコラム</h2>
          <p class="lead">転職時の面接でのお役立ち情報を掲載。<br>採用担当者が求職者のどこを気にしているのかなど、<br>転職のプロだから知っているノウハウをご紹介いたします。</p>
        </div>
        <div class="c-knowhow-blog">
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
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/cat_blog/interview/">面接対策に関する記事一覧</a></div>
      </section>
    </div>
    <section class="lp-form">
      <div class="c-container">
        <div class="c-section-title">
          <h1 class="heading">ご登録・転職相談</h1>
          <p class="lead">弊社は、事業運営上必要なお客様や従業者の個人情報の取扱いにあたって、<br>以下の方針を定め、個人情報管理体制を確立し、企業として責任ある対応を実現するものとします。</p>
        </div>
        <div class="c-contact__content">
          <?php while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <section class="lp-search">
      <div class="c-container">
        <div class="lp-search-inner">
          <div class="c-section-title">
            <h2 class="heading">求人を探す</h2>
          </div>
          <?php get_template_part('components/search-form'); ?>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>