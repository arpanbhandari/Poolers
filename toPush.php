<?php
    include('connection.php');
    session_start();
    echo $_SESSION['email'];
    echo $_SESSION['phoneNumber'];
    echo $_SESSION['source'];
    echo $_SESSION['destination'];
    echo $_SESSION['date'];
    echo $_SESSION['time'];
    echo $_SESSION['typeOfPool']."\n";
    $email = $_SESSION['email'];
    $phoneNumber = $_SESSION['phoneNumber'];
    $source = $_SESSION['source'];
    $destination = $_SESSION['destination'];
    $date = $_SESSION['date'];
    $time = $_SESSION['time'];
    $typeOfPool = $_SESSION['typeOfPool'];
 //   $result = mysqli_query($connect,"INSERT INTO pool VALUES('" . $_SESSION['email'] . "'," . $_SESSION['phoneNumber'] . ",'" . $_SESSION['source'] . "','" . $_SESSION['destination'] . "','" . $_SESSION['date'] . "','" . $_SESSION['time']  . "'," . $_SESSION['typeOfPool'] . ");"   );
    //$result =    mysqli_query($connect,"insert into test values(2);"); 
    
   // $result = mysqli_query($connect,"insert into pool values('arfdssdn',98765210,'korm','jay','2012-01-01','12:10:00',1);");
    
    
    
  //  $result =    mysqli_query($connect,"insert into test values('11:00:00');");

//$result = mysqli_query($connect,"INSERT INTO pool VALUES('abc', 123, 'src', 'dest', '01-01-01', '12:12:12', 1);");
//$mainResult = mysqli_query($connect,"INSERT INTO pool(emailID,) VALUES('" . $email . "', " . $phoneNumber . ", '" . $source . "', '" . $destination . "', '" . $date . "', '" . $time . "', " . $typeOfPool . ");");

$result = mysqli_query($connect,"INSERT INTO pool VALUES('$email', '$phoneNumber', '$source', '$destination', '$date', '$time', '$typeOfPool');");

header("Location: pullResult.php");


    
    
?>