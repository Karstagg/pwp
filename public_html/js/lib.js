



$(document).ready(function() {

	//adapted from http://www.quirksmode.org/js/cookies.html
	//reads cookie readCookie("lang")
	function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while(c.charAt(0) == " ") c = c.substring(1, c.length);
			if(c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length).replace(/"/g, "");
		}
		return null;
	}
	
	//changes content based on language selection cookie
	if (readCookie("lang") === null || readCookie("lang") == "undefined" ) {
		document.cookie = "lang=en";
		$(".en_label").addClass("label_select");
	}
	else {
		$("."+readCookie("lang")+"_label").addClass("label_select");
	}
	

	//changes the readCookie("lang") of the language selection cookie
	$("input[name=lang]").click(function () {
		if ($("input[name=lang]:checked")) {
			var value = $("input[name=lang]:checked").val();
			document.cookie = "lang="+'"'+value+'"';
		}
	});
	$("input[name=lang2]").click(function () {
		if ($("input[name=lang2]:checked")) {
			var value = $("input[name=lang2]:checked").val();
			document.cookie = "lang="+'"'+value+'"';
		}
	});

	//gets a greeting time based on the user's location
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

	//checks a cookie to see what language is selected and loads that info when the page loads
	switch(timeOfDay) {
		case "morning":
			$("#greeting").load("php/content-" + readCookie("lang") + ".php #morning-" + readCookie("lang"));
			break;
		case "afternoon":
			$("#greeting").load("php/content-" + readCookie("lang") + ".php #afternoon-" + readCookie("lang"));
			break;
		case "evening":
			$("#greeting").load("php/content-" + readCookie("lang") + ".php #evening-" + readCookie("lang"));
			break;
	}
	$("#enter-btn").load("php/content-" + readCookie("lang") + ".php #enter-" + readCookie("lang"));
	$("#intro").load("php/content-" + readCookie("lang") + ".php #intro-" + readCookie("lang"));

	//checks the selected language when a radio button is clicked and loads the appropriate info
	$("input[type=radio]").click(function () {

		$(".lang_label").removeClass("label_select");
		$("."+readCookie("lang")+"_label").addClass("label_select");
		switch(timeOfDay) {
			case "morning":
				$("#greeting").load("php/content-" + readCookie("lang") + ".php #morning-" + readCookie("lang"));
				break;
			case "afternoon":
				$("#greeting").load("php/content-" + readCookie("lang") + ".php #afternoon-" + readCookie("lang"));
				break;
			case "evening":
				$("#greeting").load("php/content-" + readCookie("lang") + ".php #evening-" + readCookie("lang"));
				break;
		}
		$("#enter-btn").load("php/content-" + readCookie("lang") + ".php #enter-" + readCookie("lang"));
		$("#intro").load("php/content-" + readCookie("lang") + ".php #intro-" + readCookie("lang"));
	});


	//determines the size of the viewport
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

			$('.navbar-brand').addClass("animate-nav");

		setTimeout(function() {
			$('.navbar-brand').removeClass("animate-nav");
		}, 2025);

	});



});


