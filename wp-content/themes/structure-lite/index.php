<?php
/**
 *
 * This template is used to display a blog. The content is displayed in post formats.
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

get_header(); ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="page-<?php the_ID(); ?>">

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .content -->
		<div class="content">

			<!-- BEGIN .home-blog -->
			<section class="home-blog">

			<?php if ( is_active_sidebar( 'sidebar-left' ) && is_active_sidebar( 'sidebar-blog' ) ) { ?>

				<!-- BEGIN .columns three -->
				<div class="columns three">

					<?php get_sidebar( 'left' ); ?>

				<!-- END .columns three -->
				</div>

				<!-- BEGIN .columns nine -->
				<div class="columns nine">

					<!-- BEGIN .post-area -->
					<div class="post-area middle">

						<?php get_template_part( 'content/loop', 'blog' ); ?>

					<!-- END .post-area -->
					</div>

				<!-- END .columns nine -->
				</div>

				<!-- BEGIN .columns four -->
				<div class="columns four">

					<?php get_sidebar( 'blog' ); ?>

				<!-- END .columns four -->
				</div>

			<?php } elseif ( is_active_sidebar( 'sidebar-left' ) && ! is_active_sidebar( 'sidebar-blog' ) ) { ?>

				<!-- BEGIN .columns four -->
				<div class="columns four">

					<?php get_sidebar( 'left' ); ?>

				<!-- END .columns four -->
				</div>

				<!-- BEGIN .columns twelve -->
				<div class="columns twelve">

					<!-- BEGIN .post-area -->
					<div class="post-area right">

						<?php get_template_part( 'content/loop', 'blog' ); ?>

					<!-- END .post-area -->
					</div>

				<!-- END .columns twelve -->
				</div>

			<?php } elseif ( ! is_active_sidebar( 'sidebar-left' ) && is_active_sidebar( 'sidebar-blog' ) ) { ?>

				<!-- BEGIN .columns twelve -->
				<div class="columns twelve">

					<!-- BEGIN .post-area -->
					<div class="post-area">

						<?php get_template_part( 'content/loop', 'blog' ); ?>

					<!-- END .post-area -->
					</div>

				<!-- END .columns twelve -->
				</div>

				<!-- BEGIN .columns four -->
				<div class="columns four">

					<?php get_sidebar( 'blog' ); ?>

				<!-- END .columns four -->
				</div>

			<?php } else { ?>

				<!-- BEGIN .sixteen columns -->
				<div class="sixteen columns">

					<!-- BEGIN .post-area no-sidebar -->
					<div class="post-area no-sidebar">

						<?php get_template_part( 'content/loop', 'blog' ); ?>

					<!-- END .post-area no-sidebar -->
					</div>

				<!-- END .sixteen columns -->
				</div>

			<?php } ?>

			<!-- END .home-blog -->
			</section>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .post class -->
</div>

<?php get_footer(); ?>
