<div class="c-fixlist">
  <ul class="fixlist">
    <li class="tel">
      <a href="javascript:void(0)" class="js-panel"><span>電話で求人相談</span></a>
      <div class="shop-list">
        <ul>
          <li><a href="tel:0120555807">石川県の方はこちら</a></li>
          <li><a href="tel:0120309555">福井県の方はこちら</a></li>
        </ul>
      </div>
    </li>
    <li class="entry">
      <a href="<?php echo home_url(); ?>/entry/?post_id=<?php echo $post->ID; ?>" class="js-panel"><span>簡単1分応募</span></a>
    </li>
  </ul>
</div>
</div><!-- end pageclass -->
</div><!-- end barba-container-->
</div><!-- end barba-wrapper-->

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