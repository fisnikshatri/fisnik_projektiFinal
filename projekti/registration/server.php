<?php

session_start();

//inicilaizimi i variables

$username = "";
$email = "";

$errors = array();

//konektimi ne db
$servername_db = "localhost";
$username_db = "root";
$password_db = "";
$db_connect = "login-register";

$conn = mysqli_connect($servername_db, $username_db, $password_db, $db_connect);

//Regjistrimi i userit

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST[password_1]);
$password_2 = mysqli_real_escape_string($db, $_POST[password_2]);

//validimi i formes

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password_1)) {array_push($errors, "Password is required");}
if($password_1 != $password_2){array_push($errors, "Passwords do not match");}

// shikimi ne database me username te njejte

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user) {

    if($user['username'] === $username){array_push($errors, "Username already exists");}
    if($user['email'] === $email){array_push($errors, "Email already in use");}
}

//Regjistrimi i userit nese ska errore

if(count($errors) == 0 ){

    $password = md5($password_1); // ky do te enkriptoj passwordin
    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header('location: index.php');}
?>