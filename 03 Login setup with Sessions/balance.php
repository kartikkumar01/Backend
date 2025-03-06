<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your Balance</h1>
    <?php
    if(!isset($_SESSION['email'])){
        header('Location: logout.php');
    }else{
        echo $_SESSION['email'];
        echo $_SESSION['password'];
        ?>
        <a href="logout.php">LOGOUT</a>
        <?php
    }
    ?>
</body>
</html>