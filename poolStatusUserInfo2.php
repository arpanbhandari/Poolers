<?php
    session_start();
require_once 'openid.php';
$openid = new LightOpenID("http://192.168.1.3");

if ($openid->mode) {
    if ($openid->mode == 'cancel') {
        echo "User has canceled authentication!";
    } elseif($openid->validate()) {
        $data = $openid->getAttributes();
        $email = $data['contact/email'];
        $_SESSION['email'] = $email;
        echo $_SESSION['email'];
        header("Location: printPoolStatus.php");
       /* echo "Identity: $openid->identity <br>";
        echo "Email: $email <br>";
        echo "First name: $first"; */
    } else {
        echo "The user has not logged in";
    }
} else {
    echo "Go to index page to log in.";
}

?>