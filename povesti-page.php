<?php
    /**
    * Template Name: Povești Page
    */
?>

<?php get_header(); ?>

<div id="primary">
	<main id="main">
		<?php if ( have_posts() ) : ?>

			<?php
				$term_id = get_term_by('slug', 'povesti', 'category')->term_id;
				$args = array( 'category' => $term_id, 'post_type' =>  'post', 'numberposts' => 100, ); 
				$postslist = get_posts( $args ); 
				foreach ($postslist as $post) :
			?>

<div class="content-container">
			<div class="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="inside-article">
					<div class="article-holder">
						<div id="primary">
							<h2><?php the_title(); ?></h2> 
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</article>
		</div>
		</div>
			
			<?php endforeach; 

			else :

				get_template_part( 'no-results', 'archive' );

			endif;

			?>
			<div class="clear"></div>
		</main><!-- #main -->
		</div>
	</div><!-- #primary -->
	<?php
	get_footer();