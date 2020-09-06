<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wheelbarrow
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="wrapper">

	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

		<div class="col-1-2">
			<div class="entry-content">
				<?php
					the_content(); ?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wheelbarrow' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>

		<?php if (get_field( 'contact_form' )) : ?>				
		<div class="col-1-2">
			<div class="contact-form">
				<?php the_field( 'contact_form' ); ?>
			</div>
		</div>
		<?php endif; ?>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
