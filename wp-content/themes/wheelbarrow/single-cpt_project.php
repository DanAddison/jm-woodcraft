<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wheelbarrow
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post() ?>

			<div class="single-project">

				<div class="wrapper">

					<?php 
						$gallery = get_field( 'project_gallery' );
						$featured = get_field( 'featured_image' );
						$images = get_field( 'project_gallery' );
					?>

					<?php if ( $gallery ) : ?>

					<div class="col-7-12">

						<div class="single-project__image">

							<?php foreach( $images as $image ) : ?>

							<div class="slide">
								<?php echo wp_get_attachment_image( $image['ID'], 'medium_large' ); ?>
							</div>

							<?php endforeach; ?>

						</div><!-- /.single-project__image -->

						<div class="single-project__gallery ">
							
							<?php foreach( $images as $image ) : ?>
							
							<div class="single-project__thumb ">
								<a href="#"><?php echo wp_get_attachment_image( $image['ID'], 'thumbnail' ); ?></a>
							</div>
							
							<?php endforeach; ?>
							
						</div>

					</div><!-- .col-1-2 -->

					<div class="col-5-12">
					
						<div class="single-project__info">
					
							<h2 class="title"><?php the_title(); ?></h2>
							<div class="copy">
								<?php the_content(); ?>
							</div>

							<?php if( has_term( '', 'ct_project_category' ) ) : ?>

							<div href="" class="project-categories">
								<p class="title">Project Categories:</p>
								<?php echo get_the_term_list( get_the_ID(), 'ct_project_category', '', ' &sol; ' ); ?>
							</div>

							<?php endif; ?>

							<?php if( has_term( '', 'ct_project_tag' ) ) : ?>

							<div href="" class="project-tags">
								<p class="title">Project Tags:</p>
								<?php echo get_the_term_list( get_the_ID(), 'ct_project_tag', '', ' &sol; ' ); ?>
							</div>

							<?php endif; ?>
					
						</div>
						
					</div><!-- .col-1-2 -->

					<?php else : ?>

					<div class="col-1-2">

						<div class="single-project__image">

							<?php $featured; ?>

						</div><!-- /.single-project__image -->

					</div><!-- .col-1-2 -->
						
					<div class="col-1-2">
						
						<div class="single-project__info">
							
							<h2 class="title"><?php the_title(); ?></h2>
							<div class="copy">
								<?php the_content(); ?>
							</div>
							
						</div>
						
					</div><!-- .col-1-2 -->

					<?php endif; ?>

				</div><!-- wrapper -->

			</div><!-- single-project -->
				
			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
