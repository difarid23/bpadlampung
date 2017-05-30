<?php
/**
 * Theme customizer sanitization
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

/**
 * Sanitize Categories.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_categories( $input ) {
	$categories = get_terms( 'category', array( 'fields' => 'ids', 'get' => 'all' ) );

	if ( in_array( $input, $categories, true ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Sanitize Pages.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_pages( $input ) {
	$pages = get_all_page_ids();

	if ( in_array( $input, $pages, true ) ) {
			return $input;
	} else {
		return '';
	}
}

/**
 * Sanitize Alignment.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_align( $input ) {
	 $valid = array(
			 'left' 		=> esc_html__( 'Left Align', 'structure-lite' ),
			 'center' 		=> esc_html__( 'Center Align', 'structure-lite' ),
			 'right' 	=> esc_html__( 'Right Align', 'structure-lite' ),
	 );

	 if ( array_key_exists( $input, $valid ) ) {
			 return $input;
		} else {
			 return '';
		}
}

/**
 * Sanitize Checkboxes.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Sanitize Text Input.
 *
 * @param array $input Sanitizes user input.
 * @return array
 */
function structure_lite_sanitize_text( $input ) {
	 return wp_kses_post( force_balance_tags( $input ) );
}
