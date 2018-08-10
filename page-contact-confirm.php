<?php get_header(); ?>
<main>
  <div id="contact" class="main c-container">
    <section class="contact">
      <div id="formContent">
        <div class="c-section-title">
          <h1 class="heading">お問合わせ確認</h1>
          <p class="lead">以下のお問い合わせ内容をご確認いただき、「送信ボタン」をクリックして下さい。</p>
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