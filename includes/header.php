	<?php 
		function generateHeader($scrollClass) {


			$header = "
			</head>
			<body>
				<header id='pageHeader' class='$scrollClass'>
					<i id='hamburger' class='fa fa-bars' aria-hidden='true'></i>
					<ul id='mobileMenu'>
				        <a href='index.php'><li><span>Home</span></li></a>
				        <a href='donate.php'><li class='mobileDonate'><span>Donate</span></li></a>
				        <!--<a href='events.php'><li><span>Events</span></li></a>-->
				        <a href='about.php'><li><span>About</span></li></a>
				        <li id='contactModalButton' data-toggle='modal' data-target='#contactModal'><span>Contact</span></li>
				        <a href='http://www.s4sd.org/' target='blank'><li><span>Students</span></li></a>
				    </ul>
					<div id='mainLogo'>
						<img height='350px' width='350px' src='img/tLogo.png'>
					</div>
					<div id='#modalLoader'></div>
				
				</header>";
			return $header;

		}

	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://d58swrsfmwg4x.cloudfront.net/FontAwesome/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="includes/logoIcon.ico" />
	<link rel="stylesheet" href="css/style.css">
