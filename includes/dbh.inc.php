<?php


$servername = "localhost";
$dbUsername = "root";
$dbPassword="";
$dbName="systemlogintut";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Wooop you're outta here!!!".mysqli_connect_error());
}