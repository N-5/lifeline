<?php
/**
 * recruit-list.php
 */ ?>
<div class="recruitList-item">
  <article>
    <div class="recruitList-category">
      <ul>
        <?php
        $custom_post_tag = 'cat_recruit';
        $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
        if(!empty($custom_post_tag_terms)){
          if(!is_wp_error( $custom_post_tag_terms )){
            foreach($custom_post_tag_terms as $term){
              $tag_term_link = get_term_link($term->slug, $custom_post_tag);
              $tag_term_name = $term->name;
              echo '<li><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
            }
          }
        }
        ?>
      </ul>
    </div>
    <div class="recruitList-head">
      <figure class="recruitList-head__thumbnail">
        <?php 
        $image = get_field('recruit_info00');
        $size = 'custom_size_detail';
        if( $image ) {
          echo wp_get_attachment_image( $image, $size );
        }
        ?>
      </figure>
      <p class="recruitList-head__heading">
        <?php if(mb_strlen($post->post_title, 'UTF-8')>30){
          $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
          echo $title.'...';
        }else{
          echo $post->post_title;
        } ?>
      </p>
    </div>
    <div class="recruitList-body">
      <p class="recruitList-body__lead">
        <?php 
        $text = mb_substr(get_field('recruit_info03'),0,100,'utf-8'); 
        echo $text.'...';
        ?>
      </p>
      <ul class="recruitList-body-list">
        <li class="recruitList-body-list__item adress"><p class="heading">勤務地</p><p class="contents"><?php echo get_field('recruit_info06'); ?></p></li>
        <li class="recruitList-body-list__item money"><p class="heading">月収・給与</p><p class="contents"><?php echo get_field('recruit_info04'); ?></p></li>
        <li class="recruitList-body-list__item check"><p class="heading">経験・資格</p><p class="contents"><?php echo get_field('recruit_info11'); ?></p></li>
      </ul>
      <div class="c-button button-more button-color-blue"><a href="<?php the_permalink(); ?>">この求人の詳細を見る</a></div>
    </div>
  </article>
  <time class="recruitList-item__time"><span>公開日：<?php the_time('Y年n月j日'); ?></span></time>
</div>