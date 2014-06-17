<?php 

$user='carpoolingdbpool';
$pass='sankafc';
$db='carpooling';

$connect = mysqli_connect('sql5.freesqldatabase.com','sql544007','kL9!zH5!','sql544007');

if(!$connect){
    echo "Connection ERROR!\n\n\n\n";
}

$result = mysqli_query($connect,"DELETE * FROM pool WHERE date == DATE_SUB(curdate(), INTERVAL 1 DAY)");
?>