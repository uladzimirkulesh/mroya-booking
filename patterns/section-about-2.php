<?php
/**
 * Title: About section (style 2)
 * Slug: mroya-booking/section-about-2
 * Categories: mroya_sections_about
 * Description: Displays about heading, text and advantages list.
 * Keywords: section, about
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'About (style 2)', 'Name for the About section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--about-2","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30","top":"2rem"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--about-2" id="section-about-2" style="margin-top:0;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Eckdaten', 'About section title', 'mroya-booking' ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__content","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Advantages', 'Name for the section advantages area', 'mroya-booking' ); ?>"},"className":"advantages","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<div class="wp-block-group advantages">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the section advantages item area', 'mroya-booking' ); ?>"},"className":"advantages__item","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"2rem"}},"border":{"left":{"color":"var:preset|color|accent-6","style":"solid","width":"2px"},"top":{},"right":{},"bottom":{}}},"layout":{"type":"constrained","contentSize":"340px","justifyContent":"left","wideSize":"100%"}} -->
			<div class="wp-block-group advantages__item" style="border-left-color:var(--wp--preset--color--accent-6);border-left-style:solid;border-left-width:2px;padding-top:0.5rem;padding-bottom:0.5rem;padding-left:2rem">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"medium"} -->
				<p class="has-accent-5-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( '37 m2', 'Advantages item title', 'mroya-booking' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size"><?php echo esc_html_x( 'Ein heller Raum mit Weite und Blick auf die Drei Schwestern.', 'Advantages item text', 'mroya-booking' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the section advantages item area', 'mroya-booking' ); ?>"},"className":"advantages__item","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"2rem"}},"border":{"left":{"color":"var:preset|color|accent-6","style":"solid","width":"2px"},"top":{},"right":{},"bottom":{}}},"layout":{"type":"constrained","contentSize":"340px","justifyContent":"left","wideSize":"100%"}} -->
			<div class="wp-block-group advantages__item" style="border-left-color:var(--wp--preset--color--accent-6);border-left-style:solid;border-left-width:2px;padding-top:0.5rem;padding-bottom:0.5rem;padding-left:2rem">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"medium"} -->
				<p class="has-accent-5-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Bis zu 12 Personen', 'Advantages item title', 'mroya-booking' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size"><?php echo esc_html_x( 'Von fokussierten Meetings bis zu lebendigen Workshops.', 'Advantages item text', 'mroya-booking' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the section advantages item area', 'mroya-booking' ); ?>"},"className":"advantages__item","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"2rem"}},"border":{"left":{"color":"var:preset|color|accent-6","style":"solid","width":"2px"},"top":{},"right":{},"bottom":{}}},"layout":{"type":"constrained","contentSize":"340px","justifyContent":"left","wideSize":"100%"}} -->
			<div class="wp-block-group advantages__item" style="border-left-color:var(--wp--preset--color--accent-6);border-left-style:solid;border-left-width:2px;padding-top:0.5rem;padding-bottom:0.5rem;padding-left:2rem">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"medium"} -->
				<p class="has-accent-5-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Flexibel nutzbar', 'Advantages item title', 'mroya-booking' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size"><?php echo esc_html_x( 'Mit klappbaren Tischen, stapelbaren Stühlen und einem festen Sofabereich.', 'Advantages item text', 'mroya-booking' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Text Block', 'Name for the text block area', 'mroya-booking' ); ?>"},"className":"block--text","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<div class="wp-block-group block--text">
			<!-- wp:group {"style":{"layout":{"columnSpan":2},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"720px","wideSize":"100%","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xxx-large"} -->
				<p class="has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Für Meetings, die mehr sein sollen als ein Termin. Für Workshops, die Raum brauchen, um zu wirken. Für alle, die wissen: Die Umgebung entscheidet.', 'About section main text', 'mroya-booking' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>raum/"><?php echo esc_html_x( 'Jetzt buchen', 'About section button text', 'mroya-booking' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
