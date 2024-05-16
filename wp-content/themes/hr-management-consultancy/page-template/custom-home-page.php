<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'hr_management_consultancy_before_slider' ); ?>

  <?php if( get_theme_mod( 'hr_management_consultancy_slider_hide_show', false) == 1 || get_theme_mod( 'hr_management_consultancy_resp_slider_hide_show', true) == 1) { ?> 
    <?php if(get_theme_mod('hr_management_consultancy_slider_type', 'Default slider') == 'Default slider' ){ ?>
    <section id="slider">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'hr_management_consultancy_slider_speed',4000)) ?>">
        <?php $hr_management_consultancy_pages = array();
          for ( $count = 1; $count <= 3; $count++ ) {
            $mod = intval( get_theme_mod( 'hr_management_consultancy_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $hr_management_consultancy_pages[] = $mod;
            }
          }
          if( !empty($hr_management_consultancy_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $hr_management_consultancy_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1 class="wow slideInLeft delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <p class="wow slideInLeft delay-1000" data-wow-duration="2s"><?php $hr_management_consultancy_excerpt = get_the_excerpt(); echo esc_html( hr_management_consultancy_string_limit_words( $hr_management_consultancy_excerpt, esc_attr(get_theme_mod('hr_management_consultancy_slider_excerpt_number','30')))); ?></p>
                  <?php
                    $hr_management_consultancy_button_text = get_theme_mod('hr_management_consultancy_slider_button_text','Search Jobs');
                    $hr_management_consultancy_button_link = get_theme_mod('hr_management_consultancy_slider_button_url', '');
                    if (empty($hr_management_consultancy_button_link)) {
                      $hr_management_consultancy_button_link = get_permalink();
                    }
                    if ($hr_management_consultancy_button_text || !empty($hr_management_consultancy_button_link)) { ?>
                     <div class=" slider-btn wow bounceInDown delay-1000" data-wow-duration="2s">
                      <?php if( get_theme_mod('hr_management_consultancy_slider_button_text','Search Jobs') != ''){ ?>
                          <a href="<?php echo esc_url($hr_management_consultancy_button_link); ?>" class="button redmor">
                          <?php echo esc_html($hr_management_consultancy_button_text); ?>
                            <span class="screen-reader-text"><?php echo esc_html($hr_management_consultancy_button_text); ?></span>
                          </a>
                        <?php } ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('hr_management_consultancy_slider_prev_icon','fas fa-angle-left')); ?>"></i></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleInterval" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('hr_management_consultancy_slider_next_icon','fas fa-angle-right')); ?>"></i></span>
        </a>
      </div> 
      <?php } else if(get_theme_mod('hr_management_consultancy_slider_type', 'Advance slider') == 'Advance slider'){?>
        <?php echo do_shortcode(get_theme_mod('hr_management_consultancy_advance_slider_shortcode')); ?>
      <?php } ?>
    </section>
  <?php }?>

  <?php do_action( 'hr_management_consultancy_after_slider' ); ?>

<!-- Popular Job Section -->
  <?php if( get_theme_mod( 'hr_management_consultancy_popular_heading')|| get_theme_mod( 'hr_management_consultancy_popular_small_title') || get_theme_mod( 'hr_management_consultancy_popular_category')) { ?>
    <section id="popular-job-section" class="pt-5 wow bounceInDown delay-1000 container" data-wow-duration="3s">
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col-lg-9 col-md-9 align-self-center text-center text-lg-start text-md-start">
            <?php if( get_theme_mod('hr_management_consultancy_popular_heading') != '' ){ ?>
              <h2 class="heading-text"><?php echo esc_html(get_theme_mod('hr_management_consultancy_popular_heading',''));?></h2>
            <?php }?>
            <?php if( get_theme_mod('hr_management_consultancy_popular_small_title') != '' ){ ?>
              <p class="d-block mb-1"><?php echo esc_html(get_theme_mod('hr_management_consultancy_popular_small_title',''));?></p>
            <?php }?>
          </div>
          <div class="col-lg-3 col-md-3 align-self-center py-3 py-lg-0 py-md-0 text-center text-lg-start text-md-start">
            <?php if( get_theme_mod('hr_management_consultancy_brouse_btn_text') != '' || get_theme_mod('hr_management_consultancy_brouse_btn_link') != ''){ ?>
              <div class="brouse-button text-md-end text-lg-end text-center">
                <a class="" href="<?php echo esc_url(get_theme_mod('hr_management_consultancy_brouse_btn_link',''));?>"><?php echo esc_html(get_theme_mod('hr_management_consultancy_brouse_btn_text',''));?><i class="fas fa-angle-right"></i></a>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="popular-category-box pt-4 px-2">
          <div class="row">
            <?php
              $hr_management_consultancy_catdata=  get_theme_mod('hr_management_consultancy_popular_category');
              if($hr_management_consultancy_catdata){
            $page_query = new WP_Query(array( 'category_name' => esc_html($hr_management_consultancy_catdata ,'hr-management-consultancy'))); ?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="col-lg-6 col-md-6 align-self-center mb-4">
                  <div class="catgory-box">
                    <div class="row">
                      <div class="col-lg-2 col-md-3 align-self-center text-center text-lg-start text-md-start">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <div class="col-lg-10 col-md-9 col-12 align-self-center text-center text-lg-start text-md-start">
                        <h3 class="mt-3 mt-md-0 mt-lg-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>

                        <?php if( get_post_meta($post->ID, 'hr_management_consultancy_marketing', true) ) {?>
                          <span class="secondary-meta-fields me-3">
                            <?php if( get_post_meta($post->ID, 'hr_management_consultancy_marketing', true) ) {?>
                              <span class="marketing"><i class="fas fa-briefcase me-3"></i><?php echo esc_html(get_post_meta($post->ID,'hr_management_consultancy_marketing',true)); ?></span>
                            <?php }?>
                          </span>
                        <?php }?>

                        <?php if( get_post_meta($post->ID, 'hr_management_consultancy_location', true) ) {?>
                          <span class="secondary-meta-fields me-3">
                            <?php if( get_post_meta($post->ID, 'hr_management_consultancy_location', true) ) {?>
                              <span class="apllicant"><i class="fas fa-map-marker-alt me-3"></i> <?php echo esc_html(get_post_meta($post->ID,'hr_management_consultancy_location',true)); ?></span>
                            <?php }?>
                          </span>
                        <?php }?>

                        <?php if( get_post_meta($post->ID, 'hr_management_consultancy_price', true) ) {?>
                          <span class="secondary-meta-fields me-3">
                            <?php if( get_post_meta($post->ID, 'hr_management_consultancy_price', true) ) {?>
                              <span class="prices"><i class="fas fa-money-bill-alt me-3"></i> <?php echo esc_html(get_post_meta($post->ID,'hr_management_consultancy_price',true)); ?></span>
                            <?php }?>
                          </span>
                        <?php }?>
                      </div>
                    </div>

                    <hr class="cat-features">

                    <div class="prices pt-2">
                      <div class="row">
                        <div class="col-lg-8 col-md-12 col-12 align-self-center features-button">
                          <?php if( get_post_meta($post->ID, 'hr_management_consultancy_feature1', true) ) {?>
                            <span class="features-meta-fields1 text-center p-1">
                              <?php if( get_post_meta($post->ID, 'hr_management_consultancy_feature1', true) ) {?>
                                <span class="features"><?php echo esc_html(get_post_meta($post->ID,'hr_management_consultancy_feature1',true)); ?></span>
                              <?php }?>
                            </span>
                          <?php }?>
                          <?php if( get_post_meta($post->ID, 'hr_management_consultancy_feature2', true) ) {?>
                            <span class="features-meta-fields2 text-center p-1 mx-3">
                              <?php if( get_post_meta($post->ID, 'hr_management_consultancy_feature2', true) ) {?>
                                <span class="features"><?php echo esc_html(get_post_meta($post->ID,'hr_management_consultancy_feature2',true)); ?></span>
                              <?php }?>
                            </span>
                          <?php }?>
                        </div>

                        <div class="col-lg-4 col-md-12 col-12 align-self-center">
                          <div class="popular-cat-btn text-lg-end text-md-start text-start mt-lg-0 mt-md-4 mt-4">
                            <a href="<?php the_permalink();?>"><?php esc_html_e('Apply Now','hr-management-consultancy'); ?><span class="screen-reader-text"><?php esc_html_e('Apply Now','hr-management-consultancy'); ?></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();}
            ?>
          </div>
        </div>
      </div>
    </section>
  <?php }?>


<?php do_action( 'hr_management_consultancy_after_popular_job_section' ); ?>

  <div id="content-vw" class="entry-content py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>