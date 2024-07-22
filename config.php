<?php

$server = "sql304.infinityfree.com";
$user = "if0_34453367";
$password = "4fV9ftusJCy";
$db = "if0_34453367_Cworld";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>