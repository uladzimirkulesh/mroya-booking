/*-------------------------------------------------------
Section "Information" (style 1)
-------------------------------------------------------*/

export function sectionInformation1() {
	const sections = gsap.utils.toArray( '.section--information-1' );

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
