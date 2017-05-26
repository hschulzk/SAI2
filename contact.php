<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css?v=12345">
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<title>Second Amendment Institute - Home</title>
	<?php
		include 'functions/connFunctions.php';
	    if (isset($_POST['submit'])) {
	    	$formInsert = db_insertContactForm ();
		}
	?>
</head>
<body>
	<?php include 'includes/header.html';?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="contactForm" class="joinform col-sm-12">
					<form id="contactFormId" name="contactForm" action="" method="post">
						<h2>Contact Us</h2>
						<label>
							<span>First Name</span>
							<input type="text" name="firstName" value="" placeholder="First Name">
						</label>						
						<label>
							<span>Last Name</span>
							<input type="text" name="lastName" value="" placeholder="Last Name">
						</label>
						<label>
							<span>Email</span>
							<input type="text" name="email" value="" placeholder="myemail@email.com">
						</label>
						<label>
							<span>Phone</span>
							<input type="text" name="phone" value="" placeholder="123-456-7890">
						</label>
						<label>
							<span>Message</span>
							<textarea name="message" placeholder="Your message goes here"></textarea> 
						</label>
						<div class="submitContainer">
							<button id="contactSubmit" class="formSubmitButton" type="submit" name="submit" value="Submit" style="background-color: #861E23;">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
	<footer>
		<h4 class="footerTile">
			Students for Self Defense an affiliate of the Second Amendment Institute is a 501 (c) (3) charitable organization and charitable contributions are tax deductible under the Internal Revenue Code.
		</h4>
		<script type="text/javascript" src="js/script.js"></script>
	</footer>
</body>