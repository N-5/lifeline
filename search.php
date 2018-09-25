<?php get_header(); ?>
<main>
  <div id="searchPage" class="main">
    <div class="c-headingLarge">
      <h2 class="heading">求人検索結果</h2>
    </div>
    <section class="result c-container">
      <?php
      $s = $_GET['s'];
      $post_tag = $_GET['post_tag'];
      $post_area = $_GET['post_area'];
      $post_job = $_GET['post_job'];

      if($post_tag){
        $taxquerysp[] = array(
          'taxonomy'=>'cat_recruit',
          'terms'=> $post_tag,
          'include_children'=>false,
          'field'=>'slug',
          'operator'=>'AND',
        );
      }
      if($post_area){
        $taxquerysp[] = array(
          'taxonomy'=>'cat_recruit',
          'terms'=> $post_area,
          'include_children'=>false,
          'field'=>'slug',
          'operator'=>'AND',
        );
        $area_jp = get_term_by('slug', $post_area, 'cat_recruit');
//        var_dump($area_jp);
      }
      if($post_job){
        $taxquerysp[] = array(
          'taxonomy'=>'cat_recruit',
          'terms'=> $post_job,
          'include_children'=>false,
          'field'=>'slug',
          'operator'=>'AND',
        );
      }
      $taxquerysp['relation'] = 'AND';
      ?>
      <?php
      $paged = get_query_var('paged');
      $postQuery = new WP_Query();
      $param = array(
        'posts_per_page' => '12',
        'paged' => $paged,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type'=>'recruit',
        'taxonomy'=>'cat_recruit',
        'tax_query' => $taxquerysp,
        's' => $s,
      );
      $postQuery->query($param);
      ?>
      <div id="search">
        <div class="c-section-title">
          <h2 class="heading">
            <?php
//            $allsearch =& new WP_Query("s=$s&showposts=-1");
            $key = wp_specialchars($s, 1);
            $search_query = get_search_query();
            $count = $postQuery->found_posts; ?>
            <?php if($s){ ?><?php echo $s; ?><?php } ?>
            <?php if($post_area){ ?><?php echo $area_jp->name; ?><?php } ?>
            <?php if($post_job){ ?><?php echo $post_job; ?><?php } ?>
            <?php if($post_tag){ ?><?php echo $post_tag; ?><?php } ?>
            </h2>
          <p class="lead"><span class="sarch-fit">検索結果　<?php echo $postQuery->found_posts; ?>件</span></p>
        </div>
        <div class="search-content">
            <div class="c-recruitList">
              <?php
              if( $postQuery->have_posts() ) :
              while( $postQuery->have_posts() ) :
              $postQuery->the_post();
              ?>
              <?php get_template_part('components/recruit-list'); ?>
<!--
                <a href="<?php the_permalink(); ?>">
                  <p class="date">公開日：<?php the_time('Y年n月j日'); ?></p>
                  <h3 class="title"><?php the_title(); ?></h3>
                  <p class="cat">

                    <span>カテゴリー名<?php single_term_title(); ?></span>
                    <?php
                    $terms = get_the_terms($post->ID,'cat_recruit');
                    foreach( $terms as $term ) {
                      echo ('<span>') ;
                      echo esc_html($term->name)  ;
                      echo ('</span>') ;
                    }
                    ?>
                  </p>
                </a>
-->
              <?php endwhile; else : ?>
              <div>該当なし</div>
              <?php endif;?>
            </div>
          <!-- pagenavi -->
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
              'total' => $postQuery->max_num_pages,
              'mid_size' => 5,
              'current' => ($paged ? $paged : 1),
            )); ?>
            </div>

          <?php wp_reset_postdata(); wp_reset_query(); ?>
          <!-- /pagenavi -->
        </div><!-- /.search-content -->
      </div><!-- /.main -->
    </section>
  </div>
</main>
<?php get_footer(); ?>
