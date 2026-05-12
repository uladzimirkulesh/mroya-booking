<?php
/**
 * Title: Booking page (style 1)
 * Slug: mroya-booking/page-booking-1
 * Categories: mroya_pages
 * Keywords: booking, starter
 * Block Types: core/post-content
 * Post Types: page
 * Description: Booking page with information text and widget.
 * Viewport width: 1440
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Booking Page (style 1)', 'Name for the booking page pattern', 'mroya-booking' ); ?>"},"align":"full","className":"page--booking-1","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull page--booking-1">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Booking Information', 'Name for the booking information area', 'mroya-booking' ); ?>"},"align":"wide","className":"booking__information","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide booking__information">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Subtitle', 'Name for the booking subtitle area', 'mroya-booking' ); ?>"},"className":"block--subtitle","layout":{"type":"constrained","contentSize":"1200px","justifyContent":"left","wideSize":"100%"}} -->
		<div class="wp-block-group block--subtitle">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2","fontSize":"huge"} -->
			<p class="has-accent-2-color has-text-color has-link-color has-huge-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Hereinspaziert - gib deinem Termin die passende Kulisse.', 'Booking page text', 'mroya-booking' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Text Block', 'Name for the booking text block area', 'mroya-booking' ); ?>"},"className":"block--text","layout":{"type":"constrained","justifyContent":"left","contentSize":"960px","wideSize":"100%"}} -->
		<div class="wp-block-group block--text">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}},"textColor":"accent-3","fontSize":"xx-large"} -->
			<p class="has-accent-3-color has-text-color has-link-color has-xx-large-font-size"><?php echo esc_html_x( 'Mal Bühne für grosse Visionen, mal Rückzugsort für klare Gedanken, mal Raum für inspirierende Begegnungen. Ein Raum, der sich deinem Format anpasst und in dem Ideen wachsen, Perspektiven sich weiten und Vorhaben neuen Schwung bekommen.', 'Booking page text', 'mroya-booking' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Booking Widget', 'Name for the booking widget area', 'mroya-booking' ); ?>"},"align":"full","className":"booking__widget","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull booking__widget">
		<!-- wp:html -->
		<script src="https://cdn.anny.co/widget/annyComponents.umd.latest.min.js"></script><a-resource-page base-url="https://anny.co" locale="de" resource="dreischwestern" placeholder-title="Drei Schwestern" hide-resource-header="false" hide-organization-header="false" primary-color="#874efe" secondary-color="#ffffff" primary-color-rgb="135, 78, 254" primary-color-hover="#9c6cfe" panel-background-rgb="254, 252, 221" primary-color-overlay="rgba(135, 78, 254, 0.14)" secondary-inverted-color="#000000" primary-background="#fefcdd" primary-background-rgb="251, 255, 211"></a-resource-page>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
