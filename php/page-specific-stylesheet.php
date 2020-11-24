// HOMEPAGE SPECIFIC CSS
add_action('wp_head', 'home_main_css');
function home_main_css(){
if(is_front_page()) {  ?>
<link rel="stylesheet" href="/wp-content/themes/dante-child/static/css/mgb-homepage.css">
<?php  }
};
