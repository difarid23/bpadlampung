<?php
/**
 * Theme customizer with real-time update
 *
 * Very helpful: http://ottopress.com/2012/theme-customizer-part-deux-getting-rid-of-options-pages/
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

/**
 * Begin the customizer functions.
 *
 * @param array $wp_customize Returns classes and sanitized inputs.
 */
function structure_lite_theme_customizer( $wp_customize ) {

	get_template_part( 'customizer/customizer', 'controls' );

	get_template_part( 'customizer/customizer', 'sanitize' );

	/**
	 * Render the site title for the selective refresh partial.
	 *
	 * @since Structure Lite 1.0
	 * @see structure_lite_customize_register()
	 *
	 * @return void
	 */
	function structure_lite_customize_partial_blogname() {
		bloginfo( 'name' );
	}

	/**
	 * Render the site tagline for the selective refresh partial.
	 *
	 * @since Structure Lite 1.0
	 * @see structure_lite_customize_register()
	 *
	 * @return void
	 */
	function structure_lite_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}

	// Set site name and description text to be previewed in real-time.
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	// Set site title color to be previewed in real-time.
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector' => '.site-title a',
			'container_inclusive' => false,
			'render_callback' => 'structure_lite_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector' => '.site-description',
			'container_inclusive' => false,
			'render_callback' => 'structure_lite_customize_partial_blogdescription',
		) );
	}

	/*
	-------------------------------------------------------------------------------------------------------
		Site Title Section
	-------------------------------------------------------------------------------------------------------
	*/

		// Custom Display Tagline Option.
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_header_text', array(
			'label'			=> esc_html__( 'Display Site Tagline', 'structure-lite' ),
			'type'			=> 'checkbox',
			'section'		=> 'title_tagline',
			'settings'	=> 'header_textcolor',
			'priority'	=> 10,
		) ) );

		// Logo Align.
		$wp_customize->add_setting( 'structure_lite_logo_align', array(
				'default' 					=> 'left',
				'sanitize_callback'	=> 'structure_lite_sanitize_align',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'structure_lite_logo_align', array(
				'type'			=> 'radio',
				'label' 		=> esc_html__( 'Logo & Title Alignment', 'structure-lite' ),
				'section' 	=> 'title_tagline',
				'choices' 	=> array(
						'left' 		=> esc_html__( 'Left Align', 'structure-lite' ),
						'center' 	=> esc_html__( 'Center Align', 'structure-lite' ),
						'right' 	=> esc_html__( 'Right Align', 'structure-lite' ),
				),
				'priority' => 45,
		) ) );

		/*
		-------------------------------------------------------------------------------------------------------
			Theme Options Panel
		-------------------------------------------------------------------------------------------------------
		*/

		$wp_customize->add_panel( 'structure_lite_theme_options', array(
			'priority'				=> 1,
			'capability'			=> 'edit_theme_options',
			'theme_supports'	=> '',
			'title'						=> esc_html__( 'Theme Options', 'structure-lite' ),
			'description'			=> esc_html__( 'This panel allows you to customize specific areas of the theme.', 'structure-lite' ),
		) );

		/*
		-------------------------------------------------------------------------------------------------------
			Layout Options
		-------------------------------------------------------------------------------------------------------
		*/

		$wp_customize->add_section( 'structure_lite_layout_section' , array(
			'title'			=> esc_html__( 'Layout', 'structure-lite' ),
			'description' => esc_html__( 'Toggle the display and layout of various elements throughout the theme.', 'structure-lite' ),
			'priority'	=> 104,
			'panel'			=> 'structure_lite_theme_options',
		) );

		// Display Post Image Title Overlay.
		$wp_customize->add_setting( 'display_img_title_post', array(
			'default'						=> '1',
			'sanitize_callback'	=> 'structure_lite_sanitize_checkbox',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_img_title_post', array(
			'label'			=> esc_html__( 'Overlay Post Title On Featured Image?', 'structure-lite' ),
			'section'		=> 'structure_lite_layout_section',
			'settings'	=> 'display_img_title_post',
			'type'			=> 'checkbox',
			'priority'	=> 80,
		) ) );

		// Display Page Image Title Overlay.
		$wp_customize->add_setting( 'display_img_title_page', array(
			'default'						=> '1',
			'sanitize_callback'	=> 'structure_lite_sanitize_checkbox',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_img_title_page', array(
			'label'			=> esc_html__( 'Overlay Page Title On Featured Image?', 'structure-lite' ),
			'section'		=> 'structure_lite_layout_section',
			'settings'	=> 'display_img_title_page',
			'type'			=> 'checkbox',
			'priority'	=> 100,
		) ) );

}
add_action( 'customize_register', 'structure_lite_theme_customizer' );

/**
 * Binds JavaScript handlers to make Customizer preview reload changes
 * asynchronously.
 */
function structure_lite_customize_preview_js() {
	wp_enqueue_script( 'structure-customizer', get_template_directory_uri() . '/customizer/js/customizer.js', array( 'customize-preview' ), '4.0', true );
}
add_action( 'customize_preview_init', 'structure_lite_customize_preview_js' );
