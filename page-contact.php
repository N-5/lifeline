<?php get_header(); ?>
<main>
  <div id="contact" class="main c-container">
    <section class="contact">
      <div id="formContent">
        <div class="c-section-title">
          <h1 class="heading">来社予約・転職相談</h1>
          <p class="lead">弊社は、事業運営上必要なお客様や従業者の個人情報の取扱いにあたって、<br>以下の方針を定め、個人情報管理体制を確立し、企業として責任ある対応を実現するものとします。</p>
        </div>
        <div class="c-contact__content">
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>