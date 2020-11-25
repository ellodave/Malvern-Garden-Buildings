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
