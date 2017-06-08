<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $time = time(); 
		//$styleSheet = "<link rel='stylesheet' type='text/css' href='css/style.css?'.$time.'>'"
	?>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	
	<!-- <link rel="stylesheet" href="css/style.css?v=12345"> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="includes/logoIcon.ico" />
	<?php include 'assets/homeInsertForm.php' ?>
</head>
<body>
	<?php include 'includes/header.html';?>
	<!-- <?php //echo $styleSheet ?> -->

	<div class="container">

		<div class="row">
			<div class="col-md-6 homeBox dickQuote">
				<span id="topOfQuote">"In a truly free society</span> 
				<span id="middleOfQuote">citizens do not need government permission to be 
				armed to protect their life."</span> 
				<span id="hellerSign">- Dick Heller</span>
			</div>
			<div class="col-md-6 actButtons">
				<form class="col-md-6 homeBox  payPalForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="2KACFMTA2UGBU">
					<button class="donateButton" type="input" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						Donate
					</button>
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=".1" height=".1"  style="display: none;">
				</form>	
				<button class="contactButton" data-toggle="modal" data-target="#contactModal">
					Contact
				</button>						
			</div>
			</div>
		<div class="row">
			<div class="col-md-6 homeBox joinForm">
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
			<div class="col-md-6 homeBox aboutParagraph">
			The Second Amendment Institute promotes the advancement and understanding of the second amendment through grassroots education, activation, and empowerment of individuals. Currently, SAI is promoting its project of Students for Self-Defense to advance the second amendment with college students. Because self-defense is a basic human right which can be asserted through the second amendment, the Second Amendment Institute promotes sensible self-defense policies on college campuses. Students have a right to self-defense that extends to a variety of tools including pepper spray, tasers, pocket knives, and firearms.				
			<div class="col-sm-12 socialIcons">
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<a target="_blank" href="https://www.facebook.com/secondamendmentinstitute">
						<img src="includes/facebookIcon.png">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="https://twitter.com/SAInational" target="_blank">
						<img src="includes/twitterIcon.png">
					</a>
				</div>
				<div class="col-sm-2"></div>
			</div>
			</div>									
		</div>
	</div>
	<?php include 'includes/contactModal.html';?>
	<?php include 'includes/footer.html';?>
</body>
