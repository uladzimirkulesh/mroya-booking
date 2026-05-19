/*-------------------------------------------------------
Section "Hero" (style 6)
-------------------------------------------------------*/

export function sectionHero6() {
	const sections = gsap.utils.toArray( '.section--hero-6' );

	sections.forEach( ( section ) => {
		const sectionTitle = section.querySelector( '.section__block--left .wp-block-heading' );
		const sectionElements = section.querySelectorAll( '.section__block--right > *' );

		// Let's animate
		const tl = gsap.timeline( { delay: 0.3 } );
		sectionTitle && tl.set( sectionTitle, { autoAlpha: 1 } );

		// Animations
		sectionTitle && tl.splitTextLinesMask( sectionTitle, { revert: false } );
		sectionElements?.length && tl.fadeInUp( sectionElements, '<0.42' );
	} );
}
