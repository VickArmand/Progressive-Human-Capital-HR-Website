<?php
//about theme info
add_action( 'admin_menu', 'hr_management_consultancy_gettingstarted' );
function hr_management_consultancy_gettingstarted() {
	add_theme_page( esc_html__('About HR Management Consultancy ', 'hr-management-consultancy'), esc_html__('About HR Management Consultancy ', 'hr-management-consultancy'), 'edit_theme_options', 'hr_management_consultancy_guide', 'hr_management_consultancy_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function hr_management_consultancy_admin_theme_style() {
	wp_enqueue_style('hr-management-consultancy-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('hr-management-consultancy-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'hr_management_consultancy_admin_theme_style');

//guidline for about theme
function hr_management_consultancy_mostrar_guide() { 
	//custom function about theme customizer
	$hr_management_consultancy_return = add_query_arg( array()) ;
	$hr_management_consultancy_theme = wp_get_theme( 'hr-management-consultancy' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to HR Management Consultancy ', 'hr-management-consultancy' ); ?> <span class="version"><?php esc_html_e( 'Version', 'hr-management-consultancy' ); ?>: <?php echo esc_html($hr_management_consultancy_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','hr-management-consultancy'); ?></p>
    </div>

	<div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy HR Management Consultancy at 20% Discount','hr-management-consultancy'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','hr-management-consultancy'); ?> ( <span><?php esc_html_e('vwpro20','hr-management-consultancy'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url(HR_MANAGEMENT_CONSULTANCY_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'hr-management-consultancy' ); ?></a>
			</div>
		</div>
	</div>

    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="hr_management_consultancy_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'hr-management-consultancy' ); ?></button>
			<button class="tablinks" onclick="hr_management_consultancy_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'hr-management-consultancy' ); ?></button>
			<button class="tablinks" onclick="hr_management_consultancy_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'hr-management-consultancy' ); ?></button>
			<button class="tablinks" onclick="hr_management_consultancy_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'hr-management-consultancy' ); ?></button>
			<button class="tablinks" onclick="hr_management_consultancy_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'hr-management-consultancy' ); ?></button>
	  		<button class="tablinks" onclick="hr_management_consultancy_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'hr-management-consultancy' ); ?></button>
		</div>

		<?php
			$hr_management_consultancy_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$hr_management_consultancy_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = HR_Management_Consultancy_Plugin_Activation_Settings::get_instance();
				$hr_management_consultancy_actions = $plugin_ins->recommended_actions;
				?>
				<div class="hr-management-consultancy-recommended-plugins">
				    <div class="hr-management-consultancy-action-list">
				        <?php if ($hr_management_consultancy_actions): foreach ($hr_management_consultancy_actions as $key => $hr_management_consultancy_actionValue): ?>
				                <div class="hr-management-consultancy-action" id="<?php echo esc_attr($hr_management_consultancy_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($hr_management_consultancy_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($hr_management_consultancy_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($hr_management_consultancy_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','hr-management-consultancy'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($hr_management_consultancy_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'hr-management-consultancy' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('HR Management Consultancy is a powerful WordPress theme designed specifically for HR management and consultancy firms. This theme is an ideal solution for such firms to create a stunning online presence and to reach a larger customer base. The HR theme comes with a professional and modern design and provides a comprehensive solution for creating a professional website that effectively showcases the services and expertise of HR consultants. HR management Consultancy comes with a user-friendly interface which allows users to easily navigate through different sections of the website. It also offers a range of customization options, including various color schemes, fonts, and layout styles, allowing businesses to create a unique and personalized online presence. Moreover, the theme includes a variety of pre-designed templates and page layouts that are tailored specifically for HR consulting firms. These templates cover essential pages such as About Us, Services, Team, Testimonials, and Contact, providing a solid foundation for building a professional website. The templates can be easily customized to match a companys branding and content requirements. Furthermore, the HR Management Consultancy theme is fully responsive, ensuring that the website looks great and functions seamlessly on all devices, including desktops, tablets, and mobile phones. This responsiveness is crucial for reaching a wider audience and delivering an optimal user experience, regardless of the device being used. More over this theme can be upgraded to enjoy premium features like Post Job Openings, Sticky Post & Comment Threads, Pricing Plan Section, Brand Section, Find Jobs Section, Latest news section, Engaging Footer Section and etc. Also all of these sections can be easily enabled using popular plugins such as WP Job Board, Ibtana website builder, Contact Form 7, Classic Widget. Demo: https://www.vwthemes.net/hr-management-consultancy/','hr-management-consultancy'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'hr-management-consultancy' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'hr-management-consultancy' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'hr-management-consultancy' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'hr-management-consultancy'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'hr-management-consultancy'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'hr-management-consultancy'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'hr-management-consultancy'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'hr-management-consultancy'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'hr-management-consultancy'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'hr-management-consultancy'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'hr-management-consultancy'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'hr-management-consultancy'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'hr-management-consultancy' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','hr-management-consultancy'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','hr-management-consultancy'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','hr-management-consultancy'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_popular_job_section') ); ?>" target="_blank"><?php esc_html_e('Popular Job Section','hr-management-consultancy'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','hr-management-consultancy'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','hr-management-consultancy'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','hr-management-consultancy'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','hr-management-consultancy'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','hr-management-consultancy'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','hr-management-consultancy'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','hr-management-consultancy'); ?></span><?php esc_html_e(' Go to ','hr-management-consultancy'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','hr-management-consultancy'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','hr-management-consultancy'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','hr-management-consultancy'); ?></span><?php esc_html_e(' Go to ','hr-management-consultancy'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','hr-management-consultancy'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','hr-management-consultancy'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','hr-management-consultancy'); ?> <a class="doc-links" href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','hr-management-consultancy'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$plugin_ins = hr_management_consultancy_Plugin_Activation_Settings::get_instance();
				$hr_management_consultancy_actions = $plugin_ins->recommended_actions;
				?>
				<div class="hr-management-consultancy-recommended-plugins">
				    <div class="hr-management-consultancy-action-list">
				        <?php if ($hr_management_consultancy_actions): foreach ($hr_management_consultancy_actions as $key => $hr_management_consultancy_actionValue): ?>
				                <div class="hr-management-consultancy-action" id="<?php echo esc_attr($hr_management_consultancy_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($hr_management_consultancy_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($hr_management_consultancy_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($hr_management_consultancy_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','hr-management-consultancy'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($hr_management_consultancy_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'hr-management-consultancy' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','hr-management-consultancy'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon ','hr-management-consultancy'); ?></span></b></p>
	              	<div class="hr-management-consultancy-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','hr-management-consultancy'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
				    <p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Section >> Publish.','hr-management-consultancy'); ?></span></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

	            <div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'hr-management-consultancy' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','hr-management-consultancy'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','hr-management-consultancy'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','hr-management-consultancy'); ?></a>
							</div>

							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','hr-management-consultancy'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','hr-management-consultancy'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','hr-management-consultancy'); ?></a>
							</div>
						</div>
					</div>
				</div>
	     	</div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = HR_Management_Consultancy_Plugin_Activation_Settings::get_instance();
			$hr_management_consultancy_actions = $plugin_ins->recommended_actions;
			?>
				<div class="hr-management-consultancy-recommended-plugins">
				    <div class="hr-management-consultancy-action-list">
				        <?php if ($hr_management_consultancy_actions): foreach ($hr_management_consultancy_actions as $key => $hr_management_consultancy_actionValue): ?>
				                <div class="hr-management-consultancy-action" id="<?php echo esc_attr($hr_management_consultancy_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($hr_management_consultancy_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($hr_management_consultancy_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($hr_management_consultancy_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'hr-management-consultancy' ); ?></h3>
				<hr class="h3hr">
				<div class="hr-management-consultancy-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','hr-management-consultancy'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'hr-management-consultancy' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','hr-management-consultancy'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','hr-management-consultancy'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','hr-management-consultancy'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','hr-management-consultancy'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=hr_management_consultancy_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','hr-management-consultancy'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','hr-management-consultancy'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
				<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = HR_Management_Consultancy_Plugin_Activation_Woo_Products::get_instance();
				$hr_management_consultancy_actions = $plugin_ins->recommended_actions;
				?>
				<div class="hr-management-consultancy-recommended-plugins">
				    <div class="hr-management-consultancy-action-list">
				        <?php if ($hr_management_consultancy_actions): foreach ($hr_management_consultancy_actions as $key => $hr_management_consultancy_actionValue): ?>
				                <div class="hr-management-consultancy-action" id="<?php echo esc_attr($hr_management_consultancy_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($hr_management_consultancy_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($hr_management_consultancy_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($hr_management_consultancy_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'hr-management-consultancy' ); ?></h3>
				<hr class="h3hr">
				<div class="hr-management-consultancy-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','hr-management-consultancy'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','hr-management-consultancy'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','hr-management-consultancy'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','hr-management-consultancy'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','hr-management-consultancy'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','hr-management-consultancy'); ?></b></p>
	              	<div class="hr-management-consultancy-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','hr-management-consultancy'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','hr-management-consultancy'); ?></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'hr-management-consultancy' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Job Consultancy WordPress Theme is a comprehensive and specialized theme designed specifically for job consultancy firms, recruitment agencies, and HR professionals. With its tailored features and functionalities, this theme provides an ideal platform for creating a professional and user-friendly website to showcase job listings, attract candidates, and promote recruitment services. The theme offers a range of customization options, allowing businesses to personalize their websites design and branding. The theme also comes with a variety of pre-designed templates and page layouts specifically tailored for job consultancy purposes. These templates include sections for job listings, candidate registration, company profiles, team members, client testimonials, and contact information. These pre-built templates provide a solid foundation for building a professional and comprehensive website with ease. The theme ensures that the website looks and functions seamlessly across different devices, providing an optimal user experience and increasing the chances of attracting potential candidates.','hr-management-consultancy'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'hr-management-consultancy'); ?></a>
					<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'hr-management-consultancy'); ?></a>
					<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'hr-management-consultancy'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'hr-management-consultancy' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'hr-management-consultancy'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'hr-management-consultancy'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider / Banner Settings', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('Slider', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('Banner', 'hr-management-consultancy'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('0', 'hr-management-consultancy'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('14', 'hr-management-consultancy'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'hr-management-consultancy'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><?php esc_html_e('11', 'hr-management-consultancy'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'hr-management-consultancy'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'hr-management-consultancy'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'hr-management-consultancy'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'hr-management-consultancy'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'hr-management-consultancy'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'hr-management-consultancy'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('WordPress 6.4 or later', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('PHP 8.2 or 8.3', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('MySQL 5.6 (or greater) | MariaDB 10.0 (or greater)', 'hr-management-consultancy'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'hr-management-consultancy'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'hr-management-consultancy'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'hr-management-consultancy'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'hr-management-consultancy'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'hr-management-consultancy'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'hr-management-consultancy'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'hr-management-consultancy'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'hr-management-consultancy'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'hr-management-consultancy'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'hr-management-consultancy'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'hr-management-consultancy'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'hr-management-consultancy'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','hr-management-consultancy'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'hr-management-consultancy'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'hr-management-consultancy'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( HR_MANAGEMENT_CONSULTANCY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'hr-management-consultancy'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>

<?php } ?>