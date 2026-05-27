/*-------------------------------------------------------
Section "Image" (style 1)
-------------------------------------------------------*/

export function sectionImage1() {
	const sections = gsap.utils.toArray( '.section--image-1' );

	sections.forEach( ( section ) => {
		const imageBlock = section.querySelector( '.wp-block-image' );
		const image = imageBlock?.querySelectorAll( 'img' );

		// Let's animate
		const tl = gsap.timeline( { delay: 0.3 } );

		// Media animations
		if ( imageBlock && image ) {
			tl.fadeIn( imageBlock );
		}
	} );
}
