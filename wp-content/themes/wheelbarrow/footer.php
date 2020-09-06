<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wheelbarrow
 */

?>

	</div><!-- #content -->

	<?php get_sidebar ( 'footer' ); ?>

	<footer id="colophon" class="site-footer">

		<div class="wrapper">

			<div class="footer__basic">

				<div class="legal">
					<p class="copyright">&copy; <?php echo date('Y'); ?> JM Woodcraft</a></p>
					<p class="privacy"><a href="/privacy-policy">Privacy Policy</a></p>
				</div><!-- .legal -->
				
				<?php require get_stylesheet_directory() . '/inc/social-icons.php' ?>

				<div class="credit">
					<p>Website by <a href="https://danaddisoncreative.com/" target="_blank">Dan Addison</a></p>
				</div><!-- .credit -->

			</div><!-- .footer__basic -->

		</div><!-- wrapper -->
	
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
