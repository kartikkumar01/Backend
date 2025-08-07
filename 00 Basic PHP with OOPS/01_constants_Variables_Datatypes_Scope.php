<?php 
//php is loosely typed language means no need to mention datatype

//---------------Datatypes & Variables------------------
$name = 'Kartik Kumar'; 
var_dump($name);//1) string
$age = 21; 
$age = '21';
var_dump($age);//2) int
$package = 2.34; 
var_dump($package);//3) float
$isJoined = false; 
var_dump($isJoined);//4) bool
$data = null;
var_dump($data); //5) NULL

//-------------------static variables---------------------------
#1)static variables are defined inside functions and class only
#2)static variables preserve their values on each function call

function counter(){
    static $count = 0;
    echo "<br>".$count;
    $count++;
}
counter(); //0
counter(); //1
counter(); //2
counter(); //3

//-------------------Constants---------------------------
//define() -> can't be used inside classes
//const -> can't be used inside functions

function greet(){
    define('Company','Yiron Technologies');
    // const Company = 'Yiron Technologies';
    echo Company;
}

//-----------------Scope--------------
#1)Local scope or function scope -> access within function only
function localScope(){
    $localVar = 10;
    echo "<br>".$localVar;
}
localScope();
// echo $localVar;

#2)Global scope -> access outside function only and using 'global' keyword inside function
$globalVar = 50;
function func(){
    global $globalVar;
    echo $globalVar;
}
func();
?>