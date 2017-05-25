<?php
/**
 Template Name: Home
 */

get_header(); ?>

<section id="intro" class="content-section">
	<div class="intro container">
		<div class="central centrado">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-fiqus.png">
			<h1 class="fiqus"> Cooperativa de Software </h1>
			<p class="somos" >Somos una empresa cooperativa especializada en software, fundada en 2011 por ingenieros en sistemas y especialistas en programación con clientes en el mercado nacional e internacional que busca un desarrollo integral de sus socios que se refleje en la calidad  de los servicios brindados.    &#x25CF;- - - - - -<span><a href="#nosotros" class="boton enterate"> Enterate de más </a> </span>
 			</p>


		<div class="nosotros col-md-12 col-md-offset-1 text-right">
			<p>Este div aparece desde el costado, esta escondido </p>
			</div>
		</div>

	<div class="valores col-md-5 col-md-offset-1 text-left">
		<h2 class="boton"> Valores </h2>
		 <ul class="valor">
			<li> Horizontalidad </li>
			<li> Participación en la toma de decisiones </li>
			<li> Ayuda mutua </li>
			<li> Distribución de las ganancias</li>
			<li> Compromiso con la comunidad </li>

		</ul>
	</div>
	</div> <!--end class intro-->

</section>

<section id="servicio" class="content-section">
	<div class="col-md-6 line">
	</div>
	<div class="quehacemos container-fluid">
			<ul class="servicios">
				<?php
				$categories = get_categories( array(
						'orderby' => 'name',
						'parent'  => 0
				) );
				foreach ( $categories as $category ) {
					echo '<li class="hacemos">';
					$args = array(
					    'post_type' => 'attachment',
					    'category_name' =>$category->name,
					);
					$attachments = get_posts($args);
					echo '<img class="fq_servicio" src="'.$attachments[0]->guid.'" alt="">';
					echo '<span class="ti-servicio">'.$category->name.'</span>';
					echo '</li>';
				}
				?>
			</ul>
	</div> <!--end class que-hacemos-->
</section>

<section id="tecnologias" class="content-section">
		<div class="tecnologias container-fluid">
			<ul class="usamos">
				<?php
				$tags = get_tags( array(
						'hide_empty' => false,
						'parent'  => 0
				) );
				foreach ( $tags as $tag ) {
					echo '<li class="tecno">';
					$args = array(
					    'post_type' => 'attachment',
							'tax_query' => array(
		            array(
		                'taxonomy' => 'post_tag',
		                'field' => 'slug',
		                'terms' => $tag->slug
		            )
		        )
					);
					$attachments = get_posts($args);
					echo '<img class="fq_servicio" src="'.$attachments[0]->guid.'" alt="">';
					echo '<span class="ti-servicio">'.$tag->description.'</span>';
					echo '</li>';
				}
				?>
		  </ul>
		</div><!--end  que-hacemos-->
</section><!--end seccion tecnologias-->

<section id="trabajamos" class="content-section">
		<div class="container centrado">
		<div class="col-md-5 col-md-offset-1 text-right como-trabajamos ">
		<span class="lineas"><h2 class="boton feedback"> Cómo trabajamos </h2>---&#x25CF;</span>
		</div>

		<div class="col-md-9 col-md-offset-2 centrado esquema ">
		<img src="<?php echo get_template_directory_uri(); ?>/img/como-trabajamos.png" alt="Esquema de trabajo">
		<span class="lineas">---<h2 class="boton feedback"> Feedback </h2> </span>
		</div>

		<div class="col-md-12 centrado">
		<span class="final">Producto Final </span>
		</div>


		</div>
</section><!--end seccion como trabajamos-->

<section id="proyectos" class="content-section">
		<div class="ejemplos">
		<h1>PROYECTOS</h1>
		</div>
		<div class="container-fluid">
			<div class="col-md-12">

				<div class="col-md-4 col-md-offset-1 text-left proyectos">
					<div>
						<ul class="servicios">
							<?php
							$categories = get_categories( array(
							    'orderby' => 'name',
							    'parent'  => 0
							) );
							foreach ( $categories as $category ) {
								echo '<li class="selector" data-cat="'.$category->slug.'"> '.$category->name.'</li>';
							}
							?>
						<li class="selector" data-cat="todos"> Todos </li>
						</ul>
					</div>
					<?php $i=1; ?>
					<?php query_posts('posts_per_page=-1'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="col-md-6">
							<?php if($i==1){
								$content = strip_shortcodes(get_the_content());
								$gallery = get_post_gallery( get_the_ID(), false );
								$excerpt=get_the_excerpt();
								$tags_current = wp_get_post_tags(get_the_ID());
								$active="active";
							}else{
								$active="";
							}
							$gal=get_post_gallery( get_the_ID(), false );
							$ids = explode( ",", $gal['ids'] );
							$imgs= array();
							foreach( $ids as $id ){
								$src=wp_get_attachment_image_src($id , 'large' );
								array_push($imgs,$src[0]);
							}
							$post_tags=wp_get_post_tags(get_the_ID());
							$tags_array= array();
							foreach($post_tags as $tag) {
							  array_push($tags_array, $tag->description);
							}
							$classes='';
							$cats=get_the_category(get_the_ID());
							foreach ($cats as $cat) {
								$classes.= ' '.$cat->slug;
							}
							?>
							<div class="grilla <?php echo $active; ?><?php echo $classes; ?>"
							data-content='<?php echo strip_shortcodes(get_the_content());?>'
							data-gallery='<?php echo json_encode($imgs); ?>'
							data-excerpt='<?php echo get_the_excerpt();?>'
							data-tags='<?php echo json_encode($tags_array);?>'
							>
							<h4><?php echo get_the_title(); ?></h4>
							<p><?php echo strip_shortcodes(get_the_content()); ?></p>
							<?php
							$tags = wp_get_post_tags(get_the_ID());
							echo '<ul class="tag-ul">';
							foreach ($tags as $tag) {
							  echo '<li class="tag">' . $tag->name . '</li>';
							}
							echo '</ul>';
							?>
						</div>
						</div>
						<?php $i++; ?>
						<?php endwhile; endif; ?>

				</div>
					<div class="col-md-6 muestra">
						<ul class="rslides">
							<?php
							$ids = explode( ",", $gallery['ids'] );
							foreach( $ids as $id ) {
							    $image  = wp_get_attachment_image( $id, "large");
							    echo "<li class='img-container' >" . $image . "</li>" ;
							} ?>
						</ul>
						<?php
						foreach ($tags_current as $tag) {
						  echo '<p class="selector2">' . $tag->name . '</p>';
						}
					 	?>
						<p class="contenido"><?php echo $content; ?></p>
						</div>
					</div>
			</div>
			</div>
		</div>
		<div id="next"><</div>
</section><!--end seccion proyectos-->

<section id="productos" class="content-section">
	<div class="ejemplos">
	<h1> PRODUCTOS </h1>
	</div>
	<div class="container-fluid">
		<div class="col-md-12 slider">
			<div class="slick">
				<?php
				    $loop = new WP_Query( array( 'post_type' => 'producto', 'posts_per_page' => '-1') );
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div>
									<div class="col-md-7">
										<div class="img-container">
											<img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php echo get_the_title(); ?>">
										</div>
									</div>
									<div class="col-md-5">
										<h2 class="novedad"><?php echo get_the_title(); ?></h2>
										<p class="contenido"><?php echo get_the_content(); ?></p>
										<p class="label">
											<?php
											$tags=wp_get_post_tags(get_the_ID());
											foreach ( $tags as $tag ) {
												$args = array(
												    'post_type' => 'attachment',
														'tax_query' => array(
									            array(
									                'taxonomy' => 'post_tag',
									                'field' => 'slug',
									                'terms' => $tag->slug
									            )
									        )
												);
												$attachments = get_posts($args);
												echo '<img src="'.$attachments[0]->guid.'" alt=""> '.$tag->description;
											}
											?>
										</p>
									</div>
								</div>
				        <?php endwhile;
				    endif;
				    wp_reset_postdata(); ?>
			</div>
		</div>

	</div>

</section><!--end seccion propios-->


<section id="blog content-section">
	<div class="ejemplos">
	<h1 class="blog"> VISITA NUESTRO BLOG-------<span style="color:#c2d72e">● </span></h1>
	</div>
	<div class="col-md-12 col-md-offset-1 ">
		<?php
		    $loop = new WP_Query( array( 'post_type' => 'nota', 'posts_per_page' => '2') );
		    if ( $loop->have_posts() ) :
		        while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="noticia col-md-5 text-left">
								<h2 class="novedad"><?php echo get_the_title(); ?></h2>
								<p class="contenido"><?php echo get_the_excerpt(); ?></p>
								<span><a href="<?php echo get_the_permalink(); ?>" class="leermas"> Leer más </a> </span>
							</div>
		        <?php endwhile;
		    endif;
		    wp_reset_postdata(); ?>
	</div>

		<img src="<?php echo get_template_directory_uri(); ?>/img/blog.png">
</section>


<section id="contactos" class="content-section">

	<div class="ejemplos">
	<h1 class="blog"> CONTACTO-------<span style="color:#c2d72e">● </span></h1>
	</div>
	<div class="col-md-12">
	<div class="noticia col-md-7 text-left">
		<h2 class="novedad"> Introducción a la programación funcional </h2>
		<p class="contenido"> En Fiqus tenemos programadores a los que aparte de programar imperativamente, nos gusta y nos motiva programar funcionalmente. ¿Qué es la programación funcional? Es un paradigma de programación declarativa basado en el uso de funciones matemáticas. Desmenuzando conceptos… La programación funcional genera un código lindo y declarativo -se lee y se entiende lo que hace-. La diferencia entre una función matemática y “función” utilizada en programación imperativa es que esta ... </p>
		<span><a href="#" class="leermas"> Leer más </a> </span>

	</div>
	<div class="noticia col-md-5 text-left contenido">
		<h2 class="novedad"> Nos vamos de viaje al SUR</h2>
		<p class="contenido"> En Fiqus tenemos programadores a los que aparte de programar imperativamente, nos gusta y nos motiva programar funcionalmente. ¿Qué es la programación funcional? Es un paradigma de programación declarativa basado en el uso de funciones matemáticas. Desmenuzando conceptos… La programación funcional genera un código lindo y declarativo -se lee y se entiende lo que hace-. La diferencia entre una función matemática y “función” utilizada en programación imperativa es que esta ... </p>
		 <span><a href="#" class="leermas"> Leer más </a> </span>
	</div>
	</div>

		<img src="<?php echo get_template_directory_uri(); ?>/img/contactos.png">
</section>


<?php get_footer(); ?>
