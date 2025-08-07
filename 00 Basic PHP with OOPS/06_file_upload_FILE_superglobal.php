<?php 
// print_r($_FILES); //File details when uploaded
echo "<h1>File Handling in PHP</h1><pre>";

if(isset($_FILES['myfile'])){
    $tempFileLocation = $_FILES['myfile']['tmp_name'];
    $fileName = $_FILES['myfile']['name'];
    $newFileLocation = "./files/".$fileName;
    move_uploaded_file($tempFileLocation, $newFileLocation);
    echo "<audio src='$newFileLocation' height='1000' controls></audio>";
}

?>
