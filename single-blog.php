<?php get_header(); ?>
<main>
  <div id="blogSigle" class="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article>
      <div class="blogSigle-header">
        <div class="c-container">
          <header>
            <h1 class="blogSigle__heading"><?php the_title(); ?></h1>
            <?php if( get_field('feature_company') ) { ?>
            <p class="blogSingle__name">
              <?php the_field('feature_company'); ?>
            </p>
            <?php } ?>
            <?php if( get_field('feature_copy') ) { ?>
            <p class="blogSingle__copy">
              <?php the_field('feature_copy'); ?>
            </p>
            <?php } ?>
            <time class="blogSingle_time">掲載日：<?php the_time('Y年m月d日'); ?></time>
          </header>
        </div>
      </div>
      <div class="c-container">
        <div class="blogSigle-post">
            <div class="post__body c-postArea"><?php the_content(); ?></div>
          <div class="c-button  button-type-list"><a href="<?php echo home_url(); ?>/blog">一覧に戻る</a></div>
        </div>
        <?php get_sidebar('blog'); ?>
      </div>
    </article>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>