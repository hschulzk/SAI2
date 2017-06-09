<script>
	$(document).ready(function() {
		$('#hamburger').click(function(event) {
			$('#moveDownPage').toggle();
		});
	});
	$(document).ready(function(){
		$(window).scroll(function () {
			if ($(window).scrollTop() > $('#overFold').height() - 1) {
				$('#pageHeader').addClass("scrollNav");
			} else {
				$('#pageHeader').removeClass("scrollNav");			
			}
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

</script>