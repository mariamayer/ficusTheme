(function($) {

	$(document).ready(function(){
		$(function() {
			$(".rslides").responsiveSlides({
					  auto: false,             // Boolean: Animate automatically, true or false
					  nav: true,             // Boolean: Show navigation, true or false
					  prevText: "<",   // String: Text for the "previous" button
					  nextText: ">",       // String: Text for the "next" button
					});
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
