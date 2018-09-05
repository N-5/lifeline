<?php ?>
</div><!-- end barba-container-->
</div><!-- end barba-wrapper-->
<div class="c-fixlist">
  <div class="fixlist_item"><a href="<?php echo home_url(); ?>/entry/?post_id=<?php echo $post->ID; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fix_menu_01.jpg" alt=""></a></div>
  <div class="fixlist_item"><a href="https://line.me/R/ti/p/c7-u3URgu1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fix_menu_02.jpg" alt=""></a></div>
</div>
<footer class="footer">
  <div class="c-pagetop"><span>PAGE TOP</span></div>
  <?php get_template_part('components/sitemap'); ?>
</footer>

<!-- wp_footer -->
<?php wp_footer(); ?>
<!-- /wp_footer -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/loading-min.js"></script>
</body>
</html>