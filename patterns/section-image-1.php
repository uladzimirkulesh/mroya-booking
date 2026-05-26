<?php
/**
 * Title: Image section (style 1)
 * Slug: mroya-booking/section-image-1
 * Categories: mroya_sections_other
 * Description: Displays the image.
 * Keywords: section, image
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Image section (style 1)', 'Name for the Image section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--image-1","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"},"anchor":"section-image-1"} -->
<section class="wp-block-group alignfull section section--image-1" id="section-image-1" style="margin-top:0">
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"full"} -->
	<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/placeholder.webp' ); ?>" alt=""/></figure>
	<!-- /wp:image -->
</section>
<!-- /wp:group -->
