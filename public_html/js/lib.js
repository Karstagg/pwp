$(document).ready(function() {
	var height = $(window).height(),
		width = $(window).width();

	$(function(){ // adapted from Edu Lomeli http://stackoverflow.com/questions/27558323/bootstrap-scroll-down-when-the-user-clicks-the-button
		$('.scroll-down').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					if (width < 751) {
						$('html,body').animate({
							scrollTop: (target.offset().top - 160) // adjust this according to your content

						}, 1000);
					}
					else {
						$('html,body').animate({
							scrollTop: (target.offset().top - 350) // adjust this according to your content

						}, 1000);
					}
					return false;
				}
			}
		});
	});

});
