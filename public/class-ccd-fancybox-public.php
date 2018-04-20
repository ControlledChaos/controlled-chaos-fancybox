<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/public
 */

namespace CCD_Fancybox;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The public-facing functionality of the plugin.
 *
 * @package    CCD_Fancybox
 * @subpackage CCD_Fancybox/public
 * @author     Greg Sweet <greg@ccdzine.com>
 */
class CCD_Fancybox_Public {

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

		// Add Fancybox data attributes to image links in the content.
		add_filter( 'the_content', [ $this, 'fancybox_single_images' ], 2 );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		// Non-vendor plugin styles.
		// wp_enqueue_style( $this->ccd_fancybox, plugin_dir_url( __FILE__ ) . 'assets/css/ccd-fancybox-public.css', array(), $this->version, 'all' );

		// Fancybox 3.
		wp_enqueue_style( $this->ccd_fancybox . '-fancybox', plugin_dir_url( __FILE__ ) . 'assets/css/jquery.fancybox.min.css', [], $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		// Non-vendor plugin script. Retained for possible furture development.
		// wp_enqueue_script( $this->ccd_fancybox, plugin_dir_url( __FILE__ ) . 'assets/js/ccd-fancybox-public.js', array( 'jquery' ), $this->version, false );

		// Fancybox 3.
		wp_enqueue_script( $this->ccd_fancybox . '-fancybox', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.fancybox.min.js', [ 'jquery' ], $this->version, true );

	}

	/**
	 * Add Fancybox data attributes to image links in the content.
	 */
	public function fancybox_single_images( $content ) {

		// Check the page for link images direct to image (no trailing attributes).
		$string = '/<a href="(.*?).(jpg|jpeg|png|gif|bmp|ico)"><img(.*?)class="(.*?)wp-image-(.*?)" \/><\/a>/i';
		preg_match_all( $string, $content, $matches, PREG_SET_ORDER );

		// Check which attachment is referenced.
		foreach ( $matches as $val ) {

			$slimbox_caption = '';

			$post            = get_post( $val[5] );
			$slimbox_caption = esc_attr( $post->post_content );

			// Replace the instance with the lightbox and title(caption) references. Won't fail if caption is empty.
			$string  = '<a href="' . $val[1] . '.' . $val[2] . '"><img' . $val[3] . 'class="' . $val[4] . 'wp-image-' . $val[5] . '" /></a>';
			$replace = '<a href="' . $val[1] . '.' . $val[2] . '" data-fancybox data-type="image" title="' . $slimbox_caption . '"><img' . $val[3] . 'class="' . $val[4] . 'wp-image-' . $val[5] . '" /></a>';
			$content = str_replace( $string, $replace, $content );

		}

		return $content;
	}

}