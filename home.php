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
				 <li class="hacemos">
	                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/web.png" alt="Web">
	                  <span class="ti-servicio">Web</span>
	              </li>
	              <li class="hacemos">
	                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/desarrollos.png" alt="Desarrollos a medida">
	                  <span class="ti-servicio">Desarrollos a medida</span>
	              </li>
				 <li class="hacemos">
	                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/app-mobile.png" alt="App">
	                  <span class="ti-servicio">App Mobile</span>
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
		                   <span class="ti-servicio">Django, Flask, Celery</span>
		              </li>
					 <li class="tecno">
		                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-21.png" alt="App">
		                   <span class="ti-servicio">NodeJS, Angular, React, Aurelia, vueJS</span>
		              </li>
					 <li class="tecno">
		                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-22.png" alt="Desarrollos a medida">
		                   <span class="ti-servicio">Drupal Wordpress</span>
		              </li>

					 <li class="tecno">
		                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-23.png" alt="Games">
		                   <span class="ti-servicio">MySQL, postreSQL, MongoDB.</span>
		              </li>
		               <li class="tecno">
		                  <img class="fq_servicio" src="<?php echo get_template_directory_uri(); ?>/img/tecno-24.png" alt="Games">
		                   <span class="ti-servicio">Ionic, Android nativo.</span>
		              </li>
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
						<li class="selector"> Web </li>
						<li class="selector"> App mobile </li>
						<li class="selector"> Desarrollos a medida </li>
						<li class="selector"> Games </li>
						<li class="selector"> Todos </li>
						</ul>
					</div>

					<div class="col-md-6">
						<div class=" grilla">
							<h4>Betterez </h4>
							<p>Aplicación web y mobile para venta online de tickets de transporte y eventos.</p>
								<ul class="tag-ul">
								<li class="tag"> NodeJS </li>
								<li class="tag"> Drupal </li>
								<li class="tag"> Wordpress </li>
								</ul>
						</div>
						<div class="grilla">
							<h4>Betterez </h4>
							<p>Aplicación web y mobile para venta online de tickets de transporte y eventos.</p>
								<ul class="tag-ul">
								<li class="tag"> NodeJS </li>
								<li class="tag"> Drupal </li>
								<li class="tag"> Wordpress </li>
								</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class=" grilla">
							<h4>Betterez </h4>
							<p>Aplicación web y mobile para venta online de tickets de transporte y eventos.</p>
								<ul class="tag-ul">
								<li class="tag"> NodeJS </li>
								<li class="tag"> Drupal </li>
								<li class="tag"> Wordpress </li>
								</ul>
						</div>
						<div class="grilla">
							<h4>Betterez </h4>
							<p>Aplicación web y mobile para venta online de tickets de transporte y eventos.</p>
								<ul class="tag-ul">
								<li class="tag"> NodeJS </li>
								<li class="tag"> Drupal </li>
								<li class="tag"> Wordpress </li>
								</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class=" grilla">
							<h4>Betterez </h4>
							<p>Aplicación web y mobile para venta online de tickets de transporte y eventos.</p>
								<ul class="tag-ul">
								<li class="tag"> NodeJS </li>
								<li class="tag"> Drupal </li>
								<li class="tag"> Wordpress </li>
								</ul>
						</div>
						<div class="grilla">
							<h4>Betterez </h4>
							<p>Aplicación web y mobile para venta online de tickets de transporte y eventos.</p>
								<ul class="tag-ul">
								<li class="tag"> NodeJS </li>
								<li class="tag"> Drupal </li>
								<li class="tag"> Wordpress </li>
								</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class=" grilla">
							<h4>Betterez </h4>
							<p>Aplicación web y mobile para venta online de tickets de transporte y eventos.</p>
								<ul class="tag-ul">
								<li class="tag"> NodeJS </li>
								<li class="tag"> Drupal </li>
								<li class="tag"> Wordpress </li>
								</ul>
						</div>
						<div class="grilla">
						<h4>Betterez </h4>
							<p>Aplicación web y mobile para venta online de tickets de transporte y eventos.</p>
								<ul class="tag-ul">
								<li class="tag"> NodeJS </li>
								<li class="tag"> Drupal </li>
								<li class="tag"> Wordpress </li>
								</ul>
						</div>
					</div>
				</div>
					<div class="col-md-6 muestra">
						<img class="compu" src="<?php echo get_template_directory_uri(); ?>/img/fiqus-19.png">
						<p class="selector2"> Drupal Node JS Hola </p>
						<p> DrAplicación web y mobile para venta online de tickets de transporte y eventos.
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
			<ul class="rslides">
			  <li>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide.png" alt="">
					</div>
					<div class="col-md-6">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
					</div>
				</li>
				<li>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide.png" alt="">
					</div>
					<div class="col-md-6">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
					</div>
				</li>
				<li>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide.png" alt="">
					</div>
					<div class="col-md-6">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
					</div>
				</li>
			</ul>
		</div>

	</div>

</section><!--end seccion propios-->


<section id="blog content-section">
		<img src="<?php echo get_template_directory_uri(); ?>/img/blog.png">
</section>


<section id="contactos" class="content-section">
		<img src="<?php echo get_template_directory_uri(); ?>/img/contactos.png">
</section>


<?php get_footer(); ?>
