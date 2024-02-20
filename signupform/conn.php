<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "signupform";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    echo"connection successfull";
} else {
    die(mysqli_error($con));
}
?>