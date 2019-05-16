<?php get_header(); ?>
<!-- Google For Jobs-->
<script type="application/ld+json"> {
    "@context": "http://schema.org/",
    "@type": "JobPosting",
    "title": "<?php the_field('recruit-google-title'); ?>",
    "description": "<?php the_field('recruit-google-lead'); ?>",
    "datePosted": "<?php $date = date_create(get_field('recruit-google-startday')); echo date_format($date,'Y-m-d'); ?>",
    "validThrough": "<?php $date = date_create(get_field('recruit-google-enday')); echo date_format($date,'Y-m-d'); ?>",
    "employmentType": "<?php the_field('recruit-google-hire'); ?>",
    "hiringOrganization" : {
        "@type": "Organization",
        "name": "<?php the_field('recruit-google-name'); ?>",
        "sameAs": "https://lifeline-lg.com/",
        "logo": "https://lifeline-lg.com/image/lifeline.jpg"
    },
    "jobLocation": {
        "@type": "Place",
        "address": {
            "@type": "PostalAddress",
            "addressRegion": "<?php the_field('recruit-google-prefecture'); ?>",
            "addressLocality": "<?php the_field('recruit-google-city'); ?>",
            "streetAddress": "<?php the_field('recruit-google-address'); ?>",
            "postalCode": "<?php the_field('recruit-google-zip'); ?>",
            "addressCountry": "JP"
        }
    },
    "baseSalary": {
        "@type": "MonetaryAmount",
        "currency": "JPY",
        "value": {
            "@type": "QuantitativeValue",
            "value": <?php the_field('recruit-google-basevalue'); ?>,
            "minValue": <?php the_field('recruit-google-minvalue'); ?>,
            "maxValue": <?php the_field('recruit-google-maxvalue'); ?>,
            "unitText": "<?php the_field('recruit-google-unitText'); ?>"
        }
    }
}
</script>

<main>
  <div id="recruitSingle" class="main">
    <div class="recruitSingle_inner">
      <div class="recruitSingle_post">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article>
            <header <?php if ( is_object_in_term($post->ID, 'cat_recruit_way','jobri') ): ?>class="jobri-header"<?php endif; ?>>
              <div class="entry__heading c-page-title">
                <div class="c-container">
                  <time class="time">掲載日：<!-- <?php the_time('Y年m月d日'); ?> --><?php echo date("Y年m月d日"); ?>　掲載ナンバー：<?php echo the_field('recruit_info01');?></time>
                  <h1 class="heading"><?php the_title(); ?></h1>
                  <div class="entry__category">
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
                </div>
              </div>
            </header>
            
            <div class="entry__body c-container">
              <?php if ( is_object_in_term($post->ID, 'cat_recruit_way','jobri') ): ?>
              
              <div class="jobri-company">
                <h3 class="title">会社紹介</h3>
                <?php if(have_rows('jobri-company')): ?>
                <?php while(have_rows('jobri-company')): the_row(); ?>
                
                <div class="jobri-company__item">
                  <h5 class="jobri-company__heading"><?php the_sub_field('jobri-company__title'); ?></h5>
                  <p class="jobri-company__text"><?php the_sub_field('jobri-company__text'); ?></p>
                  <div class="jobri-company-garelly">
                    <?php if(have_rows('jobri-company__img')): ?>
                    <?php while(have_rows('jobri-company__img')): the_row(); ?>
                    <div class="jobri-company-garelly__item">
                      <?php
                      $image = get_sub_field('img');
                      $size = 'blog_thumb';
                      ?>
                      <a href="<?php echo $image['url']; ?>" data-lightbox="image-1">
                        <img src="<?php echo $image['sizes'][$size]; ?>" alt="サムネイル">
                      </a>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                
                <?php endwhile; ?>
                <?php endif; ?>
              </div>
              <?php else: ?>
             
             
              <div class="entrty__point">
                <?php the_field('recruit_point'); ?>
              </div>
              <?php endif; ?>

              <h3 class="title">募集要項</h3>
              
              <?php if ( is_object_in_term($post->ID, 'cat_recruit_way','jobri') ): ?>
              
              <div class="entry__table">
                <?php if( get_field('jobri-info00') ) { ?>
                  <dl>
                    <dt>募集職種</dt>
                    <dd><?php the_field('jobri-info00'); ?></dd>
                  </dl>
                <?php } ?>
                <?php if( get_field('jobri-info01') ) { ?>
                <dl>
                  <dt>仕事内容</dt>
                  <dd><?php the_field('jobri-info01'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-info02') ) { ?>
                <dl>
                  <dt>初給与</dt>
                  <dd><?php the_field('jobri-info02'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-info03') ) { ?>
                <dl>
                  <dt>勤務地</dt>
                  <dd><?php the_field('jobri-info03'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-info04') ) { ?>
                <dl>
                  <dt>勤務時間</dt>
                  <dd><?php the_field('jobri-info04'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-info05') ) { ?>
                <dl>
                  <dt>休日・休暇</dt>
                  <dd><?php the_field('jobri-info05'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-info06') ) { ?>
                <dl>
                  <dt>待遇・福利厚生</dt>
                  <dd><?php the_field('jobri-info06'); ?></dd>
                </dl>
                <?php } ?>
              </div>
              
              <?php else: ?>

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
              <?php endif; ?>
              
              <h3 class="title">企業情報</h3>
              <?php if ( is_object_in_term($post->ID, 'cat_recruit_way','jobri') ): ?>
              <div class="entry__table">
                <?php if( get_field('jobri-inc00') ) { ?>
                <dl>
                  <dt>会社名</dt>
                  <dd><?php the_field('jobri-inc00'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc01') ) { ?>
                <dl>
                  <dt>事業内容</dt>
                  <dd><?php the_field('jobri-inc01'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc02') ) { ?>
                <dl>
                  <dt>本社</dt>
                  <dd><?php the_field('jobri-inc02'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc03') ) { ?>
                <dl>
                  <dt>TEL</dt>
                  <dd><?php the_field('jobri-inc03'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc04') ) { ?>
                <dl>
                  <dt>FAX</dt>
                  <dd><?php the_field('jobri-inc04'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc05') ) { ?>
                <dl>
                  <dt>設立</dt>
                  <dd><?php the_field('jobri-inc05'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc06') ) { ?>
                <dl>
                  <dt>資本金</dt>
                  <dd><?php the_field('jobri-inc06'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc07') ) { ?>
                <dl>
                  <dt>従業員</dt>
                  <dd><?php the_field('jobri-inc07'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc08') ) { ?>
                <dl>
                  <dt>関連企業・主要取引先</dt>
                  <dd><?php the_field('jobri-inc08'); ?></dd>
                </dl>
                <?php } ?>
                <?php if( get_field('jobri-inc09') ) { ?>
                <dl>
                  <dt>代表者</dt>
                  <dd><?php the_field('jobri-inc09'); ?></dd>
                </dl>
                <?php } ?>
              </div>
              
              <?php else: ?>

              <div class="entry__table">
                <?php if( get_field('recruit_corp01') ) { ?>
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
              
              <?php endif; ?>
              
              <?php if ( is_object_in_term($post->ID, 'cat_recruit_way','jobri') ): ?> 
              
              <?php if(have_rows('jobri-oneday')): ?>
              
              <div class="jobri-oneday">
                <h3 class="title">若手社員の一日</h3>
                <div class="jobri-oneday-list">
                  <?php while(have_rows('jobri-oneday')): the_row(); ?>
                  <div class="jobri-oneday-list__item">
                    <div class="jobri-oneday__time"><?php the_sub_field('jobri-oneday__time'); ?></div>
                    <div class="jobri-oneday__detail">
                      <div class="jobri-oneday__title"><?php the_sub_field('jobri-oneday__title'); ?></div>
                      <p class="jobri-oneday__text"><?php the_sub_field('jobri-oneday__text'); ?></p>
                    </div>
                  </div>
                  <?php endwhile; ?>
                </div>
              </div>
              <?php endif; ?>
              
              
              <div class="jobri-voice">
                <h3 class="title">先輩社員の声</h3>
                <div class="jobri-voice-list">
                  <?php if(have_rows('jobri-voice')): ?>
                  <?php while(have_rows('jobri-voice')): the_row(); ?>
                  <div class="jobri-voice-list__item">
                    <div class="jobri-voice__detail">
                      <div class="jobri-voice__name"><?php the_sub_field('jobri-voice__name'); ?></div>
                      <div class="jobri-voice__career">
                        <?php the_sub_field('jobri-voice__jobs'); ?>
                      </div>
                      <div class="jobri-voice__text">
                        <?php the_sub_field('jobri-voice__text'); ?>
                      </div>
                    </div>
                    <div class="jobri-voice__person">
                      <?php
                        $image = get_sub_field('jobri-voice__img');
                        $size = 'jobri-thunb';
                      ?>
                      <img src="<?php echo $image['sizes'][$size]; ?>" alt="社員画像">
                    </div>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
              
              
              <?php endif; ?>
              
            </div><!-- end entry__body c-container-->
          </article>
        <?php endwhile; ?>
        
        
        <?php if ( is_object_in_term($post->ID, 'cat_recruit_way','jobri') ): ?> 
        <div class="c-button button-type-list">
          <a href="<?php echo home_url(); ?>/cat_recruit_way/jobri/">高校生求人情報一覧</a>
        </div>
          
        <?php else: ?>
        
        <div class="recruitSingle_btnArea c-btnArea">
          <div class="c-container">
            <?php get_template_part('components/c-btnArea'); ?>
          </div>
        </div>
        <?php endif; ?>
        
        
      <div class="recruitSignle_related">
        <div class="sub">＼ 他にもおすすめ求人多数！ ／</div>
        <h4 class="title">この求人を見た人は<br>こちらの求人もおすすめです</h4>
        <?php if ( is_object_in_term($post->ID, 'cat_recruit_way','jobri') ): ?>     
          
        <div class="c-recruitList c-container">
          <?php
          $taxonomy_slug = 'cat_recruit_way';
          $post_type_slug = 'recruit';
          $post_terms = wp_get_object_terms($post->ID, $taxonomy_slug);
          if( $post_terms && !is_wp_error($post_terms)) {
            $terms_slug = array();
            foreach( $post_terms as $value ){
              $terms_slug[] = $value->slug;
            }
          }
          $args = array(
            'post_type' => $post_type_slug,
            'posts_per_page' => 8,
            'orderby' =>  'rand',
            'post__not_in' => array($post->ID),
            'tax_query' => array(
              array(
                'taxonomy' => $taxonomy_slug,
                'field' => 'slug',
                'terms' => $terms_slug
              )
            )
          );
          $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <?php get_template_part('components/recruit-jobri-list'); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        
        <?php else: ?>
        
        <div class="c-recruitList c-container">
          <?php
          $taxonomy_slug = 'cat_recruit_area';
          $post_type_slug = 'recruit';
          $post_terms = wp_get_object_terms($post->ID, $taxonomy_slug);
          if( $post_terms && !is_wp_error($post_terms)) {
            $terms_slug = array();
            foreach( $post_terms as $value ){
              $terms_slug[] = $value->slug;
            }
          }
          $args = array(
            'post_type' => $post_type_slug,
            'posts_per_page' => 8,
            'orderby' =>  'rand',
            'post__not_in' => array($post->ID),
            'tax_query' => array(
              array(
                'taxonomy' => $taxonomy_slug,
                'field' => 'slug',
                'terms' => $terms_slug
              )
            )
          );
          $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <?php get_template_part('components/recruit-list'); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>

        <?php endif; ?>
        
      </div>
    </div><!-- /.container -->
  </div>
</main>
<?php get_footer(); ?>
