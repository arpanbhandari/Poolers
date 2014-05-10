<?php 

$user='root';
$pass='sankafc';
$db='carPooling';

$connect = mysqli_connect('localhost',$user,$pass,$db);

if(!$connect){
    echo "Connection ERROR!\n\n\n\n";
}
?>