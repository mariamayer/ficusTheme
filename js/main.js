(function($) {

	$(document).ready(function(){

		//Prender Q de logo con scroll
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

		//Enterate de mas
		$('.intro .nosotros .close').click( function(event) {
			event.preventDefault();
    	$('.intro .nosotros').fadeOut(200);
		});
		$('.intro .enterate').click(function(event){
			event.preventDefault();
				$('.intro .nosotros').fadeIn(200);
		});

		//Categorias
		var webWidth=$(window).width()
		var containerWidth=$( ".quehacemos" ).width();
		var liWidth=containerWidth/4;
		var cant=$( ".hacemos" ).length;
		if(cant>4 && webWidth>680){
			$('#nextHacemos').fadeIn(1000);
			$('#prevHacemos').fadeIn(1000);
			var width=cant*liWidth;
			$(".servicios").css('width',width);
			$(".hacemos").css('width',liWidth);
		}
		//Etiquetas
		var tecnoWidth=$( ".tecnologias" ).width();
		var tecnoLiWidth=tecnoWidth/5;
		var cant=$( ".tecno" ).length;
		if(cant>5 && webWidth>680){
			$('#prevTecno').fadeIn(1000);
			$('#nextTecno').fadeIn(1000);
			var width=cant*tecnoLiWidth;
			$(".usamos").css('width',width);
			$(".tecno").css('width',tecnoLiWidth);
		}

		//Sliders
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

		//Imagen intro
		var intro=$("#intro").height();
		$("#intro .fondo").css('height',intro);

		//Mostrar proyectos
		$(".grilla").click(function(){
			$(".grilla").removeClass("active");
			$(this).addClass("active");
			var content=$(this).data("content");
			var gallery=$(this).data("gallery");
			var tags=$(this).data("tags");
			$(".muestra .contenido-proyecto").html(content);
			$( '.muestra .rslides li' ).each(function( index ) {
				$(this).children().remove();
				$(this).append('<img src="'+gallery[index]+'">');
			});
			$('.muestra .selector2').remove();
			for (var i = 0; i < tags.length; i++) {
				$('.muestra').append('<p class="selector2">'+tags[i]+'</p>')
			}
		});
		//Filtrar Proyectos
		$(".proyectos .selector").click(function(){
			var category=$(this).data("cat");
			if(category!='todos'){
				$(".grilla").parent().hide();
				$(".grilla").each(function( index ) {
					if($(this).hasClass(category)){
						$(this).parent().show();
					}
				});
			}else{
				$(".grilla").parent().show();
			}
		});

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

})(jQuery);
