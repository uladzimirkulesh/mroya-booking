<?php
/**
 * Title: Information section (style 1)
 * Slug: mroya-booking/section-information-1
 * Categories: mroya_sections_about
 * Description: Displays map and working hours.
 * Keywords: section, about, adress, working hours
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Information (style 1)', 'Name for the Information section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--information-1","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","top":"2rem"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--information-1" id="section-information-1" style="margin-top:0;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__content","style":{"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|10","top":"2rem"}}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__content" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Adress', 'Name for the adress block area', 'mroya-booking' ); ?>"},"className":"block--adress","style":{"layout":{"columnSpan":3},"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group block--adress" style="padding-right:var(--wp--preset--spacing--20)">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo esc_html_x( 'Adresse', 'Adress block title', 'mroya-booking' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:html -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.6059418302975!2d9.477903876552336!3d47.16557167115283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479b31b7e74ef6ed%3A0xfe1c83b6778fef6c!2zRmljaHRlbndlZyAxMCwgOTQ3MCBCdWNocywg0KjQstC10LnRhtCw0YDQuNGP!5e0!3m2!1sru!2scz!4v1778081346179!5m2!1sru!2scz" width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<!-- /wp:html -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
			<p class="has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x( 'Adresse: Fichtenweg 10, 9470 Buchs SG.', 'Adress block text', 'mroya-booking' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Working Hours', 'Name for the working hours block area', 'mroya-booking' ); ?>"},"className":"block--working-hours","layout":{"type":"default"}} -->
		<div class="wp-block-group block--working-hours">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo esc_html_x( 'Öffnungszeiten', 'Working hours block title', 'mroya-booking' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.625rem"}},"layout":{"type":"constrained","contentSize":"260px","wideSize":"100%","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'Montag', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( '07:00 bis 23:00', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'Dienstag', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( '07:00 bis 23:00', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'Mittwoch', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( '07:00 bis 23:00', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'Donnerstag', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( '07:00 bis 23:00', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'Freitag', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( '07:00 bis 23:00', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'Samstag', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( '07:00 bis 23:00', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'Sonntag', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( '07:00 bis 23:00', 'Working hours block text', 'mroya-booking' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
