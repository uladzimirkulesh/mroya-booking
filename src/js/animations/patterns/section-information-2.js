/*-------------------------------------------------------
Section "Information" (style 2)
-------------------------------------------------------*/

export function sectionInformation2() {
	const sections = gsap.utils.toArray( '.section--information-2' );

	sections.forEach( ( section ) => {
		const sectionBlocks = section.querySelectorAll( '.section__content > *' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: section,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Blocks animations
		sectionBlocks?.length && tl.fadeInUp( sectionBlocks, '<0.12' );
	} );
}
