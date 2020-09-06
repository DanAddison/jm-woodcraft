<?php
/**
 * DAN!! this displays the posts page 
 * ie. the blog home page 
 * ie. the summary of however many blog posts you set in admin
 * 
 * It's not the actual 'home' page, as in the front page of the site, unless you've set it to be! Usually not, most WP sites I build will not be blogs, first and foremost.
 * 
 * @package wheelbarrow
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

      /* Start the Loop over in archive.php 
      (because I want any category archive summary to display exactly the same way as the blog home page */
      get_template_part( 'archive' );

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
