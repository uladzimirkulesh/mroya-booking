/*-------------------------------------------------------
Blog page
-------------------------------------------------------*/

export function pageBlog() {
	const pages = document.querySelectorAll( '.entry-content .content-has-nav' );

	pages.forEach( ( page ) => {
		const headings = document.querySelectorAll( '.wp-block-heading[id]' );
		const menuItems = document.querySelectorAll( '.entry-sidebar .wp-block-navigation li' );

		function updateActiveLink() {
			let current = '';

			headings.forEach( ( heading ) => {
				if ( heading.getBoundingClientRect().top <= 150 ) {
					current = heading.id;
				}
			} );

			menuItems.forEach( ( item ) => {
				item.classList.remove( 'current-menu-item' );
			} );

			const activeItem = document.querySelector(
				`.entry-sidebar .wp-block-navigation a[href="#${ current }"]`
			)?.closest( 'li' );

			if ( activeItem ) {
				activeItem.classList.add( 'current-menu-item' );
			}
		}

		window.addEventListener( 'scroll', updateActiveLink );
		updateActiveLink();
	} );
}
