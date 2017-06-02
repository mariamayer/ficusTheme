<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FICUS
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav superior">
		        <li><a href="#intro"><?php echo __('[:en]Home[:es]Intro'); ?></a></li>
		        <li><a href="#servicios"><?php echo __('[:en]Services[:es]Servicios'); ?></a></li>
						<li><a href="#tecnologias"><?php echo __('[:en]Technologies[:es]Tecnologías'); ?></a></li>
						<li><a href="#proyectos"><?php echo __('[:en]Projects[:es]Proyectos'); ?></a></li>
						<li><a href="#productos"><?php echo __('[:en]Products[:es]Productos'); ?></a></li>
						<li><a href="#contactos"><?php echo __('[:en]Contact[:es]Contacto'); ?></a></li>
						<li><a href="<?php echo get_home_url(); ?>/blog/">Blog</a></li>
						<li><?php echo the_widget('qTranslateXWidget', array('type' => 'text', 'hide-title' => true) ); ?></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
	</header>
