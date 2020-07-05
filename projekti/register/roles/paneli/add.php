<?php
 
include 'connection.php';
 error_reporting(0);
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password = sha1('password');
  $userType = $_POST['userType'];
  
if(!$_POST['submit']){
	
	
  echo "Te gjitha fushat duhet te plotesohen";
  
}

else {

 
$sql = "INSERT INTO roles (username,password,user_type)
VALUES ('$username', '$password', '$userType')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Useri u shtua me Sukses!</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Krijimi i Userit</title>
</head>

<body>
   
	<h2>Shto Userin duke plotesuar rreshtat me poshte!</h2>
		<form action="add.php" method="POST">
			Name: <input type="text" name="username" placeholder="Username" value="" required><br><br>
			Password: <input type="password" name="password" placeholder="Password" value="" required><br><br>
				<label for="userType">Shto si :</label>

                <input type="radio" name="userType" value="qytetar" class="costum-radio" 
                        required>&nbsp;Qytetar |
                <input type="radio" name="userType" value="administrator" class="costum-radio" 
                        required>&nbsp;Administraor |
                <input type="radio" name="userType" value="moderator" class="costum-radio" 
                        required>&nbsp;Moderator
	<br>
			<input type="submit" name="submit" value="Krijo Userin"/></center>
</body>
</html>