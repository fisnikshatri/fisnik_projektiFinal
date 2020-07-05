<html>
<head>
<title>Paneli i Adminit </title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="../foto/adminLogo.png">
<h3> Paneli i Adminit </h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php" target="_blank"> Shto Usera </a></li>
	<li><a href="delete.php" target="_blank"> Fshij Usera </a></li>
	<li><a href="update.php" target="_blank"> Update Post </a></li>
	<li><a href="nosgene.php" target="_blank"> Developer </a></li>
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1>Te Dhenat e Userave</h1></center>
<?php
    include 'connection.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM roles";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>ID: </h4>" . $row["id"]. "<br>" . "  Username: " . $row["username"].  " <br> " .  "Usertype: " . $row["user_type"] .  "<br>" . "Password: " . $row["password"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>Nuk u gjete asnje e dhene<center></h3>";
}
?>
</div>
</body>
</html>