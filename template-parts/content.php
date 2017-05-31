<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FICUS
 */

?>
<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><?php echo get_the_title(); ?></h1>
		<p><?php echo get_the_content(); ?></p>
	</article><!-- #post-## -->
</div>
