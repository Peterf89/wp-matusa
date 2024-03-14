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
			$content_enabled = kids_education_check_top_section();
			$content_class   = !empty( $content_enabled ) ? $content_enabled : '';
		} else{
			$content_class = 'site-content';
		}
	?>
		<div id="content" class="<?php echo esc_attr( $content_class ); ?>">
		<?php
	}
add_action( 'kids_education_content_start_action', 'kids_education_content_start', 10 );

?>