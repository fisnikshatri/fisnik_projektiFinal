<?php
 
include 'connection.php';
 error_reporting(0);
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password = sha1('password');
  $userType = $_POST['userType'];
  
if(!$_POST['submit']){
	// you can remove this echo code and add alert using JS or use required tag in your input feilds.
	
  echo "Te gjitha fushat duhet te plotesohen";
  
}

else {
 // insert into tableName (feilds) values (variables)
 
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
<title>Add Data</title>
</head>

<body>
   
	<h2>Add Updates from this menu</h2>
		<form action="add.php" method="POST">
			Name: <input type="text" name="username" placeholder="Username" value="" required><br><br>
			Password: <input type="password" name="password" placeholder="Password" value="" required><br><br>
			<!--Lloji: <textarea rows="4" cols="50" name="text" value="" required></textarea><br>-->
			<label for="userType">Shto si :</label>
                <input type="radio" name="userType" value="qytetar" class="costum-radio" 
                        required>&nbsp;Qytetar |
                <input type="radio" name="userType" value="administrator" class="costum-radio" 
                        required>&nbsp;Administraor |
                <input type="radio" name="userType" value="moderator" class="costum-radio" 
                        required>&nbsp;Moderator
	<br>
			<input type="submit" name="submit" value="add"/></center>
</body>

<!--
	Similarly you can make delete and updates pages with little changes in sql query and here and there. If you need to learn those too
	please check my youtube channel NOSGENE as i am running a full stack web development course there right now.
 -->

 <!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</html>