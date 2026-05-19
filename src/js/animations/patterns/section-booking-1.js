/*-------------------------------------------------------
Section "Booking" (style 1)
-------------------------------------------------------*/

export function sectionBooking1() {
	const sections = gsap.utils.toArray( '.section--booking-1' );

	sections.forEach( ( section ) => {
		const sectionTitle = section.querySelector( '.section__header .wp-block-heading' );
		const amenitiesItems = section.querySelectorAll( '.amenities__item' );
		const sectionBlockElements = section.querySelectorAll( '.block--booking > *' );

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
		amenitiesItems?.length && tl.fadeInUp( amenitiesItems, '<0.12' );
		sectionBlockElements?.length && tl.fadeInUp( sectionBlockElements, '<0.12' );
	} );
}
