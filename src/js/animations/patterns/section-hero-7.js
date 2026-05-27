/*-------------------------------------------------------
Section "Hero" (style 7)
-------------------------------------------------------*/

export function sectionHero7() {
	const sections = gsap.utils.toArray( '.section--hero-7' );

	sections.forEach( ( section ) => {
		const sectionTitle = section.querySelector( '.wp-block-heading' );

		// Let's animate
		const tl = gsap.timeline( { delay: 0.3 } );
		sectionTitle && tl.set( sectionTitle, { autoAlpha: 1 } );

		// Animations
		sectionTitle && tl.splitTextLinesMask( sectionTitle, { revert: false } );
	} );
}
