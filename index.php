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
	<style>
		#mobileMenu, header {
			position: absolute;
			top: 1px;
		}

		.container-fluid {
			padding: 0em 0em 0em 0em;
		}

		header {
			z-index: 14;
		}

		#overFold {
			height: 100vh;
			width: 100%;
			position: absolute;
			top: 0px;
			left: 0px;
			background-image: url('img/studentOnCampusC.jpg');
			background-repeat:no-repeat;
			background-size:cover;
			background-position:center;
			z-index: 1;
		}

		#belowFold {
			width: 100%;
			margin-top: 100vh;			
		}

		#belowFold .contentSection {
			padding: 4em 10vw 4em 10vw;
			height: 40vh;
		}

		@media (max-width: 991px) {
			#overFold {
				background-size: cover;
			}
		}

		#hamburger {
			float: right;
			margin-top: .75em;
			cursor: pointer;
			color: #FFFFF0;
			font-size: 50px;
		}

		#mainLogo {
		    float: left;
		    border-radius: 50%;
		    height: 15em;
		    width: 15em;
		    padding: 1px 1px 1px 1px;
		    z-index: 15;
		}

		#mainLogo img {
			height: 100%;
			width: 100%;
			z-index: 18;
		}

		header {
			width: 100%;
			padding: 0em 10vw 0em 10vw;
		}

		.darkOverlay {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background-color: rgba(0,0,0,0.25);
			z-index: 2;
		}
		#afDownArrow {
			border-radius: 50%;
		}


		#afDownArrow i  {
			position: absolute;
		    bottom: 0px;
		    left: 47vw;
		    z-index: 71;
		    font-size: 6vw;
		    color: #FFFFF0;
		    border-radius: 50%;
		    margin-bottom: 25px;
		    font-weight: 100;
		}

		#afDownArrow i:hover {
			color: rgba(0,0,0,0.6);
			cursor: pointer;
		}
		#centerTop {
			position: absolute;
		    top: 40%;
		    width: 100%;
		    text-align: center;
		    z-index: 35;
		}
		#centerTop h2 {
		    letter-spacing: 3.5px;
		    font-size: 3em;
		    font-weight: 100;
		    text-shadow: 1px 1px black;
		    line-height: 2em;
		    color: #FFFFF0;
		    width: 80vw;
		    margin: auto;
		    font-family: sans-serif;	
		}
		#homepage ul#mobileMenu	{
			z-index: 65;
			list-style: none;
			background-color: rgba(0,0,0,0.6);
			color: white;
			width: 100%;
			text-align: center;
			position: absolute;
			top: 64vh;
			display: none;
			-webkit-padding-start: 0px;
		}

		#homepage ul#mobileMenu a {
			text-decoration: none;
		}

		#homepage ul#mobileMenu li {
			color: white;
			font-size: 1.5em;
			height: 6vh;
			line-height: 6vh;
		}

		@media (max-width: 991px) {
			#centerTop h2 {
				font-size: 1.5em;
			}

			#homepage ul#mobileMenu {
				top: 40vh;
				background-color: rgba(0,0,0,0.8);
			}

			#homepage ul#mobileMenu li {
				height: 10vh;
				line-height: 10vh;

			}
		}

		.saiRed {
			color: #AA3939			
		}

		header#pageHeader.scrollNav {
			position: fixed;
			top: 0;
			height: 8em;
			background-color: #AA3939;
			padding: 0em 10vw 0em 10vw;
		}

		header#pageHeader.scrollNav #mainLogo {
		    height: 6em;
		    width: 6em;
		    margin-top: 1em;			
		}

		#homepage ul#mobileMenu.scrollNav {
			position: fixed;
			top: 8em;
			background-color: rgba(0,0,0,0.8);
		}

		#homepage ul#mobileMenu.scrollNav a li:hover span, 
		#homepage ul#mobileMenu.scrollNav li:hover span
		{
			border-bottom: 1px solid white;
			padding-bottom: .25em;
			cursor: pointer;
		}

		footer {
			background-color: #5a5753;
			height: 5em;
			color: #FFFFF0; 
		}

	</style>
	<?php include 'assets/homeInsertForm.php' ?>
</head>
<body>
	<div class="container-fluid" id="homepage">
		<?php include 'includes/header.php' ?>
		<div id="overFold">
			<div id="centerTop">
				<h2>"In a truly free society, citizens do not need government permission to be armed to protect their life."- Dick Heller</h2>
			</div>
			<div id="aboveFoldOverlay" class="darkOverlay"></div>
			<span id="afDownArrow">
				<i class="fa fa-chevron-down" id="moveDownPage" aria-hidden="true"></i>
			</span>
		  	<ul id="mobileMenu">
		        <a href="index.php"><li><span>Home</span></li></a>
		        <a href="donate.php"><li class="mobileDonate"><span>Donate</span></li></a>
		        <a href="events.php"><li><span>Events</span></li></a>
		        <a href="about.php"><li><span>About</span></li></a>
		        <li id="contactModalButton" data-toggle="modal" data-target="#contactModal"><span>Contact</span></li>
		        <a href="http://www.s4sd.org/" target="blank"><li><span>Students</span></li></a>
		    </ul>				
		</div>
		<div class="row" id="belowFold">
			<div class="col-sm-12 contentSection">
				<h3>
					The Second Amendment Institute promotes the advancement and understanding of the second amendment through grassroots education, activation, and empowering individual citizens to exercise their rights. 
				</h3>
				
			</div>
			<div class="col-sm-12 contentSection">
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
			<div class="col-sm-12 contentSection">
				<p>
					Currently, SAI is promoting its project of Students for Self-Defense to advance the second amendment with college students. Because self-defense is a basic human right which can be asserted through the second amendment, the Second Amendment Institute promotes sensible self-defense policies on college campuses. Students have a right to self-defense that extends to a variety of tools including pepper spray, tasers, pocket knives, and firearms.		
				</p>
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
			if ($(window).scrollTop() > $('#overFold').height()) {
				$('#pageHeader').addClass("scrollNav");
				$('#mobileMenu').addClass("scrollNav");

			} else {
				$('#pageHeader').removeClass("scrollNav");			
				$('#mobileMenu').removeClass("scrollNav");
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