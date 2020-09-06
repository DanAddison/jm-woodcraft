<?php
/**
 * The template for displaying archive pages
 * 
 * I can use this for the blog 'Home' page to point to, and also for a Categories archive page, if I want category archive pages to display summaries of posts exactly the same way as the blog home page.
 * 
 * (If you don't have a category.php file then WP will next look to this archive.php file)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wheelbarrow
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<!-- <header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header> -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<article class="archive__post">
				<div class="archive__post-thumbnail">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail ('custom_thumb')?></a>
				</div>
				<div class="archive__post-summary">
				<h1 class="archive__post-date">
					<?php the_time('jS \o\f F, Y'); ?>
				</h1>
					<h1 class="archive__post-summary-title"><?php the_title() ?></h1>
					<div class="archive__post-summary-excerpt"><?php the_excerpt ()?></div>
					<footer class="archive__post-footer">
						<?php wheelbarrow_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</div>
			</article>

			<?php

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- #content -->

<?php
get_sidebar();
get_footer();
