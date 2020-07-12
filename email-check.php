<?php 

// so now literally all we have to do is query mysql using the $link object from out connection and test our post objects against the other submitted fields in an array
// so lets make an array that contains all of the mysql database table's email fields  

$email = $_POST['email'];
$fullname = $_POST['fullname'];

$sql = "show db customers email *;";
$emailList = $result -> $mysqli -> $query($sql);

for (i = 0; i < emailList.length; i++) {

	var e  = emailList[i];	
	var l = e.length;
	var subEmail = ".$email.";
	if (subEmail.length == l) {
	
		if (subEmail == e) {
		
			".window.alert('email is already in the database. we sent you an email just to reconfirm.');"
		
		}
		// else add the email and fullname to the database tables empty fields
		// make a new customer and feed it VALUES($fullname, $email)
	}
	

}

// this call is in between importing 'connect.php' and importing 'close.php'
// so we just have to query the (assumingly open) database 

?>
