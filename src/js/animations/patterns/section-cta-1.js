/*-------------------------------------------------------
Section "CTA" (style 1)
-------------------------------------------------------*/

export function sectionCta1() {
	const sections = gsap.utils.toArray( '.section--cta-1' );

	sections.forEach( ( section ) => {
		const sectionBlockElements = section.querySelectorAll( '.block--text > *' );
		const sectionBlockText = section.querySelector( '.block--text > p' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: section,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Animations
		sectionBlockElements?.length && tl.fadeInUp( sectionBlockElements, '<0.12' );
		sectionBlockText && tl.splitTextWords( sectionBlockText, { start: 'top 75%', end: 'bottom 75%' } );
	} );
}
