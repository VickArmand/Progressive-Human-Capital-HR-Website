<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package HR Management Consultancy 
 */

if ( ! function_exists( 'hr_management_consultancy_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function hr_management_consultancy_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'hr_management_consultancy_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids 	 = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    =>  1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	wp_reset_postdata();

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function hr_management_consultancy_categorized_blog() {
	if ( false === ( $hr_management_consultancy_all_the_cool_cats = get_transient( 'hr_management_consultancy_all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$hr_management_consultancy_all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$hr_management_consultancy_all_the_cool_cats = count( $hr_management_consultancy_all_the_cool_cats );

		set_transient( 'hr_management_consultancy_all_the_cool_cats', $hr_management_consultancy_all_the_cool_cats );
	}

	if ( '1' != $hr_management_consultancy_all_the_cool_cats ) {
		// This blog has more than 1 category so hr_management_consultancy_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so hr_management_consultancy_categorized_blog should return false
		return false;
	}
}

if ( ! function_exists( 'hr_management_consultancy_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since hr-management-consultancy
 */
function hr_management_consultancy_the_custom_logo() {	
	the_custom_logo();
}
endif;

/**
 * Flush out the transients used in hr_management_consultancy_categorized_blog
 */
function hr_management_consultancy_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'hr_management_consultancy_all_the_cool_cats' );
}
add_action( 'edit_category', 'hr_management_consultancy_category_transient_flusher' );
add_action( 'save_post',     'hr_management_consultancy_category_transient_flusher' );

add_theme_support( 'admin-bar', array( 'callback' => 'hr_management_consultancy_my_admin_bar_css') );
function hr_management_consultancy_my_admin_bar_css(){
?>
<style type="text/css" media="screen">	
	html body { margin-top: 0px !important; }
</style>
<?php
}

/*-- Custom metafield --*/
function hr_management_consultancy_custom_job_field() {
  	add_meta_box( 'bn_meta', __( 'HR Management Consultancy Meta Fields', 'hr-management-consultancy' ), 'hr_management_consultancy_meta_technology_callback', 'post', 'normal', 'high' );
}
if (is_admin()){
  	add_action('admin_menu', 'hr_management_consultancy_custom_job_field');
}

function hr_management_consultancy_meta_technology_callback( $post ) {
  	wp_nonce_field( basename( __FILE__ ), 'hr_management_consultancy_technology_meta' );
  	$bn_stored_meta = get_post_meta( $post->ID );
	$hr_management_consultancy_marketing = get_post_meta( $post->ID, 'hr_management_consultancy_marketing', true );
  	$hr_management_consultancy_location = get_post_meta( $post->ID, 'hr_management_consultancy_location', true );
  	$hr_management_consultancy_price = get_post_meta( $post->ID, 'hr_management_consultancy_price', true );
  	$hr_management_consultancy_feature1 = get_post_meta( $post->ID, 'hr_management_consultancy_feature1', true );
  	$hr_management_consultancy_feature2 = get_post_meta( $post->ID, 'hr_management_consultancy_feature2', true );
  	?>
  	<div id="custom_meta_feilds">
	    <table id="list">
	      	<tbody id="the-list" data-wp-lists="list:meta">

   		        <tr id="meta-8">
		          	<td class="left">
		            	<?php esc_html_e( 'Marketing :', 'hr-management-consultancy' )?>
		          	</td>
		          	<td class="left">
		            	<input type="text" name="hr_management_consultancy_marketing" id="hr_management_consultancy_marketing" value="<?php echo esc_attr($hr_management_consultancy_marketing); ?>" />
		          	</td>
		        </tr>

		        <tr id="meta-8">
		          	<td class="left">
		            	<?php esc_html_e( 'Location :', 'hr-management-consultancy' )?>
		          	</td>
		          	<td class="left">
		            	<input type="text" name="hr_management_consultancy_location" id="hr_management_consultancy_location" value="<?php echo esc_attr($hr_management_consultancy_location); ?>" />
		          	</td>
		        </tr>

   		        <tr id="meta-8">
		          	<td class="left">
		            	<?php esc_html_e( 'Price :', 'hr-management-consultancy' )?>
		          	</td>
		          	<td class="left">
		            	<input type="text" name="hr_management_consultancy_price" id="hr_management_consultancy_price" value="<?php echo esc_attr($hr_management_consultancy_price); ?>" />
		          	</td>
		        </tr>

		        <tr id="meta-8">
		          	<td class="left">
		            	<?php esc_html_e( 'Feature 1 :', 'hr-management-consultancy' )?>
		          	</td>
		          	<td class="left">
		            	<input type="text" name="hr_management_consultancy_feature1" id="hr_management_consultancy_feature1" value="<?php echo esc_attr($hr_management_consultancy_feature1); ?>" />
		          	</td>
		        </tr>

		        <tr id="meta-8">
		          	<td class="left">
		            	<?php esc_html_e( 'Feature 2 :', 'hr-management-consultancy' )?>
		          	</td>
		          	<td class="left">
		            	<input type="text" name="hr_management_consultancy_feature2" id="hr_management_consultancy_feature2" value="<?php echo esc_attr($hr_management_consultancy_feature2); ?>" />
		          	</td>
		        </tr>
	      	</tbody>
	    </table>
  	</div>
  	<?php
}

function hr_management_consultancy_save( $post_id ) {
  	if (!isset($_POST['hr_management_consultancy_technology_meta']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['hr_management_consultancy_technology_meta']) ), basename(__FILE__))) {
      	return;
  	}
  	if (!current_user_can('edit_post', $post_id)) {
   		return;
  	}
  	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    	return;
  	}

	if( isset( $_POST[ 'hr_management_consultancy_marketing' ] ) ) {
    	update_post_meta( $post_id, 'hr_management_consultancy_marketing', strip_tags( wp_unslash( $_POST[ 'hr_management_consultancy_marketing' ]) ) );
  	}

  	if( isset( $_POST[ 'hr_management_consultancy_location' ] ) ) {
    	update_post_meta( $post_id, 'hr_management_consultancy_location', strip_tags( wp_unslash( $_POST[ 'hr_management_consultancy_location' ]) ) );
  	}

  	if( isset( $_POST[ 'hr_management_consultancy_price' ] ) ) {
    	update_post_meta( $post_id, 'hr_management_consultancy_price', strip_tags( wp_unslash( $_POST[ 'hr_management_consultancy_price' ]) ) );
  	}

  	if( isset( $_POST[ 'hr_management_consultancy_feature1' ] ) ) {
    	update_post_meta( $post_id, 'hr_management_consultancy_feature1', strip_tags( wp_unslash( $_POST[ 'hr_management_consultancy_feature1' ]) ) );
  	}

  	if( isset( $_POST[ 'hr_management_consultancy_feature2' ] ) ) {
    	update_post_meta( $post_id, 'hr_management_consultancy_feature2', strip_tags( wp_unslash( $_POST[ 'hr_management_consultancy_feature2' ]) ) );
  	}
}
add_action( 'save_post', 'hr_management_consultancy_save' );

/**
 * Posts pagination.
 */
if ( ! function_exists( 'hr_management_consultancy_blog_posts_pagination' ) ) {
	function hr_management_consultancy_blog_posts_pagination() {
		$pagination_type = get_theme_mod( 'hr_management_consultancy_blog_pagination_type', 'blog-page-numbers' );
		if ( $pagination_type == 'blog-page-numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation();
		}
	}
}