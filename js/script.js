	$(document).ready(function() {
		$('#hamburger').click(function(event) {
			$('#moveDownPage').toggle();
		});
	});
	
	$( document ).ready(function() {
	// $(".formSuccess").delay(5000).hide('slow');
	
		$("#moveDownPage").click(function(event) {
			event.preventDefault();
		    $('html, body').animate({
		        scrollTop: $('#belowFold #aboutSection').offset().top
		    }, 700);
		});

	});

	$('#hamburger').click(function() {
		$('#mobileMenu').slideToggle();
	});



