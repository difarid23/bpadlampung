<?php
/**
 * This template is used when no content is present.
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

?>

<!-- BEGIN .no-results -->
<div class="no-results">

	<h1 class="headline"><?php esc_html_e( 'No Results Found', 'structure-lite' ); ?></h1>
	<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching will help.', 'structure-lite' ); ?></p>
	<div class="no-result-search"><?php get_template_part( 'searchform' ); ?></div>

<!-- END .no-results -->
</div>
