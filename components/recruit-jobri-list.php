<?php
/**
 * recruit-jobri-list.php
 */ ?>
<div class="recruitList-item jobri-item">
  <article>
    <div class="recruitList-category">
      <ul>
        <?php
        $custom_post_tag = 'cat_recruit_area';
        $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
        if(!empty($custom_post_tag_terms)){
            if(!is_wp_error( $custom_post_tag_terms )){
                foreach($custom_post_tag_terms as $term){
                    $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                    $tag_term_name = $term->name;
                    echo '<li class="is-area"><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
                }
            }
        }
        ?>
        <?php
        $custom_post_tag = 'cat_recruit_way';
        $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
        if(!empty($custom_post_tag_terms)){
          if(!is_wp_error( $custom_post_tag_terms )){
            foreach($custom_post_tag_terms as $term){
              $tag_term_link = get_term_link($term->slug, $custom_post_tag);
              $tag_term_name = $term->name;
              echo '<li class="is-way"><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
            }
          }
        }
        ?>
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
      <a href="<?php the_permalink(); ?>">
      <figure class="recruitList-head__thumbnail">    
        <?php if(get_field('jobri-thumbnail',$post_id)): ?>
        <?php 
        $image = get_field('jobri-thumbnail');
        $size = 'custom_size';

        if( $image ) {
          echo wp_get_attachment_image( $image, $size );
        }
        ?> 
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="no-image">
        <?php endif; ?>
      </figure>
      <p class="recruitList-head__heading">
        <?php if(mb_strlen($post->post_title, 'UTF-8')>30){
          $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
          echo $title.'...';
        }else{
          echo $post->post_title;
        } ?>
      </p>
      </a>
    </div>

    <div class="recruitList-body">
      <p class="recruitList-body__lead">
        <?php
        if(mb_strlen(post_custom('jobri-info01'), 'UTF-8')>100){
          $title= mb_substr(post_custom('jobri-info01'), 0, 100, 'UTF-8');
          echo $title.'...';
        }else{
          echo post_custom('jobri-info01');
        }
        ?>
      </p>
      <ul class="recruitList-body-list">
        <li class="recruitList-body-list__item adress"><p class="heading">勤務地</p><p class="contents"><?php echo get_field('jobri-info03'); ?></p></li>
        <li class="recruitList-body-list__item money"><p class="heading">初任給</p><p class="contents">
          <?php
          if(mb_strlen(get_field('jobri-info02'))>100) { $hoge= mb_substr(get_field('jobri-info02'),0,99) ; echo $hoge. … ;}
          else {echo get_field('jobri-info02');}
          ?>
          </p></li>
        <li class="recruitList-body-list__item time"><p class="heading">勤務時間</p><p class="contents">
          <?php
          if(mb_strlen(get_field('jobri-info04'))>100) { $hoge= mb_substr(get_field('jobri-info04'),0,99) ; echo $hoge. … ;}
          else {echo get_field('jobri-info04');}
          ?>
          </p></li>
      </ul>
      <div class="c-button button-more button-color-blue"><a href="<?php the_permalink(); ?>">この求人の詳細を見る</a></div>
    </div>
  </article>
  <time class="recruitList-item__time"><span>公開日：<!--<?php the_time('Y年n月j日'); ?> --><?php echo date("Y年m月d日"); ?></span></time>
</div>