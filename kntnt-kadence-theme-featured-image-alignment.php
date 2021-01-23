<?php

/**
 * Plugin main file.
 *
 * @wordpress-plugin
 * Plugin Name:       Kntnt Featured Image Alignment for Kadence Theme
 * Plugin URI:        https://www.kntnt.com/
 * GitHub Plugin URI: https://github.com/Kntnt/kntnt-kadence-theme-featured-image-alignment
 * Description:       Provides settings to choose alignment of posts' featured image. Depends on ACF.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Requires PHP:      7.1
 */


namespace Kntnt\Kadence_Theme_Featured_Image_Alignment;

// Uncomment following line to debug this plugin.
// define( 'KNTNT_KADENCE_THEME_FEATURED_IMAGE_ALIGNMENT_DEBUG', true );

require 'autoload.php';

defined( 'WPINC' ) && new Plugin;