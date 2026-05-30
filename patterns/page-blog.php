<?php
/**
 * Title: Blog page
 * Slug: mroya-booking/page-blog
 * Categories: mroya_pages
 * Keywords: blog, theme
 * Block Types: core/post-content
 * Post Types: post
 * Description: Blog page with sidebar and main content.
 * Viewport width: 1440
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Blog page', 'Name for the Blog page pattern', 'mroya-booking' ); ?>"},"align":"wide","className":"content-has-nav","layout":{"type":"grid","columnCount":4}} -->
<div class="wp-block-group alignwide content-has-nav">
	<!-- wp:group {"tagName":"aside","metadata":{"name":"<?php echo esc_html_x( 'Sidebar', 'Name for the page sidebar area', 'mroya-booking' ); ?>","blockVisibility":{"viewport":{"tablet":false,"mobile":false}}},"className":"entry-sidebar","layout":{"type":"constrained","justifyContent":"left"}} -->
	<aside class="wp-block-group entry-sidebar">
		<!-- wp:group {"className":"entry-sidebar__inner","style":{"position":{"type":"sticky","top":"0px"},"css":"top: calc(1.5rem + var(--wp-admin--admin-bar--position-offset, 0px)) !important;"},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group entry-sidebar__inner has-custom-css">
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:group -->
	</aside>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the page content area', 'mroya-booking' ); ?>"},"style":{"layout":{"columnSpan":3}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Proin quis lobortis elit. Vivamus vestibulum lorem sit amet scelerisque gravida. Nam fermentum consequat suscipit. Aenean eu finibus mauris, eget tempus nisi. Sed sit amet mauris dui. Sed faucibus dui vel mattis tempor. Sed semper ligula ut mollis accumsan. Duis vitae turpis congue, suscipit est ac, lacinia velit. Nunc ut massa sagittis, egestas nisl eget, viverra nisl. Duis iaculis dui non est tincidunt, vitae hendrerit erat fermentum. Phasellus tincidunt elit at volutpat feugiat.', 'Blog page text', 'mroya-booking' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Mauris egestas ante rutrum nibh fringilla fringilla. Pellentesque sodales nulla risus, eu sagittis elit ullamcorper vitae. Sed laoreet pharetra orci. Nam a consectetur ligula. Nunc auctor ante quis velit laoreet, id mattis nibh euismod. Cras maximus purus eu mauris ornare, eu congue orci pellentesque. Mauris tristique mi a dignissim lacinia.', 'Blog page text', 'mroya-booking' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"anchor":"heading-1"} -->
		<h2 id="heading-1" class="wp-block-heading"><?php echo esc_html_x( 'Heading 1', 'Blog page content title', 'mroya-booking' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Pellentesque a augue aliquet, imperdiet nibh quis, tempor nisl. Integer sit amet tellus ut ipsum posuere egestas id vitae risus. Sed posuere efficitur enim sit amet iaculis. Ut ac cursus mi. Aenean vitae risus congue ligula mollis imperdiet. Vivamus at turpis cursus, scelerisque magna at, fringilla purus. Fusce dui nulla, elementum et justo eget, ultrices faucibus orci. Morbi lacinia et velit sed faucibus. Duis fringilla ac purus sed commodo.', 'Blog page text', 'mroya-booking' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"anchor":"heading-2"} -->
		<h2 id="heading-2" class="wp-block-heading"><?php echo esc_html_x( 'Heading 2', 'Blog page content title', 'mroya-booking' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Donec sed ante nec metus interdum tempor quis eu odio. Mauris in lectus faucibus, finibus orci at, molestie arcu. Nunc porta odio aliquet accumsan luctus. Aliquam a eleifend est. Fusce venenatis interdum risus quis pharetra. Sed ornare leo in libero consectetur blandit.', 'Blog page text', 'mroya-booking' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"anchor":"heading-3"} -->
		<h2 id="heading-3" class="wp-block-heading"><?php echo esc_html_x( 'Heading 3', 'Blog page content title', 'mroya-booking' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Proin quis lobortis elit. Vivamus vestibulum lorem sit amet scelerisque gravida. Nam fermentum consequat suscipit. Aenean eu finibus mauris, eget tempus nisi. Sed sit amet mauris dui. Sed faucibus dui vel mattis tempor. Sed semper ligula ut mollis accumsan. Duis vitae turpis congue, suscipit est ac, lacinia velit. Nunc ut massa sagittis, egestas nisl eget, viverra nisl. Duis iaculis dui non est tincidunt, vitae hendrerit erat fermentum. Phasellus tincidunt elit at volutpat feugiat.', 'Blog page text', 'mroya-booking' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"anchor":"heading-4"} -->
		<h2 id="heading-4" class="wp-block-heading"><?php echo esc_html_x( 'Heading 4', 'Blog page content title', 'mroya-booking' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Proin quis lobortis elit. Vivamus vestibulum lorem sit amet scelerisque gravida. Nam fermentum consequat suscipit. Aenean eu finibus mauris, eget tempus nisi. Sed sit amet mauris dui. Sed faucibus dui vel mattis tempor. Sed semper ligula ut mollis accumsan. Duis vitae turpis congue, suscipit est ac, lacinia velit. Nunc ut massa sagittis, egestas nisl eget, viverra nisl. Duis iaculis dui non est tincidunt, vitae hendrerit erat fermentum. Phasellus tincidunt elit at volutpat feugiat.', 'Blog page text', 'mroya-booking' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
