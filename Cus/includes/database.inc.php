<?php
$severName = "localhost";
$dbUsername = "saliya123";
$dbPassword = "Saliya24915";
$dbName = "salogin";

$conn = mysqli_connect($severName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Not connected" . mysqli_connect_error());
}else
{
    echo "Connected";
}