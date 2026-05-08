<?php
/**
 * Title: Hero section (style 5)
 * Slug: mroya-booking/section-hero-5
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
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Hero (style 5)', 'Name for the Hero section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--hero-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--hero-5" id="section-hero-5" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__content","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Left Block', 'Name for the section block area', 'mroya-booking' ); ?>"},"className":"section__block--left","style":{"layout":{"columnSpan":3},"spacing":{"padding":{"right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group section__block--left" style="padding-right:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":1,"fontSize":"huge"} -->
			<h1 class="wp-block-heading has-huge-font-size"><?php echo esc_html_x( 'Eventraum für Workshops & Meetings. Für Formate, die mehr brauchen als vier Wände.', 'Hero section title', 'mroya-booking' ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Right Block', 'Name for the section block area', 'mroya-booking' ); ?>"},"className":"section__block--right","style":{"layout":{"columnSpan":1}},"layout":{"type":"constrained","contentSize":"320px","wideSize":"100%","justifyContent":"right"}} -->
		<div class="wp-block-group section__block--right">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Für Austausch, Zusammenarbeit und Begegnung - in Buchs (SG).', 'Hero section text', 'mroya-booking' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>raum/"><?php echo esc_html_x( 'Verfügbarkeit prüfen', 'Hero section button text', 'mroya-booking' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
