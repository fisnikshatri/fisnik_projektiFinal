<?php

session_start();

if(isset($_SESSION['username'])){

    $_SESSION['msg'] = " Ti duhet te jesh i kyqur per ta pare kete faqe";
    header("location : login.php");
}

if(isset($_GET['logut'])){

    session_destroy();
    unset($_SESSION['username']);
    header("location : login.php");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>

    <h1>Kjo eshte dashboardi</h1>
    <?php
        if(isset($_SESSION['success'])) : ?>

    <div>
            
        <h3>
            
            echo $_SESSION['success'];
            unset($_SESSION['success']);

        </h3>

    </div>

    <?php endif ?>

    // nese useri hyn me sukses te shfaqen te dhenat e tij

    <?php if(isset($_SESSION[;username])) : ?>
        <h3>Mire se erdhe <strong><?php echo $_SESSION['username']; ?></strong></h3>

        <button><a href="index.php?logout='1'"></a></button>

        <?php endif ?>
    
</body>
</html>