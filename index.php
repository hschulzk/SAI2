<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://d58swrsfmwg4x.cloudfront.net/FontAwesome/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

	
	<!-- <link rel="stylesheet" href="css/style.css?v=12345"> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="includes/logoIcon.ico" />
	<link rel='stylesheet' type='text/css' href='css/style.css?'>
	<?php include 'styles.php' ?>
	<?php include 'assets/homeInsertForm.php' ?>
</head>
<body>
	<div class="container-fluid" id="homepage">
		<?php include 'includes/header.php' ?>
		<div id="overFold">
			<div id="centerTop">
				<h2>"In a <em style="color: #E18642;">truly</em> free society, citizens do not need government permission to be armed to protect their life."- Dick Heller</h2>
			</div>
			<div id="aboveFoldOverlay" class="darkOverlay"></div>
			<span id="afDownArrow">
				<i class="fa fa-chevron-down" id="moveDownPage" aria-hidden="true"></i>
			</span>
				
		</div>
		<div id="belowFold">
			<div class="col-sm-12 contentSection">
<!-- 				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<h2>About SAI</h2>
				</div> -->
<!-- 				<div class="col-sm-4">
					<img  width="100%" src="img/RangeShoot/RangeShoot1.jpg">
				</div> -->
				<div class="col-sm-12">
					<h2>We Stand for Self Defense</h2>
					<p>
						The Second Amendment Institute promotes the advancement and understanding of the second amendment through grassroots education, activation, and empowering individual citizens to exercise their rights. 
					</p>
					<h4><a href="">Learn More</a></h4>
				</div>
				
				
			</div>

			<div class="col-sm-12 contentSection backgroundGray">
				
				<div class="col-sm-8">
					<h2>SAI on Campus</h2>
				</div>
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<p>
					SAI is advancing the second amendment with college students through our project, Students for Self-Defense. Because self-defense is a basic human right which can be asserted through the second amendment, the Second Amendment Institute promotes sensible self-defense policies on college campuses. Students have a right to self-defense that extends to a variety of tools including pepper spray, tasers, pocket knives, and firearms.
					</p>
					<h4><a href="">Learn More</a></h4>
				</div>
				<div class="col-sm-4">
					<img  width="100%" src="img/RangeShoot/RangeShoot1.jpg">
				</div>				
			</div>
			<div class="col-sm-12 contentSection">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<form name="contactForm" method="post" action="" id="joinTheMovement" class="contactForm homeContactForm">
				  		<input type="hidden" name="isSet" value="1">
				  		<h3>Join the Movement!</h3>
				  		<label>
				  			<span>First Name</span>
				  			<input type="text" id="firstName" name="firstName" value="">
				  		</label>
				  		<label>
				  			<span>Last Name</span>
				  			<input type="text" id="lastName" name="lastName" value="">
				  		</label>			  		
				  		<label>
				  			<span>Email</span>
				  			<input type="text" id="email" name="email" value="">		  			
				  		</label>

				  		<label>
				  			<span>Phone</span>
				  			<input type="phone" id="phone" name="phone" value="">
				  		</label>
				  		<div class="row formButtonRow">
				  			<input type="submit" name="submit" class="formSubmitButton" value="Submit">
				  		</div>
				  	</form>
			  	</div>
			</div>			
		</div>
	</div>
	<?php include 'includes/contactModal.html';?>
	<?php include 'includes/footer.html';?>
</body>


<script type="text/javascript">
	$(document).ready(function() {
		$('#hamburger').click(function(event) {
			$('#moveDownPage').toggle();
		});
	});
	$(document).ready(function(){
		$(window).scroll(function () {
			if ($(window).scrollTop() > $('header').height()) {
				$('#pageHeader').addClass("scrollNav");
			} else {
				$('#pageHeader').removeClass("scrollNav");			
			}
		});	
	});


	$( document ).ready(function() {

		$('#hamburger').click(function() {
			$('#mobileMenu').slideToggle();
		});
	// $(".formSuccess").delay(5000).hide('slow');
	});

</script>
<!--
	<?php 
		//$time = time(); 
		//$styleSheet = "<link rel='stylesheet' type='text/css' href='css/style.css?'.$time.'>'";
	?>

-->



<!-- 			The Second Amendment Institute promotes the advancement and understanding of the second amendment through grassroots education, activation, and empowerment of individuals. Currently, SAI is promoting its project of Students for Self-Defense to advance the second amendment with college students. Because self-defense is a basic human right which can be asserted through the second amendment, the Second Amendment Institute promotes sensible self-defense policies on college campuses. Students have a right to self-defense that extends to a variety of tools including pepper spray, tasers, pocket knives, and firearms.	 -->


<!-- 
				<button class="contactButton" data-toggle="modal" data-target="#contactModal">
					Contact
				</button>	 -->


<!-- 				<form class="col-md-6 homeBox  payPalForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="2KACFMTA2UGBU">
					<button class="donateButton" type="input" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						Donate
					</button>
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=".1" height=".1"  style="display: none;">
				</form>	
 -->


<!-- 			  	
				<form name="contactForm" method="post" action="" id="joinTheMovement" class="contactForm homeContactForm">
			  		<input type="hidden" name="isSet" value="1">
			  		<h3>Join the Movement!</h3>
			  		<label>
			  			<span>First Name</span>
			  			<input type="text" id="firstName" name="firstName" value="">
			  		</label>
			  		<label>
			  			<span>Last Name</span>
			  			<input type="text" id="lastName" name="lastName" value="">
			  		</label>			  		
			  		<label>
			  			<span>Email</span>
			  			<input type="text" id="email" name="email" value="">		  			
			  		</label>

			  		<label>
			  			<span>Phone</span>
			  			<input type="phone" id="phone" name="phone" value="">
			  		</label>
			  		<div class="row formButtonRow">
			  			<input type="submit" name="submit" class="formSubmitButton" value="Submit">
			  		</div>
			  	</form> 

			  	-->