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
		<div class="container-fluid">
			<div class="row col-md-10 col-md-offset-1">
				<div class="col-sm-2 text-left">
					 <a href="http://creativecommons.org/licenses/by-sa/4.0/" alt="Creative Commons License">
					 <img src="<?php echo get_template_directory_uri(); ?>/img/footer/1.png">
					 </a>
				</div>
				<div class="col-sm-2 col-sm-offset-7 text-right">
					<a href="http://facttic.org.ar/" alt="Facttic">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer/2.png">
				</div>
				<div class="col-sm-1 text-right">
					<a href="http://qr.afip.gob.ar/?qr=fS0oCBuZkm5ebZRKmrNHNg,," alt="AFIP">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer/3.png">
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
