<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    //PSEUDO CODE

    // 1) Fetch the incoming data
    $inputEmail = $_POST['email'];
    $inputPassword = $_POST['password'];
    // 2) Fetch the data from the database
    $host = 'localhost'; //Ip address of the host computer[server] where mysql is residing
    $username = 'root'; 
    $password = '';
    $dbname = 'practice';
    try{
        $con = mysqli_connect($host, $username, $password, $dbname); //Returns reference obj if connection established else exception
        echo "Connection established <br>";
    }catch(Exception $e){
        echo "Sorry to say, we are unable to establish the connection <br>";
        exit;
    }
    try{
        $table = mysqli_query($con,"SELECT * FROM users where email = '$inputEmail' and password = '$inputPassword';"); //returns the reference to the table else exception if failed
        echo "Table  fetched! <br>";
    }catch(Exception $e){
        echo "Table not fetched!<br>";
        exit;
    }

    $row = mysqli_fetch_assoc($table); //Fetches the first row as associative array and when used again it moves on to the next row and after last row it returns false
    if(!$row){
        echo "Login Failed";
    }else{
        echo "Logged in sucessfull <br> Welcome ".$row['name'];
        setcookie("email","$inputEmail",time()+3600);
        setcookie("password","$inputPassword",time()+3600);
        ?>
        <a href="dashboard.php">GO to your dashboard</a>
        <!-- It is an option to ask user credentials again and again but it is a worst experience -->
        <!-- <form action="dashboard.php" method="post">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="text" name="password" placeholder="Enter your password">
        <button>Go TO Dashboard</button>
    </form> -->
        <?php
    }
    ?>
</body>
</html>