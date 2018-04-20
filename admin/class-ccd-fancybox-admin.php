<?php

/**
 * Backend functions.
 *
 * @link       https://github.com/ControlledChaos/controlled-chaos-fancybox
 * @since      1.0.0
 *
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/admin
 */

namespace CCD_Fancybox\Plugin_Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Backend functions.
 *
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/admin
 * @author     Greg Sweet <greg@ccdzine.com>
 */
class CCD_Fancybox_Admin {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		// Load dependencies.
		$this->dependencies();

	}

	/**
	 * Require backend function files.
	 *
	 * @since    1.0.0
	 */
	public function dependencies() {

		// Backend image functions.
		require plugin_dir_path( __FILE__ ) . 'class-ccd-fancybox-images.php';

		// New gallery shortcode.
		require plugin_dir_path( __FILE__ ) . 'class-ccd-fancybox-gallery-shortcode.php';

	}

}

// Run the admin class.
$ccd_fancybox_admin = new CCD_Fancybox_Admin();