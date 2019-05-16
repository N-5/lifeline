
<?php get_header(); ?>
<main>
  <div id="recruitArchive" class="main">
    <div class="c-headingLarge">
      <h2 class="heading"><?php single_term_title(); ?></h2>
      <p class="text">このコーナーでは、求人 転職のプロであるライフラインが様々な視点でピックアップした求人情報・企業情報を特集としてまとめています。<br>会社の社風・環境や職種・働き方などでまとめているので新しい視点であなたにあった求人が見つかるかも。</p>
    </div>
    <div class="c-container">
      <div class="c-recruitList">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <?php if ( is_object_in_term($post->ID, 'cat_recruit_way','jobri') ): ?>
        <?php get_template_part('components/recruit-jobri-list'); ?>
        <?php else: ?>
        <?php get_template_part('components/recruit-list'); ?>
        <?php endif; ?>
        
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



