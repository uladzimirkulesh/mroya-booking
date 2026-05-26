<?php
/**
 * Title: CTA section (style 1)
 * Slug: mroya-booking/section-cta-1
 * Categories: mroya_sections_other
 * Description: Displays CTA information.
 * Keywords: section, cta
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'CTA section (style 1)', 'Name for the CTA section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--cta-1","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"2rem"},"margin":{"top":"0"}}},"backgroundColor":"accent-4","layout":{"type":"constrained"},"anchor":"section-cta-1"} -->
<section class="wp-block-group alignfull section section--cta-1 has-accent-4-background-color has-background" id="section-cta-1" style="margin-top:0;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__content","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
		<div class="wp-block-columns" style="padding-top:0;padding-bottom:0">
			<!-- wp:column {"width":"100%","metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}}} -->
			<div class="wp-block-column" style="flex-basis:100%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%">
				<!-- wp:group {"style":{"layout":{"columnSpan":2},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xxx-large"} -->
					<p class="has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Warum fühlen sich manche Workshops leicht, inspirierend und verbindend an — und andere nicht? Gedanken über das Design von Events, Atmosphäre und echte Begegnung im Journal.', 'CTA section main text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>inspirationen/"><?php echo esc_html_x( 'Eintauchen', 'CTA section button text', 'mroya-booking' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
