/************************************************\
| Smooth Scrolling Demo (Abr2014)				 |
| Author: Marcelo Ferreiro (marceloferreiro.com) |
| para Pixelar.me (www.pixelar.me)				 |
\************************************************/

$(document).ready(function () {
	$('.ancla').click(function(e){
		e.preventDefault();
		$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
	});
});