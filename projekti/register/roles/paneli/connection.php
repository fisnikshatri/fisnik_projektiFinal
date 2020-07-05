<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "mydb";
	
	$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);
	
	// Check connection 
	
	if($conn->connect_error){
		echo "Konektimi Deshtoi!";
	}
	
	// Remove this else code once database is connected otherwise everypage connected to database will show connection made on top. 
	
	else{
		
		echo "Konektimi me sukses ne Database";
		
	}
?>