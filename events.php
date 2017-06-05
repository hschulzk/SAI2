<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/style.css?v=12345">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="includes/logoIcon.ico" />
	<?php include 'assets/homeInsertForm.php' ?>

</head>
<body>
	<?php include 'includes/header.html';?>
	<div class="container">
    	<div class="row eventsTop">
	    	<h2>There are no upcoming events scheduled. Check back for events in the future. </h2>
    	</div>
    	<div class="row">
    		<div class="col-md-6 slideShow">
    			<h2 class="slideBoxHeader">Liberty Rising</h2>
				<div class="slideContainer">
				  <img class="mySlides showing" width="100%" src="img/libertyrising/libertyrising1.jpg">
				  <img class="mySlides"  width="100%" src="img/libertyrising/libertyrising2.jpg">
				  <img class="mySlides"  width="100%" src="img/libertyrising/libertyrising3.jpg">				

				  <button value="-1" class="w3-button w3-display-left">
				    &#10094;
				  </button>
				  <button value="1" class="w3-button w3-display-right">
				    &#10095;
				  </button> 
				</div>
    		</div>
    		<div class="col-md-6 slideShow">
    			<h2 class="slideBoxHeader">Range Shoot with Dick Heller DATES</h2>
				<div class="slideContainer">
				  <img class="mySlides showing" width="100%" src="img/RangeShoot/RangeShoot1.jpg">
				  <img class="mySlides"  width="100%" src="img/RangeShoot/RangeShoot2.jpg">
				  <img class="mySlides" width="100%" src="img/RangeShoot/RangeShoot3.jpg">
				  <button value="-1" class="w3-button w3-display-left">
				    &#10094;
				  </button>
				  <button value="1" class="w3-button w3-display-right">
				    &#10095;
				  </button> 
				</div>
    		</div>    		
    	</div>
	</div>	
	<?php include 'includes/eventsMoreInfoModal.html';?>
	<?php include 'includes/contactModal.html';?>
	<?php include 'includes/footer.html';?>
<script src="js/script.js?v=1"></script>	
</body>

