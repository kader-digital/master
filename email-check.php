<?php 


	function connect () {

		$username = 'kader';
		$password = 'kader';
		$hostname = 'localhost';
		$dbname = 'db';

		$link = new mysqli($serveraddr,$username,$password,$dbname);

		if (!$link) {
		
			echo "<script type='text/javascript'>document.alert('coulnd establish a connection with mysql...');</script>";	
		
		}

		else {

			echo "<script type='text/javascript'>document.alert(mysqli_get_host_info($link);</script>";
		
		
		}

	}

	function close () {

		mysqli_close($link);

	}

	// so now literally all we have to do is query mysql using the $link object from out connection and test our post objects against the other submitted fields in an array
	// so lets make an array that contains all of the mysql database table's email fields  

	// once these are defined they
	// are GLOBAL VARIABLES
	$email = $_POST['email'];
	$fullname = $_POST['fullname'];

	// implies the database is named "db"
	// and all the tables in db are invoked 
	// with the * operator 
	function getEmails () {
	
		// query db (MariaDB mysql to return
		// a list of every email in the database
		$sql = "show db customers email from *;";
		return $emailList = $result -> $mysqli -> $query(sql);
	
	}
	
	function checkEmail (email, eList) {
	
	
		for (var i = 0; i < eList.length - 1; i++) {
			e = eList[i];
			if (e == email) {
				echo "<script type='text/javascript'>window.alert('emails already in the db!');</script>";
				return;
			}	
		}	
		return true;
	}

	function insertValues (email, fullname) {	
	
	$sql = "INSERT VALUES(".$email.".','.".$fullname.")";	
	return $query($sql);


	}

?>
