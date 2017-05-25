(function($) {

	$(document).ready(function(){
		$(function() {
			$(".rslides").responsiveSlides({            // Boolean: Animate automatically, true or false
					  auto:true,
						speed: 500,
					});
	  });
		$('.slick').slick({
	    dots: false,
			nextArrow: '<i class="arrow-right"><</i>',
  		prevArrow: '<i class="arrow-left">></i>',

	  });
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
