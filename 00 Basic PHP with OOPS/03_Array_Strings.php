<?php

//----------------------Indexed Array-----------------------------
$arr1 = array(1,2,3);
$arr2 = [1,2,3];

// foreach($arr2 as $key=>$value){
//     echo $key.'=>'.$value."<br>";
// }

//---------------------Associative array (customized index)--------------------
$user = [
    "username" => "Kartik Kumar",
    "age" => 20
];

// foreach($user as $key=>$value){
//     echo $key.' : '.$value."<br>"; 
// }

//Array functions
$numbers = [1,2,3,4,5,6,7,8,9,10];
// echo count($numbers);
array_push($numbers, 11);
array_pop($numbers);
array_unshift($numbers, 0);
array_shift($numbers);
in_array(5, $numbers);
// foreach($numbers as $number){
//     echo $number.", "; 
// }


//-----------------------String-------------------------
$name = "Kartik Kumar";
// echo "Hello $name";
// echo 'Hello $name';
// echo $name[0];
// echo "Hello {$name}_Kumar";

//Heredoc (Multiline string) - can include single quotes, double quotes, variables, escape seq
// $about = <<<ab
// In heredoc , I can use multiline strings.<br>
// I can use 'this', and "this" and {$name} also.
// ab;

// echo $about;

// echo str_word_count($name);
// echo strlen($name);
// echo strstr($name, 'harsh'); //returns false if not found
// echo str_replace('kartik', 'Vinay', $name); //case sensitive serach and replace
// echo str_ireplace('kartik', 'Vinay', $name); //case insensitive search and replace

//-------------reverse a string program without inbuilt function
function myStrrev($str){
    $reversed = '';
    $strLength = strlen($str);
    $x = 0;
    for($i = $strLength-1; $i >=0; $i--){
        $reversed[$x] = $str[$i];
        $x++;
    }
    return $reversed;
}
echo myStrrev($name)."<br>"; //My function
echo strrev($name); //In built function
?>