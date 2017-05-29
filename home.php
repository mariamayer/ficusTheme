<?php
/**
 Template Name: Home
 */

get_header(); ?>

<section id="intro" class="content-section">
	<img class="fondo" src="<?php echo get_template_directory_uri(); ?>/img/home.gif" alt="">
	<div class="intro container">
		<div class="central centrado">
			<img class="logo gris" src="<?php echo get_template_directory_uri(); ?>/img/logo-fiqus.png">
			<h1 class="fiqus"> Cooperativa de Software </h1>
			<p class="somos" >Somos una empresa cooperativa especializada en software, fundada en 2011 por ingenieros en sistemas y especialistas en programación con clientes en el mercado nacional e internacional que busca un desarrollo integral de sus socios que se refleje en la calidad  de los servicios brindados.    &#x25CF;- - - - - -<span><a href="#nosotros" class="boton enterate"> Enterate de más </a> </span>
 			</p>

		<div class="valores col-md-5 col-md-offset-1 text-left scrollme">
			 <ul class="valor">
				<li class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300">Horizontalidad </div></li>
				<li class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300">Participación en la toma de decisiones </div></li>
				<li class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300">Ayuda mutua </div></li>
				<li class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300">Distribución de las ganancias</div></li>
				<li class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300">Compromiso con la comunidad </div></li>

			</ul>
		</div>
		<div class="nosotros col-md-12 col-md-offset-1 text-left">
			<p class="col-md-6">La fuerza e ideales de Fiqus no son más que la suma de fuerzas e ideales de cada
			uno de sus integrantes. Cada uno de nosotros es un ingrediente vital, que
			aporta ideas y personalidad. Al combinarnos surge algo mucho más fuerte que
			la simple suma de las partes.
			Cada miembro tiene voz y voto y, de esta forma, las decisiones son tomadas en
			forma democrática y grupal. La única y exclusiva fórmula de Fiqus y sobre lo que
			construimos el éxito de nuestro trabajo son las personas, cada uno de sus
			miembros y la sinergia fruto de la interacción entre ellos.
			Fiqus no se complace con el modelo actual vigente y busca algo diferente, algo
			mucho más justo y natural, una sociedad que se base en sus miembros y no en
			sus capitales, un espacio donde cada uno se sienta parte, y sus ideas den
			frutos.</p>
			<p class="col-md-6">
				Nuestro crecimiento respecto a la cantidad de miembros no está basado en la
				demanda de trabajo ni en las necesidades de algún cliente en particular, sino
				que crecemos respecto a la cantidad de gente que se siente identificada con
				esta forma de trabajo cooperativa y quiera participar.
				Es por todo esto que estamos orgullosos de que Fiqus sea una cooperativa de
				trabajo y esta es nuestra más pura y concreta forma de participación para un
				verdadero cambio de paradigma. Queremos evitar que corporaciones, que sólo
				persiguen objetivos monetarios e ideologías cortoplacistas, se lleven lo mejor
				de todos nosotros sin dar demasiado a cambio.
				Creemos en el cambio, creemos en la gente, creemos en un mundo justo. Este
				creer nos lleva a actuar, y la unión de estas acciones es a lo que llamamos Fiqus.
			</p>
			</div>
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
		<div class="text-right como-trabajamos scrollme">
		<div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300"><span class="lineas "><h2 class="boton feedback"> Cómo trabajamos </h2>---&#x25CF;</span></div>
		</div>

		<div class="col-md-8 col-md-offset-2 centrado esquema">
		<img src="<?php echo get_template_directory_uri(); ?>/img/trabajamos.gif" alt="Esquema de trabajo">
		<div class="scrollme">
			<div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="300"><span class="lineas">---<h2 class="boton feedback"> Feedback </h2> </span></div>
			</div>
		</div>

		</div>
</section><!--end seccion como trabajamos-->

<section id="proyectos" class="content-section">
		<div class="ejemplos">
		<h1>PROYECTOS</h1>
		</div>
		<div class="container-fluid">
			<div class="col-md-12">

				<div class="col-md-5 text-left proyectos">
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
					<div class="col-md-7 muestra">
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
	<h1 class="blog-header"> VISITA NUESTRO BLOG-------<span style="color:#c2d72e">● </span></h1>
	</div>
	<div class="container-fluid">
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
	</div>
</section>


<section id="contactos" class="content-section">
	<div class="ejemplos">
	<h1 class="blog"> CONTACTO-------<span style="color:#c2d72e">● </span></h1>
	</div>
	<div class="container-fluid">
		<div class="col-md-12">
				<div class="noticia col-md-6 text-left">
				<input type="text" class="completar" required="" name="name" placeholder="Nombre" />
				<input type="text" class="completar" required="" name="email" placeholder="Correo Electrónico" />
				<textarea class="mensaje"  name="message" required="" placeholder="Mensaje"></textarea>
				<input type="submit" class="enviar" value="Enviar" />
						<ul class="horizontal">
							<li class="social"><img src="<?php echo get_template_directory_uri(); ?>/img/fiquscontacto.png"></li>
							<li class="social"> <a mailto="info@fiqus.com">info@fiqus.com</a> </br> Teléfono +54 9 11 4568 9390  </li>
						</ul>
				</div>


				<div class="col-md-6 mapas">
							<div class="col-md-6">
							<p class=" text-left"> Cuenca 1554 Oficina "P" <br>
								Ciudad de Buenos Aires, Argentina<br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.5320919459723!2d-58.48551354875639!3d-34.6159916655597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc9e7cdd9539d%3A0x8810b580f342f227!2sCuenca+1554%2C+C1416BCN+CABA!5e0!3m2!1ses-419!2sar!4v1495824446852" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>

							</div>
							<div class="col-md-6">
							<p class="text-left"> Av. Arrayanes 66, Local 7 <br>
								Villa La Angostura, Argentina <br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23577.339947613524!2d-71.65240240950418!3d-40.76444729617304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9610bf68e258aae1%3A0x7c306be0fbc05418!2sAv.+Arrayanes%2C+Villa+La+Angostura%2C+Neuqu%C3%A9n!5e1!3m2!1ses-419!2sar!4v1495824612462" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>
							</div>
							<div class="col-md-12">
								<ul class="horizontal">
									<li class="social"><a href="https://www.facebook.com/fiquscoop" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb-fiqus.png" alt="Facebook"></a></li>
									<li class="social"><a href="https://twitter.com/fiquscoop" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tw-fiqus.png" alt="Twitter"></a></li>
									<li class="social"><a href="https://plus.google.com/u/0/112462059414887056058/posts" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/gp-fiqus.png" alt="Google Plus"></a></li>
									<li class="social"><a href="https://github.com/fiqus" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/git-fiqus.png" alt="Github"></a></li>
								</ul>
							</div>


				</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
