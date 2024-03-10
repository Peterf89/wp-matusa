<?php
    /**
    * Template Name: Ghicitori Page
    */
?>

<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				$term_id = get_term_by('name', 'ghicitori', 'category')->term_id;
				$termchildren = get_term_children( $term_id, 'category' );
				$children = implode (",", $termchildren);
				echo do_shortcode('[pci-cat-grid term_id="' . $children . '"]');
			?> 
		</main>
	</div>
<?php
get_footer();