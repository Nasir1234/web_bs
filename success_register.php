<?php
/**
 * Created by PhpStorm.
 * User: Noor's
 * Date: 07-Nov-15
 * Time: 4:49 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$db='course_web';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_POST['submit']) {
    $sql = "insert into users(user_name,first_name,last_name,email,password) VALUE('".$_POST['username']."','".$_POST['firstname']."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["password"]."') ;";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo "<h1> Thanks </h1>";

}else
{   var_dump($_POST);
    echo "Submit data properly";
}



mysqli_close($conn);