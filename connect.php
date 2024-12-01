<?php

$ServerName = "localhost";
$userName = "root";
$password = "";
$dbName = "myshopping_cart";

$conn = mysqli_connect($ServerName,$userName,$password,$dbName);

if(!$conn){
    die("connection failed");
}

?>