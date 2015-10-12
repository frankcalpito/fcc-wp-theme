<?php



require_once('includes/wp_bootstrap_navwalker.php');

function fcc_setup_theme() {
	global $template_directory;

	$template_directory = get_template_directory();

	require_once( $template_directory . '/includes/fcc-customs.php' );

	register_nav_menu( 'primary', __( 'Primary navigation', 'fcc' ) );
    register_nav_menu( 'footer-menu', __( 'Footer navigation', 'fcc' ) );
}


add_action( 'after_setup_theme', 'fcc_setup_theme' );


function fcc_add_styles_scripts() {

	$css = array(
		array('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', null),
		array('bootstrap-theme', get_template_directory_uri().'/assets/css/bootstrap-theme.css', null),
		array('style', get_template_directory_uri().'/style.css', null),
		array('main', get_template_directory_uri().'/assets/css/main.css', null)
	);

	for($i = 0; $i < sizeof($css); $i++) {
		wp_enqueue_style($css[$i][0], $css[$i][1], $css[$i][2]);
	}

	$js = array(
		array('jquery', get_template_directory_uri().'/assets/js/jquery-1.11.2.min.js', null),
		array('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', null),
		array('customs', get_template_directory_uri().'/assets/js/fcc-customs.js', null)
	);

	for($i = 0; $i < sizeof($js); $i++) {
		wp_enqueue_script($js[$i][0], $js[$i][1], $js[$i][2]);
	}
}

add_action('wp_enqueue_scripts', 'fcc_add_styles_scripts');

//excerpt count override default
// function new_excerpt_length($length) {
// return 100;
// }
// add_filter('excerpt_length', 'new_excerpt_length');

if ( ! isset( $content_width ) )
	$content_width = 600;