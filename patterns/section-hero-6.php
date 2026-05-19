<?php
/**
 * Title: Hero section (style 6)
 * Slug: mroya-booking/section-hero-6
 * Categories: mroya_sections_hero
 * Description: Displays the hero info.
 * Keywords: section, hero
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Hero (style 6)', 'Name for the Hero section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--hero-6","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--hero-6" id="section-hero-6" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__content","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Left Block', 'Name for the section block area', 'mroya-booking' ); ?>"},"className":"section__block--left","style":{"layout":{"columnSpan":3},"spacing":{"padding":{"right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group section__block--left" style="padding-right:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":1,"fontSize":"huge"} -->
			<h1 class="wp-block-heading has-huge-font-size"><?php echo esc_html_x( 'Raum buchen und hereinspazieren. Für Meetings, auf die man sich freut.', 'Hero section title', 'mroya-booking' ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Right Block', 'Name for the section block area', 'mroya-booking' ); ?>"},"className":"section__block--right","style":{"layout":{"columnSpan":1}},"layout":{"type":"constrained","contentSize":"320px","wideSize":"100%","justifyContent":"right"}} -->
		<div class="wp-block-group section__block--right">
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php echo esc_html_x( 'Für Tage, die inspiriert statt erschöpft enden.', 'Hero section text', 'mroya-booking' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
