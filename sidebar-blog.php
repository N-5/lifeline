<?php ?>
<aside id="sidebar">
  <div class="c-sidebarMenu">
    <div class="sidebar_list">
      <p class="heading">おすすめ</p>
      <ul class="sidebar__item">
        <li><a href="<?php echo home_url(); ?>/cat_recruit_way/new/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/banner-banner-item2.jpg" alt="新着求人をチェック！"></a></li>
        <li><a href="<?php echo home_url(); ?>/cat_recruit_way/regular/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/banner-banner-item4.jpg" alt="正社員求人をチェック！"></a></li>
        <li><a href="<?php echo home_url(); ?>/cat_blog/feature_recruit/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/banner-banner-item6.jpg" alt="ピックアップ求人情報"></a></li>
      </ul>
    </div>
    <div class="sidebar_list">
      <p class="heading">カテゴリー</p>
      <ul class="sidebar__item">
        <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'cat_blog', 'show_count' => 1)); ?>
      </ul>
    </div>
    <div class="sidebar_list">
      <p class="heading">最新の投稿</p>
      <ul class="sidebar__item">
        <?php
        $base_loop = new WP_Query(
          array(
            'post_type' => 'blog',
            'posts_per_page' => 8,
          )
        ); ?>
        <?php
        if( $base_loop -> have_posts() ):
        while( $base_loop -> have_posts() ): $base_loop -> the_post();
        ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <?php if(mb_strlen($post->post_title, 'UTF-8')>40){
              $title= mb_substr($post->post_title, 0, 18, 'UTF-8');
              echo $title.'...';
            }else{
              echo $post->post_title;
            } ?>
          </a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </ul>
    </div>
<!--
    <div class="sidebar_list">
      <p class="heading">アーカイブ</p>
      <ul class="sidebar__item">
        <?php wp_get_archives('type=monthly&post_type=custom&show_post_count=true'); ?>
      </ul>
    </div>
-->
  </div>
</aside>