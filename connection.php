<?php

$username ="root";
$password ="";
$server_name = "127.0.0.1";
$database_name = "c_m";
$con = mysqli_connect($server_name, $username ,$password,$database_name);
if(!$con){
    echo "error";
}


?>