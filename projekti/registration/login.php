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
            <h3>Login</h3>
        </div>

        <form action="login.php" method="post">

            <div>
                <label for="username" >Username : </label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="password" >Password : </label>
                <input type="password" name="password_1" required>
            </div>

            <button type="submit" name="login_user"> Submit </button>

            <p>Already a user?<a href="login.php">Log in</a></p>

        </form>
   </div>
</body>
</html>