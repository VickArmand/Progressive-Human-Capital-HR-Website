<?php
/**
 * HR Management Consultancy  Theme Customizer
 *
 * @package HR Management Consultancy 
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function hr_management_consultancy_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'hr_management_consultancy_custom_controls' );

function hr_management_consultancy_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage'; 
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array( 
		'selector' => '.logo .site-title a', 
	 	'render_callback' => 'hr_management_consultancy_Customize_partial_blogname',
	)); 

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array( 
		'selector' => 'p.site-description', 
		'render_callback' => 'hr_management_consultancy_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'hr_management_consultancy_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'hr-management-consultancy' ),
		'priority' => 10,
	));

 	// Header Background color
	$wp_customize->add_setting('hr_management_consultancy_header_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_header_background_color', array(
		'label'    => __('Header Background Color', 'hr-management-consultancy'),
		'section'  => 'header_image',
	)));

	$wp_customize->add_setting('hr_management_consultancy_header_img_position',array(
	  'default' => 'center top',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_header_img_position',array(
		'type' => 'select',
		'label' => __('Header Image Position','hr-management-consultancy'),
		'section' => 'header_image',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'hr-management-consultancy' ),
			'center top'   => esc_html__( 'Top', 'hr-management-consultancy' ),
			'right top'   => esc_html__( 'Top Right', 'hr-management-consultancy' ),
			'left center'   => esc_html__( 'Left', 'hr-management-consultancy' ),
			'center center'   => esc_html__( 'Center', 'hr-management-consultancy' ),
			'right center'   => esc_html__( 'Right', 'hr-management-consultancy' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'hr-management-consultancy' ),
			'center bottom'   => esc_html__( 'Bottom', 'hr-management-consultancy' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'hr-management-consultancy' ),
		),
	));

	//Menus Settings
	$wp_customize->add_section( 'hr_management_consultancy_menu_section' , array(
    	'title' => __( 'Menus Settings', 'hr-management-consultancy' ),
		'panel' => 'hr_management_consultancy_panel_id'
	) );

	$wp_customize->add_setting('hr_management_consultancy_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_navigation_menu_font_weight',array(
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','hr-management-consultancy'),
        'section' => 'hr_management_consultancy_menu_section',
        'choices' => array(
        	'100' => __('100','hr-management-consultancy'),
            '200' => __('200','hr-management-consultancy'),
            '300' => __('300','hr-management-consultancy'),
            '400' => __('400','hr-management-consultancy'),
            '500' => __('500','hr-management-consultancy'),
            '600' => __('600','hr-management-consultancy'),
            '700' => __('700','hr-management-consultancy'),
            '800' => __('800','hr-management-consultancy'),
            '900' => __('900','hr-management-consultancy'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('hr_management_consultancy_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menu Text Transform','hr-management-consultancy'),
		'choices' => array(
            'Uppercase' => __('Uppercase','hr-management-consultancy'),
            'Capitalize' => __('Capitalize','hr-management-consultancy'),
            'Lowercase' => __('Lowercase','hr-management-consultancy'),
        ),
		'section'=> 'hr_management_consultancy_menu_section',
	));

	$wp_customize->add_setting('hr_management_consultancy_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_menus_item_style',array(
        'type' => 'select',
        'section' => 'hr_management_consultancy_menu_section',
		'label' => __('Menu Item Hover Style','hr-management-consultancy'),
		'choices' => array(
            'None' => __('None','hr-management-consultancy'),
            'Zoom In' => __('Zoom In','hr-management-consultancy'),
        ),
	) );

	$wp_customize->add_setting('hr_management_consultancy_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_header_menus_color', array(
		'label'    => __('Menus Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_menu_section',
	)));

	$wp_customize->add_setting('hr_management_consultancy_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_menu_section',
	)));

	$wp_customize->add_setting('hr_management_consultancy_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_menu_section',
	)));

	$wp_customize->add_setting('hr_management_consultancy_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_menu_section',
	)));

	//Topbar 
	$wp_customize->add_section('hr_management_consultancy_header_section' , array(
  		'title' => __( 'Topbar Section', 'hr-management-consultancy' ),
		'panel' => 'hr_management_consultancy_panel_id'
	) );

	$wp_customize->add_setting('hr_management_consultancy_topbar_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_topbar_btn_text',array(
		'label'	=> esc_html__('Add Button Text','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Latest Opening', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_header_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_topbar_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('hr_management_consultancy_topbar_btn_link',array(
		'label'	=> esc_html__('Add Button Link','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_header_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting('hr_management_consultancy_myaccount_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new hr_management_consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_myaccount_icon',array(
		'label'	=> __('Add Myaccount Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_header_section',
		'setting'	=> 'hr_management_consultancy_myaccount_icon',
		'type'		=> 'icon'
	)));

	//Slider
	$wp_customize->add_section( 'hr_management_consultancy_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'hr-management-consultancy' ),
    	'description' => __('Free theme has 3 slides options, For unlimited slides and more options </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/job-consultancy-wordpress-theme/">GET PRO</a>','hr-management-consultancy'),
		'panel' => 'hr_management_consultancy_panel_id'
	) );

	$wp_customize->add_setting( 'hr_management_consultancy_slider_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ));  
    $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_slider_hide_show',array(
      'label' => esc_html__( 'Show / Hide Slider','hr-management-consultancy' ),
      'section' => 'hr_management_consultancy_slidersettings'
    )));

	$wp_customize->add_setting('hr_management_consultancy_slider_type',array(
		'default' => 'Default slider',
		'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	) );
	$wp_customize->add_control('hr_management_consultancy_slider_type', array(
		'type' => 'select',
		'label' => __('Slider Type','hr-management-consultancy'),
		'section' => 'hr_management_consultancy_slidersettings',
		'choices' => array(
		'Default slider' => __('Default slider','hr-management-consultancy'),
		'Advance slider' => __('Advance slider','hr-management-consultancy'),
		),
	));

	$wp_customize->add_setting('hr_management_consultancy_advance_slider_shortcode',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_advance_slider_shortcode',array(
		'label'	=> __('Add Slider Shortcode','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_slidersettings',
		'type'=> 'text',
		'active_callback' => 'hr_management_consultancy_advance_slider'
	));

     //Selective Refresh
    $wp_customize->selective_refresh->add_partial('hr_management_consultancy_slider_hide_show',array(
		'selector'        => '.slider-btn a',
		'render_callback' => 'hr_management_consultancy_customize_partial_hr_management_consultancy_slider_hide_show',
	));

	for ( $count = 1; $count <= 3; $count++ ) {
		$wp_customize->add_setting( 'hr_management_consultancy_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'hr_management_consultancy_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'hr_management_consultancy_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'hr-management-consultancy' ),
			'description' => __('Slider image size (1400 x 550)','hr-management-consultancy'),
			'section'  => 'hr_management_consultancy_slidersettings',
			'type'     => 'dropdown-pages',
			'active_callback' => 'hr_management_consultancy_default_slider'
		) );
	}

	$wp_customize->add_setting('hr_management_consultancy_slider_button_text',array(
		'default'=> 'Search Jobs',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_slider_button_text',array(
		'label'	=> __('Add Slider Button Text','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_slidersettings',
		'type'=> 'text',
		'active_callback' => 'hr_management_consultancy_default_slider'
	));

	$wp_customize->add_setting('hr_management_consultancy_slider_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('hr_management_consultancy_slider_button_url',array(
		'label'	=> __('Add Button URL','hr-management-consultancy'),
		'section'	=> 'hr_management_consultancy_slidersettings',
		'setting'	=> 'hr_management_consultancy_slider_button_url',
		'type'	=> 'url',
		'active_callback' => 'hr_management_consultancy_default_slider'
	));

	//content layout
	$wp_customize->add_setting('hr_management_consultancy_slider_content_option',array(
        'default' => 'Left',
        'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Image_Radio_Control($wp_customize, 'hr_management_consultancy_slider_content_option', array(
        'type' => 'select',
        'label' => esc_html__('Slider Content Layouts','hr-management-consultancy'),
        'section' => 'hr_management_consultancy_slidersettings',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/slider-content1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/slider-content2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/slider-content3.png',
    ),'active_callback' => 'hr_management_consultancy_default_slider'
    )));

    //Slider content padding
    $wp_customize->add_setting('hr_management_consultancy_slider_content_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_slider_content_padding_top_bottom',array(
		'label'	=> __('Slider Content Padding Top Bottom','hr-management-consultancy'),
		'description'	=> __('Enter a value in %. Example:20%','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '50%', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_slidersettings',
		'type'=> 'text',
		'active_callback' => 'hr_management_consultancy_default_slider'
	));

	$wp_customize->add_setting('hr_management_consultancy_slider_content_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_slider_content_padding_left_right',array(
		'label'	=> __('Slider Content Padding Left Right','hr-management-consultancy'),
		'description'	=> __('Enter a value in %. Example:20%','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '50%', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_slidersettings',
		'type'=> 'text',
		'active_callback' => 'hr_management_consultancy_default_slider'
	));

  	//Slider excerpt
	$wp_customize->add_setting( 'hr_management_consultancy_slider_excerpt_number', array(
		'default'              => 30,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_slidersettings',
		'type'        => 'range',
		'settings'    => 'hr_management_consultancy_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'hr_management_consultancy_default_slider'
	) );

	$wp_customize->add_setting( 'hr_management_consultancy_slider_speed', array(
		'default'  => 4000,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_slider_speed', array(
		'label' => esc_html__('Slider Transition Speed','hr-management-consultancy'),
		'section' => 'hr_management_consultancy_slidersettings',
		'type'  => 'text',
		'active_callback' => 'hr_management_consultancy_default_slider'
	) );

	//Slider height
	$wp_customize->add_setting('hr_management_consultancy_slider_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_slider_height',array(
		'label'	=> __('Slider Height','hr-management-consultancy'),
		'description'	=> __('Specify the slider height (px).','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '500px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_slidersettings',
		'type'=> 'text',
		'active_callback' => 'hr_management_consultancy_default_slider'
	)); 

	//Opacity
	$wp_customize->add_setting('hr_management_consultancy_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));

	$wp_customize->add_control( 'hr_management_consultancy_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_slidersettings',
		'type'        => 'select',
		'settings'    => 'hr_management_consultancy_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','hr-management-consultancy'),
	      '0.1' =>  esc_attr('0.1','hr-management-consultancy'),
	      '0.2' =>  esc_attr('0.2','hr-management-consultancy'),
	      '0.3' =>  esc_attr('0.3','hr-management-consultancy'),
	      '0.4' =>  esc_attr('0.4','hr-management-consultancy'),
	      '0.5' =>  esc_attr('0.5','hr-management-consultancy'),
	      '0.6' =>  esc_attr('0.6','hr-management-consultancy'),
	      '0.7' =>  esc_attr('0.7','hr-management-consultancy'),
	      '0.8' =>  esc_attr('0.8','hr-management-consultancy'),
	      '0.9' =>  esc_attr('0.9','hr-management-consultancy')
	),'active_callback' => 'hr_management_consultancy_default_slider'
	));

	$wp_customize->add_setting( 'hr_management_consultancy_slider_image_overlay',array(
    	'default' => '',
    	'transport' => 'refresh',
    	'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
   ));
   $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_slider_image_overlay',array(
      	'label' => esc_html__( 'Slider Image Overlay','hr-management-consultancy' ),
      	'section' => 'hr_management_consultancy_slidersettings',
      	'active_callback' => 'hr_management_consultancy_default_slider'
   )));

   $wp_customize->add_setting('hr_management_consultancy_slider_image_overlay_color', array(
		'default'           => 1,
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_slider_image_overlay_color', array(
		'label'    => __('Slider Image Overlay Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_slidersettings',
		'active_callback' => 'hr_management_consultancy_default_slider'
	)));

	$wp_customize->add_setting( 'hr_management_consultancy_slider_arrow_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
	));
	$wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_slider_arrow_hide_show',array(
		'label' => esc_html__( 'Show / Hide Slider Arrows','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_slidersettings',
		'active_callback' => 'hr_management_consultancy_default_slider'
	)));

	$wp_customize->add_setting('hr_management_consultancy_slider_prev_icon',array(
		'default'	=> 'fas fa-angle-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_slider_prev_icon',array(
		'label'	=> __('Add Slider Prev Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_slidersettings',
		'setting'	=> 'hr_management_consultancy_slider_prev_icon',
		'type'		=> 'icon',
		'active_callback' => 'hr_management_consultancy_default_slider'
	)));

	$wp_customize->add_setting('hr_management_consultancy_slider_next_icon',array(
		'default'	=> 'fas fa-angle-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_slider_next_icon',array(
		'label'	=> __('Add Slider Next Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_slidersettings',
		'setting'	=> 'hr_management_consultancy_slider_next_icon',
		'type'		=> 'icon',
		'active_callback' => 'hr_management_consultancy_default_slider'
	)));

	//job categories Section
	$wp_customize->add_section('hr_management_consultancy_job_categories_section', array(
		'title'       => __('Job Categories Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_job_categories_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_job_categories_text',array(
		'description' => __('<p>1. More options for job categories section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for job categories section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_job_categories_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_job_categories_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_job_categories_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_job_categories_section',
		'type'=> 'hidden'
	));

	//brand Section
	$wp_customize->add_section('hr_management_consultancy_brand_section', array(
		'title'       => __('Brand Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_brand_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_brand_text',array(
		'description' => __('<p>1. More options for brand section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for brand section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_brand_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_brand_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_brand_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_brand_section',
		'type'=> 'hidden'
	));

	//how it work Section
	$wp_customize->add_section('hr_management_consultancy_how_it_work_section', array(
		'title'       => __('How It Work Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_how_it_work_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_how_it_work_text',array(
		'description' => __('<p>1. More options for how it work section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for how it work section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_how_it_work_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_how_it_work_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_how_it_work_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_how_it_work_section',
		'type'=> 'hidden'
	));

	// Popular Job Section
	$wp_customize->add_section('hr_management_consultancy_popular_job_section',array(
		'title'	=> __('Popular Job Section','hr-management-consultancy'),
		'description' => __('For more options of popular job section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/job-consultancy-wordpress-theme/">GET PRO</a>','hr-management-consultancy'),
		'panel' => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting( 'hr_management_consultancy_popular_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_popular_heading', array(
		'label'    => __( 'Add Section Heading', 'hr-management-consultancy' ),
		'input_attrs' => array(
            'placeholder' => __( 'Most Popular Job', 'hr-management-consultancy' ),
        ),
		'section'  => 'hr_management_consultancy_popular_job_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting( 'hr_management_consultancy_popular_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_popular_small_title', array(
		'label'    => __( 'Add Section Small Text', 'hr-management-consultancy' ),
		'section'  => 'hr_management_consultancy_popular_job_section',
		'type'     => 'text'
	) );

	$categories = get_categories();
	$cat_post = array();
	$cat_post[]= 'select';
	$i = 0;	
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('hr_management_consultancy_popular_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'hr_management_consultancy_sanitize_choices',
	));
	$wp_customize->add_control('hr_management_consultancy_popular_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Featured Post','hr-management-consultancy'),
		'section' => 'hr_management_consultancy_popular_job_section',
	));

	$wp_customize->add_setting('hr_management_consultancy_brouse_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_brouse_btn_text',array(
		'label'	=> esc_html__('Add Button Text','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Browse All', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_popular_job_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_brouse_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('hr_management_consultancy_brouse_btn_link',array(
		'label'	=> esc_html__('Add Button Link','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_popular_job_section',
		'type'=> 'url'
	));

	//choose plan Section
	$wp_customize->add_section('hr_management_consultancy_choose_plan_section', array(
		'title'       => __('Choose Plan Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_choose_plan_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_choose_plan_text',array(
		'description' => __('<p>1. More options for choose plan section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for choose plan section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_choose_plan_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_choose_plan_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_choose_plan_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_choose_plan_section',
		'type'=> 'hidden'
	));

	//testimonial Section
	$wp_customize->add_section('hr_management_consultancy_testimonial_section', array(
		'title'       => __('Testimonial Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_testimonial_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_testimonial_text',array(
		'description' => __('<p>1. More options for testimonial section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for testimonial section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_testimonial_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_testimonial_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_testimonial_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_testimonial_section',
		'type'=> 'hidden'
	));

	//top company register Section
	$wp_customize->add_section('hr_management_consultancy_top_company_register_section', array(
		'title'       => __('Top Company Register Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_top_company_register_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_top_company_register_text',array(
		'description' => __('<p>1. More options for top company register section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for top company register section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_top_company_register_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_top_company_register_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_top_company_register_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_top_company_register_section',
		'type'=> 'hidden'
	));

	//passing year Section
	$wp_customize->add_section('hr_management_consultancy_passing_year_section', array(
		'title'       => __('Passing Year Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_passing_year_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_passing_year_text',array(
		'description' => __('<p>1. More options for passing year section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for passing year section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_passing_year_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_passing_year_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_passing_year_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_passing_year_section',
		'type'=> 'hidden'
	));

	//post job Section
	$wp_customize->add_section('hr_management_consultancy_post_job_section', array(
		'title'       => __('Post Job Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_post_job_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_post_job_text',array(
		'description' => __('<p>1. More options for post job section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for post job section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_post_job_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_post_job_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_post_job_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_post_job_section',
		'type'=> 'hidden'
	));

	//latest news Section
	$wp_customize->add_section('hr_management_consultancy_latest_news_section', array(
		'title'       => __('Latest News Section', 'hr-management-consultancy'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','hr-management-consultancy'),
		'priority'    => null,
		'panel'       => 'hr_management_consultancy_panel_id',
	));

	$wp_customize->add_setting('hr_management_consultancy_latest_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_latest_news_text',array(
		'description' => __('<p>1. More options for latest news section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for latest news section.</p>','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_latest_news_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('hr_management_consultancy_latest_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_latest_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=hr_management_consultancy_guide') ." '>More Info</a>",
		'section'=> 'hr_management_consultancy_latest_news_section',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('hr_management_consultancy_footer',array(
		'title'	=> esc_html__('Footer Settings','hr-management-consultancy'),
		'description' => __('For more options of footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/job-consultancy-wordpress-theme/">GET PRO</a>','hr-management-consultancy'),
		'panel' => 'hr_management_consultancy_panel_id',
	));	

  $wp_customize->add_setting( 'hr_management_consultancy_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ));
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_footer_hide_show',array(
    'label' => esc_html__( 'Show / Hide Footer','hr-management-consultancy' ),
    'section' => 'hr_management_consultancy_footer'
  )));

	// font size
	$wp_customize->add_setting('hr_management_consultancy_button_footer_font_size',array(
		'default'=> 30,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','hr-management-consultancy'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'hr_management_consultancy_footer',
	));

	$wp_customize->add_setting('hr_management_consultancy_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','hr-management-consultancy'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'hr_management_consultancy_footer',
	));

	// text trasform
	$wp_customize->add_setting('hr_management_consultancy_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','hr-management-consultancy'),
		'choices' => array(
      'Uppercase' => __('Uppercase','hr-management-consultancy'),
      'Capitalize' => __('Capitalize','hr-management-consultancy'),
      'Lowercase' => __('Lowercase','hr-management-consultancy'),
    ),
		'section'=> 'hr_management_consultancy_footer',
	));

	$wp_customize->add_setting('hr_management_consultancy_footer_heading_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','hr-management-consultancy'),
        'section' => 'hr_management_consultancy_footer',
        'choices' => array(
        	'100' => __('100','hr-management-consultancy'),
            '200' => __('200','hr-management-consultancy'),
            '300' => __('300','hr-management-consultancy'),
            '400' => __('400','hr-management-consultancy'),
            '500' => __('500','hr-management-consultancy'),
            '600' => __('600','hr-management-consultancy'),
            '700' => __('700','hr-management-consultancy'),
            '800' => __('800','hr-management-consultancy'),
            '900' => __('900','hr-management-consultancy'),
        ),
	) );

  $wp_customize->add_setting('hr_management_consultancy_footer_template',array(
      'default'	=> esc_html('hr_management_consultancy-footer-one'),
      'sanitize_callback'	=> 'hr_management_consultancy_sanitize_choices'
  ));
  $wp_customize->add_control('hr_management_consultancy_footer_template',array(
          'label'	=> esc_html__('Footer style','hr-management-consultancy'),
          'section'	=> 'hr_management_consultancy_footer',
          'setting'	=> 'hr_management_consultancy_footer_template',
          'type' => 'select',
          'choices' => array(
              'hr_management_consultancy-footer-one' => esc_html__('Style 1', 'hr-management-consultancy'),
              'hr_management_consultancy-footer-two' => esc_html__('Style 2', 'hr-management-consultancy'),
              'hr_management_consultancy-footer-three' => esc_html__('Style 3', 'hr-management-consultancy'),
              'hr_management_consultancy-footer-four' => esc_html__('Style 4', 'hr-management-consultancy'),
              'hr_management_consultancy-footer-five' => esc_html__('Style 5', 'hr-management-consultancy'),
              )
  ));


	$wp_customize->add_setting('hr_management_consultancy_footer_background_color', array(
		'default'           => '#151821',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_footer_background_color', array(
		'label'    => __('Footer Background Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_footer',
	)));

	$wp_customize->add_setting('hr_management_consultancy_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'hr_management_consultancy_footer_background_image',array(
      'label' => __('Footer Background Image','hr-management-consultancy'),
      'section' => 'hr_management_consultancy_footer'
	)));

	$wp_customize->add_setting('hr_management_consultancy_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','hr-management-consultancy'),
		'section' => 'hr_management_consultancy_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'hr-management-consultancy' ),
			'center top'   => esc_html__( 'Top', 'hr-management-consultancy' ),
			'right top'   => esc_html__( 'Top Right', 'hr-management-consultancy' ),
			'left center'   => esc_html__( 'Left', 'hr-management-consultancy' ),
			'center center'   => esc_html__( 'Center', 'hr-management-consultancy' ),
			'right center'   => esc_html__( 'Right', 'hr-management-consultancy' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'hr-management-consultancy' ),
			'center bottom'   => esc_html__( 'Bottom', 'hr-management-consultancy' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'hr-management-consultancy' ),
		),
	));

  // Footer
  $wp_customize->add_setting('hr_management_consultancy_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
  ));
  $wp_customize->add_control('hr_management_consultancy_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','hr-management-consultancy'),
    'choices' => array(
      'fixed' => __('fixed','hr-management-consultancy'),
      'scroll' => __('scroll','hr-management-consultancy'),
    ),
    'section'=> 'hr_management_consultancy_footer',
  ));

  // footer padding
  $wp_customize->add_setting('hr_management_consultancy_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('hr_management_consultancy_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','hr-management-consultancy'),
    'description' => __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'hr-management-consultancy' ),
    ),
    'section'=> 'hr_management_consultancy_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('hr_management_consultancy_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
  ));
  $wp_customize->add_control('hr_management_consultancy_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_footer',
    'choices' => array(
      'Left' => __('Left','hr-management-consultancy'),
      'Center' => __('Center','hr-management-consultancy'),
      'Right' => __('Right','hr-management-consultancy')
    ),
  ) );

  $wp_customize->add_setting('hr_management_consultancy_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
  ));
  $wp_customize->add_control('hr_management_consultancy_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_footer',
    'choices' => array(
      'Left' => __('Left','hr-management-consultancy'),
      'Center' => __('Center','hr-management-consultancy'),
      'Right' => __('Right','hr-management-consultancy')
    ),
  ) );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('hr_management_consultancy_footer_text', array( 
		'selector' => '.copyright p', 
		'render_callback' => 'hr_management_consultancy_Customize_partial_hr_management_consultancy_footer_text', 
	));
	
	$wp_customize->add_setting('hr_management_consultancy_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('hr_management_consultancy_footer_text',array(
		'label'	=> esc_html__('Copyright Text','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Copyright 2021, .....', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_footer',
		'type'=> 'text'
	));


  $wp_customize->add_setting( 'hr_management_consultancy_copyright_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ));
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_copyright_hide_show',array(
    'label' => esc_html__( 'Show / Hide Copyright','hr-management-consultancy' ),
    'section' => 'hr_management_consultancy_footer'
  )));

	$wp_customize->add_setting('hr_management_consultancy_copyright_alingment',array(
    'default' => 'center',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Image_Radio_Control($wp_customize, 'hr_management_consultancy_copyright_alingment', array(
        'type' => 'select',
        'label' => esc_html__('Copyright Alignment','hr-management-consultancy'),
        'section' => 'hr_management_consultancy_footer',
        'settings' => 'hr_management_consultancy_copyright_alingment',
        'choices' => array(
            'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
            'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
            'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
    ))));

	  $wp_customize->add_setting('hr_management_consultancy_copyright_background_color', array(
	    'default'           => '#21286A',
	    'sanitize_callback' => 'sanitize_hex_color',
	  ));
	  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_copyright_background_color', array(
	    'label'    => __('Copyright Background Color', 'hr-management-consultancy'),
	    'section'  => 'hr_management_consultancy_footer',
	  )));

	  $wp_customize->add_setting('hr_management_consultancy_copyright_font_size',array(
	    'default'=> '',
	    'sanitize_callback' => 'sanitize_text_field'
	  ));
	  $wp_customize->add_control('hr_management_consultancy_copyright_font_size',array(
	    'label' => __('Copyright Font Size','hr-management-consultancy'),
	    'description' => __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
	    'input_attrs' => array(
	            'placeholder' => __( '10px', 'hr-management-consultancy' ),
	        ),
	    'section'=> 'hr_management_consultancy_footer',
	    'type'=> 'text'
	  ));

    $wp_customize->add_setting( 'hr_management_consultancy_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ));  
    $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll to Top','hr-management-consultancy' ),
      	'section' => 'hr_management_consultancy_footer'
    )));

    //Selective Refresh
	$wp_customize->selective_refresh->add_partial('hr_management_consultancy_scroll_to_top_icon', array( 
		'selector' => '.scrollup i', 
		'render_callback' => 'hr_management_consultancy_Customize_partial_hr_management_consultancy_scroll_to_top_icon', 
	));

  $wp_customize->add_setting('hr_management_consultancy_scroll_top_icon',array(
    'default' => 'fas fa-long-arrow-alt-up',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser($wp_customize,'hr_management_consultancy_scroll_top_icon',array(
    'label' => __('Add Scroll to Top Icon','hr-management-consultancy'),
    'transport' => 'refresh',
    'section' => 'hr_management_consultancy_footer',
    'setting' => 'hr_management_consultancy_scroll_top_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('hr_management_consultancy_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('hr_management_consultancy_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','hr-management-consultancy'),
    'description' => __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'hr-management-consultancy' ),
    ),
    'section'=> 'hr_management_consultancy_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('hr_management_consultancy_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('hr_management_consultancy_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','hr-management-consultancy'),
    'description' => __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'hr-management-consultancy' ),
    ),
    'section'=> 'hr_management_consultancy_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('hr_management_consultancy_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('hr_management_consultancy_scroll_to_top_width',array(
    'label' => __('Icon Width','hr-management-consultancy'),
    'description' => __('Enter a value in pixels Example:20px','hr-management-consultancy'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'hr-management-consultancy' ),
  ),
  'section'=> 'hr_management_consultancy_footer',
  'type'=> 'text'
  ));

  $wp_customize->add_setting('hr_management_consultancy_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('hr_management_consultancy_scroll_to_top_height',array(
    'label' => __('Icon Height','hr-management-consultancy'),
    'description' => __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'hr-management-consultancy' ),
    ),
    'section'=> 'hr_management_consultancy_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'hr_management_consultancy_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'hr_management_consultancy_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','hr-management-consultancy' ),
    'section'     => 'hr_management_consultancy_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

  $wp_customize->add_setting('hr_management_consultancy_scroll_top_alignment',array(
      'default' => 'Right',
      'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Image_Radio_Control($wp_customize, 'hr_management_consultancy_scroll_top_alignment', array(
        'type' => 'select',
        'label' => esc_html__('Scroll To Top','hr-management-consultancy'),
        'section' => 'hr_management_consultancy_footer',
        'settings' => 'hr_management_consultancy_scroll_top_alignment',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
    ))));

   	//Blog Post
	$wp_customize->add_panel( 'hr_management_consultancy_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'hr-management-consultancy' ),
		'panel' => 'hr_management_consultancy_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'hr_management_consultancy_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'hr-management-consultancy' ),
		'panel' => 'hr_management_consultancy_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('hr_management_consultancy_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'hr_management_consultancy_Customize_partial_hr_management_consultancy_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('hr_management_consultancy_blog_layout_option',array(
    'default' => 'Default',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
  ));
  $wp_customize->add_control(new HR_Management_Consultancy_Image_Radio_Control($wp_customize, 'hr_management_consultancy_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_post_settings',
    'choices' => array(
        'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

 	$wp_customize->add_setting('hr_management_consultancy_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','hr-management-consultancy'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','hr-management-consultancy'),
        'Right Sidebar' => esc_html__('Right Sidebar','hr-management-consultancy'),
        'One Column' => esc_html__('One Column','hr-management-consultancy'),
				'Three Columns' => __('Three Columns','hr-management-consultancy'),
				'Four Columns' => __('Four Columns','hr-management-consultancy'),
        'Grid Layout' => esc_html__('Grid Layout','hr-management-consultancy')
        ),
	) );

  	$wp_customize->add_setting('hr_management_consultancy_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_post_settings',
		'setting'	=> 'hr_management_consultancy_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'hr_management_consultancy_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ));
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','hr-management-consultancy' ),
    'section' => 'hr_management_consultancy_post_settings'
  )));

	$wp_customize->add_setting('hr_management_consultancy_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_post_settings',
		'setting'	=> 'hr_management_consultancy_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'hr_management_consultancy_blog_toggle_author',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ));
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_blog_toggle_author',array(
	'label' => esc_html__( 'Show / Hide Author','hr-management-consultancy' ),
	'section' => 'hr_management_consultancy_post_settings'
  )));

  $wp_customize->add_setting('hr_management_consultancy_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_post_settings',
		'setting'	=> 'hr_management_consultancy_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'hr_management_consultancy_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ) );
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_post_settings'
  )));

  $wp_customize->add_setting('hr_management_consultancy_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_post_settings',
		'setting'	=> 'hr_management_consultancy_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'hr_management_consultancy_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ) );
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_post_settings'
  )));

  $wp_customize->add_setting( 'hr_management_consultancy_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
	));
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_post_settings'
  )));

  $wp_customize->add_setting( 'hr_management_consultancy_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'hr_management_consultancy_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('hr_management_consultancy_blog_post_featured_image_dimension',array(
       'default' => 'default',
       'sanitize_callback'	=> 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','hr-management-consultancy'),
		'section'	=> 'hr_management_consultancy_post_settings',
		'choices' => array(
		'default' => __('Default','hr-management-consultancy'),
		'custom' => __('Custom Image Size','hr-management-consultancy'),
      ),
	));

	$wp_customize->add_setting('hr_management_consultancy_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('hr_management_consultancy_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'hr-management-consultancy' ),),
		'section'=> 'hr_management_consultancy_post_settings',
		'type'=> 'text',
		'active_callback' => 'hr_management_consultancy_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('hr_management_consultancy_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'hr-management-consultancy' ),),
		'section'=> 'hr_management_consultancy_post_settings',
		'type'=> 'text',
		'active_callback' => 'hr_management_consultancy_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'hr_management_consultancy_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'hr_management_consultancy_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_post_settings',
		'type'        => 'range',
		'settings'    => 'hr_management_consultancy_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('hr_management_consultancy_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','hr-management-consultancy'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('hr_management_consultancy_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','hr-management-consultancy'),
        'Excerpt' => esc_html__('Excerpt','hr-management-consultancy'),
        'No Content' => esc_html__('No Content','hr-management-consultancy')
        ),
	) );

  $wp_customize->add_setting('hr_management_consultancy_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','hr-management-consultancy'),
        'Without Blocks' => __('Without Blocks','hr-management-consultancy')
        ),
	) );

	$wp_customize->add_setting( 'hr_management_consultancy_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ));
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_post_settings'
  )));

	$wp_customize->add_setting('hr_management_consultancy_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '[...]', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'hr_management_consultancy_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'hr_management_consultancy_sanitize_choices'
  ));
  $wp_customize->add_control( 'hr_management_consultancy_blog_pagination_type', array(
    'section' => 'hr_management_consultancy_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'hr-management-consultancy' ),
    'choices'		=> array(
        'blog-page-numbers'  => __( 'Numeric', 'hr-management-consultancy' ),
        'next-prev' => __( 'Older Posts/Newer Posts', 'hr-management-consultancy' ),
  )));

    // Button Settings
	$wp_customize->add_section( 'hr_management_consultancy_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'hr-management-consultancy' ),
		'panel' => 'hr_management_consultancy_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('hr_management_consultancy_button_text', array( 
		'selector' => '.post-main-box .more-btn a', 
		'render_callback' => 'hr_management_consultancy_Customize_partial_hr_management_consultancy_button_text', 
	));

  $wp_customize->add_setting('hr_management_consultancy_button_text',array(
		'default'=> esc_html__('Read More','hr-management-consultancy'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_button_text',array(
		'label'	=> esc_html__('Add Button Text','hr-management-consultancy'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('hr_management_consultancy_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_button_font_size',array(
		'label'	=> __('Button Font Size','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'hr-management-consultancy' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'hr_management_consultancy_button_settings',
	));


	$wp_customize->add_setting( 'hr_management_consultancy_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'hr_management_consultancy_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('hr_management_consultancy_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'hr-management-consultancy' ),
    ),
		'section'=> 'hr_management_consultancy_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'hr-management-consultancy' ),
    ),
		'section'=> 'hr_management_consultancy_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'hr-management-consultancy' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'hr_management_consultancy_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('hr_management_consultancy_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','hr-management-consultancy'),
		'choices' => array(
      'Uppercase' => __('Uppercase','hr-management-consultancy'),
      'Capitalize' => __('Capitalize','hr-management-consultancy'),
      'Lowercase' => __('Lowercase','hr-management-consultancy'),
    ),
		'section'=> 'hr_management_consultancy_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'hr_management_consultancy_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'hr-management-consultancy' ),
		'panel' => 'hr_management_consultancy_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('hr_management_consultancy_related_post_title', array( 
		'selector' => '.related-post h3', 
		'render_callback' => 'hr_management_consultancy_Customize_partial_hr_management_consultancy_related_post_title', 
	));

  $wp_customize->add_setting( 'hr_management_consultancy_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ) );
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_related_post',array(
		'label' => esc_html__( 'Related Post','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_related_posts_settings'
  )));

  $wp_customize->add_setting('hr_management_consultancy_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Related Post', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('hr_management_consultancy_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'hr_management_consultancy_sanitize_number_absint'
	));
	$wp_customize->add_control('hr_management_consultancy_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => esc_html__( '3', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'hr_management_consultancy_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'hr_management_consultancy_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'hr_management_consultancy_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'hr-management-consultancy' ),
		'panel' => 'hr_management_consultancy_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('hr_management_consultancy_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_single_blog_settings',
		'setting'	=> 'hr_management_consultancy_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'hr_management_consultancy_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
	) );
	$wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_single_postdate',array(
	   'label' => esc_html__( 'Show / Hide Date','hr-management-consultancy' ),
	   'section' => 'hr_management_consultancy_single_blog_settings'
	)));

	$wp_customize->add_setting('hr_management_consultancy_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_single_author_icon',array(
		'label'	=> __('Add Author Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_single_blog_settings',
		'setting'	=> 'hr_management_consultancy_single_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'hr_management_consultancy_single_author',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
	) );
	$wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_single_author',array(
	    'label' => esc_html__( 'Show / Hide Author','hr-management-consultancy' ),
	    'section' => 'hr_management_consultancy_single_blog_settings'
	)));

   	$wp_customize->add_setting('hr_management_consultancy_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_single_blog_settings',
		'setting'	=> 'hr_management_consultancy_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'hr_management_consultancy_single_comments',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
	) );
	$wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_single_comments',array(
	    'label' => esc_html__( 'Show / Hide Comments','hr-management-consultancy' ),
	    'section' => 'hr_management_consultancy_single_blog_settings'
	)));

  	$wp_customize->add_setting('hr_management_consultancy_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_single_time_icon',array(
		'label'	=> __('Add Time Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_single_blog_settings',
		'setting'	=> 'hr_management_consultancy_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'hr_management_consultancy_single_time',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
	) );
	$wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_single_time',array(
	    'label' => esc_html__( 'Show / Hide Time','hr-management-consultancy' ),
	    'section' => 'hr_management_consultancy_single_blog_settings'
	)));

	$wp_customize->add_setting( 'hr_management_consultancy_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
	));
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_single_blog_settings'
  )));

	$wp_customize->add_setting( 'hr_management_consultancy_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ) );
 	 $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_single_blog_settings'
    )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'hr_management_consultancy_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ) );
  	$wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_single_blog_settings'
    )));

	$wp_customize->add_setting('hr_management_consultancy_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','hr-management-consultancy'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'hr_management_consultancy_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
	));
	$wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_single_blog_post_navigation_show_hide', array(
		  'label' => esc_html__( 'Show / Hide Post Navigation','hr-management-consultancy' ),
		  'section' => 'hr_management_consultancy_single_blog_settings'
	)));

	//navigation text
	$wp_customize->add_setting('hr_management_consultancy_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( 'PREVIOUS', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( 'NEXT', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('hr_management_consultancy_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','hr-management-consultancy'),
		'input_attrs' => array(
        'placeholder' => __( 'Leave a Reply', 'hr-management-consultancy' ),
    	),
		'section'=> 'hr_management_consultancy_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('hr_management_consultancy_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','hr-management-consultancy'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','hr-management-consultancy'),
		'description'	=> __('Enter a value in %. Example:50%','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '100%', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'hr_management_consultancy_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'hr-management-consultancy' ),
		'panel' => 'hr_management_consultancy_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('hr_management_consultancy_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_grid_layout_settings',
		'setting'	=> 'hr_management_consultancy_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'hr_management_consultancy_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ) );
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','hr-management-consultancy' ),
    'section' => 'hr_management_consultancy_grid_layout_settings'
  )));

	$wp_customize->add_setting('hr_management_consultancy_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_grid_author_icon',array(
		'label'	=> __('Add Author Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_grid_layout_settings',
		'setting'	=> 'hr_management_consultancy_grid_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'hr_management_consultancy_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ) );
    $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_grid_layout_settings'
    )));

    $wp_customize->add_setting('hr_management_consultancy_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_grid_layout_settings',
		'setting'	=> 'hr_management_consultancy_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'hr_management_consultancy_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ) );
    $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_grid_layout_settings'
    )));

    $wp_customize->add_setting('hr_management_consultancy_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_grid_time_icon',array(
		'label'	=> __('Add Time Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_grid_layout_settings',
		'setting'	=> 'hr_management_consultancy_grid_time_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'hr_management_consultancy_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ) );
    $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_grid_layout_settings'
    )));

 	$wp_customize->add_setting('hr_management_consultancy_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','hr-management-consultancy'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','hr-management-consultancy'),
		'section'=> 'hr_management_consultancy_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('hr_management_consultancy_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','hr-management-consultancy'),
      'Without Blocks' => __('Without Blocks','hr-management-consultancy')
      ),
	) );

	$wp_customize->add_setting('hr_management_consultancy_grid_button_text',array(
		'default'=> esc_html__('Read More','hr-management-consultancy'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','hr-management-consultancy'),
		'input_attrs' => array(
        'placeholder' => esc_html__( 'Read More', 'hr-management-consultancy' ),
      ),
		'section'=> 'hr_management_consultancy_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','hr-management-consultancy'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_grid_layout_settings',
		'type'=> 'text'
	));

	//Other
	$wp_customize->add_panel( 'hr_management_consultancy_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'hr-management-consultancy' ),
		'panel' => 'islamic_center_mosqu_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'hr_management_consultancy_left_right', array(
  	'title' => esc_html__('General Settings', 'hr-management-consultancy'),
		'panel' => 'hr_management_consultancy_other_parent_panel'
	) );

	$wp_customize->add_setting('hr_management_consultancy_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Image_Radio_Control($wp_customize, 'hr_management_consultancy_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','hr-management-consultancy'),
    'description' => esc_html__('Here you can change the width layout of Website.','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
    ))));

	$wp_customize->add_setting('hr_management_consultancy_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','hr-management-consultancy'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','hr-management-consultancy'),
        'Right_Sidebar' => esc_html__('Right Sidebar','hr-management-consultancy'),
        'One_Column' => esc_html__('One Column','hr-management-consultancy')
        ),
	) );

    // Pre-Loader
	$wp_customize->add_setting( 'hr_management_consultancy_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ) );
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_loader_enable',array(
      'label' => esc_html__( 'Show/ Hide Pre-Loader','hr-management-consultancy' ),
      'section' => 'hr_management_consultancy_left_right'
  )));

	$wp_customize->add_setting('hr_management_consultancy_preloader_bg_color', array(
		'default'           => '#21286A',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_left_right',
	)));

	$wp_customize->add_setting('hr_management_consultancyl_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'hr_management_consultancyl_preloader_bg_img',array(
    'label' => __('Preloader Background Image','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_left_right'
	)));

	$wp_customize->add_setting('hr_management_consultancy_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_left_right',
	)));

  //404 Page Setting
	$wp_customize->add_section('hr_management_consultancy_404_page',array(
		'title'	=> __('404 Page Settings','hr-management-consultancy'),
		'panel' => 'hr_management_consultancy_other_parent_panel',
	));

	$wp_customize->add_setting('hr_management_consultancy_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('hr_management_consultancy_404_page_title',array(
		'label'	=> __('Add Title','hr-management-consultancy'),
		'input_attrs' => array(
        'placeholder' => __( '404 Not Found', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('hr_management_consultancy_404_page_content',array(
		'label'	=> __('Add Text','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_404_page_button_text',array(
		'label'	=> __('Add Button Text','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( 'Return to the home page', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('hr_management_consultancy_no_results_page',array(
		'title'	=> __('No Results Page Settings','hr-management-consultancy'),
		'panel' => 'hr_management_consultancy_other_parent_panel',
	));

	$wp_customize->add_setting('hr_management_consultancy_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('hr_management_consultancy_no_results_page_title',array(
		'label'	=> __('Add Title','hr-management-consultancy'),
		'input_attrs' => array(
    'placeholder' => __( 'Nothing Found', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('hr_management_consultancy_no_results_page_content',array(
		'label'	=> __('Add Text','hr-management-consultancy'),
		'input_attrs' => array(
    'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_no_results_page',
		'type'=> 'text'
	));
 
	//Social Icon Setting
	$wp_customize->add_section('hr_management_consultancy_social_icon_settings',array(
		'title'	=> __('Social Icons Settings','hr-management-consultancy'),
		'panel' => 'hr_management_consultancy_other_parent_panel',
	));

	$wp_customize->add_setting('hr_management_consultancy_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_social_icon_padding',array(
		'label'	=> __('Icon Padding','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_social_icon_width',array(
		'label'	=> __('Icon Width','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_social_icon_height',array(
		'label'	=> __('Icon Height','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'hr_management_consultancy_social_icon_border_radius', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_social_icon_border_radius', array(
		'label'       => esc_html__( 'Icon Border Radius','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_social_icon_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Responsive Media Settings
	$wp_customize->add_section('hr_management_consultancy_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','hr-management-consultancy'),
		'panel' => 'hr_management_consultancy_other_parent_panel',
	));

  $wp_customize->add_setting( 'hr_management_consultancy_resp_slider_hide_show',array(
    	'default' => 1,
   	'transport' => 'refresh',
    	'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ));  
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_resp_slider_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Slider','hr-management-consultancy' ),
    	'section' => 'hr_management_consultancy_responsive_media'
  )));

  $wp_customize->add_setting( 'hr_management_consultancy_sidebar_hide_show',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ));  
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_sidebar_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Sidebar','hr-management-consultancy' ),
    	'section' => 'hr_management_consultancy_responsive_media'
  )));

  $wp_customize->add_setting( 'hr_management_consultancy_resp_scroll_top_hide_show',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ));  
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','hr-management-consultancy' ),
    	'section' => 'hr_management_consultancy_responsive_media'
  )));

  $wp_customize->add_setting('hr_management_consultancy_res_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_res_menu_open_icon',array(
		'label'	=> __('Add Open Menu Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_responsive_media',
		'setting'	=> 'hr_management_consultancy_res_menu_open_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('hr_management_consultancy_res_close_menus_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new HR_Management_Consultancy_Fontawesome_Icon_Chooser(
        $wp_customize,'hr_management_consultancy_res_close_menus_icon',array(
		'label'	=> __('Add Close Menu Icon','hr-management-consultancy'),
		'transport' => 'refresh',
		'section'	=> 'hr_management_consultancy_responsive_media',
		'setting'	=> 'hr_management_consultancy_res_close_menus_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('hr_management_consultancy_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#21286A',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_management_consultancy_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'hr-management-consultancy'),
		'section'  => 'hr_management_consultancy_responsive_media',
	)));

   	//Woocommerce settings
	$wp_customize->add_section('hr_management_consultancy_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'hr-management-consultancy'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

  //Shop Page Featured Image
	$wp_customize->add_setting( 'hr_management_consultancy_shop_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_shop_featured_image_border_radius', array(
		'label'       => esc_html__( 'Shop Page Featured Image Border Radius','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'hr_management_consultancy_shop_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_shop_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Shop Page Featured Image Box Shadow','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

 	// Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'hr_management_consultancy_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar', 
		'render_callback' => 'hr_management_consultancy_customize_partial_hr_management_consultancy_woocommerce_shop_page_sidebar', ) );

  // Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'hr_management_consultancy_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ) );
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_woocommerce_shop_page_sidebar',array(
	'label' => esc_html__( 'Shop Page Sidebar','hr-management-consultancy' ),
	'section' => 'hr_management_consultancy_woocommerce_section'
  )));

  $wp_customize->add_setting('hr_management_consultancy_shop_page_layout',array(
      'default' => 'Right Sidebar',
      'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','hr-management-consultancy'),
    'section' => 'hr_management_consultancy_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','hr-management-consultancy'),
        'Right Sidebar' => __('Right Sidebar','hr-management-consultancy'),
        ),
	) );

  // Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'hr_management_consultancy_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar', 
		'render_callback' => 'hr_management_consultancy_customize_partial_hr_management_consultancy_woocommerce_single_product_page_sidebar', ) );

  //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'hr_management_consultancy_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
    ) );
    $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Single Product Sidebar','hr-management-consultancy' ),
		'section' => 'hr_management_consultancy_woocommerce_section'
    )));

    $wp_customize->add_setting('hr_management_consultancy_single_product_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_single_product_layout',array(
        'type' => 'select',
        'label' => __('Single Product Sidebar Layout','hr-management-consultancy'),
        'section' => 'hr_management_consultancy_woocommerce_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','hr-management-consultancy'),
            'Right Sidebar' => __('Right Sidebar','hr-management-consultancy'),
        ),
	) );

	//Products padding
	$wp_customize->add_setting('hr_management_consultancy_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'hr_management_consultancy_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'hr_management_consultancy_products_border_radius', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('hr_management_consultancy_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'hr_management_consultancy_products_button_border_radius', array(
		'default'              => '100',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products Sale Badge
	$wp_customize->add_setting('hr_management_consultancy_woocommerce_sale_position',array(
        'default' => 'right',
        'sanitize_callback' => 'hr_management_consultancy_sanitize_choices'
	));
	$wp_customize->add_control('hr_management_consultancy_woocommerce_sale_position',array(
        'type' => 'select',
        'label' => __('Sale Badge Position','hr-management-consultancy'),
        'section' => 'hr_management_consultancy_woocommerce_section',
        'choices' => array(
            'left' => __('Left','hr-management-consultancy'),
            'right' => __('Right','hr-management-consultancy'),
        ),
	) );

	$wp_customize->add_setting('hr_management_consultancy_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('hr_management_consultancy_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hr_management_consultancy_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','hr-management-consultancy'),
		'description'	=> __('Enter a value in pixels. Example:20px','hr-management-consultancy'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'hr-management-consultancy' ),
        ),
		'section'=> 'hr_management_consultancy_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'hr_management_consultancy_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hr_management_consultancy_sanitize_number_range'
	) );
	$wp_customize->add_control( 'hr_management_consultancy_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','hr-management-consultancy' ),
		'section'     => 'hr_management_consultancy_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  // Related Product
  $wp_customize->add_setting( 'hr_management_consultancy_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'hr_management_consultancy_switch_sanitization'
  ) );
  $wp_customize->add_control( new HR_Management_Consultancy_Toggle_Switch_Custom_Control( $wp_customize, 'hr_management_consultancy_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','hr-management-consultancy' ),
    'section' => 'hr_management_consultancy_woocommerce_section'
  )));


}

add_action( 'customize_register', 'hr_management_consultancy_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class HR_Management_Consultancy_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'HR_Management_Consultancy_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new HR_Management_Consultancy_Customize_Section_Pro( $manager,'hr_management_consultancy_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'HR MANAGEMENT PRO', 'hr-management-consultancy' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'hr-management-consultancy' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/job-consultancy-wordpress-theme/'),
		) )	);

		// Register sections.
		$manager->add_section(new HR_Management_Consultancy_Customize_Section_Pro($manager,'hr_management_consultancy_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'hr-management-consultancy' ),
			'pro_text' => esc_html__( 'DOCS', 'hr-management-consultancy' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-hr-management-consultancy/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'hr-management-consultancy-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'hr-management-consultancy-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
HR_Management_Consultancy_Customize::get_instance();