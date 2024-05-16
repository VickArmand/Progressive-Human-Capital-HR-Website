<?php

	$hr_management_consultancy_custom_css= "";

	/*-------------------- First Highlight Color -------------------*/

	$hr_management_consultancy_first_color = get_theme_mod('hr_management_consultancy_first_color');

	if($hr_management_consultancy_first_color != false){
		$hr_management_consultancy_custom_css .='.principle-box:hover .principle-box-inner-img, .more-btn a, #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #footer input[type="submit"], #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .scrollup i:hover, #sidebar .custom-social-icons a,#footer .custom-social-icons a, #sidebar h3,  #sidebar .widget_block h3, #sidebar h2, .pagination span, .pagination a, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, .scrollup i, .middle-header, .pagination a:hover, .pagination .current, #sidebar .tagcloud a:hover, .page-template-custom-home-page .middle-header, #main-product button.tablinks.active, .main-product-section .pro-button, .main-product-section:hover .the_timer, nav.woocommerce-MyAccount-navigation ul li:hover, #preloader, .event-btn-1 a, .event-btn-2 a:hover,.wp-block-tag-cloud a:hover,#sidebar h3, #sidebar .widget_block h3, #sidebar h2, #sidebar label.wp-block-search__label, #sidebar .wp-block-heading,.bradcrumbs a, .post-categories li a,.bradcrumbs span,.wp-block-button__link,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button{';
			$hr_management_consultancy_custom_css .='background: '.esc_attr($hr_management_consultancy_first_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	if($hr_management_consultancy_first_color != false){
		$hr_management_consultancy_custom_css .='.main-header span.donate a:hover, .main-header span.volunteer a:hover, .main-header span.donate i:hover, .main-header span.volunteer i:hover, .box-content h3, .box-content h3 a, .woocommerce-message::before,.woocommerce-info::before,.post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .main-navigation ul li.current_page_item, .main-navigation li a:hover,.main-navigation ul li.current_page_item a, .main-navigation li a:hover, .main-navigation ul ul li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover,p.site-title a:hover, .logo h1 a:hover,.wp-block-latest-comments__comment-meta a,.post-main-box:hover h3 a, #sidebar ul li a:hover, #footer li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .post-navigation a:hover, .post-navigation a:focus{';
			$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_first_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	if($hr_management_consultancy_first_color != false){
		$hr_management_consultancy_custom_css .='.post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a,.main-header span.donate a:hover, .main-header span.volunteer a:hover, .main-header span.donate i:hover, .main-header span.volunteer i:hover, .box-content h3, .box-content h3 a, .woocommerce-message::before, .woocommerce-info::before, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .main-navigation ul li.current_page_item, .main-navigation li a:hover, .main-navigation ul li.current_page_item a, .main-navigation li a:hover, .main-navigation ul ul li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover, p.site-title a:hover, .logo h1 a:hover, .wp-block-latest-comments__comment-meta a, .post-main-box:hover h3 a, #sidebar ul li a:hover, #footer li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .post-navigation a:hover, .post-navigation a:focus,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_first_color).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}

	if($hr_management_consultancy_first_color != false){
		$hr_management_consultancy_custom_css .='.main-navigation ul ul{';
			$hr_management_consultancy_custom_css .='border-top:2px solid '.esc_attr($hr_management_consultancy_first_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	if($hr_management_consultancy_first_color != false){
		$hr_management_consultancy_custom_css .='.main-navigation ul ul{';
			$hr_management_consultancy_custom_css .='border-bottom:2px solid '.esc_attr($hr_management_consultancy_first_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	if($hr_management_consultancy_first_color != false){
		$hr_management_consultancy_custom_css .='.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$hr_management_consultancy_custom_css .='border-left:4px solid '.esc_attr($hr_management_consultancy_first_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	// second color

	$hr_management_consultancy_second_color = get_theme_mod('hr_management_consultancy_second_color');
	if($hr_management_consultancy_second_color != false){
	$hr_management_consultancy_custom_css .='.error-btn a:hover, .more-btn a:hover, input[type="submit"]:hover, #comments a.comment-reply-link:hover, .pagination a:hover, #footer .tagcloud a:hover, .pro-button a:hover,.header-button a:hover, .slide-search input.search-submit:hover, .popular-cat-btn a:hover,#comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce a.added_to_cart.wc-forward:hover,#slider .slider-btn a:hover,.error-btn a:hover, .more-btn a:hover,input[type="submit"]:hover, #comments a.comment-reply-link:hover,.pagination a:hover,#footer .tagcloud a:hover, .pro-button a:hover,.scrollup i:hover,nav.navigation.posts-navigation .nav-previous a:hover, nav.navigation.posts-navigation .nav-next a:hover,.error-btn a:hover, .more-btn a:hover, input[type="submit"]:hover, #comments a.comment-reply-link:hover, .pagination a:hover, #footer .tagcloud a:hover, .pro-button a:hover ,.wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover{';
				$hr_management_consultancy_custom_css .='background: '.esc_attr($hr_management_consultancy_second_color).'!important;';
			$hr_management_consultancy_custom_css .='}';
		}

		if($hr_management_consultancy_second_color != false){
			$hr_management_consultancy_custom_css .='#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.features-meta-fields1{';
				$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_second_color).';';
			$hr_management_consultancy_custom_css .='}';
		}
	$hr_management_consultancy_custom_css .='}';

	
	/*---------------------------Width Layout -------------------*/

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_width_option','Full Width');
    if($hr_management_consultancy_theme_lay == 'Boxed'){
		$hr_management_consultancy_custom_css .='body{';
			$hr_management_consultancy_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='right: 100px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.row.outer-logo{';
			$hr_management_consultancy_custom_css .='margin-left: 0px;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_theme_lay == 'Wide Width'){
		$hr_management_consultancy_custom_css .='body{';
			$hr_management_consultancy_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='right: 30px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.row.outer-logo{';
			$hr_management_consultancy_custom_css .='margin-left: 0px;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_theme_lay == 'Full Width'){
		$hr_management_consultancy_custom_css .='body{';
			$hr_management_consultancy_custom_css .='max-width: 100%;';
		$hr_management_consultancy_custom_css .='}';
	}

/*---------------------------Width Layout -------------------*/

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_width_option','Full Width');
    if($hr_management_consultancy_theme_lay == 'Boxed'){
		$hr_management_consultancy_custom_css .='body{';
			$hr_management_consultancy_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#slider .carousel-caption h1 a{';
			$hr_management_consultancy_custom_css .='font-size: 40px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.admin-bar #slider .carousel-caption,#slider .carousel-caption{';
			$hr_management_consultancy_custom_css .=' top: 0;right: 30px !important;left: 30px; height: 470px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.page-template-custom-home-page .inner-head-box {';
			$hr_management_consultancy_custom_css .='padding: 15px 50px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.slider-inner-box{';
			$hr_management_consultancy_custom_css .='top: 160px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#slider .carousel-control-next{';
			$hr_management_consultancy_custom_css .='right: 83%;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#slider .carousel-control-prev{';
			$hr_management_consultancy_custom_css .='left: 5%;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#slider .carousel-control-prev, #slider .carousel-control-next{';
			$hr_management_consultancy_custom_css .='bottom: 20px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.scrollup i{';
		  $hr_management_consultancy_custom_css .='right: 100px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.scrollup.left i{';
		  $hr_management_consultancy_custom_css .='left: 100px;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_theme_lay == 'Wide Width'){
		$hr_management_consultancy_custom_css .='body{';
			$hr_management_consultancy_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.scrollup i{';
		  $hr_management_consultancy_custom_css .='right: 30px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.scrollup.left i{';
		  $hr_management_consultancy_custom_css .='left: 30px;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_theme_lay == 'Full Width'){
		$hr_management_consultancy_custom_css .='body{';
			$hr_management_consultancy_custom_css .='max-width: 100%;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$hr_management_consultancy_slider_height = get_theme_mod('hr_management_consultancy_slider_height');
	if($hr_management_consultancy_slider_height != false){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='height: '.esc_attr($hr_management_consultancy_slider_height).';';
		$hr_management_consultancy_custom_css .='}';
	}

	/*----------------- Slider Content Layout -------------------*/

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_slider_content_option','Left');
    if($hr_management_consultancy_theme_lay == 'Left'){
		$hr_management_consultancy_custom_css .='#slider .carousel-caption{';
			$hr_management_consultancy_custom_css .='text-align:left; left: 15%;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_theme_lay == 'Center'){
		$hr_management_consultancy_custom_css .='#slider .carousel-caption{';
			$hr_management_consultancy_custom_css .='text-align:center; right: 25%; left: 25%;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_theme_lay == 'Right'){
		$hr_management_consultancy_custom_css .='#slider .carousel-caption{';
			$hr_management_consultancy_custom_css .='text-align:center; right: 10%; left: 50%;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$hr_management_consultancy_slider_content_padding_top_bottom = get_theme_mod('hr_management_consultancy_slider_content_padding_top_bottom');
	$hr_management_consultancy_slider_content_padding_left_right = get_theme_mod('hr_management_consultancy_slider_content_padding_left_right');
	if($hr_management_consultancy_slider_content_padding_top_bottom != false || $hr_management_consultancy_slider_content_padding_left_right != false){
		$hr_management_consultancy_custom_css .='#slider .carousel-caption{';
			$hr_management_consultancy_custom_css .='top: '.esc_attr($hr_management_consultancy_slider_content_padding_top_bottom).'; bottom: '.esc_attr($hr_management_consultancy_slider_content_padding_top_bottom).';left: '.esc_attr($hr_management_consultancy_slider_content_padding_left_right).';right: '.esc_attr($hr_management_consultancy_slider_content_padding_left_right).';';
		$hr_management_consultancy_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_slider_opacity_color','0.7');
	if($hr_management_consultancy_theme_lay == '0'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.1'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.1';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.2'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.2';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.3'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.3';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.4'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.4';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.5'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.5';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.6'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.6';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.7'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.7';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.8'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.8';
		$hr_management_consultancy_custom_css .='}';
		}else if($hr_management_consultancy_theme_lay == '0.9'){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:0.9';
		$hr_management_consultancy_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$hr_management_consultancy_slider_image_overlay = get_theme_mod('hr_management_consultancy_slider_image_overlay', true);
	if($hr_management_consultancy_slider_image_overlay == false){
		$hr_management_consultancy_custom_css .='#slider img{';
			$hr_management_consultancy_custom_css .='opacity:1;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_slider_image_overlay_color = get_theme_mod('hr_management_consultancy_slider_image_overlay_color', true);
	if($hr_management_consultancy_slider_image_overlay_color != false){
		$hr_management_consultancy_custom_css .='#slider{';
			$hr_management_consultancy_custom_css .='background-color: '.esc_attr($hr_management_consultancy_slider_image_overlay_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$hr_management_consultancy_resp_slider = get_theme_mod( 'hr_management_consultancy_resp_slider_hide_show',true);
	if($hr_management_consultancy_resp_slider == true && get_theme_mod( 'hr_management_consultancy_slider_hide_show', false) == false){
    	$hr_management_consultancy_custom_css .='#slider{';
			$hr_management_consultancy_custom_css .='display:none;';
		$hr_management_consultancy_custom_css .='} ';
	}
    if($hr_management_consultancy_resp_slider == true){
    	$hr_management_consultancy_custom_css .='@media screen and (max-width:575px) {';
		$hr_management_consultancy_custom_css .='#slider{';
			$hr_management_consultancy_custom_css .='display:block;';
		$hr_management_consultancy_custom_css .='} }';
	}else if($hr_management_consultancy_resp_slider == false){
		$hr_management_consultancy_custom_css .='@media screen and (max-width:575px) {';
		$hr_management_consultancy_custom_css .='#slider{';
			$hr_management_consultancy_custom_css .='display:none;';
		$hr_management_consultancy_custom_css .='} }';
		$hr_management_consultancy_custom_css .='@media screen and (max-width:575px){';
		$hr_management_consultancy_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$hr_management_consultancy_custom_css .='margin-top: 45px;';
		$hr_management_consultancy_custom_css .='} }';
	}

	$hr_management_consultancy_resp_sidebar = get_theme_mod( 'hr_management_consultancy_sidebar_hide_show',true);
    if($hr_management_consultancy_resp_sidebar == true){
    	$hr_management_consultancy_custom_css .='@media screen and (max-width:575px) {';
		$hr_management_consultancy_custom_css .='#sidebar{';
			$hr_management_consultancy_custom_css .='display:block;';
		$hr_management_consultancy_custom_css .='} }';
	}else if($hr_management_consultancy_resp_sidebar == false){
		$hr_management_consultancy_custom_css .='@media screen and (max-width:575px) {';
		$hr_management_consultancy_custom_css .='#sidebar{';
			$hr_management_consultancy_custom_css .='display:none;';
		$hr_management_consultancy_custom_css .='} }';
	}

	$hr_management_consultancy_resp_scroll_top = get_theme_mod( 'hr_management_consultancy_resp_scroll_top_hide_show',true);
	if($hr_management_consultancy_resp_scroll_top == true && get_theme_mod( 'hr_management_consultancy_hide_show_scroll',true) == false){
    	$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='visibility:hidden !important;';
		$hr_management_consultancy_custom_css .='} ';
	}
    if($hr_management_consultancy_resp_scroll_top == true){
    	$hr_management_consultancy_custom_css .='@media screen and (max-width:575px) {';
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='visibility:visible !important;';
		$hr_management_consultancy_custom_css .='} }';
	}else if($hr_management_consultancy_resp_scroll_top == false){
		$hr_management_consultancy_custom_css .='@media screen and (max-width:575px){';
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='visibility:hidden !important;';
		$hr_management_consultancy_custom_css .='} }';
	}

	$hr_management_consultancy_resp_menu_toggle_btn_bg_color = get_theme_mod('hr_management_consultancy_resp_menu_toggle_btn_bg_color');
	if($hr_management_consultancy_resp_menu_toggle_btn_bg_color != false){
		$hr_management_consultancy_custom_css .='.toggle-nav i{';
			$hr_management_consultancy_custom_css .='background: '.esc_attr($hr_management_consultancy_resp_menu_toggle_btn_bg_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$hr_management_consultancy_copyright_alingment = get_theme_mod('hr_management_consultancy_copyright_alingment');
	if($hr_management_consultancy_copyright_alingment != false){
		$hr_management_consultancy_custom_css .='.copyright p{';
			$hr_management_consultancy_custom_css .='text-align: '.esc_attr($hr_management_consultancy_copyright_alingment).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_copyright_background_color = get_theme_mod('hr_management_consultancy_copyright_background_color');
	if($hr_management_consultancy_copyright_background_color != false){
		$hr_management_consultancy_custom_css .='#footer-2{';
			$hr_management_consultancy_custom_css .='background-color: '.esc_attr($hr_management_consultancy_copyright_background_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_footer_background_color = get_theme_mod('hr_management_consultancy_footer_background_color');
	if($hr_management_consultancy_footer_background_color != false){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background-color: '.esc_attr($hr_management_consultancy_footer_background_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_footer_widgets_heading = get_theme_mod( 'hr_management_consultancy_footer_widgets_heading','Left');
    if($hr_management_consultancy_footer_widgets_heading == 'Left'){
		$hr_management_consultancy_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$hr_management_consultancy_custom_css .='text-align: left;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_footer_widgets_heading == 'Center'){
		$hr_management_consultancy_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$hr_management_consultancy_custom_css .='text-align: center;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_footer_widgets_heading == 'Right'){
		$hr_management_consultancy_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$hr_management_consultancy_custom_css .='text-align: right;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_footer_widgets_content = get_theme_mod( 'hr_management_consultancy_footer_widgets_content','Left');
    if($hr_management_consultancy_footer_widgets_content == 'Left'){
		$hr_management_consultancy_custom_css .='#footer .widget{';
		$hr_management_consultancy_custom_css .='text-align: left;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_footer_widgets_content == 'Center'){
		$hr_management_consultancy_custom_css .='#footer .widget{';
			$hr_management_consultancy_custom_css .='text-align: center;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_footer_widgets_content == 'Right'){
		$hr_management_consultancy_custom_css .='#footer .widget{';
			$hr_management_consultancy_custom_css .='text-align: right;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_copyright_font_size = get_theme_mod('hr_management_consultancy_copyright_font_size');
	if($hr_management_consultancy_copyright_font_size != false){
		$hr_management_consultancy_custom_css .='#footer-2 a, #footer-2 p{';
			$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_copyright_font_size).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_copyright_alingment = get_theme_mod('hr_management_consultancy_copyright_alingment');
	if($hr_management_consultancy_copyright_alingment != false){
		$hr_management_consultancy_custom_css .='#footer-2 p{';
			$hr_management_consultancy_custom_css .='text-align: '.esc_attr($hr_management_consultancy_copyright_alingment).';';
		$hr_management_consultancy_custom_css .='}';
	}
	$hr_management_consultancy_copyright_padding_top_bottom = get_theme_mod('hr_management_consultancy_copyright_padding_top_bottom');
	if($hr_management_consultancy_copyright_padding_top_bottom != false){
		$hr_management_consultancy_custom_css .='#footer-2{';
			$hr_management_consultancy_custom_css .='padding-top: '.esc_attr($hr_management_consultancy_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($hr_management_consultancy_copyright_padding_top_bottom).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_footer_padding = get_theme_mod('hr_management_consultancy_footer_padding');
	if($hr_management_consultancy_footer_padding != false){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='padding: '.esc_attr($hr_management_consultancy_footer_padding).' 0;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_footer_background_image = get_theme_mod('hr_management_consultancy_footer_background_image');
	if($hr_management_consultancy_footer_background_image != false){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background: url('.esc_attr($hr_management_consultancy_footer_background_image).');background-size:cover;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_img_footer','scroll');
	if($hr_management_consultancy_theme_lay == 'fixed'){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$hr_management_consultancy_custom_css .='}';
	}elseif ($hr_management_consultancy_theme_lay == 'scroll'){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_footer_img_position = get_theme_mod('hr_management_consultancy_footer_img_position','center center');
	if($hr_management_consultancy_footer_img_position != false){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background-position: '.esc_attr($hr_management_consultancy_footer_img_position).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}
	/*------------- Preloader Background Color  -------------------*/

	$hr_management_consultancy_preloader_bg_color = get_theme_mod('hr_management_consultancy_preloader_bg_color');
	if($hr_management_consultancy_preloader_bg_color != false){
		$hr_management_consultancy_custom_css .='#preloader{';
			$hr_management_consultancy_custom_css .='background-color: '.esc_attr($hr_management_consultancy_preloader_bg_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_preloader_border_color = get_theme_mod('hr_management_consultancy_preloader_border_color');
	if($hr_management_consultancy_preloader_border_color != false){
		$hr_management_consultancy_custom_css .='.loader-line{';
			$hr_management_consultancy_custom_css .='border-color: '.esc_attr($hr_management_consultancy_preloader_border_color).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancyl_preloader_bg_img = get_theme_mod('hr_management_consultancyl_preloader_bg_img');
	if($hr_management_consultancyl_preloader_bg_img != false){
		$hr_management_consultancy_custom_css .='#preloader{';
			$hr_management_consultancy_custom_css .='background: url('.esc_attr($hr_management_consultancyl_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$hr_management_consultancy_scroll_to_top_font_size = get_theme_mod('hr_management_consultancy_scroll_to_top_font_size');
	if($hr_management_consultancy_scroll_to_top_font_size != false){
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_scroll_to_top_font_size).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_scroll_to_top_padding = get_theme_mod('hr_management_consultancy_scroll_to_top_padding');
	$hr_management_consultancy_scroll_to_top_padding = get_theme_mod('hr_management_consultancy_scroll_to_top_padding');
	if($hr_management_consultancy_scroll_to_top_padding != false){
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='padding-top: '.esc_attr($hr_management_consultancy_scroll_to_top_padding).';padding-bottom: '.esc_attr($hr_management_consultancy_scroll_to_top_padding).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_scroll_to_top_width = get_theme_mod('hr_management_consultancy_scroll_to_top_width');
	if($hr_management_consultancy_scroll_to_top_width != false){
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='width: '.esc_attr($hr_management_consultancy_scroll_to_top_width).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_scroll_to_top_height = get_theme_mod('hr_management_consultancy_scroll_to_top_height');
	if($hr_management_consultancy_scroll_to_top_height != false){
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='height: '.esc_attr($hr_management_consultancy_scroll_to_top_height).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_scroll_to_top_border_radius = get_theme_mod('hr_management_consultancy_scroll_to_top_border_radius');
	if($hr_management_consultancy_scroll_to_top_border_radius != false){
		$hr_management_consultancy_custom_css .='.scrollup i{';
			$hr_management_consultancy_custom_css .='border-radius: '.esc_attr($hr_management_consultancy_scroll_to_top_border_radius).'px;';
		$hr_management_consultancy_custom_css .='}';
	}

	// Header Background Color
	$hr_management_consultancy_header_background_color = get_theme_mod('hr_management_consultancy_header_background_color');
	if($hr_management_consultancy_header_background_color != false){
		$hr_management_consultancy_custom_css .='.home-page-header{';
			$hr_management_consultancy_custom_css .='background-color: '.esc_attr($hr_management_consultancy_header_background_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_header_img_position = get_theme_mod('hr_management_consultancy_header_img_position','center top');
	if($hr_management_consultancy_header_img_position != false){
		$hr_management_consultancy_custom_css .='.topbar{';
			$hr_management_consultancy_custom_css .='background-position: '.esc_attr($hr_management_consultancy_header_img_position).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_blog_layout_option','Default');
    if($hr_management_consultancy_theme_lay == 'Default'){
		$hr_management_consultancy_custom_css .='.post-main-box{';
			$hr_management_consultancy_custom_css .='';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_theme_lay == 'Center'){
		$hr_management_consultancy_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$hr_management_consultancy_custom_css .='text-align:center;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.post-info{';
			$hr_management_consultancy_custom_css .='margin-top:10px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.post-info hr{';
			$hr_management_consultancy_custom_css .='margin:15px auto;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_theme_lay == 'Left'){
		$hr_management_consultancy_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$hr_management_consultancy_custom_css .='text-align:Left;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.post-info hr{';
			$hr_management_consultancy_custom_css .='margin-bottom:10px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.post-main-box h2{';
			$hr_management_consultancy_custom_css .='margin-top:10px;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='.service-text .more-btn{';
			$hr_management_consultancy_custom_css .='display:inline-block;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$hr_management_consultancy_blog_page_posts_settings = get_theme_mod( 'hr_management_consultancy_blog_page_posts_settings','Into Blocks');
    if($hr_management_consultancy_blog_page_posts_settings == 'Without Blocks'){
		$hr_management_consultancy_custom_css .='.post-main-box{';
			$hr_management_consultancy_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$hr_management_consultancy_custom_css .='}';
	}

	// featured image dimention
	$hr_management_consultancy_blog_post_featured_image_dimension = get_theme_mod('hr_management_consultancy_blog_post_featured_image_dimension', 'default');
	$hr_management_consultancy_blog_post_featured_image_custom_width = get_theme_mod('hr_management_consultancy_blog_post_featured_image_custom_width',250);
	$hr_management_consultancy_blog_post_featured_image_custom_height = get_theme_mod('hr_management_consultancy_blog_post_featured_image_custom_height',250);
	if($hr_management_consultancy_blog_post_featured_image_dimension == 'custom'){
		$hr_management_consultancy_custom_css .='.post-main-box img{';
			$hr_management_consultancy_custom_css .='width: '.esc_attr($hr_management_consultancy_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($hr_management_consultancy_blog_post_featured_image_custom_height).';';
		$hr_management_consultancy_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$hr_management_consultancy_featured_image_border_radius = get_theme_mod('hr_management_consultancy_featured_image_border_radius', 0);
	if($hr_management_consultancy_featured_image_border_radius != false){
		$hr_management_consultancy_custom_css .='.box-image img, .feature-box img{';
			$hr_management_consultancy_custom_css .='border-radius: '.esc_attr($hr_management_consultancy_featured_image_border_radius).'px;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_featured_image_box_shadow = get_theme_mod('hr_management_consultancy_featured_image_box_shadow',0);
	if($hr_management_consultancy_featured_image_box_shadow != false){
		$hr_management_consultancy_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$hr_management_consultancy_custom_css .='box-shadow: '.esc_attr($hr_management_consultancy_featured_image_box_shadow).'px '.esc_attr($hr_management_consultancy_featured_image_box_shadow).'px '.esc_attr($hr_management_consultancy_featured_image_box_shadow).'px #cccccc;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$hr_management_consultancy_button_letter_spacing = get_theme_mod('hr_management_consultancy_button_letter_spacing',14);
	$hr_management_consultancy_custom_css .='.post-main-box .more-btn{';
		$hr_management_consultancy_custom_css .='letter-spacing: '.esc_attr($hr_management_consultancy_button_letter_spacing).';';
	$hr_management_consultancy_custom_css .='}';

	$hr_management_consultancy_button_border_radius = get_theme_mod('hr_management_consultancy_button_border_radius');
	if($hr_management_consultancy_button_border_radius != false){
		$hr_management_consultancy_custom_css .='.post-main-box .more-btn a{';
			$hr_management_consultancy_custom_css .='border-radius: '.esc_attr($hr_management_consultancy_button_border_radius).'px !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_button_top_bottom_padding = get_theme_mod('hr_management_consultancy_button_top_bottom_padding');
	$hr_management_consultancy_button_left_right_padding = get_theme_mod('hr_management_consultancy_button_left_right_padding');
	if($hr_management_consultancy_button_top_bottom_padding != false || $hr_management_consultancy_button_left_right_padding != false){
		$hr_management_consultancy_custom_css .='.post-main-box .more-btn{';
			$hr_management_consultancy_custom_css .='padding-top: '.esc_attr($hr_management_consultancy_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($hr_management_consultancy_button_top_bottom_padding).'!important;padding-left: '.esc_attr($hr_management_consultancy_button_left_right_padding).'!important;padding-right: '.esc_attr($hr_management_consultancy_button_left_right_padding).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_button_font_size = get_theme_mod('hr_management_consultancy_button_font_size',14);
	$hr_management_consultancy_custom_css .='.post-main-box .more-btn a{';
		$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_button_font_size).';';
	$hr_management_consultancy_custom_css .='}';

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_button_text_transform','Capitalize');
	if($hr_management_consultancy_theme_lay == 'Capitalize'){
		$hr_management_consultancy_custom_css .='.post-main-box .more-btn a{';
			$hr_management_consultancy_custom_css .='text-transform:Capitalize;';
		$hr_management_consultancy_custom_css .='}';
	}
	if($hr_management_consultancy_theme_lay == 'Lowercase'){
		$hr_management_consultancy_custom_css .='.post-main-box .more-btn a{';
			$hr_management_consultancy_custom_css .='text-transform:Lowercase;';
		$hr_management_consultancy_custom_css .='}';
	}
	if($hr_management_consultancy_theme_lay == 'Uppercase'){
		$hr_management_consultancy_custom_css .='.post-main-box .more-btn a{';
			$hr_management_consultancy_custom_css .='text-transform:Uppercase;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$hr_management_consultancy_single_blog_comment_button_text = get_theme_mod('hr_management_consultancy_single_blog_comment_button_text', 'Post Comment');
	if($hr_management_consultancy_single_blog_comment_button_text == ''){
		$hr_management_consultancy_custom_css .='#comments p.form-submit {';
			$hr_management_consultancy_custom_css .='display: none;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_comment_width = get_theme_mod('hr_management_consultancy_single_blog_comment_width');
	if($hr_management_consultancy_comment_width != false){
		$hr_management_consultancy_custom_css .='#comments textarea{';
			$hr_management_consultancy_custom_css .='width: '.esc_attr($hr_management_consultancy_comment_width).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_single_blog_post_navigation_show_hide = get_theme_mod('hr_management_consultancy_single_blog_post_navigation_show_hide',true);
	if($hr_management_consultancy_single_blog_post_navigation_show_hide != true){
		$hr_management_consultancy_custom_css .='.post-navigation{';
			$hr_management_consultancy_custom_css .='display: none;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$hr_management_consultancy_logo_padding = get_theme_mod('hr_management_consultancy_logo_padding');
	if($hr_management_consultancy_logo_padding != false){
		$hr_management_consultancy_custom_css .='.logo{';
			$hr_management_consultancy_custom_css .='padding: '.esc_attr($hr_management_consultancy_logo_padding).' !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_logo_margin = get_theme_mod('hr_management_consultancy_logo_margin');
	if($hr_management_consultancy_logo_margin != false){
		$hr_management_consultancy_custom_css .='.logo{';
			$hr_management_consultancy_custom_css .='margin: '.esc_attr($hr_management_consultancy_logo_margin).';';
		$hr_management_consultancy_custom_css .='}';
	}

	// Site title Font Size
	$hr_management_consultancy_site_title_font_size = get_theme_mod('hr_management_consultancy_site_title_font_size');
	if($hr_management_consultancy_site_title_font_size != false){
		$hr_management_consultancy_custom_css .='.logo p.site-title, .logo h1{';
			$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_site_title_font_size).';';
		$hr_management_consultancy_custom_css .='}';
	}

	// Site tagline Font Size
	$hr_management_consultancy_site_tagline_font_size = get_theme_mod('hr_management_consultancy_site_tagline_font_size');
	if($hr_management_consultancy_site_tagline_font_size != false){
		$hr_management_consultancy_custom_css .='.logo p.site-description{';
			$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_site_tagline_font_size).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_site_title_color = get_theme_mod('hr_management_consultancy_site_title_color');
	if($hr_management_consultancy_site_title_color != false){
		$hr_management_consultancy_custom_css .='p.site-title a, .logo h1 a{';
			$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_site_title_color).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_site_tagline_color = get_theme_mod('hr_management_consultancy_site_tagline_color');
	if($hr_management_consultancy_site_tagline_color != false){
		$hr_management_consultancy_custom_css .='.logo p.site-description{';
			$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_site_tagline_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_logo_width = get_theme_mod('hr_management_consultancy_logo_width');
	if($hr_management_consultancy_logo_width != false){
		$hr_management_consultancy_custom_css .='.logo img{';
			$hr_management_consultancy_custom_css .='width: '.esc_attr($hr_management_consultancy_logo_width).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_logo_height = get_theme_mod('hr_management_consultancy_logo_height');
	if($hr_management_consultancy_logo_height != false){
		$hr_management_consultancy_custom_css .='.logo img{';
			$hr_management_consultancy_custom_css .='height: '.esc_attr($hr_management_consultancy_logo_height).';';
		$hr_management_consultancy_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$hr_management_consultancy_related_product_show_hide = get_theme_mod('hr_management_consultancy_related_product_show_hide',true);
	if($hr_management_consultancy_related_product_show_hide != true){
		$hr_management_consultancy_custom_css .='.related.products{';
			$hr_management_consultancy_custom_css .='display: none;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_products_padding_top_bottom = get_theme_mod('hr_management_consultancy_products_padding_top_bottom');
	if($hr_management_consultancy_products_padding_top_bottom != false){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$hr_management_consultancy_custom_css .='padding-top: '.esc_attr($hr_management_consultancy_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($hr_management_consultancy_products_padding_top_bottom).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_products_padding_left_right = get_theme_mod('hr_management_consultancy_products_padding_left_right');
	if($hr_management_consultancy_products_padding_left_right != false){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$hr_management_consultancy_custom_css .='padding-left: '.esc_attr($hr_management_consultancy_products_padding_left_right).'!important; padding-right: '.esc_attr($hr_management_consultancy_products_padding_left_right).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_products_box_shadow = get_theme_mod('hr_management_consultancy_products_box_shadow');
	if($hr_management_consultancy_products_box_shadow != false){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$hr_management_consultancy_custom_css .='box-shadow: '.esc_attr($hr_management_consultancy_products_box_shadow).'px '.esc_attr($hr_management_consultancy_products_box_shadow).'px '.esc_attr($hr_management_consultancy_products_box_shadow).'px #ddd;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_products_border_radius = get_theme_mod('hr_management_consultancy_products_border_radius');
	if($hr_management_consultancy_products_border_radius != false){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$hr_management_consultancy_custom_css .='border-radius: '.esc_attr($hr_management_consultancy_products_border_radius).'px !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_products_btn_padding_top_bottom = get_theme_mod('hr_management_consultancy_products_btn_padding_top_bottom');
	if($hr_management_consultancy_products_btn_padding_top_bottom != false){
		$hr_management_consultancy_custom_css .='.woocommerce a.button{';
			$hr_management_consultancy_custom_css .='padding-top: '.esc_attr($hr_management_consultancy_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($hr_management_consultancy_products_btn_padding_top_bottom).' !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_products_btn_padding_left_right = get_theme_mod('hr_management_consultancy_products_btn_padding_left_right');
	if($hr_management_consultancy_products_btn_padding_left_right != false){
		$hr_management_consultancy_custom_css .='.woocommerce a.button{';
			$hr_management_consultancy_custom_css .='padding-left: '.esc_attr($hr_management_consultancy_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($hr_management_consultancy_products_btn_padding_left_right).' !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_products_button_border_radius = get_theme_mod('hr_management_consultancy_products_button_border_radius', 100);
	if($hr_management_consultancy_products_button_border_radius != false){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$hr_management_consultancy_custom_css .='border-radius: '.esc_attr($hr_management_consultancy_products_button_border_radius).'px;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_woocommerce_sale_position = get_theme_mod( 'hr_management_consultancy_woocommerce_sale_position','right');
    if($hr_management_consultancy_woocommerce_sale_position == 'left'){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product .onsale{';
			$hr_management_consultancy_custom_css .='left: -10px !important; right: auto !important;';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_woocommerce_sale_position == 'right'){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product .onsale{';
			$hr_management_consultancy_custom_css .='left: auto !important; right: 0 !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_woocommerce_sale_font_size = get_theme_mod('hr_management_consultancy_woocommerce_sale_font_size');
	if($hr_management_consultancy_woocommerce_sale_font_size != false){
		$hr_management_consultancy_custom_css .='.woocommerce span.onsale{';
			$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_woocommerce_sale_font_size).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_woocommerce_sale_padding_top_bottom = get_theme_mod('hr_management_consultancy_woocommerce_sale_padding_top_bottom');
	if($hr_management_consultancy_woocommerce_sale_padding_top_bottom != false){
		$hr_management_consultancy_custom_css .='.woocommerce span.onsale{';
			$hr_management_consultancy_custom_css .='padding-top: '.esc_attr($hr_management_consultancy_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($hr_management_consultancy_woocommerce_sale_padding_top_bottom).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_woocommerce_sale_padding_left_right = get_theme_mod('hr_management_consultancy_woocommerce_sale_padding_left_right');
	if($hr_management_consultancy_woocommerce_sale_padding_left_right != false){
		$hr_management_consultancy_custom_css .='.woocommerce span.onsale{';
			$hr_management_consultancy_custom_css .='padding-left: '.esc_attr($hr_management_consultancy_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($hr_management_consultancy_woocommerce_sale_padding_left_right).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_woocommerce_sale_border_radius = get_theme_mod('hr_management_consultancy_woocommerce_sale_border_radius', 0);
	if($hr_management_consultancy_woocommerce_sale_border_radius != false){
		$hr_management_consultancy_custom_css .='.woocommerce span.onsale{';
			$hr_management_consultancy_custom_css .='border-radius: '.esc_attr($hr_management_consultancy_woocommerce_sale_border_radius).'px !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_shop_featured_image_border_radius = get_theme_mod('hr_management_consultancy_shop_featured_image_border_radius', 0);
	if($hr_management_consultancy_shop_featured_image_border_radius != false){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product a img{';
			$hr_management_consultancy_custom_css .='border-radius: '.esc_attr($hr_management_consultancy_shop_featured_image_border_radius).'px;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_shop_featured_image_box_shadow = get_theme_mod('hr_management_consultancy_shop_featured_image_box_shadow');
	if($hr_management_consultancy_shop_featured_image_box_shadow != false){
		$hr_management_consultancy_custom_css .='.woocommerce ul.products li.product a img{';
				$hr_management_consultancy_custom_css .='box-shadow: '.esc_attr($hr_management_consultancy_shop_featured_image_box_shadow).'px '.esc_attr($hr_management_consultancy_shop_featured_image_box_shadow).'px '.esc_attr($hr_management_consultancy_shop_featured_image_box_shadow).'px #ddd;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$hr_management_consultancy_social_icon_font_size = get_theme_mod('hr_management_consultancy_social_icon_font_size');
	if($hr_management_consultancy_social_icon_font_size != false){
		$hr_management_consultancy_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_social_icon_font_size).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_social_icon_padding = get_theme_mod('hr_management_consultancy_social_icon_padding');
	if($hr_management_consultancy_social_icon_padding != false){
		$hr_management_consultancy_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$hr_management_consultancy_custom_css .='padding: '.esc_attr($hr_management_consultancy_social_icon_padding).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_social_icon_width = get_theme_mod('hr_management_consultancy_social_icon_width');
	if($hr_management_consultancy_social_icon_width != false){
		$hr_management_consultancy_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$hr_management_consultancy_custom_css .='width: '.esc_attr($hr_management_consultancy_social_icon_width).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_social_icon_height = get_theme_mod('hr_management_consultancy_social_icon_height');
	if($hr_management_consultancy_social_icon_height != false){
		$hr_management_consultancy_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$hr_management_consultancy_custom_css .='height: '.esc_attr($hr_management_consultancy_social_icon_height).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_social_icon_border_radius = get_theme_mod('hr_management_consultancy_social_icon_border_radius');
	if($hr_management_consultancy_social_icon_border_radius != false){
		$hr_management_consultancy_custom_css .='#sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$hr_management_consultancy_custom_css .='border-radius: '.esc_attr($hr_management_consultancy_social_icon_border_radius).'px;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$hr_management_consultancy_display_grid_posts_settings = get_theme_mod( 'hr_management_consultancy_display_grid_posts_settings','Into Blocks');
    if($hr_management_consultancy_display_grid_posts_settings == 'Without Blocks'){
		$hr_management_consultancy_custom_css .='.grid-post-main-box{';
			$hr_management_consultancy_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$hr_management_consultancy_custom_css .='}';
	}

	// menus
	$hr_management_consultancy_topbar_padding_top_bottom = get_theme_mod('hr_management_consultancy_topbar_padding_top_bottom');
	if($hr_management_consultancy_topbar_padding_top_bottom != false){
		$hr_management_consultancy_custom_css .='#topbar{';
			$hr_management_consultancy_custom_css .='padding-top: '.esc_attr($hr_management_consultancy_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($hr_management_consultancy_topbar_padding_top_bottom).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_navigation_menu_font_size = get_theme_mod('hr_management_consultancy_navigation_menu_font_size');
	if($hr_management_consultancy_navigation_menu_font_size != false){
		$hr_management_consultancy_custom_css .='.main-navigation a{';
			$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_navigation_menu_font_size).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_navigation_menu_font_weight = get_theme_mod('hr_management_consultancy_navigation_menu_font_weight','500');
	if($hr_management_consultancy_navigation_menu_font_weight != false){
		$hr_management_consultancy_custom_css .='.main-navigation a{';
			$hr_management_consultancy_custom_css .='font-weight: '.esc_attr($hr_management_consultancy_navigation_menu_font_weight).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_menu_text_transform','Capitalize');
	if($hr_management_consultancy_theme_lay == 'Capitalize'){
		$hr_management_consultancy_custom_css .='.main-navigation a{';
			$hr_management_consultancy_custom_css .='text-transform:Capitalize;';
		$hr_management_consultancy_custom_css .='}';
	}
	if($hr_management_consultancy_theme_lay == 'Lowercase'){
		$hr_management_consultancy_custom_css .='.main-navigation a{';
			$hr_management_consultancy_custom_css .='text-transform:Lowercase;';
		$hr_management_consultancy_custom_css .='}';
	}
	if($hr_management_consultancy_theme_lay == 'Uppercase'){
		$hr_management_consultancy_custom_css .='.main-navigation a{';
			$hr_management_consultancy_custom_css .='text-transform:Uppercase;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_header_menus_color = get_theme_mod('hr_management_consultancy_header_menus_color');
	if($hr_management_consultancy_header_menus_color != false){
		$hr_management_consultancy_custom_css .='.main-navigation a{';
			$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_header_menus_color).';';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_header_menus_hover_color = get_theme_mod('hr_management_consultancy_header_menus_hover_color');
	if($hr_management_consultancy_header_menus_hover_color != false){
		$hr_management_consultancy_custom_css .='.main-navigation li a:hover{';
			$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_header_menus_hover_color).' !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_header_submenus_color = get_theme_mod('hr_management_consultancy_header_submenus_color');
	if($hr_management_consultancy_header_submenus_color != false){
		$hr_management_consultancy_custom_css .='.main-navigation .sub-menu a{';
			$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_header_submenus_color).' !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_header_submenus_hover_color = get_theme_mod('hr_management_consultancy_header_submenus_hover_color');
	if($hr_management_consultancy_header_submenus_hover_color != false){
		$hr_management_consultancy_custom_css .='.main-navigation .sub-menu a:hover {';
			$hr_management_consultancy_custom_css .='color: '.esc_attr($hr_management_consultancy_header_submenus_hover_color).'!important;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_menus_item = get_theme_mod( 'hr_management_consultancy_menus_item_style','None');
    if($hr_management_consultancy_menus_item == 'None'){
		$hr_management_consultancy_custom_css .='.main-navigation a{';
			$hr_management_consultancy_custom_css .='';
		$hr_management_consultancy_custom_css .='}';
	}else if($hr_management_consultancy_menus_item == 'Zoom In'){
		$hr_management_consultancy_custom_css .='.main-navigation ul li.current_page_item a, .main-navigation li a:hover{';
			$hr_management_consultancy_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$hr_management_consultancy_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_footer_template','hr_management_consultancy-footer-one');
    if($hr_management_consultancy_theme_lay == 'hr_management_consultancy-footer-one'){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='';
		$hr_management_consultancy_custom_css .='}';

	}else if($hr_management_consultancy_theme_lay == 'hr_management_consultancy-footer-two'){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$hr_management_consultancy_custom_css .='color:#000;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#footer ul li::before{';
			$hr_management_consultancy_custom_css .='background:#000;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$hr_management_consultancy_custom_css .='border: 1px solid #000;';
		$hr_management_consultancy_custom_css .='}';

	}else if($hr_management_consultancy_theme_lay == 'hr_management_consultancy-footer-three'){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background: #232524;';
		$hr_management_consultancy_custom_css .='}';
	}
	else if($hr_management_consultancy_theme_lay == 'hr_management_consultancy-footer-four'){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background: #f7f7f7;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$hr_management_consultancy_custom_css .='color:#000;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#footer ul li::before{';
			$hr_management_consultancy_custom_css .='background:#000;';
		$hr_management_consultancy_custom_css .='}';
		$hr_management_consultancy_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$hr_management_consultancy_custom_css .='border: 1px solid #000;';
		$hr_management_consultancy_custom_css .='}';
	}
	else if($hr_management_consultancy_theme_lay == 'hr_management_consultancy-footer-five'){
		$hr_management_consultancy_custom_css .='#footer{';
			$hr_management_consultancy_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$hr_management_consultancy_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$hr_management_consultancy_button_footer_heading_letter_spacing = get_theme_mod('hr_management_consultancy_button_footer_heading_letter_spacing',1);
	$hr_management_consultancy_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$hr_management_consultancy_custom_css .='letter-spacing: '.esc_attr($hr_management_consultancy_button_footer_heading_letter_spacing).'px;';
	$hr_management_consultancy_custom_css .='}';

	$hr_management_consultancy_button_footer_font_size = get_theme_mod('hr_management_consultancy_button_footer_font_size','30');
	$hr_management_consultancy_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$hr_management_consultancy_custom_css .='font-size: '.esc_attr($hr_management_consultancy_button_footer_font_size).'px;';
	$hr_management_consultancy_custom_css .='}';

	$hr_management_consultancy_theme_lay = get_theme_mod( 'hr_management_consultancy_button_footer_text_transform','Capitalize');
	if($hr_management_consultancy_theme_lay == 'Capitalize'){
		$hr_management_consultancy_custom_css .='#footer h3{';
			$hr_management_consultancy_custom_css .='text-transform:Capitalize;';
		$hr_management_consultancy_custom_css .='}';
	}
	if($hr_management_consultancy_theme_lay == 'Lowercase'){
		$hr_management_consultancy_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$hr_management_consultancy_custom_css .='text-transform:Lowercase;';
		$hr_management_consultancy_custom_css .='}';
	}
	if($hr_management_consultancy_theme_lay == 'Uppercase'){
		$hr_management_consultancy_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$hr_management_consultancy_custom_css .='text-transform:Uppercase;';
		$hr_management_consultancy_custom_css .='}';
	}

	$hr_management_consultancy_footer_heading_weight = get_theme_mod('hr_management_consultancy_footer_heading_weight','600');
	if($hr_management_consultancy_footer_heading_weight != false){
		$hr_management_consultancy_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$hr_management_consultancy_custom_css .='font-weight: '.esc_attr($hr_management_consultancy_footer_heading_weight).';';
		$hr_management_consultancy_custom_css .='}';
	}
