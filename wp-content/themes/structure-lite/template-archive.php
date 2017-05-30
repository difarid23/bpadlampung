<?php
/**
Template Name: Archives
 *
 * This template is used to display site archives of posts, pages and categories.
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

get_header(); ?>

<?php $thumb = ( '' != get_the_post_thumbnail() ) ? wp_get_attachment_image_src( get_post_thumbnail_id(), 'structure-featured-large' ) : false; ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="page-<?php the_ID(); ?>">

	<?php if ( has_post_thumbnail() ) { ?>
		<!-- BEGIN .row -->
		<div class="row">
			<div class="feature-img page-banner" <style="background-image: url(<?php echo esc_url( $thumb[0] ); ?>);">
				<?php if ( '1' == get_theme_mod( 'display_img_title_page', '1' ) ) { ?>
					<div class="img-title vertical-center"><h1 class="headline"><?php the_title(); ?></h1></div>
				<?php } ?>
				<?php the_post_thumbnail( 'structure-featured-large' ); ?>
			</div>
		<!-- END .row -->
		</div>
	<?php } ?>

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .content -->
		<div class="content">

			<!-- BEGIN .sixteen columns -->
			<div class="sixteen columns">

				<!-- BEGIN .post-area full-width -->
				<div class="post-area full-width">

					<!-- BEGIN .page-holder -->
					<div class="page-holder">

						<!-- BEGIN .article -->
						<div class="article clearfix">

							<?php if ( ! has_post_thumbnail() || '' == get_theme_mod( 'display_img_title_page', '1' ) ) { ?>
								<h1 class="headline"><?php the_title(); ?></h1>
							<?php } ?>

							<div class="archive-column">
								<h6><?php esc_html_e( 'By Page:', 'structure-lite' ); ?></h6>
								<ul><?php wp_list_pages( 'title_li=' ); ?></ul>
							</div>

							<div class="archive-column">
								<h6><?php esc_html_e( 'By Post:', 'structure-lite' ); ?></h6>
								<ul><?php wp_get_archives( 'type=postbypost&limit=100' ); ?></ul>
							</div>

							<div class="archive-column last">
								<h6><?php esc_html_e( 'By Month:', 'structure-lite' ); ?></h6>
								<ul><?php wp_get_archives( 'type=monthly' ); ?></ul>
								<br />
								<h6><?php esc_html_e( 'By Category:', 'structure-lite' ); ?></h6>
								<ul><?php wp_list_categories( 'sort_column=name&title_li=' ); ?></ul>
							</div>

						<!-- END .article -->
						</div>

					<!-- END .page-holder -->
					</div>

				<!-- END .post-area full-width -->
				</div>

			<!-- END .sixteen columns -->
			</div>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .post class -->
</div>

<?php get_footer(); ?>
