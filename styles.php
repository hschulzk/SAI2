	<style>
		header {
			position: absolute;
			top: 0px;
			z-index: 14;
			width: 100%;
		}

		.container-fluid {
			padding: 0em 0em 0em 0em;
		}

		ul#mobileMenu {
			z-index: 99;
			list-style: none;
		}

		.graySection {
			background-color: rgba(0,0,0,0.1);
		}

		#hamburger {
			float: right;
			margin-top: .25em;
			cursor: pointer;
			color: #FFFFF0;
			font-size: 50px;
			display: none;
		}

		#mainLogo {
		    z-index: 15;
		    margin: auto;
		}
		
		#mainLogo img {
			height: 100%;
			width: 100%;
			z-index: 18;
		}

		header#pageHeader.scrollNav {
			position: fixed;
			top: 0px;
			background-color: #AA3939;
			padding: 1em 10vw 1em 10vw;
		}

		header#pageHeader.scrollNav #mobileMenu {
			position: initial;
		}

		header#pageHeader.scrollNav #mainLogo {
		    height: 6em;
		    width: 6em;
		    float: left;
		    margin-top: 0px;			
		}


		#homepage header.scrollNav 	#hamburger {
			margin-top: .25em;
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
			margin-left: 0px;
			margin-right: 0px;
			border-bottom: 2px solid rgba(0,0,0,0.1);

		}

		#belowFold .contentSection  p {
			letter-spacing: 1px;
			line-height: 2em;
			font-size: 1.5em;			
		}

		#homepage #belowFold .contentSection h2,
		#homepage  #belowFold .contentSection h4,
		#homepage  #belowFold .contentSection h1 {
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
		    top: 50%;
		    width: 100%;
		    text-align: center;
		    z-index: 35;
		}

		#centerTop h2 {
		    letter-spacing: 3px;
		    font-size: 2.5em;
		    font-weight: 100;
		    text-shadow: 1px 1px black;
		    line-height: 2em;
		    color: #FFFFF0;
		    width: 80vw;
		    margin: auto;
		    font-family: sans-serif;	
		}
		@media (min-width: 992px) {
			#belowFold .contentSection {
				padding-top: 10em;
				padding-bottom: 20em;
			}

			#centerTop h2 {
				text-align: justify;
			}

			#centerTop h2 em {
				color: #E18642;
			}


			#mainLogo {
				margin-top: 10em;
			    height: 15em;
			    width: 15em;				
			}

			ul#mobileMenu {
				display: flex;
				justify-content: space-between;
				width: 80vw;
				margin: auto;
				position: absolute;
				left: 10vw;
				top: 0px;
				font-size: 1.5em;
			}

			header.scrollNav ul#mobileMenu {
				float: right;
				margin-top: .1em;
				width: 75%;
				margin-bottom: 0px;
				
			}
			 ul#mobileMenu  li {
			 	color: white;
			 	padding: 1em 0em .25em 0em;
			 	letter-spacing: 2px;
			 }
			 #mobileMenu a:hover {
			 	text-decoration: none;			 	
			 }
			 #mobileMenu a:hover li, #mobileMenu li:hover {
			 	border-bottom: 1px solid white;
			 	color: #2E882E;
			 	cursor: pointer;
			 }
		}

		@media (max-width: 991px) {
			#centerTop h2 {
				font-size: 1.25em;
			}

			#centerTop {
				top: 30%;
			}

			header#pageHeader {
				padding: 1em 2em 1em 2em;
			}
			header#pageHeader	#hamburger {
				display: block;
			}
			header#pageHeader #mainLogo {
				float: left;
				height: 6em;
				width: 6em;
			}

			header#pageHeader #mobileMenu {
				display: none;
				width: 100%;
				position: absolute;
				bottom: 0px;
			}

			div.photoBox {
				text-align: center;
			}

			#belowFold .contentSection {
				padding: 1em 1em 1em 1em;
				text-align: left;
			}			
		}


		footer {
			background-color: #5a5753;
			height: 5em;
			color: #FFFFF0;
			text-align: center;
			padding: 1em 1em 1em 1em; 
		}


		.contentSection form {
			color: gray;
		}

		.contentSection form input, .contentSection form select {
			height: 2.5em;
			line-height: 2.5em;
		}
		form label {
			display: block;
			clear: both;
			width: 100%;
		}

		form input, form select {
			width: 100%;
			color: gray;
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