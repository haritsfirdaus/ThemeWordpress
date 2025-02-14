<?php

/**
 * mcd functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mcd
 */

if (!defined('_RESOURCES_ASSETS')) {
    define('_RESOURCES_ASSETS', md5_file(get_stylesheet_directory() . '/mix-manifest.json'));
}
if (!defined('_RESOURCES_SVG')) {
    define('_RESOURCES_SVG', get_stylesheet_directory_uri() . '/resources/svg');
}
if (!defined('_RESOURCES_IMAGES')) {
    define('_RESOURCES_IMAGES', get_stylesheet_directory_uri() . '/resources/images');
}
if (!defined('_THEMEDOMAIN')) {
    define('_THEMEDOMAIN', 'mcd');
}

require get_template_directory() . '/inc/MCD-Core/McdQuery.php';
require get_template_directory() . '/inc/MCD-Core/McdPost.php';
require get_template_directory() . '/inc/MCD-Core/McdFilters.php';
require get_template_directory() . '/inc/MCD-Core/McdActions.php';
require get_template_directory() . '/inc/theme-enqueues.php';
require get_template_directory() . '/inc/enqueue-scripts-styles.php';
require get_template_directory() . '/inc/theme-functions.php';
require get_template_directory() . '/inc/theme-setup.php';


/**
 * Mcd Register acf blocks
 */
$block_dir = get_template_directory() . '/template-parts/blocks/';
$files = glob($block_dir . '*/init.php');
foreach ($files as $file) {
    require $file;
}