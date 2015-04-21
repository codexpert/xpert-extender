<?php

/**
 * Plugin Name:       onepager
 * Plugin URI:        http://themexpert.com/wordpress-plugins/xpert-extender
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            ThemeXpert
 * Author URI:        http://www.themexpert.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       onepager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
// Former::framework("TwitterBootstrap3");
if ( ! defined( 'WPINC' ) ) {
	die;
}

require(__DIR__ . "/vendor/autoload.php");
require(__DIR__ . "/register.php");

// require(__DIR__ . "/Addons/Gallery/GalleryAddon.php");
// require(__DIR__ . "/Addons/Testimonial/TestimonialAddon.php");
require(__DIR__ . "/test.php");

require(__DIR__ . '/addons/Content/content.php');
require(__DIR__ . '/addons/Gallery/addon.php');
$content = new Content();
$gallery = new Gallery();

$boxr = new ThemeXpert\Boxr\Boxr('test','Test',["page"]);

$boxr->add('content-addon', $content);
$boxr->add('gallery-addon', $gallery);
// $galleryAddon = new GalleryAddon();
// $testimonialAddon = new TestimonialAddon();


// $box = new XtenderBox("page-section-slug", "Xtender Page Secction", ["page_section"]);


// $box->add("gallery-addon", $galleryAddon);
// $box->add("testimonial-addon", $testimonialAddon);


// $box2 = new XtenderBox("avada-box", "Avada Page Secction", ["page_section"]);
// $box2->add("gallery-addon", $galleryAddon);
// $box2->add("testimonial-addon", $testimonialAddon);