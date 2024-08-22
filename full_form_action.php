<?php
$name=$_REQUEST['name'];
$pwd=$_REQUEST['pwd'];
$gender=$_REQUEST['gender'];
$continent=$_REQUEST['continent'];
$meals=$_REQUEST['meals'];
$file=$_FILES['photo_file'];

if (isset($_REQUEST['Submit'])) {
    if (!empty($name)) {
        echo "Name:" . $name . "<br>";
    }
    if (!empty($pwd)) {
        echo "Password: " . $pwd . "<br>";
    }
    if (!empty($gender)) {
        echo "Gender: " . $gender . "<br>";
    }
    if (!empty($continent)) {
        echo "Continent: " . $continent . "<br>";
    }
    if(!empty($meals)){
        echo "You selected meal(s):";
        $var=count($meals);
        for ($i=0; $i <$var; $i++) {
             echo "$meals[$i]"." ". "<br>";
         }
    }
    else{
        echo "You selected no meals.";
    }
    if (!empty($file)) {
        echo "File Name:".$_FILES['photo_file']['name']."<br>";
        echo "File Type:".$_FILES['photo_file']['type']."<br>";
        echo "File Temporary Name:".$_FILES['photo_file']['tmp_name']."<br>";
        echo "File Size:".$_FILES['photo_file']['size']."<br>";
        echo "File Name:".$_FILES['photo_file']['name']."<br>";

        $path="downloads";
        $path = $path . basename($_FILES['photo_file']['name']);

        if (move_uploaded_file($_FILES['photo_file']['tmp_name'] ,$path)) {
            echo "The file ". basename($_FILES['photo_file']['name'])." has been uploaded.";
        }
        else{
            echo "Error with uploading file.";
        }
    }
}
?>