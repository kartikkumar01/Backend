<?php

//r - read
//w - write
//a - append
//r+ - read & write
//w+ - write & read
//a+ - append & read
$fileName = './sample.txt';
if(file_exists($fileName)){
    //1) Open a file
    $file = fopen($fileName,'r');
    
    //2) Read a file
    $fileSize = filesize($fileName);
    if($fileSize > 0){
        $fileData = fread($file, $fileSize);
        // $fileData = fgets($file); //reads line by line
        echo $fileData;
    }
    
    //3) Write to a file
    // $file = fopen($fileName,'w');
    // fwrite($file, "Hola shola");
    
    //4) Append to a file
    $file = fopen($fileName,'a');
    fwrite($file, "\nGola Mola");

    //5) Delete a file
    unlink($fileName);

    //6) Closing a file connection
    fclose($file);
}else{
    exit("File does not exists!!");
}
    ?>