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
	<div class="container eventsContainer">
		<div class="row eventsBanner">
			<div class="col-lg-3">
				<!---West Photo-->
			</div>
			<div class="col-lg-4 eventBannerText">
				<h3>Liberty Rising with Former Congressman Allen West</h3>
				<h5>Wednesday April 19th, 2017</h5>
				<h5>The Heritage Foundation in Washington DC</h5>
				<button id="getmoreinfoevents"  data-toggle="modal" data-target="#requestMoreEventInfo">Request Additional Information</button>
			</div>
			<div class="col-lg-3 eventsBannerImageBox hidden-md hidden-sm hidden-xs">
				<img id="eventBannerHeller" src="includes/hellerHeadshotcropped.jpg">
			</div>			
		</div>
		<div class="row eventsBody">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<p id="devoEventDesc">
				On Wednesday 4/19, come out to the Heritage Foundation in Washington DC for an evening with former Congressman and author of Guardian of the Republic, Allen West. Topics include: liberty, freedom, and the importance of defending the Constitution. Light refreshments will be served following Allen West's speech.
				</p>

				<ol>
				<h4>VIP Meet and Greet Featuring:</h4>
				<li> Dick Heller</li> 
				<li> Antonia Okafor</li> 
				<li>Amanda Collins</li>
				<li>Nikki Goeser</li>
				<li>Shaneen Allen</li>

				<span>Hors d'oeuvres will be serverd</span>
			</div>
			<div class="col-sm-1"></div>		
		</div>
	</div>	
	<?php include 'includes/eventsMoreInfoModal.html';?>
	<?php include 'includes/contactModal.html';?>
	<?php include 'includes/footer.html';?>
</body>