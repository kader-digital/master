<?php 

// so now literally all we have to do is query mysql using the $link object from out connection and test our post objects against the other submitted fields in an array
// so lets make an array that contains all of the mysql database table's email fields  

// once these are defined they
// are GLOBAL VARIABLES
$email = $_POST['email'];
$fullname = $_POST['fullname'];

// implies the database is named "db"
// and all the tables in db are invoked 
// with the * operator 
$sql = "show db customers email from *;";

// makes the query using $query()
$emailList = $result -> $mysqli -> $query($sql);

// makes sure the email isnt already in the 
// database (db) before it inserts a new 
// associative array ['email':'fullname'] => ['name':'key']
for (i = 0; i < emailList.length; i++) {

	// each element of the database's email list
	// and its corresponding length
	// gets compared to $email
	var e  = emailList[i];	
	var l = e.length;

	var subEmail = ".$email.";
	if (subEmail.length == l) {
	
		if (subEmail == e) {
		
			".window.alert('email is already in the database. we sent you an email just to reconfirm.');"
		
		}
		else {
		
			// here is where to insert the 
			// new fields for email and fullname
			$sql = "INSERT VALUES(".$email.".','.".$fullname.")";	
			$response = $query($sql);
			import 'close.php';
		    	
		
		}

	}
	
}

?>
