<?php
/**
 * Title: Gallery section (style 1)
 * Slug: mroya-booking/section-gallery-1
 * Categories: mroya_sections_other
 * Description: Displays gallery.
 * Keywords: section, gallery
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Gallery (style 1)', 'Name for the gallery section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--gallery-1","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--gallery-1" id="section-gallery-1" style="margin-top:0">
	<!-- wp:gallery {"columns":4,"linkTo":"lightbox","aspectRatio":"1","align":"wide","className":"is-style-gallery-style-1","style":{"spacing":{"blockGap":{"top":"0.75rem","left":"0.75rem"}}}} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-4 is-cropped is-style-gallery-style-1">
		<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.webp' ); ?>" alt="" style="aspect-ratio:1"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.webp' ); ?>" alt="" style="aspect-ratio:1"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.webp' ); ?>" alt="" style="aspect-ratio:1"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.webp' ); ?>" alt="" style="aspect-ratio:1"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</section>
<!-- /wp:group -->
