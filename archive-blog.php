<?php get_header(); ?>
<main>
  <div id="blogArchive" class="main">
    <div class="c-headingLarge">
      <h2 class="heading">ブログ</h2>
      <p class="text">ダミーです。ブログのテキストが入ります。</p>
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


<?php if(is_month()): ?> - <?php echo get_the_archive_title(); ?><?php endif; ?>


