<?php get_header(); ?>
<main>
  <div id="contact" class="main c-container">
    <section class="contact">
      <div id="formContent">
        <div class="c-section-title">
          <h1 class="heading">求人採用をお考えの企業様へ</h1>
          <p class="lead">下記求人票PDFをダウンロードしてご記入の上、FAXかメールでお送りください。<br>
           または、以下のフォームをご記入してご送信ください。<br>
            内容を確認し、担当者からご連絡させていただきます。その他のご相談も受け付けております。お気軽にお電話ください。</p>
        </div>
        <div class="download">
          <div class="c-button button-type-list download"><a href="<?php echo get_template_directory_uri(); ?>/download/kyujinhyo.pdf" target="_blank">PDFを開く</a></div>
        </div>
        <div class="content">
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>