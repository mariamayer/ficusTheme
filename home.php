<?php
/**
 Template Name: Home
 */

get_header(); ?>

<?php
//Textos
$nosotros_es_primero="La fuerza e ideales de Fiqus no son más que la suma de fuerzas e ideales de cada
uno de sus integrantes. Cada uno de nosotros es un ingrediente vital, que
aporta ideas y personalidad. Al combinarnos surge algo mucho más fuerte que
la simple suma de las partes. </br>
Cada miembro tiene voz y voto y, de esta forma, las decisiones son tomadas en
forma democrática y grupal. La única y exclusiva fórmula de Fiqus y sobre lo que
construimos el éxito de nuestro trabajo son las personas, cada uno de sus
miembros y la sinergia fruto de la interacción entre ellos. </br>
Fiqus no se complace con el modelo actual vigente y busca algo diferente, algo
mucho más justo y natural, una sociedad que se base en sus miembros y no en
sus capitales, un espacio donde cada uno se sienta parte, y sus ideas den
frutos. </br>";
$nosotros_es_segundo="Nuestro crecimiento respecto a la cantidad de miembros no está basado en la
demanda de trabajo ni en las necesidades de algún cliente en particular, sino
que crecemos respecto a la cantidad de gente que se siente identificada con
esta forma de trabajo cooperativa y quiera participar. </br>
Es por todo esto que estamos orgullosos de que Fiqus sea una cooperativa de
trabajo y esta es nuestra más pura y concreta forma de participación para un
verdadero cambio de paradigma. Queremos evitar que corporaciones, que sólo
persiguen objetivos monetarios e ideologías cortoplacistas, se lleven lo mejor
de todos nosotros sin dar demasiado a cambio. </br>
Creemos en el cambio, creemos en la gente, creemos en un mundo justo. Este
creer nos lleva a actuar, y la unión de estas acciones es a lo que llamamos <span style='color:#c2d72e'>Fiqus</span>.";
$nosotros_en_first="Fiqus&#39; ideals and strengths are no more than the sum of the strengths and ideals of each of its members. Each member is a vital ingredient who contributes with his own ideas and personality, whose combination results in something larger than the simple sum of them. Each member can express an opinion and is allowed to vote, therefore, decisions are made democratically and as a group. Because of this, our members’ thoughts are the most important asset to Fiqus. We’ve built our work upon the members’ thoughts and the synergy, which is the result of the interaction between them. Fiqus disagrees with the current global model and aims for something different, something much more fair and simple, a society based on their members and not on the member capitals, where everybody feels part of it and their ideas prosper.";
$nosotros_en_second="Our growth with respect to the quantity of members is not based on the work demand or the client needs, but the fact that the growth is controlled by the quantity of people that identify with this work style and want to join. We are strong believers in our ideals and we want people who conform to them to join and participate in the change. For all of this we are proud of Fiqus being a worker cooperative; this is our way of participating in a change of paradigm. We think that the world is under a short term and obsolete idea which is not compatible with our current life style, so we act to avoid that big corporations that aim solely for monetary objectives with short term ideas take the best of everybody without retributions. This is our way of participating in the change and every day we will participate in different ways, all of this being a result of the energy generated by each leaf of this tree. We believe in change, we believe in people, we believe in a fair world. This belief spurs us to act and the synergy between these actions is what we call Fiqus.";
$somos_es='Somos una empresa <span style="color:#c2d72e">cooperativa </span> especializada en software, fundada en 2011 por ingenieros en sistemas y especialistas en <span style="color:#c2d72e">programación</span> con clientes en el mercado nacional e internacional que busca un <span style="color:#c2d72e">desarrollo integral </span>de sus socios que se refleje en la <span style="color:#c2d72e">calidad</span> de los servicios brindados<span class="hidden-xs">-------</span><span class="hidden-xs" style="color:#c2d72e">●</span>';
$somos_en='We are a <span style="color:#c2d72e">cooperative</span> company specialized in software, founded in 2011 by systems engineers and <span style="color:#c2d72e">programming</span> specialists with clients in the national and international market that seeks an <span style="color:#c2d72e">integral development</span> of its partners that is reflected in the <span style="color:#c2d72e">quality</span> of the services offered<span class="hidden-xs">-------</span><span class="hidden-xs" style="color:#c2d72e">●</span>';
?>


<section id="intro" class="content-section anchor" >
<div class="intro">
	    <div class="bg-video">
        	<video autoplay loop>
        		<source type="video/webm" src="http://reloaded.fiqus.com/wp-content/uploads/2017/07/videofiqus.webm" />
            	<source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2017/07/videofiqus.mp4" />


          	</video>
		</div>

		<div class="central text-center">
			<img class="logo gris" src="http://reloaded.fiqus.com/wp-content/uploads/2017/07/logo-1.png">
			<div class="scrollme">
				<h1 class="fiqus animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatey="40"><?php echo __('[:en]Software Cooperative[:es]Cooperativa de Software'); ?></h1>
			</div>
			<div class="scrollme">
			<p class="somos animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatey="100">
				<?php echo __('[:en]'.$somos_en.'[:es]'.$somos_es); ?>
				<span>
					<a href="#nosotros" class="boton enterate"><?php echo __('[:en]Learn More[:es]Enterate de más'); ?></a>
				</span>
 			</p>
			</div>
		</div>
		<div class="nosotros text-left">
			<a class="close" href="#">x</a>
			<div class="row">
				<div class="col-sm-6">
					<p><?php echo __('[:en]'.$nosotros_en_first.'[:es]'.$nosotros_es_primero); ?></p>
				</div>
				<div class="col-sm-6">
					<p><?php echo __('[:en]'.$nosotros_en_second.'[:es]'.$nosotros_es_segundo); ?></p>
				</div>
			</div>
		</div>
		<div class="valores col-md-3 col-md-offset-3 col-sm-6 col-sm-offset-3  linea gris " >
			<div class="scrollme">
				<h2 class="boton animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-150" > <?php echo __('[:en]Values[:es]Valores'); ?> </h2>
			</div>
			 <ul class="valor valorderecha">
				<li class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300">
					<?php echo __('[:en]Income distribution[:es]Distribución de las ganancias'); ?></div><span class="dot right">&#x25CF;</span></li>
				<li class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300">
					<?php echo __('[:en]Community involvement [:es]Compromiso con la comunidad'); ?></div><span class="dot right">&#x25CF;</span></li>

			</ul>
		</div>
		<div class="valores col-md-3 col-sm-12  text-left">
			 <ul class="valor">
				<li class="scrollme"><span class="dot left">&#x25CF;</span><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="300">
					<?php echo __('[:en]Horizontality[:es]Horizontalidad'); ?></div></li>
				<li class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="300">
					<?php echo __('[:en]Mutual help  [:es]Ayuda mutua '); ?></div><span class="dot left">&#x25CF;</span></li>
				<li class="scrollme height-60"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="300">
					<?php echo __('[:en]Decision making [:es]Participación en la toma de decisiones '); ?></div><span class="dot left">&#x25CF;</span></li>

			</ul>
		</div>

	</div> <!--end class intro-->

</section>

<section id="servicio" class="content-section anchor">

	<div id="prevHacemos"><</div>
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
					    'category_name' =>$category->slug,
					);
					$attachments = get_posts($args);
					echo '<img class="fq_servicio" src="'.$attachments[0]->guid.'" alt="">';
					echo '<span class="ti-servicio">'.$category->name.'</span>';
					echo '</li>';
				}
				?>
			</ul>
	</div> <!--end class que-hacemos-->
	<div id="nextHacemos">></div>
</section>

<section id="tecnologias" class="content-section anchor">
	<div id="prevTecno"><</div>
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
		<div id="nextTecno">></div>
</section><!--end seccion tecnologias-->

<section id="trabajamos" class="content-section">
		<div class="container centrado">
			<div class="text-right como-trabajamos scrollme">
			<div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300">
				<span class="lineas">
					<h2 class="boton" id="subido">
						<?php echo __('[:en]How we work[:es]Cómo trabajamos'); ?>
				 	</h2><span class="hidden-xs hidden-md hidden-sm">---&#x25CF;</span>
				 </span>
			</div>
			</div>

			<div class="col-md-8 col-md-offset-2 centrado esquema">
			<img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo __('[:en]trabajamos_eng.gif[:es]trabajamos.gif'); ?>" alt="Esquema de trabajo">
				<div class="scrollme">
				<div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0.5" data-translatex="300"><span class="lineas bgrande">---<h2 class="boton feedback "> Feedback </h2> </span></div>
				</div>
			</div>

			<div class="col-md-12">
				<span class="boton feedback feed">
					<?php echo __('[:en]Feedback[:es]Feedback'); ?>
			</span>
			</div>


			<div class="col-md-12 scrollme">
				<span class="final">
					<?php echo __('[:en]Final Product[:es]Producto Final'); ?>
				</span> <br>
				<div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="1" data-translatex="-300">
				<span class="mantenimiento">
					<?php echo __('[:en]New Functionalities[:es]Nuevas Funcionalidades '); ?>
					<br>
					<hr class="separacion">
					<?php echo __('[:en]Maintenance[:es]Mantenimiento'); ?>
				</span>
				</div>
			</div>
		</div>
</section><!--end seccion como trabajamos-->

<section id="proyectos" class="content-section">
		<div class="ejemplos scrollme">
		<h1><?php echo __('[:en]PROJECTS[:es]PROYECTOS'); ?></h1>

			<div class="animateme" data-when="enter" data-from="0.8" data-to="0.5" data-opacity="0" data-translatey="-50">
				<h2 class="notes" id="notagris1">
				<?php echo __('[:en]our work [:es]algunos trabajos'); ?>
				 </h2>
		</div>
		</div>

		<div class="container-fluid">
			<div class="col-md-12 preview">
					<div>
						<ul class="preview-ul">
							<?php
							$categories = get_categories( array(
							    'orderby' => 'name',
							    'parent'  => 0
							) );
							foreach ( $categories as $category ) {
								echo '<li class="selector" data-cat="'.$category->slug.'"> '.$category->name.'</li>';
							}
							?>
						<li class="selector active" data-cat="todos"> <?php echo __('[:en]All[:es]Todos'); ?> </li>
						</ul>
					</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<?php query_posts('posts_per_page=-1'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php
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
					$categorias='';
					$cats=get_the_category(get_the_ID());
					foreach ($cats as $cat) {
						$classes.= ' '.$cat->slug;
						$categorias.=$cat->name.' ';
					}
					?>
					<div class="col-md-4 proy-preview">
						<a href="#" class="portfolio-link<?php echo $classes; ?>" data-content='<?php echo strip_shortcodes(get_the_content());?>'
						data-gallery='<?php echo json_encode($imgs); ?>'
						data-cats='<?php echo $categorias; ?>'
						data-title='<?php echo get_the_title(); ?>'
						data-tags='<?php echo json_encode($tags_array);?>'
						>
					      <div class="proy-hover">
					          <div class="proy-info">
					          	<p><?php echo $categorias ?></p>
					          	<h3><?php echo get_the_title(); ?></h3>

					          </div>
					      </div>
					      <?php the_post_thumbnail(); ?>
						</a>
		      </div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section><!--end seccion proyectos-->



<section id="productos" class="content-section">
	<div class="ejemplos">
	<h1><?php echo __('[:en]OUR PRODUCTS[:es]NUESTROS PRODUCTOS'); ?></h1>
		<div class="subrayado" >
		</div>

	</div>


	<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1 slider">
			<div class="slick">
				<?php
				    $loop = new WP_Query( array( 'post_type' => 'producto', 'posts_per_page' => '-1') );
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div>
									<div class="col-md-6">
										<div class="img-container">
											<img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php echo get_the_title(); ?>">
										</div>
									</div>
									<div class="col-md-6 contenido-producto">
										<div class="descripcion-producto">
										<h2 class="novedad"><?php echo get_the_title(); ?></h2>
										<p><?php echo get_the_content(); ?></p>
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
								</div>
				        <?php endwhile;
				    endif;
				    wp_reset_postdata(); ?>
			</div>
		</div>

	</div>

</section><!--end seccion propios-->




<section id="blog content-section" class="blog-seccion">

	<div class="ejemplos banda-verde scrollme">
			<h1 class="blog-header">
			<a href="/blog"><?php echo __('[:en]VISIT OUR BLOG[:es]VISITA NUESTRO BLOG'); ?>
			 </a>
			</h1>
			<div class="animateme" data-when="enter" data-from="0.8" data-to="0.5" data-opacity="0" data-translatey="-50">
			<h2 class="notes" id="notaverde4">
			<?php echo __('[:en]articles [:es]articulos'); ?>
			 </h2>
	</div>

	</div>

	</div>
	<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1">
			<?php
			    $loop = new WP_Query( array( 'post_type' => 'nota', 'posts_per_page' => '3') );
			    if ( $loop->have_posts() ) :
			        while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="noticia col-md-4 text-left prod-descripcion">
									<?php the_post_thumbnail(); ?>
									<h2 class="novedad"><?php echo get_the_title(); ?></h2>
									<?php $author_id=$post->post_author; ?>

									<p class="contenido"><?php echo get_the_excerpt(); ?></p>
									<span><a href="<?php echo get_the_permalink(); ?>" class="leermas"><?php echo __('[:en]Read More[:es]Leer más'); ?></a> </span>
								</div>
			        <?php endwhile;
			    endif;
			    wp_reset_postdata(); ?>
		</div>

	</div>
	<div class="scrollme">
	<div class="animateme ir-blog" data-when="exit" data-from="1" data-to="0" data-opacity="1" data-translatex="-100">
				<h3 class="notes" id="notaverde3">
				<a href="/blog" target="_blank"><?php echo __('[:en]<span> <a href="/blog"> ----- </span>VISIT OUR BLOG [:es]<span class="">-------</span>ir al blog'); ?></a>
				 </h3>
		</div>
	</div>
</section>


<section id="contactos" class="content-section">
	<div class="ejemplos scrollme">
	<h1> <?php echo __('[:en]CONTACT[:es]CONTACTO'); ?></h1>
	<div class="animateme" data-when="enter" data-from="0.6" data-to="0.5" data-opacity="0" data-translatey="-50">
			<h2 class="notes" id="notagris4">
			<?php echo __('[:en]Call us [:es]llamanos'); ?>
			 </h2>
	</div>

	</div>

	<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1">

			<div class="col-md-6 text-left">
				<ul class="horizontal telefono">
					<li class="datos"><img src="<?php echo get_template_directory_uri(); ?>/img/fiquscontacto.png"></li>
					<li class="datos"> <a mailto="info@fiqus.com">info@fiqus.com</a> </br> 0810 220 0046 <br> </li>
				</ul>
				<div class="formulario col-md-12 text-left">



					<?php
					if (qtranxf_getLanguage() == 'en') {
						echo do_shortcode('[contact-form-7 id="80" title="Formulario Ingles"]');
					} else{
						echo do_shortcode('[contact-form-7 id="79" title="Formulario español"]');
					}
					 ?>

				</div>
				</div>


				<div class="mapas col-md-6">
							<div class="col-md-6">
							<p class=" text-left">Cuenca 1554 Oficina "P" <br>
								Ciudad de Buenos Aires, Argentina<br>
							</p>

							<div class="map-wrap">
    							<div class="overlay" onClick="style.pointerEvents='none'"></div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5566.594087921657!2d-58.48568642663519!3d-34.61578537097645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc9e7cdd9539d%3A0x8810b580f342f227!2sCuenca+1554%2C+C1416BCN+CABA%2C+Argentina!5e1!3m2!1ses-419!2sar!4v1497209225542" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

							</div>

							</div>
							<div class="col-md-6">
							<p class="text-left"> Av. Arrayanes 66, Local 7 <br>
								Villa La Angostura, Neuquén, Argentina <br>
							</p>

							<div class="map-wrap">
    							<div class="overlay" onClick="style.pointerEvents='none'"></div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d20930.446152692115!2d-71.64706195974132!3d-40.76135631791441!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9610bf68e258aae1%3A0x7c306be0fbc05418!2sAv.+Arrayanes%2C+Villa+La+Angostura%2C+Neuqu%C3%A9n%2C+Argentina!5e1!3m2!1ses-419!2sar!4v1497209124435" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							</div>
							<div class="col-md-12">
								<ul class="horizontal redes">
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

<div class="modal-proyecto">
	<a href="#" class="portfolio-close">x</a>
	<div class="col-md-4 col-md-offset-4 muestra">
		<p class="categorias-proyecto">Categorias</p>
		<h3 class="titulo-proyecto">Titulo</h3>
		<ul class="rslides">
			<li class='img-container'><img src="" alt=""></li>
			<li class='img-container'><img src="" alt=""></li>
		</ul>
		<p class="contenido-proyecto"><?php echo $content; ?></p>
		<div class="tags"></div>
		</div>
</div>

<script type="text/javascript">
	(function(document, history, location) {
		var HISTORY_SUPPORT = !!(history && history.pushState);

		var anchorScrolls = {
			ANCHOR_REGEX: /^#[^ ]+$/,
			OFFSET_HEIGHT_PX: 50,

			init: function() {
				this.scrollToCurrent();
				window.addEventListener('hashchange', this.scrollToCurrent.bind(this));
				document.body.addEventListener('click', this.delegateAnchors.bind(this));
			},

			getFixedOffset: function() {
				return this.OFFSET_HEIGHT_PX;
			},

			scrollIfAnchor: function(href, pushToHistory) {
				var match, rect, anchorOffset;

				if(!this.ANCHOR_REGEX.test(href)) {
					return false;
				}

				match = document.getElementById(href.slice(1));

				if(match) {
					rect = match.getBoundingClientRect();
					anchorOffset = window.pageYOffset + rect.top - this.getFixedOffset();
					window.scrollTo(window.pageXOffset, anchorOffset);

					if(HISTORY_SUPPORT && pushToHistory) {
						history.pushState({}, document.title, location.pathname + href);
					}
				}

				return !!match;
			},

			scrollToCurrent: function() {
				this.scrollIfAnchor(window.location.hash);
			},

			/**
			 * If the click event's target was an anchor, fix the scroll position.
			 */
			delegateAnchors: function(e) {
				var elem = e.target;

				if(
					elem.nodeName === 'A' &&
					this.scrollIfAnchor(elem.getAttribute('href'), true)
				) {
					e.preventDefault();
				}
			}
		};

		window.addEventListener(
			'DOMContentLoaded', anchorScrolls.init.bind(anchorScrolls)
		);
	})(window.document, window.history, window.location);
</script>


<?php get_footer(); ?>
