<?php 
#A function is a reusable block of code that performs a specific task. It helps avoid repetition and makes code cleaner and modular.

#PHP 7+ has advanced function features like type declarations, arrow functions, variadic functions

//1) defining a function
function greet(){
    echo "Hello World";
}
// greet();

//2) Parameterized functions
function greet2($firstName, $lastName=''){
    echo $firstName.' '.$lastName;
}
// greet2(21);

//3 Call by reference
function changeName(&$name, $newName){
    $name = $newName;
}
$name = "Kartik";
changeName($name,'Vishal');
// echo $name;

//4 Variadic function (rest parameter in JS ...restParam)
function sum(...$numbers){
    echo array_sum($numbers);
}
// sum(1,2,3,4,5);

//5 Variable function
function bark(){
    echo "Barking...";
}
$hola = 'bark';
if(is_callable($hola)){
    $hola();
}

//6 Arrow functions
$sayhello = fn() => "Hello";
echo $sayhello();
?>