<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FICUS
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_date('Y-m-d', '<p>', '</p>');
			
			// Previous/next post navigation.
			the_post_navigation( array(
					'<span class="post-title">%title</span>',
					'<span class="post-title">%title</span>',
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;


		endwhile; // End of the loop.

		?>

</div> <!-- end navigation -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
