<?php
/**
 * @package HR Management Consultancy 
 * Setup the WordPress core custom header feature.
 *
 * @uses hr_management_consultancy_header_style()
*/
function hr_management_consultancy_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'hr_management_consultancy_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 70,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'hr_management_consultancy_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'hr_management_consultancy_custom_header_setup' );

if ( ! function_exists( 'hr_management_consultancy_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see hr_management_consultancy_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'hr_management_consultancy_header_style' );

function hr_management_consultancy_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .topbar{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'hr-management-consultancy-basic-style', $custom_css );
	endif;
}
endif;