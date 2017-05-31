(function($) {

	$(document).ready(function(){

		//Prender Q de logo con scroll
		var logo = $(".intro .logo");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            logo.removeClass('gris').addClass("darkHeader");
        } else {
            logo.addClass("gris").addClass('clearHeader');
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

		//Sliders
		$(function() {
			$(".rslides").responsiveSlides({
					  auto:true,
						speed: 500,
					});
	  });
		$('.slick').slick({
	    dots: false,
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
			var excerpt=$(this).data("content");
			$(".muestra .contenido").html(content);
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

		//Flecha que scrollea proyectos
		function loopNext(){
    	$('#proyectos .proyectos').stop().animate({scrollTop:'+=20'}, 'fast', 'linear', loopNext);
		}
		function stop(){
		    $('#proyectos .proyectos').stop();
		}
		$('#next').hover(function () {
		   loopNext();
		},function () {
		   stop();
		});

	});

})(jQuery);
