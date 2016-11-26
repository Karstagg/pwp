$(document).ready(function() {
	var height = $(window).height(),
		width = $(window).width();

	//function to handle scrolling on button click
	$(function(){ // adapted from Edu Lomeli http://stackoverflow.com/questions/27558323/bootstrap-scroll-down-when-the-user-clicks-the-button
		$('.scroll').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
						$('html,body').animate({
							scrollTop: (target.offset().top - height*0.30) // adjust this according to your content

						}, 1000);
					return false;
				}
			}
		});
	});
	//starts and stops the css animation for the navbar brand on click
	$('.navbar-brand').click(function() {

			$('.navbar-brand').addClass("animate-nav")

		setTimeout(function() {
			$('.navbar-brand').removeClass("animate-nav");
		}, 2025);

	});


});

//gets a greeting time based on the user's location
function greetingTime() {
	var date = new Date();
	var time = date.getHours();
	var timeOfDay;
	if (time < 12 && time > 2) {
		timeOfDay = "morning";
	}
	else if (time > 12 && time < 17) {
		timeOfDay = "afternoon";
	}
	else {
		timeOfDay = "evening"
	}
	return document.write(timeOfDay);
}
