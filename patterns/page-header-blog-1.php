<?php
/**
 * Title: Blog page header (style 1)
 * Slug: mroya/page-header-blog-1
 * Description: Header section for blog pages.
 * Categories: mroya_page_header
 * Template Types: page-header-blog
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Blog page header (style 1)', 'Name for the Blog page header pattern', 'mroya' ); ?>"},"align":"wide","className":"page-header__inner--blog-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide page-header__inner--blog-1">
	<!-- wp:heading {"level":1,"align":"wide","className":"page-header__title","fontSize":"huge"} -->
	<h1 class="wp-block-heading alignwide page-header__title has-huge-font-size"><?php echo wp_kses_post( _x( 'Nur mit Aussicht.<br>Gedanken darüber, wie…', 'Blog page header title', 'mroya' ) ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"480px","wideSize":"100%","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"page-header__description","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
		<p class="page-header__description has-contrast-2-color has-text-color has-link-color" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Gedanken darüber, wie gute Meetings, besondere Veranstaltungen und Begegnungen mit Tiefe entstehen.', 'Blog page header text', 'mroya' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
