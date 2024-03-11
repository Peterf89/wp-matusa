<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage Kids Education
 * @since Kids Education 0.1
 */
 $options = kids_education_get_theme_options(); // get theme options 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-post-wrap">
		
		<header class="entry-header">
            <h2 class="entry-title"><?php the_title(); ?></h2>
        </header><!-- .entry-header -->

      <div class="entry-content">
      		<p>
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'kids-education' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kids-education' ),
					'after'  => '</div>',
				) );
			?>
			</p>
		</div><!-- .entry-content -->

	</div><!-- .blog-post-wrap -->
</article><!-- #post-## -->
