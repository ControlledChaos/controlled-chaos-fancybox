<?php

/**
 * Controlled Chaos Fancybox.
 *
 * @link              https://github.com/ControlledChaos/Controlled-Chaos-Fancybox
 * @since             1.0.0
 * @package           CCD_Fancybox
 *
 * @wordpress-plugin
 * Plugin Name:       Controlled Chaos Fancybox
 * Plugin URI:        https://github.com/ControlledChaos/Controlled-Chaos-Fancybox
 * Description:       Adds Fancybox 3 functionality to images and galleries.
 * Version:           1.0.0
 * Author:            Controlled Chaos Design
 * Author URI:        http://ccdzine.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       ccd-fancybox
 * Domain Path:       /languages
 */

namespace CCD_Fancybox;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'CCD_FANCYBOX_VERSION', '1.0.0' );

/**
 * The core plugin class.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ccd-fancybox.php';

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_ccd_fancybox() {

	$plugin = new CCD_Fancybox();
	$plugin->run();

}
run_ccd_fancybox();
