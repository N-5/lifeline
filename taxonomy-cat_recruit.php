
<?php get_header(); ?>
<main>
  <div id="recruitArchive" class="main">
    <div class="c-headingLarge">
      <h2 class="heading"><?php single_term_title(); ?></h2>
      <p class="text">ダミーです。今一押しの人気求人を集めました。おすすめ求人リストの本文が入ります。</p>
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



