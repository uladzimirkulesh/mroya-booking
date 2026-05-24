import * as Animations from './animations';

// Unregister scrambleText effect
if ( window.gsap ) {
	gsap.registerEffect( {
		name: 'scrambleText',
		effect: () => {},
		extendTimeline: false,
		overwrite: true,
	} );
}

/*-------------------------------------------------------
Fire on window load
-------------------------------------------------------*/

window.addEventListener( 'load', () => {

	// Init Animations
	Animations.initAnimations();
} );
