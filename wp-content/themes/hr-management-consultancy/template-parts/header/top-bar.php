<?php
/**
 * The template part for Top Header
 *
 * @package HR Management Consultancy 
 * @subpackage hr-management-consultancy
 * @since hr-management-consultancy 1.0
 */
?>
<!-- Top Header -->
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-12 text-lg-start text-md-start text-center py-4 py-lg-0 py-md-0 align-self-center">
        <div class="logo">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <?php if( get_theme_mod('hr_management_consultancy_logo_title_hide_show',true) == 1){ ?>
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php } ?>
                  <?php else : ?>
                    <?php if( get_theme_mod('hr_management_consultancy_logo_title_hide_show',true) == 1){ ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php } ?>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                ?>
                <?php if( get_theme_mod('hr_management_consultancy_tagline_hide_show',false) == 1){ ?>
                  <p class="site-description mb-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php } ?>
            <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-7 col-md-5 col-3 align-self-center">
        <div class="menu-section">
          <?php get_template_part('template-parts/header/navigation'); ?>
        </div>  
      </div>
      <div class="col-lg-1 col-md-1 col-2 align-self-center text-center text-lg-end text-md-end">
        <?php if( get_theme_mod( 'hr_management_consultancy_my_account_hide_show', true) == 1) { ?>
          <div class="account">
            <?php if(class_exists('woocommerce')){ ?>
              <?php if ( is_user_logged_in() ) { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','hr-management-consultancy'); ?>"><i class="<?php echo esc_attr(get_theme_mod('hr_management_consultancy_myaccount_icon','fas fa-user')); ?>"></i><span class="icon-text"></a>
              <?php }
              else { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','hr-management-consultancy'); ?>"><i class="<?php echo esc_attr(get_theme_mod('hr_management_consultancy_myaccount_icon','fas fa-user')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Login / Register','hr-management-consultancy' );?></span></a>
              <?php } ?>
            <?php }?>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-2 col-md-4 col-7 align-self-center">
        <?php if( get_theme_mod('hr_management_consultancy_topbar_btn_text') != '' || get_theme_mod('hr_management_consultancy_topbar_btn_link') != ''){ ?>
          <div class="header-button text-md-end text-lg-end text-center">
            <a class="" href="<?php echo esc_url(get_theme_mod('hr_management_consultancy_topbar_btn_link',''));?>"><?php echo esc_html(get_theme_mod('hr_management_consultancy_topbar_btn_text',''));?></a>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>