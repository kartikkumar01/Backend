<?php
session_start(); //fetches the existing session or creates the new session
//If It creates a new session then user needs to login again
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Print the user name  -->
     <h1>Dashboard</h1>
     <?php
    if(!isset($_SESSION['email'])){
        header('Location: logout.php');
    }else{
        echo $_SESSION['email'];
        echo $_SESSION['password'];
    }
    ?>
     <a href="balance.php">Check your balance</a>
</body>
</html>