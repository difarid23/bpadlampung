<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_Club
 */

?><?php
	/**
	 * Hook - business_club_action_doctype.
	 *
	 * @hooked business_club_doctype - 10
	 */
	do_action( 'business_club_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - business_club_action_head.
	 *
	 * @hooked business_club_head - 10
	 */
	do_action( 'business_club_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	/**
	 * Hook - business_club_action_before.
	 *
	 * @hooked business_club_page_start - 10
	 * @hooked business_club_skip_to_content - 15
	 */
	do_action( 'business_club_action_before' );
	?>

	<?php
	  /**
	   * Hook - business_club_action_before_header.
	   *
	   * @hooked business_club_add_top_head_content - 5
	   * @hooked business_club_header_start - 10
	   */
	  do_action( 'business_club_action_before_header' );
	?>
		<?php
		/**
		 * Hook - business_club_action_header.
		 *
		 * @hooked business_club_site_branding - 10
		 */
		do_action( 'business_club_action_header' );
		?>
	<?php
	  /**
	   * Hook - business_club_action_after_header.
	   *
	   * @hooked business_club_header_end - 10
	   * @hooked business_club_add_primary_navigation - 20
	   */
	  do_action( 'business_club_action_after_header' );
	?>

	<?php
	/**
	 * Hook - business_club_action_before_content.
	 *
	 * @hooked business_club_add_breadcrumb - 7
	 * @hooked business_club_content_start - 10
	 */
	do_action( 'business_club_action_before_content' );
	?>
	<?php
	  /**
	   * Hook - business_club_action_content.
	   */
	  do_action( 'business_club_action_content' );
