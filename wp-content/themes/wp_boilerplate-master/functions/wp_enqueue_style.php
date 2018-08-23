<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */
	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'Fonts', 'https://fonts.googleapis.com/css?family=Ubuntu+Mono' );
	wp_register_style( 'Bootstrap_CSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );
	// wp_register_style( 'PagePiling_CSS', 'https://cdn.rawgit.com/alvarotrigo/pagePiling.js/master/jquery.pagepiling.css' );
	

	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}
	wp_enqueue_style('Fonts');
	wp_enqueue_style('Bootstrap_CSS');
	wp_enqueue_style('main_style');
	wp_enqueue_style('Font_Awesome');
	wp_enqueue_style('PagePiling_CSS');
	


}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
