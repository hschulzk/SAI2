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
						<img src='img/tLogo.png'>
					</div>
					<div id='#modalLoader'></div>
				
				</header>";
			return $header;

		}

		function generateFooter() {

			$footer = "
				<footer>
					<h6>
						The Second Amendment Institute is a non-partisan educational organization approved by the Internal Revenue Service as a public foundation operating under Section 501(c)(3) of the Internal Revenue code. . Contributions to SAI are tax deductible.
					</h6>
					<script src='js/jquery-3.1.0.min.js'></script>
					<script src='js/bootstrap.js'></script>	
					<script src='js/script.js'></script>
					<script src='js/formValidator.js'></script>

				</footer>
			</body>

			";
			return $footer;			
		}

	?>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://d58swrsfmwg4x.cloudfront.net/FontAwesome/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="includes/logoIcon.ico" />
