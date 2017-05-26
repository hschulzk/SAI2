<?php
	function db_connect() {
	    // Define connection as a static variable, to avoid connecting more than once 
	    static $connection;

	    // Try and connect to the database, if a connection has not been established yet
	    if(!isset($connection)) {
	         // Load configuration as an array. Use the actual location of your configuration file
	        $config = parse_ini_file('/home/timwvywv/config/db_cf_contactMessages.ini');
	        $connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
	    }

	    // If connection was not successful, handle the error
	    if($connection === false) {
	        // Handle error - notify administrator, log to a file, show an error screen, etc.
	        return mysqli_connect_error();
	    }
	    return $connection;
	}	

	function db_error() {
	    $connection = db_connect();
	    return mysqli_error($connection);
	}

	function db_query($query) {
	    // Connect to the database
	    $connection = db_connect();

	    // Query the database
	    $result = mysqli_query($connection,$query);

	    if($result === false) {
	    	$result = db_error();
	    }

	    return $result;
	}

	function db_select($query) {
	    $rows = array();
	    $result = db_query($query);

	    // If query failed, return `false`
	    if($result === false) {
	        return false;
	    }

	    // If query was successful, retrieve all the rows into an array
	    while ($row = mysqli_fetch_assoc($result)) {
	        $rows[] = $row;
	    }
	    return $rows;
	}

	function db_quote($value) {
	    $connection = db_connect();
	    return "'" . mysqli_real_escape_string($connection,$value) . "'";
	}


	function db_insertContactForm () {
	  	if (isset($_POST['isSet'])) {
			// Quote and escape form submitted values
			if (isset($_POST['firstName'])) {
				$firstName = db_quote($_POST['firstName']);
			}else {
				$firstName = "Blank";
			}
			if (isset($_POST['lastName'])) {
				$lastName = db_quote($_POST['lastName']);
			}else {
				$lastName = "Blank";
			}
			if (isset($_POST['phone'])) {
				$phone = db_quote($_POST['phone']);
			}else {
				$phone = NULL;
			}
			if (isset($_POST['email'])) {
				$email = db_quote($_POST['email']);
			}else {
				$email = NULL;
			}
			if (isset($_POST['message'])) {
				$messageBody = db_quote($_POST['message']);
			}else {
				$messageBody = "'Blank'";
			}
			if (isset($_POST['source'])) {
				$source = db_quote($_POST['source']);
			}else {
				$source = "'Blank'";
			}			
	 		// Insert the values into the database
			$query = "INSERT INTO `contactMessages` (`firstName`,`lastName`,`phone`,`email`,`message`,`source`) VALUES (" . $firstName . "," . $lastName . "," . $phone . "," . $email ."," . $messageBody ."," . $source . ");";
			$result = db_query($query);
			return $result;
		} 	
	}			
?>