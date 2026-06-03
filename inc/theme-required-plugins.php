<?php
/**
 * Register the required plugins.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @version    2.6.1 for parent theme Mroya Booking
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Register the required plugins for this theme.
 */
function mroya_booking_register_required_plugins() {

	$plugins = array(
		array(
			'name'     => esc_html__( 'Responsive Slider Gallery', 'mroya-booking' ),
			'slug'     => 'responsive-slider-gallery',
			'required' => false,
		),
	);

	tgmpa( $plugins );
}
add_action( 'tgmpa_register', 'mroya_booking_register_required_plugins' );
