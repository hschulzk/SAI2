	<?php
	    include '../functions/connFunctions.php';	   
	    if (isset($_POST['isSet'])) {
	    	$result = db_insertContactForm ();
	    }else {
        	$result = 0;
	    }
	    return $result;
	?>
	
	
	