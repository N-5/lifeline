<?php get_header(); ?>
<main>
  <div id="recruitSingle" class="main">
    <div class="recruitSingle_inner">
      <div class="recruitSingle_post">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article>
            <header>
              <div class="entry__heading c-page-title">
                <div class="c-container">
                  <time class="time">掲載日：<?php the_time('Y年m月d日'); ?>　掲載ナンバー：<?php echo the_field('recruit_info01');?></time>
                  <h1 class="heading"><?php the_title(); ?></h1>
                  <div class="entry__category">
                    <ul>
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
<!--
                  <figure class="entry__thumbnail">
                    <?php 
                    $image = get_field('recruit_info00');
                    $size = 'large';
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                  </figure>
-->
                </div>
              </div>
            </header>
            <div class="entry__body c-container">
              <div class="entrty__point">
                <?php the_field('recruit_point'); ?>
              </div>
              <h3 class="title">募集要項</h3>
              <div class="entry__table">
                <?php if( get_field('recruit_info02') ) { ?>
                <dl>
                  <dt>募集背景</dt>
                  <dd><?php the_field('recruit_info02'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info03') ) { ?>
                <dl>
                  <dt>仕事内容</dt>
                  <dd><?php the_field('recruit_info03'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info04') ) { ?>
                <dl>
                  <dt>月収・給与</dt>
                  <dd><?php the_field('recruit_info04'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info05') ) { ?>
                <dl>
                  <dt>雇用形態</dt>
                  <dd><?php the_field('recruit_info05'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info06') ) { ?>
                <dl>
                  <dt>勤務地</dt>
                  <dd><?php the_field('recruit_info06'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info07') ) { ?>
                <dl>
                  <dt>勤務時間</dt>
                  <dd><?php the_field('recruit_info07'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info08') ) { ?>
                <dl>
                  <dt>勤務期間</dt>
                  <dd><?php the_field('recruit_info08'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info09') ) { ?>
                <dl>
                  <dt>休日・休暇</dt>
                  <dd><?php the_field('recruit_info09'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info10') ) { ?>
                <dl>
                  <dt>待遇・福利厚生</dt>
                  <dd><?php the_field('recruit_info10'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_info11') ) { ?>
                <dl>
                  <dt>経験・資格</dt>
                  <dd><?php the_field('recruit_info11'); ?></dd>
                </dl>
                <?php } ?>
              </div>
              <h3 class="title">企業情報</h3>
              <div class="entry__table">
                <?php if( get_field('recruit_info11') ) { ?>
                <dl>
                  <dt>企業名</dt>
                  <dd><?php the_field('recruit_corp01'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_corp02') ) { ?>
                <dl>
                  <dt>業種</dt>
                  <dd><?php the_field('recruit_corp02'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_corp03') ) { ?>
                <dl>
                  <dt>設立</dt>
                  <dd><?php the_field('recruit_corp03'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_corp04') ) { ?>
                <dl>
                  <dt>資本金</dt>
                  <dd><?php the_field('recruit_corp04'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_corp05') ) { ?>
                <dl>
                  <dt>従業員</dt>
                  <dd><?php the_field('recruit_corp05'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('recruit_corp06') ) { ?>
                <dl>
                  <dt>事業内容</dt>
                  <dd><?php the_field('recruit_corp06'); ?></dd>
                </dl>
                <?php } ?>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
        <div class="recruitSingle_btnArea c-btnArea">
          <div class="c-container">
            <?php get_template_part('components/c-btnArea'); ?>
          </div>
        </div>
        <div class="c-button button-type-list"><a href="<?php echo home_url(); ?>/recruit">求人情報一覧</a></div>
      </div>
      
      <div class="recruitSignle_related">
        <p class="sub">＼ 他にもおすすめ求人多数！ ／</p>
        <h4 class="title">この求人を見た人は<br>こちらの求人もおすすめです</h4>
        <div class="c-recruitList c-container">
        <?php
        global $post;
        $args = array(
          'numberposts' => 4,
          'post_type' => 'recruit',
          'orderby' => 'rand',
          'post__not_in' => array($post->ID) //表示中の記事を除外
        );
        ?>
        <?php $myPosts = get_posts($args); if($myPosts) : ?>
        <?php foreach($myPosts as $post) : setup_postdata($post); ?>
            <?php get_template_part('components/recruit-list'); ?>
        <?php endforeach; ?>
        <?php else : ?>
        <p>関連アイテムはまだありません。</p>
        <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div><!-- /.container -->
  </div>
</main>
<?php get_footer(); ?>