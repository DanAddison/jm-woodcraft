<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="wrapper">

					<?php 
						$gallery = get_field( 'carousel' );
						$images = get_field( 'carousel' );
					?>

					<?php if ( $gallery ) : ?>

					<div class="carousel">

						<?php foreach( $images as $image ) : ?>

						<div class="slide">
							<?php echo wp_get_attachment_image( $image['ID'], 'front-page-slider' ); ?>
						</div>

						<?php endforeach; ?>

					</div><!-- /.carousel -->

					<?php endif; ?>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					<?php if( ! empty( get_field( 'featured_projects' ) ) ) : ?>

					<div class="featured-projects">

						<h2>Featured Projects</h2>

						<div class="grid">

							<?php foreach( get_field( 'featured_projects' ) as $project ) : ?>

							<div class="col-4-12">
								<div class="project-archive-item">

									<?php echo wp_get_attachment_image( get_field( 'featured_image', $project->ID ), 'medium_large', false, array( 'class' => 'project__image' ) ); ?>

									<div class="project__overlay">

										<a href="<?php echo get_permalink( $project->ID ); ?>">
										
											<div class="project__overlay-info">
												<h1><?php echo get_the_title( $project->ID ); ?></h1>
											</div>

										</a>

									</div><!-- .project__overlay -->

								</div><!-- .project-archive-item -->
							</div><!-- cols -->

							<?php endforeach; ?>

						</div><!-- grid -->

					</div><!-- featured-projects -->

					<?php endif; ?>

				</div><!-- wrapper -->

			</article>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();