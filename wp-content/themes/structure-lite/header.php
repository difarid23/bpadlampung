<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="wrap">
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- BEGIN #wrapper -->
<div id="wrapper">

	<!-- BEGIN #header -->
	<div id="header">

		<!-- BEGIN #nav-bar -->
		<section id="nav-bar">

			<!-- BEGIN .row -->
			<div class="row">

				<!-- BEGIN .content -->
				<div class="content">

					<!-- BEGIN .mobile-nav-holder -->
					<div class="mobile-nav-holder">

						<?php structure_lite_custom_logo(); ?>

						<?php if ( has_nav_menu( 'main-menu' ) ) { ?>

							<button class="menu-toggle">
								<svg class="icon-menu-open" version="1.1" id="icon-open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
									<rect y="2" width="24" height="2"/>
									<rect y="11" width="24" height="2"/>
									<rect y="20" width="24" height="2"/>
								</svg>
								<svg class="icon-menu-close" version="1.1" id="icon-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<rect x="0" y="11" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 12 28.9706)" width="24" height="2"/>
								<rect x="0" y="11" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 28.9706 12)" width="24" height="2"/>
								</svg>
							</button>

						<!-- END .mobile-nav-holder -->
						</div>

						<!-- BEGIN #navigation -->
						<nav id="navigation" class="clearfix navigation-main">

							<?php
								wp_nav_menu( array(
									'theme_location'		=> 'main-menu',
									'title_li'					=> '',
									'depth'							=> 4,
									'fallback_cb'			 	=> 'wp_page_menu',
									'container_class' 	=> '',
									'menu_class'				=> 'menu',
									)
								);
							?>

						<!-- END #navigation -->
						</nav>

						<?php } elseif ( current_user_can( 'publish_posts' ) ) { ?>

							<!-- END .mobile-nav-holder -->
							</div>

							<!-- BEGIN #navigation -->
							<nav id="navigation" class="clearfix navigation-main">

								<p class="instruction"><?php printf( wp_kses( __( 'Create a Custom Navigation Menu <a href="%1$s">here</a>.', 'structure-lite' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'nav-menus.php' ) ) ); ?></p>

							<!-- END #navigation -->
							</nav>

					<?php } else { ?>

						<!-- END .mobile-nav-holder -->
						</div>

					<?php } ?>

				<!-- END .content -->
				</div>

			<!-- END .row -->
			</div>

		<!-- END #nav-bar -->
		</section>

		<?php if ( is_home() || is_archive() || is_search() || is_attachment() ) { ?>

		<!-- BEGIN #header-title -->
		<section id="header-title">

			<!-- BEGIN .row -->
			<div class="row">

				<?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) { ?>

					<div id="custom-header" style="background-image: url(<?php header_image(); ?>);">

						<div id="masthead" class="vertical-center">
							<p class="site-description">
								<?php echo html_entity_decode( esc_html( get_bloginfo( 'description' ) ) ); ?>
							</p>
						</div>

						<img class="hide-img" src="<?php header_image(); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php echo esc_attr( get_bloginfo() ); ?>" />

					</div>

				<?php } else { ?>

					<!-- BEGIN .content -->
					<div class="content">

						<div id="custom-header">

							<div id="masthead">
								<p class="site-description">
									<?php echo html_entity_decode( esc_html( get_bloginfo( 'description' ) ) ); ?>
								</p>
							</div>

						</div>

					<!-- END .content -->
					</div>

				<?php } ?>

			<!-- END .row -->
			</div>

		<!-- END #header-title -->
		</section>

		<?php } ?>

	<!-- END #header -->
	</div>

	<!-- BEGIN .container -->
	<div class="container">
