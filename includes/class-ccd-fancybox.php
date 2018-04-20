<?php

/**
 * The file that defines the core plugin class.
 *
 * @link       https://github.com/ControlledChaos/controlled-chaos-fancybox
 * @since      1.0.0
 *
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/includes
 */

namespace CCD_Fancybox\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class.
 *
 * @since      1.0.0
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/includes
 * @author     Greg Sweet <greg@ccdzine.com>
 */
class CCD_Fancybox {

	/**
	 * Define the core functionality of the plugin.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		// Load dependencies.
		$this->dependencies();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function dependencies() {

		// Translation functionality.
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ccd-fancybox-i18n.php';

		// Admin actions and filters.
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-ccd-fancybox-admin.php';

		// Public actions and filters.
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-ccd-fancybox-public.php';

	}

}

// Run the core plugin class.
$ccd_fancybox = new CCD_Fancybox();