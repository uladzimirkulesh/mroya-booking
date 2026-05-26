<?php
/**
 * Title: Information section (style 2)
 * Slug: mroya-booking/section-information-2
 * Categories: mroya_sections_other
 * Description: Displays text blocks.
 * Keywords: section, information
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Information (style 2)', 'Name for the Information section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--information-2","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"2rem"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"accent-4","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--information-2 has-accent-4-background-color has-background" id="section-information-2" style="margin-top:0;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__content","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Text block (left)', 'Name for the text block area', 'mroya-booking' ); ?>"},"className":"block--text-left","style":{"layout":{"columnSpan":2},"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group block--text-left" style="padding-right:var(--wp--preset--spacing--20)">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo esc_html_x( 'Wichtig zu wissen', 'Text block title', 'mroya-booking' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:list {"className":"is-style-list-style-3"} -->
				<ul class="wp-block-list is-style-list-style-3">
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'In das Mietzeitfenster ist die Zeit fürs Einrichten und Aufräumen des eigenen Materials einzuplanen.', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Add-ons wie Moderationskoffer, zusätzliches Flipchartpapier können bei der Buchung im zweiten Schritt ausgewählt werden.', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Für jede Buchung gelten die AGBs (inkl. Nutzungsbedingungen) und die Datenschutzerklärung der Goldpurpur GmbH.', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Text block (right)', 'Name for the text block area', 'mroya-booking' ); ?>"},"className":"block--text-right","layout":{"type":"default"}} -->
		<div class="wp-block-group block--text-right">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo esc_html_x( 'Preise (exkl. MwSt.)', 'Text block title', 'mroya-booking' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-list-style-3"} -->
			<ul class="wp-block-list is-style-list-style-3">
				<!-- wp:list-item -->
				<li><?php echo esc_html_x( 'Pro Stunde: 58 CHF', 'List item text', 'mroya-booking' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html_x( '4 Stunden: 208 CHF', 'List item text', 'mroya-booking' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html_x( '6 Stunden: 300 CHF', 'List item text', 'mroya-booking' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html_x( '8 Stunden: 384 CHF', 'List item text', 'mroya-booking' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
