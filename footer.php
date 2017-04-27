<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FICUS
 */

?>


	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 text-left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer/1.png">
				</div>
				<div class="col-sm-2 col-sm-offset-7 text-right">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer/2.png">
				</div>
				<div class="col-sm-1 text-right">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer/3.png">
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
