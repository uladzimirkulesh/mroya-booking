/*-------------------------------------------------------
Section "Gallery" (style 1)
-------------------------------------------------------*/

export function sectionGallery1() {
	const sections = gsap.utils.toArray( '.section--gallery-1' );

	sections.forEach( ( section ) => {
		const gallery = section.querySelector( '.wp-block-gallery' );
		const galleryItems = gallery?.querySelectorAll( '.wp-block-image' );

		// Let's animate
		const tl = gsap.timeline( {
			delay: 0.3,
			scrollTrigger: {
				trigger: gallery,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		galleryItems?.length && tl.fadeIn( galleryItems );
	} );
}
