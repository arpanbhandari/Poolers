<?php
session_start();
$phoneNumber=$_GET['phoneNumber'];
$_SESSION['phoneNumber']=$phoneNumber;
header("Location: index2.php");
?>