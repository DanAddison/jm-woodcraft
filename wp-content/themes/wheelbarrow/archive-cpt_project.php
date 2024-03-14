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

			<div class="wrapper">

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header>

				<?php 					
					$categories = array(
						'taxonomy'     => 'ct_project_category',
						'orderby'      => 'name',
						'show_count'   => false,
						'title_li'     => '',
					); ?>

				<div class="grid">

					<?php while ( have_posts() ) : the_post(); ?>

					<div class="col-3-12">
						<div class="project-archive-item">

							<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'medium_large', false, array( 'class' => 'project__image' ) ); ?>

							<div class="project__overlay">

								<a href="<?php the_permalink(); ?>">
								
									<div class="project__overlay-info">
										<h1><?php the_title(); ?></h1>
									</div>

								</a>

							</div><!-- project__overlay -->

						</div><!-- project-archive-item -->
					</div>
					
					<?php endwhile; ?>

				</div><!-- grid -->
				
				<?php the_posts_navigation(); ?>
								
				<?php		
				$tags = array(
					'taxonomy'     => 'ct_project_tag',
					'orderby'      => 'name',
					'show_count'   => false,
					'title_li'     => '',
					);
				?>
					
			</div><!-- wrapper -->
			

			<?php else :
				
			get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- #content -->

<?php
get_sidebar();
get_footer();
