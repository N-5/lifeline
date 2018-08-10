<?php
/*
Template Name: blog
*/
?>


<?php get_header(); ?>

<?php query_posts('posts_per_page=10&paged='.$paged); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<?php the_time('Y年m月d日'); ?>
<?php the_content(); ?>

<?php endwhile; ?>
<?php else : ?>
    <div class="entry notfound">
        <p>記事が見つかりません</p>

    </div>
<?php endif; ?>		





<!-- pagenavi -->
<div class="tablenav"><?php global $wp_rewrite;
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
)); ?></div>
<!-- /pagenavi --> 	


<?php get_sidebar(blog); ?>



<?php get_footer(); ?>