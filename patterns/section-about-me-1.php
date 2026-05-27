<?php
/**
 * Title: About me section (style 1)
 * Slug: mroya-booking/section-about-me-1
 * Categories: mroya_sections_about
 * Description: Displays about me information.
 * Keywords: section, about
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'About me section (style 1)', 'Name for the About me section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--about-me-1","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"2rem","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"anchor":"section-about-me-1"} -->
<section class="wp-block-group alignfull section section--about-me-1" id="section-about-me-1" style="margin-top:0;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__content","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"100%","metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}}} -->
			<div class="wp-block-column" style="flex-basis:100%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%">
				<!-- wp:group {"className":"block--text","layout":{"type":"default"}} -->
				<div class="wp-block-group block--text">
					<!-- wp:heading {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"normal"} -->
					<h2 class="wp-block-heading is-style-default has-accent-5-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'Mein Warum', 'About me section title', 'mroya-booking' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"section__text","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} -->
					<p class="section__text has-x-large-font-size" style="font-style:normal;font-weight:400"><?php echo esc_html_x( 'Ich glaube an die Wirkung guter Räume. An Orte, die Klarheit schaffen, Zusammenarbeit stärken und neue Gedanken in Bewegung bringen. Räume, die inspirieren, ohne laut zu sein und die sich leicht anfühlen, selbst mitten im Deep Work.', 'About me section text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"section__text","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} -->
					<p class="section__text has-x-large-font-size" style="font-style:normal;font-weight:400"><?php echo esc_html_x( 'Mit den Drei Schwestern wollte ich einen Rahmen schaffen, der Fokus, Atmosphäre und gute Zusammenarbeit verbindet. Inspiriert vom Blick auf die Berge und von der Idee, dass gute Dinge dort entstehen, wo Menschen gerne zusammenkommen.', 'About me section text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%">
				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Skills block', 'Name for the skills block area', 'mroya-booking' ); ?>"},"className":"block--skills","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group block--skills">
					<!-- wp:heading {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"normal"} -->
					<h2 class="wp-block-heading is-style-default has-accent-5-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'Meine Superkräfte', 'Skills block title', 'mroya-booking' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Skills list', 'Name for the skills list area', 'mroya-booking' ); ?>"},"className":"skills-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"blockGap":"0"}},"textColor":"contrast","fontSize":"medium","layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list has-contrast-color has-text-color has-link-color has-medium-font-size">
						<!-- wp:separator {"className":"is-style-wide skills-list__separator","backgroundColor":"accent-6"} -->
						<hr class="wp-block-separator has-text-color has-accent-6-color has-alpha-channel-opacity has-accent-6-background-color has-background is-style-wide skills-list__separator"/>
						<!-- /wp:separator -->

						<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Skills item', 'Name for the skills item area', 'mroya-booking' ); ?>"},"className":"skills-list__item","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group skills-list__item" style="margin-top:0;padding-top:0.75rem;padding-bottom:0.75rem">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Magic Moments schaffen', 'Skills block item title', 'mroya-booking' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:separator {"className":"is-style-wide skills-list__separator","backgroundColor":"accent-6"} -->
						<hr class="wp-block-separator has-text-color has-accent-6-color has-alpha-channel-opacity has-accent-6-background-color has-background is-style-wide skills-list__separator"/>
						<!-- /wp:separator -->

						<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Skills item', 'Name for the skills item area', 'mroya-booking' ); ?>"},"className":"skills-list__item","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group skills-list__item" style="margin-top:0;padding-top:0.75rem;padding-bottom:0.75rem">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Bedürfnisse mitdenken', 'Skills block item title', 'mroya-booking' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:separator {"className":"is-style-wide skills-list__separator","backgroundColor":"accent-6"} -->
						<hr class="wp-block-separator has-text-color has-accent-6-color has-alpha-channel-opacity has-accent-6-background-color has-background is-style-wide skills-list__separator"/>
						<!-- /wp:separator -->

						<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Skills item', 'Name for the skills item area', 'mroya-booking' ); ?>"},"className":"skills-list__item","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group skills-list__item" style="margin-top:0;padding-top:0.75rem;padding-bottom:0.75rem">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Wachstum ermöglichen', 'Skills block item title', 'mroya-booking' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:separator {"className":"is-style-wide skills-list__separator","backgroundColor":"accent-6"} -->
						<hr class="wp-block-separator has-text-color has-accent-6-color has-alpha-channel-opacity has-accent-6-background-color has-background is-style-wide skills-list__separator"/>
						<!-- /wp:separator -->

						<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Skills item', 'Name for the skills item area', 'mroya-booking' ); ?>"},"className":"skills-list__item","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group skills-list__item" style="margin-top:0;padding-top:0.75rem;padding-bottom:0.75rem">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Kostbarkeiten entdecken', 'Skills block item title', 'mroya-booking' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:separator {"className":"is-style-wide skills-list__separator","backgroundColor":"accent-6"} -->
						<hr class="wp-block-separator has-text-color has-accent-6-color has-alpha-channel-opacity has-accent-6-background-color has-background is-style-wide skills-list__separator"/>
						<!-- /wp:separator -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"100%","metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}}} -->
			<div class="wp-block-column" style="flex-basis:100%"></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
