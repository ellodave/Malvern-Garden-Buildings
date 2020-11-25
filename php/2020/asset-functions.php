// GLOBAL CSS STYLES
wp_enqueue_style( 'mgb-global-styles', '/wp-content/themes/dante-child/static/css/mgb-styles.css',false,'1.1','all');
wp_enqueue_style( 'tailwind-css', '/wp-content/themes/dante-child/static/css/tailwind.css',false,'1.1','all');

// HOMEPAGE SPECIFIC CSS
add_action('wp_head', 'home_main_css');
function home_main_css(){
if(is_front_page()) {  ?>
<link rel="stylesheet" href="/wp-content/themes/dante-child/static/css/mgb-homepage.css">
<?php  }
};
// LOAD SWIPER SLIDER
function load_swiper() {
    wp_enqueue_style( 'swiper-slider-css', get_stylesheet_directory_uri() . '/styles/swiper-bundle.min.css',false,'1.1','all');
    wp_enqueue_script( 'swiper-slider-js', get_stylesheet_directory_uri() . '/js/lib/swiper-bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'swiper-slider-config-js', get_stylesheet_directory_uri() . '/js/swiper-sliders-config.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_swiper' );

// LOAD INSTAGRAM FEED - HOMEPAGE
function load_insta_feed() {
	if(is_front_page()) {
    wp_enqueue_script( 'insta-feed-js', get_stylesheet_directory_uri() . '/js/lib/instagram-feed.js', array(), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'load_insta_feed' );
