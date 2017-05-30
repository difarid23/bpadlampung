<?php
/**
 * Google Fonts Implementation
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

/**
 * Register Google Font URLs
 *
 * @since Structure Lite 1.0
 */
function structure_lite_fonts_url() {
	$fonts_url = '';

	/*
	Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/

	$archivo_narrow = _x( 'on', 'Archivo Narrow font: on or off', 'structure-lite' );
	$raleway = _x( 'on', 'Raleway font: on or off', 'structure-lite' );
	$roboto = _x( 'on', 'Roboto font: on or off', 'structure-lite' );
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'structure-lite' );
	$montserrat = _x( 'on', 'Montserrat font: on or off', 'structure-lite' );
	$droid_serif = _x( 'on', 'Droid Serif font: on or off', 'structure-lite' );
	$cabin = _x( 'on', 'Cabin font: on or off', 'structure-lite' );
	$lato = _x( 'on', 'Lato font: on or off', 'structure-lite' );

	if ( 'off' !== $archivo_narrow || 'off' !== $raleway || 'off' !== $roboto || 'off' !== $open_sans || 'off' !== $montserrat || 'off' !== $droid_serif || 'off' !== $cabin || 'off' !== $lato ) {

		$font_families = array();

		if ( 'off' !== $archivo_narrow ) {
			$font_families[] = 'Archivo Narrow:400,400i,700,700i';
		}

		if ( 'off' !== $raleway ) {
			$font_families[] = 'Raleway:400,200,300,800,700,500,600,900,100';
		}

		if ( 'off' !== $roboto ) {
			$font_families[] = 'Roboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic';
		}

		if ( 'off' !== $open_sans ) {
			$font_families[] = 'Open Sans:400,300,600,700,800,800italic,700italic,600italic,400italic,300italic';
		}

		if ( 'off' !== $montserrat ) {
			$font_families[] = 'Montserrat:400,700';
		}

		if ( 'off' !== $droid_serif ) {
			$font_families[] = 'Droid Serif:400,400italic,700,700italic';
		}

		if ( 'off' !== $cabin ) {
			$font_families[] = 'Cabin:400,400italic,500,500italic,600,600italic,700,700italic';
		}

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue Google Fonts on Front End
 *
 * @since Structure Lite 1.0
 */
function structure_lite_scripts_styles() {
	wp_enqueue_style( 'structure-fonts', structure_lite_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'structure_lite_scripts_styles' );

/**
 * Add Google Scripts for use with the editor
 *
 * @since Structure Lite 1.0
 */
function structure_lite_editor_styles() {
	add_editor_style( array( 'style.css', structure_lite_fonts_url() ) );
}
add_action( 'after_setup_theme', 'structure_lite_editor_styles' );
