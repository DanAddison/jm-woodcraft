<?php
/**
 * The footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wheelbarrow
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<section id="footer-widget-area" class="widget-area footer-widgets">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</section>