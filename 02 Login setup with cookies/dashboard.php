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
    if(!$_COOKIE['email']){
        header('Location: logout.html');
    }else{
        echo $_COOKIE['email'];
        echo $_COOKIE['password'];
    }
    ?>
     <a href="balance.php">Check your balance</a>
</body>
</html>