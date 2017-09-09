<?php
/**
 * Aesop Editus Fusion Extension
 *
 * Allows you to edit Fusion Core pages from the front end. Currently Fusion Tab only 
 *
 * @package   Aesop_Editus_Fusion_Admin
 * @author    Hyun Supul <hyunsupul@gmail.com>
 * @license   GPL-2.0+
 * @link      https://edituswp.com/
 * @copyright 2017 Hyun Supul
 *
 * @wordpress-plugin
 * Plugin Name:       Aesop Editus Fusion Extension
 * Plugin URI:        https://edituswp.com/
 * Description:       Allows you to edit Fusion Core pages from the front end. Currently Fusion Tab only 
 * Version:           0.1
 * Author:            Hyun Supul
 * Author URI:        http://aesopinteractive.com
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: 
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'EDITUS_FUSION_EXT_VERSION', '0.1' );

add_action('wp_enqueue_scripts', editus_fusion_core_filter);
 
function editus_fusion_core_filter(){
    wp_enqueue_script('my_editus_save_filter', plugins_url( '', __FILE__ )."/editus_fusion_ext.js", array(), 'EDITUS_FUSION_EXT_VERSION', true);
}
