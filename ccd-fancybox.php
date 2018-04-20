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
 * Add settings links to the admin page.
 */
function ccd_fancybox_settings_link( $links ) {

	$settings_link = [
		sprintf( '<a href="%1s" class="ccd-fancybox-settings-link">%2s</a>', admin_url( 'options-media.php' ), esc_attr( 'Settings', 'ccd-fancybox' ) ),
	];

	return array_merge( $links, $settings_link );

}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'ccd_fancybox_settings_link' );