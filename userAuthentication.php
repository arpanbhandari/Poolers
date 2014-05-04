<?php
    include 'connection.php';
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='beecth' AND password='ahkdjsa'"; 
    //echo $query;
    $result = mysqli_query($connect,$query);
    echo $username;
    // echo $password;
    if(!$result){
        echo("Database query failed!");
    }
    else{
        echo "Username present!";
    }
?>

