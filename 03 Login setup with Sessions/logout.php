<?php
session_start(); //Fetch the session first
session_destroy(); //Then actually destroy the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>YOU NEED TO LOG IN AGAIN</h1>
    <a href="login.html">Login</a>
</body>
</html>