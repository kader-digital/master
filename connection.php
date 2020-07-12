<?php 

	function connect () {

		$username = 'kader';
		$password = 'kader';
		$hostname = 'Kaders-MacBook-Air.local';
		$dbname = 'db';

		$link = new mysqli($serveraddr,$username,$password,$dbname);

		if (!$link) {
		
			echo "<script type='text/javascript'>document.alert('coulnd establish a connection with mysql...');</script>";	
		
		}

		else {

			echo "<script type='text/javascript'>document.alert(mysqli_get_host_info($link);</script>";
		
		
		}

	}


?>
