<?php 


	function connect () {

		$username = 'kader';
		$password = 'kader';
		$hostname = 'localhost';
		$dbname = 'db';

		$link = new mysqli($serveraddr,$username,$password,$dbname);

		if ($link->connect_error) {
		
			echo "<script type='text/javascript'>document.alert('coulnd establish a connection with mysql...');</script>";	
			die('connection failed. ');
		
		}

	}

	function close () {

		return $link -> $close();

	}

	
	function checkEmail () {
	
		$sql = "show db customers email from *;";
		$eList = $link -> $query(sql); 
		$email = $_POST['email'];
	
		for (var i = 0; i < $eList.length - 1; i++) {
			$e = $eList[i];
			if ($e == $email) {
				return false;
			}	
		}	

		return true;
	}

	function insertValues ($email, $fullname) {	
	
		$sql = "INSERT INTO customers ('fullname', 'email')
		VALUES(".$email.",".$fullname".)";	
		return $link->query($sql);


	}



?>
