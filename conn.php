<?php
$Servername ="localhost";
$username = "root";
$password = "";
$database = "phpcurd";

$conn = mysqli_connect($Servername, $username, $password, $database);

if(!$conn){
    die("Sorry we are failed to connect.".mysqli_connect_error());
}
else

?>