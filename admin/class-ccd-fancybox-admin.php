<?php

/**
 * Backend functions.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/admin
 */

namespace CCD_Fancybox;

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
	 * CCD Fancybox ID.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $ccd_fancybox
	 */
	private $ccd_fancybox;

	/**
	 * CCD Fancybox version.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $ccd_fancybox
	 * @param      string    $version
	 */
	public function __construct( $ccd_fancybox, $version ) {

		$this->ccd_fancybox = $ccd_fancybox;
		$this->version = $version;

		// Require backend function files.
		$this->require_files();

	}

	/**
	 * Require backend function files.
	 *
	 * @since    1.0.0
	 */
	public function require_files() {

		// Backend image functions.
		require plugin_dir_path( __FILE__ ) . 'class-ccd-fancybox-images.php';

		// New gallery shortcode.
		require plugin_dir_path( __FILE__ ) . 'class-ccd-fancybox-gallery-shortcode.php';

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		// Non-vendor plugin styles. Retained for possible furture development.
		// wp_enqueue_style( $this->ccd_fancybox, plugin_dir_url( __FILE__ ) . 'css/ccd-fancybox-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		// Non-vendor plugin script. Retained for possible furture development.
		// wp_enqueue_script( $this->ccd_fancybox, plugin_dir_url( __FILE__ ) . 'js/ccd-fancybox-admin.js', array( 'jquery' ), $this->version, false );

	}

}