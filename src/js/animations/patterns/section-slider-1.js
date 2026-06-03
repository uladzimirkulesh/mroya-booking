/*-------------------------------------------------------
Section "Slider" (style 1)
-------------------------------------------------------*/

export function sectionSlider1() {
	const sections = gsap.utils.toArray( '.section--slider-1' );

	sections.forEach( ( section ) => {
		const sliderBlock = section.querySelector( '.responsive-image-silder' );

		// Media animations
		gsap.effects.fadeIn( sliderBlock, { delay: 0.3 } );
	} );
}
