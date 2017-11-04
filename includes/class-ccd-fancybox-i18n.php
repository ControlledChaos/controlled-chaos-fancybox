<?php

/**
 * Define the internationalization functionality.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/includes
 */

namespace CCD_Fancybox;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define the internationalization functionality.
 *
 * @since      1.0.0
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/includes
 * @author     Greg Sweet <greg@ccdzine.com>
 */
class CCD_Fancybox_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ccd-fancybox',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}