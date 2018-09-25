<?php ?>
</div><!-- end barba-container-->
</div><!-- end barba-wrapper-->
<div class="c-fixlist">
  <div class="fixlist_item"><a href="<?php echo home_url(); ?>/entry/?post_id=<?php echo $post->ID; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fix_menu_01.jpg" alt="簡単１分応募"></a></div>
  <div class="fixlist_item"><a href="tel:0762918001"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fix_menu_02.jpg" alt="石川県の方はこちら"></a></div>
  <div class="fixlist_item"><a href="tel:0776433000"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fix_menu_03.jpg" alt="福井県の方はこちら"></a></div>
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