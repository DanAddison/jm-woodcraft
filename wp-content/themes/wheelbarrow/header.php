<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wheelbarrow
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- favicons via http://realfavicongenerator.net/ -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon_package/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon_package/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon_package/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon_package/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- cookie consent provided by https://github.com/insites/cookieconsent: -->
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
	<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
		"palette": {
			"popup": {
				"background": "#383b75"
			},
			"button": {
				"background": "#f1d600"
			}
		},
		"theme": "classic",
		"content": {
			"href": "https://jm-woodcraft.com/privacy-policy"
		}
	})});
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wheelbarrow' ); ?></a>
	<!-- for screen readers to not have to tab through all nav items etc -->

	<?php if ( is_front_page()  ) : ?>
		<figure class="header-image">
			<?php the_header_image_tag(); ?>
		</figure><!--header image using parameters set in /inc/custom-header.php -->
	<?php endif; ?> <!--//end frontpage check - if you want header image on every page then just delete this if statement that surrounds the <figure> element  -->

	<header id="masthead" class="site-header">
		<div class="wrapper">
			<div class="site-branding">
				<?php the_custom_logo();?>
			
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="header-navigation" class="header-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="icon-menu"></i><i class="icon-cross"></i></button>
				<div class="menu-container">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>

					<?php if(get_theme_mod('wheelbarrow_instagram') != ''): ?>
					<div class="social-icons">
						<a target="_blank" href="<?php echo get_theme_mod('wheelbarrow_instagram'); ?>">
							<i class="icon-instagram"></i>
						</a>
					</div>
					<?php endif; ?>

				</div>
			</nav><!-- #site-navigation -->
		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
