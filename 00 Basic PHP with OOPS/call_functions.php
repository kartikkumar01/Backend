<?php 

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['greet'])) greet();
    if(isset($_GET['horn'])) horn();
    if(isset($_GET['shout'])) shout();
}


function greet(){
    echo "greet function called";
}
function horn(){
    echo "horn function called";
}
function shout(){
    echo "shout function called";
}
?>