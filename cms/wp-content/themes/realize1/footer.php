<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package realize1
 */

?>

    <!-- フッター -->
  <footer class="site-footer<?php if (!is_front_page() || !is_home()): ?> footer_sub<?php endif; ?>">
   <div class="footer-wrapper">
   <div class="footer-inner">
    <div class="footer-box">
     <img alt="phone icon" class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/f-phone.png"/>
     <div class="footer-label">
      PHONE
     </div>
     <div class="footer-text">
      TEL：078-336-5065 </div>
    </div>
	<div class="footer-box">
     <img alt="access icon" class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/f-access.png"/>
     <div class="footer-label">
      ACCESS
     </div>
     <div class="footer-text">
      〒650-0034
      <br/>
      神戸市中央区京町80
      <br/>
      クリエイト神戸 3F
     </div>
    </div>
    <div class="footer-box"><a href="<?php echo home_url(); ?>/contact/" style="color:white; text-decoration:none;">
     <img alt="contact icon" class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/f-mail.png"/>
     <div class="footer-label">
      CONTACT US
     </div>
     <div class="footer-text">
      お問い合わせ
     </div></a>
    </div>
   </div>
   </div>
	  <!--<div class="footer-instagram">
		   <a href="" target="_blank"><img alt="instagram icon" class="footer-icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/f-instagram.png"/></a>
	  </div>-->
	  <p class="copy">Copyright© 2025 REALiZE ONE Architecture Co., Ltd. All Rights Reserved.</p>
  </footer>
<?php if (is_front_page() || is_home()): ?>
</div>
<?php endif; ?>

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<?php wp_footer(); ?>

</body>
</html>
