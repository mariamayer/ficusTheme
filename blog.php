<?php
/**
 Template Name: Blog
 */

get_header(); ?>

<section id="blog content-section">
	<div class="ejemplos head-blog">
	<h1>
		<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/blog_logo.png">
		<div class="animateme" data-when="enter" data-from="1" data-to="0.5" data-opacity="0" data-translatey="-50">
				<h2 class="notes" >
				<?php echo __('[:en]blog [:es]blog'); ?>
				 </h2>
		</div>	 
	</h1>
	</div>
	<div class="container-fluid">
		<div class="col-md-6 col-md-offset-3 ">
			<?php
			    $loop = new WP_Query( array( 'post_type' => 'nota', 'posts_per_page' => '-1') );
			    if ( $loop->have_posts() ) :
			        while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="noticia col-md-12 text-left prod-descripcion">
									<h2 class="titulo-nota"><?php echo get_the_title(); ?></h2>
									<p class="contenido"><?php echo get_the_excerpt(); ?></p>
									<span><a href="<?php echo get_the_permalink(); ?>" class="leermas"><?php echo __('[:en]Read More[:es]Leer más'); ?></a> </span>
								</div>
			        <?php endwhile;
			    endif;
			    wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
