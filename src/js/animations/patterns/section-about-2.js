/*-------------------------------------------------------
Section "About" (style 2)
-------------------------------------------------------*/

export function sectionAbout2() {
	const sections = gsap.utils.toArray( '.section--about-2' );

	sections.forEach( ( section ) => {
		const sectionTitle = section.querySelector( '.section__header .wp-block-heading' );
		const advantageItems = section.querySelectorAll( '.advantages__item' );
		const sectionBlockElements = section.querySelectorAll( '.block--text > .wp-block-group > *' );
		const sectionBlockText = section.querySelector( '.block--text > .wp-block-group > p' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: sectionTitle,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Animations
		sectionTitle && tl.fadeInUp( sectionTitle );
		advantageItems?.length && tl.fadeInUp( advantageItems, '<0.12' );
		sectionBlockElements?.length && tl.fadeInUp( sectionBlockElements, '<0.12' );
		sectionBlockText && tl.splitTextWords( sectionBlockText );
	} );
}
