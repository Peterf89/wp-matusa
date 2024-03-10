<?php

add_action( 'wp_enqueue_scripts', 'educativ_creativ_enqueue_styles' );

function educativ_creativ_enqueue_styles() {
	wp_enqueue_style( 
		'educativ-creativ-style',
		get_parent_theme_file_uri( 'style.css' )
	);
}

?>