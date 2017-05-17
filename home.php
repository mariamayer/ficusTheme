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
			<p class="somos" >Somos una empresa cooperativa especializada en software, fundada en 2011 por ingenieros en sistemas y especialistas en programación con clientes en el mercado nacional e internacional que busca un desarrollo integral de sus socios que se refleje en la calidad  de los servicios brindados. 	<span><a href="#nosotros" class="boton enterate"> Enterate de más </a> </span>
 			</p>


			<div class="nosotros">
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
				 <li class="hacemos">
	                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/web.png" alt="Web">
	                  <span class="ti-servicio">Web</span>
	              </li>
				 <li class="hacemos">
	                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/app-mobile.png" alt="App">
	                  <span class="ti-servicio">App Mobile</span>
	              </li>
				 <li class="hacemos">
	                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/desarrollos.png" alt="Desarrollos a medida">
	                  <span class="ti-servicio">Desarrollos a medida</span>
	              </li>

				 <li class="hacemos last">
	                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/games.png" alt="Games">
	                  <span class="ti-servicio">Games</span>
	              </li>
	     </ul>
		</div> <!--end class que-hacemos-->
</section>

<section id="tecnologias" class="content-section">
<div class="tecnologias container-fluid">
	<ul class="usamos">
			 <li class="tecno">
                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-20.png" alt="Web">
                   <span class="ti-servicio">Web</span>
              </li>
			 <li class="tecno">
                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-21.png" alt="App">
                   <span class="ti-servicio">App Mobile</span>
              </li>
			 <li class="tecno">
                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-22.png" alt="Desarrollos a medida">
                   <span class="ti-servicio">Desarrollos a medida</span>
              </li>

			 <li class="tecno">
                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-23.png" alt="Games">
                   <span class="ti-servicio">Games</span>
              </li>
               <li class="tecno">
                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-24.png" alt="Games">
                   <span class="ti-servicio">Games</span>
              </li>
                </ul>
	</div>

	<section id="trabajamos" class="content-section">
	<div class="container centrado">
		<div class="como-trabajamos">
		<h2 class="boton"> Cómo trabajamos </h2>
		</div>

	<img src="<?php echo get_template_directory_uri(); ?>/img/como-trabajamos.png" alt="Esquema de trabajo">
	Producto Final
	</div>
	</section>

	</section>
	<section id="proyectos" class="content-section">
		<img src="<?php echo get_template_directory_uri(); ?>/img/proyectos.png">
	</section>
	<section id="productos" class="content-section">
		<img src="<?php echo get_template_directory_uri(); ?>/img/productos.png">
	</section>
	<section id="blog content-section">
		<img src="<?php echo get_template_directory_uri(); ?>/img/blog.png">
	</section>
	<section id="contactos" class="content-section">
		<img src="<?php echo get_template_directory_uri(); ?>/img/contactos.png">
	</section>


<?php get_footer(); ?>
