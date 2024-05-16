<?php
/**
 * The template part for displaying grid post
 *
 * @package HR Management Consultancy 
 * @subpackage hr-management-consultancy
 * @since hr-management-consultancy 1.0
 */
?>

<?php
    $hr_management_consultancy_archive_year  = get_the_time('Y');
    $hr_management_consultancy_archive_month = get_the_time('m');
    $hr_management_consultancy_archive_day   = get_the_time('d');
?>
<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="grid-post-main-box p-3 mb-3 wow zoomIn" data-wow-duration="2s">
	      	<div class="box-image">
	          	<?php
		            if(has_post_thumbnail() && get_theme_mod( 'hr_management_consultancy_featured_image_hide_show',true) == 1) {
		              the_post_thumbnail();
		            }
	          	?>
	        </div>
	        <h2 class="section-title mt-0 pt-0"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
	        <?php if( get_theme_mod( 'hr_management_consultancy_grid_postdate',true) == 1 || get_theme_mod( 'hr_management_consultancy_grid_author',true) == 1 || get_theme_mod( 'hr_management_consultancy_grid_comments',true) == 1 || get_theme_mod( 'hr_management_consultancy_grid_time',true) == 1) { ?>
	          <div class="post-info p-2 mb-3">
	            <?php if(get_theme_mod('hr_management_consultancy_grid_postdate',true)==1){ ?>
	              <i class="<?php echo esc_attr(get_theme_mod('hr_management_consultancy_single_postdate_icon','fas fa-calendar-alt')); ?> me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $hr_management_consultancy_archive_year, $hr_management_consultancy_archive_month, $hr_management_consultancy_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('hr_management_consultancy_grid_post_meta_field_separator', '|'));?></span>
	            <?php } ?>

	            <?php if(get_theme_mod('hr_management_consultancy_grid_author',true)==1){ ?>
	               <i class="<?php echo esc_attr(get_theme_mod('hr_management_consultancy_grid_author_icon','fas fa-user')); ?> me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('hr_management_consultancy_grid_post_meta_field_separator', '|'));?></span>
	            <?php } ?>

	            <?php if(get_theme_mod('hr_management_consultancy_grid_comments',true)==1){ ?>
	               <i class="<?php echo esc_attr(get_theme_mod('hr_management_consultancy_grid_comments_icon','fa fa-comments')); ?> me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'hr-management-consultancy'), __('0 Comments', 'hr-management-consultancy'), __('% Comments', 'hr-management-consultancy') ); ?></span>
	            <?php } ?>

	            <?php if(get_theme_mod('hr_management_consultancy_grid_time',true)==1){ ?>
	               <i class="<?php echo esc_attr(get_theme_mod('hr_management_consultancy_grid_time_icon','fas fa-clock')); ?> me-2"></i> <span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
	            <?php } ?>
	          </div>
        	<?php } ?>
	        <div class="new-text">
	        	<p>
			        <?php $hr_management_consultancy_excerpt = get_the_excerpt(); echo esc_html( hr_management_consultancy_string_limit_words( $hr_management_consultancy_excerpt, esc_attr(get_theme_mod('hr_management_consultancy_grid_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('hr_management_consultancy_grid_excerpt_suffix','') ); ?>
	        	</p>
	        </div>
	        <?php if( get_theme_mod('hr_management_consultancy_grid_button_text','Read More') != ''){ ?>
	          <div class="more-btn mt-4 mb-4">
	            <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('hr_management_consultancy_grid_button_text',__('Read More','hr-management-consultancy')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('hr_management_consultancy_grid_button_text',__('Read More','hr-management-consultancy')));?></span></a>
	          </div>
	        <?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>
