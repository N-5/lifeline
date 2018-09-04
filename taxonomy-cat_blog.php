<?php get_header(); ?>
<main>
  <div id="blogArchive" class="main">
    <div class="c-headingLarge">
      <h2 class="heading"><?php single_term_title(); ?></h2>
      <p class="text">
        <?php if(is_tax('cat_blog', 'feature_recruit')): ?>
        このコーナーでは、掲載中の求人情報を職種や地域・働き方などにまとめて特集にしました。<br>
        新着求人だけでなく、幅広くジャンル分けしたの求人特集を多数掲載。
        <?php elseif (is_tax('cat_blog', 'news')): ?>
        このコーナーでは、ライフラインのお知らせやNEWSをご紹介いたします。
        <?php elseif (is_tax('cat_blog', 'feature-company')): ?>
        このコーナーでは、求人掲載している企業にインタビュー取材をした内容を企業特集として掲載しております。<br>
        実際にライフラインのスタッフが企業に伺い、経営者・人事担当者・現場スタッフの方々に<br>
        企業の魅力や社風など、求職者の方が気になる事を質問してきました。
        <?php elseif (is_tax('cat_blog', 'speedjobs')): ?>
        このコーナーでは、ライフラインの運営するスピードジョブズの情報を掲載しております。<br>
        お仕事相談会などのイベント情報をご案内いたします。
        <?php elseif (is_tax('cat_blog', 'resume')): ?>
        このコーナーでは、転職時に必ず迷ってしまう履歴書や職務経歴書の書き方や注意点をご紹介。<br>
        転職活動を上手に行うために是非参考にしてみてください。
        <?php elseif (is_tax('cat_blog', 'interview')): ?>
        このコーナーでは、転職時の面接でのお役立ち情報を掲載。<br>
        採用担当者が求職者のどこを気にしているのかなど、転職のプロだから知っているノウハウをご紹介いたします。
        <?php elseif (is_tax('cat_blog', 'recruiting-know-how')): ?>
        このコーナーでは、転職のプロであるライフラインのスタッフが、<br>
        お役立ち転職ノウハウ面接や履歴書の書き方など転職を成功に導くための有益な情報が盛りだくさん。<br>
        はじめての方でも役立つノウハウをご紹介します。
        <?php elseif (is_tax('cat_blog', 'appearance')): ?>
        このコーナーでは、転職時の身だしなみについてご紹介。面接時や履歴書の写真の撮影など、<br>
        転職活動では身だしなみに気をつけなければいけない多々あります。<br>
        採用担当者が好印象を受ける身だしなみのチェックポイントをご紹介いたします。
        <?php elseif (is_tax('cat_blog', 'other-useful-information')): ?>
        このコーナーでは、履歴書の書き方や面接などとは異なるその他の転職時に役に立つ転職ノウハウをご紹介。
        <?php else: ?>
        このコーナーでは、求人 転職のプロであるライフラインが様々な視点でピックアップした求人情報・企業情報を特集としてまとめています。<br>
        会社の社風・環境や職種・働き方などでまとめているので新しい視点であなたにあった求人が見つかるかも。
        <?php endif; ?>        
       </p>
    </div>
    <div class="c-container">
      <div class="entryWrap">
        <ul>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>" style="<?php if( get_field('feature_thumb_pc') ) { ?> background-image:url('<?php the_field('feature_thumb_pc'); ?>); <?php } ?>">
              <ul class="entry__category">
                <?php 
                $custom_post_tag = 'cat_blog';
                $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
                if(!empty($custom_post_tag_terms)){
                  if(!is_wp_error( $custom_post_tag_terms )){
                    foreach($custom_post_tag_terms as $term){
                      $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                      $tag_term_name = $term->name;
                      echo '<li>'.$tag_term_name.'</li>';
                    }
                  }
                }
                ?>
              </ul>
              <h2 class="entry__title"><?php the_title(); ?></h2>
              <div class="entry__date"><?php the_time('Y年m月d日'); ?></div>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/blog">一覧へ</a></div>
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
            'mid_size' => 5,
            'current' => ($paged ? $paged : 1),
          )); ?>
        </div><!-- /.pager -->   
      </div><!-- /.entryWrap -->
      <?php get_sidebar('blog'); ?>
    </div><!-- /.container -->
  </div>
</main>
<?php get_footer(); ?>