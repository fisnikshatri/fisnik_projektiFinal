<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regjistrimi</title>
    <link rel="stylesheet" href="register.css">
    <script defer src="script.js"></script>
</head>
<body>
   <div class="container">
        <div class="header">
            <h3>Register</h3>
        </div>

        <form action="register.php" method="post">

            <?php include('errors.php') ?>

            <div>
                <label for="username" >Username : </label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="email" >Email : </label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label for="password" >Password : </label>
                <input type="password" name="password_1" required>
            </div>

            <div>
                <label for="password" >Password Confirmation : </label>
                <input type="password" name="password_2" required>
            </div>

            <button type="submit" name="reg_user"> Submit </button>

            <p>Already a user?<a href="login.php">Log in</a></p>

        </form>
   </div>
</body>
</html>