<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function hr_management_consultancy_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'hr-management-consultancy' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'hr_management_consultancy_register_recommended_plugins' );