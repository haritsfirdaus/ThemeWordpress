<?php

/**
 * Register enqueue style and script
 */

/**
 * Register themes styles
 */
wp_register_style( 'app', get_stylesheet_directory_uri() . '/dist/css/app.css', array(), _RESOURCES_ASSETS, 'all' );
wp_register_style( 'Inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), _RESOURCES_ASSETS );
wp_register_style( 'Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap', array(), _RESOURCES_ASSETS );
wp_register_style( "Darker Grotesque", 'https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@400;600;700&display=swap', array(), _RESOURCES_ASSETS);
wp_register_style( 'Plus Jakarta Sans', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap', array(), _RESOURCES_ASSETS );
wp_register_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap', array(), _RESOURCES_ASSETS );

/**
 * Register single styles
 */
wp_register_style( 'Single', get_stylesheet_directory_uri() . '/dist/css/single.css', array('app', 'Inter', 'Poppins', 'Plus Jakarta Sans', 'Roboto'), _RESOURCES_ASSETS, 'all' );



/**
 * Register themes scripts
 */
wp_register_script( 'manifest', get_stylesheet_directory_uri() . '/dist/js/manifest.js', array(), _RESOURCES_ASSETS, true );
wp_register_script( 'vendor', get_stylesheet_directory_uri() . '/dist/js/vendor.js', array(), _RESOURCES_ASSETS, true );
wp_register_script( 'navbar', get_stylesheet_directory_uri() . '/dist/js/navbar.js', array(), _RESOURCES_ASSETS, true );
wp_register_script( 'footer', get_stylesheet_directory_uri() . '/dist/js/footer.js', array(), _RESOURCES_ASSETS, true );
wp_register_script( 'app', get_stylesheet_directory_uri() . '/dist/js/app.js', array('navbar'), _RESOURCES_ASSETS, true );


/**
 * Register CDN Swiper
 */
wp_register_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );
wp_register_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );

/**
 * Mcd Themes Block Scripts & Style Register
 */
// wp_register_style( 'hero-cta-large', get_stylesheet_directory_uri() . '/dist/css/blocks/hero-cta-large.css', array('app'), _RESOURCES_ASSETS, 'all' );
// wp_register_script( 'hero-cta-large', get_stylesheet_directory_uri() . '/dist/js/blocks/hero-cta-large.js', array('manifest', 'vendor'), _RESOURCES_ASSETS, true );

$block_dir = get_template_directory() . '/template-parts/blocks/';
$blockDir = glob($block_dir . '*', GLOB_ONLYDIR);
foreach ($blockDir as $file) {
    wp_register_style( basename($file), get_stylesheet_directory_uri() . '/dist/css/blocks/'.basename($file).'.css', array('app'), _RESOURCES_ASSETS, 'all' );
    wp_register_script( basename($file), get_stylesheet_directory_uri() . '/dist/js/blocks/'.basename($file).'.js', array('manifest', 'vendor'), _RESOURCES_ASSETS, true );
}
/**
 * Mcd Themes Scripts Register
 */
wp_register_script( 'page-default-js', get_stylesheet_directory_uri() . '/dist/js/page-default.js', array('navbar','footer','app'), _RESOURCES_ASSETS, true );


/**
 * Register themes localizescript
 */
wp_localize_script('app', 'settings', [
    'ajax_url'      => admin_url( 'admin-ajax.php' ),
    "images" => get_stylesheet_directory_uri() . "/resources/images",
    "endpoint"  => site_url("wp-json"),
    'nonce' => wp_create_nonce('ajax_nonce'),
    'rest_nonce' => wp_create_nonce('wp_rest'),
    'site' => [
        'url' => site_url(),
        'title' => get_bloginfo('name'),
        'description' => get_bloginfo('description'),
    ]
]);