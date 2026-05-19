<?php
/**
 * Title: Booking section (style 1)
 * Slug: mroya-booking/section-booking-1
 * Categories: mroya_sections_about
 * Description: Displays booking section.
 * Keywords: section, booking
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Booking (style 1)', 'Name for the Booking section pattern', 'mroya-booking' ); ?>"},"align":"full","className":"section section--booking-1","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30","top":"2rem"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--booking-1" id="section-booking-1" style="margin-top:0;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header">
		<!-- wp:heading {"fontSize":"xxx-large"} -->
		<h2 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html_x( 'Lage & Ausstattung', 'Booking section title', 'mroya-booking' ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya-booking' ); ?>"},"align":"wide","className":"section__content","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Amenities', 'Name for the section amenities area', 'mroya-booking' ); ?>"},"className":"amenities","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<div class="wp-block-group amenities">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the section amenities item area', 'mroya-booking' ); ?>"},"className":"amenities__item","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"2rem"}},"border":{"left":{"color":"var:preset|color|accent-6","style":"solid","width":"2px"},"top":{},"right":{},"bottom":{}}},"layout":{"type":"constrained","contentSize":"340px","justifyContent":"left","wideSize":"100%"}} -->
			<div class="wp-block-group amenities__item" style="border-left-color:var(--wp--preset--color--accent-6);border-left-style:solid;border-left-width:2px;padding-top:0.5rem;padding-bottom:0.5rem;padding-left:2rem">
				<!-- wp:list {"className":"is-style-list-style-2"} -->
				<ul class="wp-block-list is-style-list-style-2">
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Nähe zum Stadtzentrum', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'ÖV & Autobahn', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Öffentliche Parkplätze', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the section amenities item area', 'mroya-booking' ); ?>"},"className":"amenities__item","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"2rem"}},"border":{"left":{"color":"var:preset|color|accent-6","style":"solid","width":"2px"},"top":{},"right":{},"bottom":{}}},"layout":{"type":"constrained","contentSize":"340px","justifyContent":"left","wideSize":"100%"}} -->
			<div class="wp-block-group amenities__item" style="border-left-color:var(--wp--preset--color--accent-6);border-left-style:solid;border-left-width:2px;padding-top:0.5rem;padding-bottom:0.5rem;padding-left:2rem">
				<!-- wp:list {"className":"is-style-list-style-2"} -->
				<ul class="wp-block-list is-style-list-style-2">
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Barrierefrei', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Fahrstuhl', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Terrasse', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the section amenities item area', 'mroya-booking' ); ?>"},"className":"amenities__item","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"2rem"}},"border":{"left":{"color":"var:preset|color|accent-6","style":"solid","width":"2px"},"top":{},"right":{},"bottom":{}}},"layout":{"type":"constrained","contentSize":"340px","justifyContent":"left","wideSize":"100%"}} -->
			<div class="wp-block-group amenities__item" style="border-left-color:var(--wp--preset--color--accent-6);border-left-style:solid;border-left-width:2px;padding-top:0.5rem;padding-bottom:0.5rem;padding-left:2rem">
				<!-- wp:list {"className":"is-style-list-style-2"} -->
				<ul class="wp-block-list is-style-list-style-2">
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Flipchart', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Grosser Bildschirm', 'List item text', 'mroya-booking' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Booking Block', 'Name for the booking block area', 'mroya-booking' ); ?>"},"className":"block--booking","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<div class="wp-block-group block--booking">
			<!-- wp:group {"style":{"layout":{"columnSpan":2},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:html -->
				<script src="https://cdn.anny.co/widget/annyComponents.umd.latest.min.js"></script><a-resource-calendar base-url="https://anny.co" locale="de" resource="dreischwestern" placeholder-title="Drei Schwestern" calendar-view="week" fullscreen="true" primary-color="#874efe" secondary-color="#ffffff" primary-color-rgb="135, 78, 254" primary-color-hover="#9c6cfe" panel-background-rgb="254, 252, 221" primary-color-overlay="rgba(135, 78, 254, 0.14)" secondary-inverted-color="#000000"></a-resource-calendar>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"layout":{"columnSpan":1},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:html -->
				<a-resource-booking-panel base-url="https://anny.co" locale="de" resource="dreischwestern" placeholder-title="Drei Schwestern" primary-color="#874efe" secondary-color="#ffffff" primary-color-rgb="135, 78, 254" primary-color-hover="#9c6cfe" panel-background-rgb="254, 252, 221" primary-color-overlay="rgba(135, 78, 254, 0.14)" secondary-inverted-color="#000000"></a-resource-booking-panel>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
