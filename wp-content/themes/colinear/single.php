<?php
/**
 * The template for displaying all single posts.
 *
 * @package Colinear
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'colinear' ) . '</span> ' . '<span class="screen-reader-text">' . esc_html__( 'Next post:', 'colinear' ) . '</span> ' . '<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'colinear' ) . '</span> ' . '<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'colinear' ) . '</span> ' . '<span class="post-title">%title</span>',
		) );
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
