<?php
/**
 * The template for displaying search forms in hr-management-consultancy
 *
 * @package HR Management Consultancy 
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'hr-management-consultancy' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','hr-management-consultancy' ); ?>" value="<?php echo esc_attr( get_search_query()); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','hr-management-consultancy' ); ?>">
</form> 