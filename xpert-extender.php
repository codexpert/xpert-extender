<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.themexpert.com
 * @since             1.0.0
 * @package           Xpert_Extender
 *
 * @wordpress-plugin
 * Plugin Name:       xpert-extender
 * Plugin URI:        http://themexpert.com/wordpress-plugins/xpert-extender
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            ThemeXpert
 * Author URI:        http://www.themexpert.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       xpert-extender
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require(__DIR__ . "/vendor/autoload.php");
require(__DIR__ . "/register.php");
require(__DIR__ . "/metabox.php");
require(__DIR__ . "/Addons/Gallery/GalleryAddon.php");

Former::framework("TwitterBootstrap3");

$galleryAddon = new GalleryAddon();

// $addonContainer = new AddonContainer();

// function register_xtender_addon($addon_slug, $class_name){
// 	global $addonContainer;

// 	$addonContainer->add($addon_slug, $class_name);
// }



