<?php

add_action( 'wp_enqueue_scripts', 'educativ_creativ_enqueue_styles' );

function educativ_creativ_enqueue_styles() {
	wp_enqueue_style( 
		'educativ_creativ-style',
		get_parent_theme_file_uri( 'style.css' )
	);
}

	/**
	 * Site content codes
	 *
	 * @since Kids Education 0.1
	 *
	 */
	function kids_education_content_start() {
		if( is_front_page() && !is_home() ){
			$content_enabled = educativ_creativ_check_top_section();
			$content_class   = !empty( $content_enabled ) ? $content_enabled : '';
		} 
		else{
			$content_class = 'site-content';
		}
	?>
		<div id="content" class="<?php echo esc_attr( $content_class ); ?>">
		<?php
	}
add_action( 'kids_education_content_start_action', 'kids_education_content_start', 10 );

/**
* Implement the Custom Header feature.
*/
require get_stylesheet_directory() . '/inc/custom-header.php';

if ( ! function_exists( 'educativ_creativ_check_top_section' ) ) :
	/**
	 * Check if section is top section
	 *
	 * @since Kids Education 0.1
	 *
	 * @return string padding-top
	 */
	function educativ_creativ_check_top_section() {
		
		$options = kids_education_get_theme_options(); // get theme options

		$sections_enable_id = array( 'enable_main_slider', 'features_enable', 'search_course_enable', 'recent_enable', 'gallery_enable', 'category_blog_enable' );

		foreach ($sections_enable_id as $key ) {
			$section_enabled =  apply_filters( 'kids_education_section_status', true, $key );

    		// if ( true !== $section_enabled ) {
      		// 	return  'padding-top';
    		// }
    		return '';
		}
	}
endif;

?>