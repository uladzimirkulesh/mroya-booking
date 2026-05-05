<?php
/**
 * Title: Footer links
 * Slug: mroya/footer-links
 * Description: Footer links section.
 * Categories: footer
 * Post Types: wp_template, wp_template_part, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Footer Links', 'Name for the Footer links pattern', 'mroya-booking' ); ?>"},"align":"wide","className":"footer__links","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide footer__links has-small-font-size" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:500">
	<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} /-->

	<!-- wp:social-links {"openInNewTab":true,"showLabels":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"1rem"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<ul class="wp-block-social-links has-small-icon-size has-visible-labels">
		<!-- wp:social-link {"url":"#","service":"instagram","label":"<?php echo esc_html_x( 'Instagram', 'Label for the footer social link', 'mroya-booking' ); ?>"} /-->
		<!-- wp:social-link {"url":"#","service":"linkedin","label":"<?php echo esc_html_x( 'LinkedIn', 'Label for the footer social link', 'mroya-booking' ); ?>"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
