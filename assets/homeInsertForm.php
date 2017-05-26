	<?php
	    include 'functions/connFunctions.php';
	   
	    if (isset($_POST['isSet'])) {
	    	$result = db_insertContactForm ();
		    include 'includes/formSuccessPopup.html';    
	    }else {
        	$result = 0;
	    }
	    
	?>