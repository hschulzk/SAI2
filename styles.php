	<style>
		header {
			position: absolute;
			top: 0px;
			z-index: 14;
		}

		.container-fluid {
			padding: 0em 0em 0em 0em;
		}

		header {
			width: 100%;
			padding: 0em 10vw 0em 10vw;
		}

		#hamburger {
			float: right;
			margin-top: .5em;
			cursor: pointer;
			color: #FFFFF0;
			font-size: 50px;
			display: none;
		}

		#mainLogo {
		    height: 14em;
		    width: 14em;
		    z-index: 15;
		    margin: auto;
		    margin-top: 1em;
		}
		#mainLogo img {
			height: 100%;
			width: 100%;
			z-index: 18;
		}

		ul#mobileMenu {
			list-style: none;
			width: 80vw;
			margin-top: 1em;
		}
		
		ul#mobileMenu a {
			text-decoration: none;
		}

		ul#mobileMenu li {
			color: white;
			font-size: 1.5em;
			height: 6vh;
			line-height: 6vh;
			width: 16.6%;
			float: left;
			text-align: center;
		}

		header#pageHeader.scrollNav {
			position: fixed;
			top: 0;
			background-color: #AA3939;
			padding: 1em 10vw 1em 10vw;
		}

		header#pageHeader.scrollNav #mainLogo {
		    height: 6em;
		    width: 6em;
		    float: left;
		    margin-top: 0px;			
		}

		header#pageHeader.scrollNav ul#mobileMenu {
			float: right;
			width: 80%;
			margin-bottom: 0px;
		}

		#homepage header.scrollNav 	#hamburger {
			margin-top: .25em;
		}

		#homepage ul#mobileMenu.scrollNav a li:hover span, 
		#homepage ul#mobileMenu.scrollNav li:hover span
		{
			border-bottom: 1px solid white;
			padding-bottom: .25em;
			cursor: pointer;
		}

		@media(max-width: 991px) {
			header#pageHeader	#hamburger {
				display: block;
			}
			header#pageHeader ul#mobileMenu	{
				display: none;
			}
			header#pageHeader #mainLogo {
				float: left;
				height: 6em;
				width: 6em;
			}
		}

		#overFold {
			height: 100vh;
			width: 100%;
			position: absolute;
			top: 0px;
			left: 0px;
			background-image: url('img/studentOnCampus.jpeg');
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
			padding: 5em 10vw 4em 10vw;
			text-align: justify;

		}

		@media (max-width: 991px) {
			#belowFold .contentSection {
				padding: 1em 1em 1em 1em;
				text-align: left;
			}			
		}

		#belowFold .contentSection  p {
			letter-spacing: 1px;
			line-height: 2em;
			font-size: 1.5em;			
		}

		#homepage #belowFold .contentSection h2,#homepage  #belowFold .contentSection h4 {
			text-align: center;
		}


		.darkOverlay {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background-color: rgba(0,0,0,0.65);
			z-index: 2;
		}

		#afDownArrow {
			width: 100%;
			position: absolute;
			top: 90vh;
			text-align: center;
			height: 5vh;
			z-index: 65;
		}

		#afDownArrow i  {
		    z-index: 71;
		    font-size: 50px;
		    color: #FFFFF0;
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


		@media (max-width: 991px) {
			#centerTop h2 {
				font-size: 1.5em;
			}

			#centerTop {
				top: 20%;
			}
		}


		footer {
			background-color: #5a5753;
			height: 5em;
			color: #FFFFF0;
			text-align: center;
			padding: 1em 1em 1em 1em; 
		}

		.backgroundGray {
			background-color: 
		}

		form label {
			display: block;
			clear: both;
			width: 100%;
		}

		form input, form select {
			width: 100%;
		}
		form input[type="submit"] {
			width: 25%;
			margin: auto;
		}

		form .formButtonRow {
			text-align: center;
		}
		form label span {
			display: block;
			clear: both;
		}
		div.modal-content {
			border-radius: 0px;
			background-color: rgba(255,255,255,0.9);
		}

	</style>