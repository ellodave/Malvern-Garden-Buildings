// HOMEPAGE CONFETTI
function GoldMedalConfetti() {
	if ( is_front_page() || is_home()){
    wp_enqueue_script( 'canvas-confetti', 'https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'canvas-confetti-config', get_stylesheet_directory_uri() . '/js/mgb-confetti-config.js', array(), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'GoldMedalConfetti' );
