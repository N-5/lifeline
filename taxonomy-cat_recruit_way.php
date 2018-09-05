<?php get_header(); ?>
<main>
  <div id="recruitArchive" class="main">
    <div class="c-headingLarge">
      <h2 class="heading"><?php single_term_title(); ?></h2>
      <p class="text">
        <?php if(is_tax('cat_recruit_way', 'new')): ?>
        毎日お仕事情報を更新しているので、いち早く求人をお届けします。<br>
        いろんな職種・地域・働き方の求人を多数掲載していますので、希望のお仕事以外もチェックしてみてください。
        <?php elseif (is_tax('cat_recruit_way', 'regular')): ?>
        正社員で働きたい人にオススメの優良正社員求人を多数掲載。<br>
        地域や業種、職種、活かせるスキルや働き方の特徴から正社員の求人をさがすことができます。
        <?php elseif (is_tax('cat_recruit_way', 'dispatch')): ?>
        「短期間で働きたい」「高年収・高収入で働きたい」<br>
        「家庭と両立して働きたい」といった方にはオススメの優良派遣を多数掲載。
        <?php elseif (is_tax('cat_recruit_way', 'part')): ?>
        パートタイムは週4日以内、短時間など、ライフスタイルに合わせて働くことができます。<br>
        「仕事」も「家庭」も大切にしたい！というキャリア主婦にオススメの求人を多数掲載。
        <?php elseif (is_tax('cat_recruit_way', 'wwork')): ?>
        副業として、自分の空いた時間や家事・育児などのちょっとしたスキマ時間を有効活用したい方に、<br>
        幅広い職種でのオススメの求人を多数掲載。
        <?php elseif (is_tax('cat_recruit_way', 'highincome')): ?>
        短期間でまとまったお金を稼げる魅力があるので、貯金をしたい方や今すぐお金が欲しい！<br>
        という方にオススメの求人を多数掲載。高収入・高時給のお仕事をさがしてみましょう。
        <?php else: ?>
        「短期間で働きたい」「高年収・高収入で働きたい」<br>
        「家庭と両立して働きたい」といった方にはオススメの優良派遣を多数掲載。
        <?php endif; ?>  
      </p>
    </div>
    <div class="c-container">
      <div class="c-recruitList">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('components/recruit-list'); ?>
        <?php endwhile; ?>
        <div class="c-pager">
          <?php global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
            $paginate_format = '';
            $paginate_base = add_query_arg('paged', '%#%');
          } else {
            $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
              user_trailingslashit('page/%#%/', 'paged');;
            $paginate_base .= '%_%';
          }
          echo paginate_links( array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $wp_query->max_num_pages,
            'mid_size' => 1,
            'current' => ($paged ? $paged : 1),
          )); ?>
        </div><!-- /.pager -->   
      </div>
    </div><!-- /.container -->
  </div>
</main>
<?php get_footer(); ?>



