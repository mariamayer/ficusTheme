(function($) {

	//Categorias
	var showCats = function(){
		var webWidth=$(window).width();
		var containerWidth=$( ".quehacemos" ).width();
		var liWidth=containerWidth/4;
		var cantCats=$( ".hacemos" ).length;
		if(cantCats>4 && webWidth>680){
			$('#nextHacemos').fadeIn(1000);
			$('#prevHacemos').fadeIn(1000);
			var width=cantCats*liWidth;
			$(".servicios").css('width',width);
			$(".hacemos").css('width',liWidth);
		}
	};

	//Etiquetas
	var showTec = function(){
		var tecnoWidth=$( ".tecnologias" ).width();
		var webWidth=$(window).width();
		var tecnoLiWidth=tecnoWidth/5;
		var cantTecno=$( ".tecno" ).length;
		if(cantTecno>5 && webWidth>680){
			$('#prevTecno').fadeIn(1000);
			$('#nextTecno').fadeIn(1000);
			var width=cantTecno*tecnoLiWidth;
			$(".usamos").css('width',width);
			$(".tecno").css('width',tecnoLiWidth);
		}
	};

	//Esconder menu mobile
	var hideMenuMobile = function(){
		$('.header .navbar-default .navbar-nav>li>a').click(function(){
			$('.navbar-collapse').removeClass('in');
		});
	};

	//Filtrar Proyectos
	var filterProjects = function(){
		$(".selector").click(function(){
			$(".selector").removeClass('active');
			var category=$(this).data("cat");
			$('*[data-cat='+category+']').addClass('active');
			if(category!='todos'){
				$(".portfolio-link").parent().hide();
				$(".portfolio-link").each(function( index ) {
					if($(this).hasClass(category)){
						$(this).parent().show();
					}
				});
			}else{
				$(".portfolio-link").parent().show();
			}
		});
	};

	//Prender Q de logo con scroll
	var changeLogo = function(){
		var logo = $(".intro .logo");
		var div = $(".intro .linea");
		$(window).scroll(function() {
				var scroll = $(window).scrollTop();
				if (scroll >= 10) {
						logo.removeClass('gris');
				} else {
						logo.addClass('gris');
				}
				if (scroll >= 300) {
						div.removeClass('gris');
				} else {
						div.addClass('gris');
				}
		});
	};

	//Enterate de mas
	var showModalIntro = function(){
		$('.intro .nosotros .close').click( function(event) {
			event.preventDefault();
			$('html').css('overflow','scroll');
    	$('.intro .nosotros').fadeOut(200);
		});
		$('.intro .enterate').click(function(event){
			event.preventDefault();
			$('html').css('overflow','hidden');
				$('.intro .nosotros').fadeIn(200);
		});
	};

	//Sliders
	var initSliders = function(){
		$(function() {
			$(".rslides").responsiveSlides({
						auto:true,
						speed: 500,
						pager:true,
					});
		});
		$('.slick').slick({
			dots:true,
			nextArrow: '<i class="arrow-right"><</i>',
			prevArrow: '<i class="arrow-left">></i>',

		});
	};

	//Mostrar proyectos
	var showModalProjects = function(){
		$(".portfolio-link").click(function(e){
			e.preventDefault();
			$('.modal-proyecto').fadeIn();
			$('html').css('overflow','hidden');
			var content=$(this).data("content");
			var gallery=$(this).data("gallery");
			var tags=$(this).data("tags");
			var cats=$(this).data("cats");
			var titulo=$(this).data("title");
			$(".muestra .titulo-proyecto").html(titulo);
			$(".muestra .categorias-proyecto").html(cats);
			$(".muestra .contenido-proyecto").html(content);
			$( '.muestra .rslides li' ).each(function( index ) {
				$(this).children().remove();
				$(this).append('<img src="'+gallery[index]+'">');
			});
			$('.muestra .tags').empty();
			for (var i = 0; i < tags.length; i++) {
				$('.muestra .tags').append('<p class="selector2">'+tags[i]+'</p>');
			}
		});
		$(".portfolio-close").click(function(e){
			e.preventDefault();
			$('html').css('overflow','scroll');
			$('.modal-proyecto').fadeOut();
		});
	};


	$(document).ready(function(){

		showCats();
		showTec();
		hideMenuMobile();
		filterProjects();
		changeLogo();
		showModalIntro();
		initSliders();
		showModalProjects();


		//Flecha que scrollea
		function loopNextHacemos(){
    	$('.quehacemos').stop().animate({scrollLeft:'+=100'}, '1000', 'linear', loopNextHacemos);
		}
		function stopNext(){
		    $('.quehacemos').stop();
		}
		$('#nextHacemos').hover(function () {
		   loopNextHacemos();
		},function () {
		   stopNext();
		});
		function loopPrevHacemos(){
    	$('.quehacemos').stop().animate({scrollLeft:'-=100'}, '1000', 'linear', loopPrevHacemos);
		}
		$('#prevHacemos').hover(function () {
		   loopPrevHacemos();
		},function () {
		   stopNext();
		});
		function loopPrevTecno(){
    	$('.tecnologias').stop().animate({scrollLeft:'-=100'}, '1000', 'linear', loopPrevTecno);
		}
		function loopNextTecno(){
    	$('.tecnologias').stop().animate({scrollLeft:'+=100'}, '1000', 'linear', loopNextTecno);
		}
		function stopPrev(){
		    $('.tecnologias').stop();
		}
		$('#prevTecno').hover(function () {
		   loopPrevTecno();
		},function () {
		   stopPrev();
		});
		$('#nextTecno').hover(function () {
		   loopNextTecno();
		},function () {
		   stopPrev();
		});

	});

	$( window ).resize(function() {
		showCats();
		showTec();
	});

})(jQuery);
