<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 */

	/**
	 * kids_education_doctype hook
	 *
	 * @hooked kids_education_doctype -  10
	 *
	 */
	do_action( 'kids_education_doctype' );
?>
<head>
<?php
	/**
	 * kids_education_before_wp_head hook
	 *
	 * @hooked kids_education_head -  10
	 *
	 */
	do_action( 'kids_education_before_wp_head' );

	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php
	/**
	 * kids_education_page_start_action hook
	 *
	 * @hooked kids_education_page_start -  10
	 *
	 */
	do_action( 'kids_education_page_start_action' ); 

	/**
	 * educativ_creativ_header_action hook
	 *
	 * @hooked kids_education_navigation -  10
	 *
	 */
	do_action( 'educativ_creativ_header_action' );

	/**
	 * kids_education_content_start_action hook
	 *
	 * @hooked kids_education_content_start -  10
	 * @hooked educativ_creativ_render_banner_section -  20
	 *
	 */
	do_action( 'kids_education_content_start_action' );

	/**
	* kids_education_primary_content hook
	*
	* @hooked kids_education_add_slider_section - 10
	* @hooked kids_education_add_info_section - 20
	* @hooked kids_education_add_features_section - 30
	* @hooked kids_education_add_search_course_section - 40
	* @hooked kids_education_add_recent_section - 50
	* @hooked kids_education_add_counter_section - 60
	* @hooked kids_education_add_team_section - 70
	* @hooked kids_education_add_portfolio_section - 80
	*
	*/
	do_action( 'kids_education_primary_content' );