<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
		include 'includes/header.php';
		include 'styles.php';	
		include 'assets/homeInsertForm.php';
	?>
</head>
<body>
	<?php echo generateHeader('');?>
	<div class="container-fluid" id="homepage">
		
		<div id="overFold">
			<div id="centerTop">
				<h2>"In a <em>truly</em> free society, citizens do not need government permission to be armed to protect their life."- Dick Heller</h2>
			</div>
			<div id="aboveFoldOverlay" class="darkOverlay"></div>
			<span id="afDownArrow">
				<i class="fa fa-chevron-down" id="moveDownPage" aria-hidden="true"></i>
			</span>
				
		</div>
		<div id="belowFold">
			<div class="row contentSection" id="aboutSection">
				<div class="col-sm-12">
					<h1>We Stand for Self Defense</h1>
					<p class="centeredContent">
						The Second Amendment Institute promotes the advancement and understanding of the second amendment through grassroots education, activation, and empowering individual citizens to exercise their rights. 
					</p>
					<h4><a href="about.php">Learn More</a></h4>
				</div>				
			</div>
			<div class="row contentSection graySection">
			<div class="col-sm-12">
				<h1 class="em4">
				We need your help to defend our rights. 
				</h1>
				<br>
				<h2 class="alignLeft">
				See how <em class="">you</em> can help our work continue.
				</h2>
				<br>

				<br>
				<h3>
					<a href="donate.php">
						<button class="buttonSizing SAIgreenBG">
							Learn More
						</button>
					</a>
				</h3>
			</div>
			</div>
			<div class="row contentSection">
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<h2>SAI on Campus</h2>
				</div>
				
				<div class="col-md-4 photoBox">
					<img style="border-radius: 50%;"  width="280px" height="280px" src="img/pepperSprayCropped.jpg">
				</div>					
				<div class="col-md-8">
					<p>
					SAI is advancing the second amendment with college students through our project, Students for Self-Defense. Because self-defense is a basic human right which can be asserted through the second amendment, the Second Amendment Institute promotes sensible self-defense policies on college campuses. Students have a right to self-defense that extends to a variety of tools including pepper spray, tasers, pocket knives, and firearms.
					</p>
					<h4><a href="">Learn More</a></h4>
				</div>
			
			</div>
			<div class="row contentSection graySection">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<form 
						name="contactForm" 
						method="post" 
						action="" 
						id="joinTheMovement" 
						class="contactForm homeContactForm"
					>
				  		<input type="hidden" name="isSet" value="1">
				  		<h1 style="color: #226666">Get Involved!</h1>
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
				  		<div class="row alignCenter">
				  			<input style="background-color: #226666;" type="submit" name="submit" class="buttonSizing alignCenter" value="Submit">
				  		</div>
				  	</form>
			  	</div>
			</div>			
		</div>
	</div>
	<?php
		include 'includes/contactModal.html';
		echo generateFooter();
	;?>
</body>
<?php 
	include 'js/script.php';

?>


