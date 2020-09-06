<?php
/**
 * wheelbarrow Theme Customizer
 *
 * @package wheelbarrow
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wheelbarrow_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'wheelbarrow_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'wheelbarrow_customize_partial_blogdescription',
		) );
	}

	// add social icons section to customizer
	$wp_customize->add_section( 'wheelbarrow_custom_social_icons_section', array(
			'title' => 'Social Icons'
		));

	$wp_customize->add_setting( 'wheelbarrow_email', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_facebook', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_instagram', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_linkedin', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_soundcloud', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_telephone', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_twitter', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_vimeo', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_youtube', array(
		'default' => ''
	));
	
	$wp_customize->add_control( 'wheelbarrow_email_control', array(
		'label' => 'Email URL',
		'settings' => 'wheelbarrow_email',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_facebook_control', array(
		'label' => 'Facebook URL',
		'settings' => 'wheelbarrow_facebook',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_instagram_control', array(
		'label' => 'Instagram URL',
		'settings' => 'wheelbarrow_instagram',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_linkedin_control', array(
		'label' => 'LinkedIn URL',
		'settings' => 'wheelbarrow_linkedin',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_soundcloud_control', array(
		'label' => 'Soundcloud URL',
		'settings' => 'wheelbarrow_soundcloud',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_telephone_control', array(
		'label' => 'Telephone',
		'settings' => 'wheelbarrow_telephone',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_twitter_control', array(
		'label' => 'Twitter URL',
		'settings' => 'wheelbarrow_twitter',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_vimeo_control', array(
		'label' => 'Vimeo URL',
		'settings' => 'wheelbarrow_vimeo',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_youtube_control', array(
		'label' => 'YouTube URL',
		'settings' => 'wheelbarrow_youtube',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

}

add_action( 'customize_register', 'wheelbarrow_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wheelbarrow_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wheelbarrow_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wheelbarrow_customize_preview_js() {
	wp_enqueue_script( 'wheelbarrow-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wheelbarrow_customize_preview_js' );
