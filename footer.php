<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>

	</div><!-- #content -->

	<div class="margin-for-footer"></div>
	<footer id="colophon" class="site-footer">
    <div class="footer-container flex-row">
      <div class="footer-left flex1">
        <p>
					<h5 class="color: white;">&copy; <?php the_time('Y') ?>All rights reserved. Toronto-Astrology</h5>
				</p>
      </div>

			<!-- Social media -->
				<div class="footer-right flex1">
						<a href="">
							<img id="picf" src="<?php echo get_template_directory_uri(); ?>/images/toronto-astrology-facebook.png" alt="">
						</a>
						<a href="">
							<img id="picf" src="<?php echo get_template_directory_uri(); ?>/images/toronto-astrology-youtube-icon.png" alt="">
						</a>
	      </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
