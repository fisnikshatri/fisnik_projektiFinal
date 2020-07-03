<?php 
    session_start();

    $conn = new mysqli("localhost","root","","mydb");

    $msg="";


    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = sha1($password);
        $userType = $_POST['userType'];

        $sql = "SELECT * FROM roles WHERE username=? AND password=? AND user_type=?"; 

        $stmt=$conn->prepare($sql);
        $stmt->bind_Param("sss",$username,$password,$userType);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        session_regenerate_id();
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['user_type'];
        session_write_close();

        if($result->num_rows==1 && $_SESSION['role']=="qytetar"){
            header("location:qytetari.php");
        }else if($result->num_rows==1 && $_SESSION['role']=="administrator"){
            header("location:paneli/administratori.php");
        }else if($result->num_rows==1 && $_SESSION['role']=="moderator"){
            header("location:moderatori.php");
        }else{
            $msg = "Username or Password eshte i gabuar!";
        }
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolet Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h3 class="text-center text-light bg-danger p-3">Role Login System</h3>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" 
                        placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" 
                        placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="userType">I'm a :</label>
                        <input type="radio" name="userType" value="qytetar" class="costum-radio" 
                        required>&nbsp;Qytetar |
                        <input type="radio" name="userType" value="administrator" class="costum-radio" 
                        required>&nbsp;Administraor |
                        <input type="radio" name="userType" value="moderator" class="costum-radio" 
                        required>&nbsp;Moderator 
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-danger btn-block">
                    </div>
                    <h5 class="text-danger text-center"><?= $msg; ?></h5>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>