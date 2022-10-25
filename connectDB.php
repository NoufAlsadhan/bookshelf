<?php session_start();
global $link;
$server  = "localhost";
$user = "root";
$pass = "";
$database = "bookshelf";
$link = mysqli_connect($server,$user,$pass, $database) or die('Connection failed');;
?>