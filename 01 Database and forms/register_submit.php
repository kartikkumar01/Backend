<!-- 
In this File I have learned 
1) How to fetch the incoming data with the HTTP request
2) How to establish the database connection
3) How to use try catch if somthing fails
4) How to insert the data into database
5) How to fetch the data from the database
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Submit</title>
</head>
<body>
    <?php

    //Now I want to store this data in the database
    //Establishing the connection
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

    //Fetch the incoming data from the client
    $name = $_GET['name'];
    $age = $_GET['age'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    
    //inserting the data to database query
    $query = "INSERT INTO users (name, age, email, password) VALUES ('$name', '$age', '$email', '$password');";
    try{
        mysqli_query($con, $query); // throws exception if failed
        echo "Data Inserted <br>";
    }catch(Exception $e){
        echo "Data insertion failed <br>";
        exit;
    }

    //FETCH THE DATA FROM THE DATABASE
    try{
        $table = mysqli_query($con,"SELECT * FROM users;"); //returns the reference to the table else exception if failed
        echo "Table  fetched! <br>";
    }catch(Exception $e){
        echo "Table not fetched!<br>";
        exit;
    }
    
    $row = mysqli_fetch_assoc($table); //Fetches the first row as associative array and when used again it moves on to the next row and after last row it returns false
    while($row){
        echo $row['name']."<br>";
        $row = mysqli_fetch_assoc($table); //Fetches the first row as associative array and when used again it moves on to the next row and after last row it returns false
    }
   ?>
</body>
</html>