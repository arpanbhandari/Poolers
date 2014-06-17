<?php
session_start();
$_SESSION['phoneNumber'] = $_POST['phoneNumber'];
    
?>
<?php echo 'Redirecting you...'; ?>

<?php // index.php
require_once 'openid.php';
$openid = new LightOpenID("http://192.168.1.3");

$openid->identity = 'https://www.google.com/accounts/o8/id';
$openid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);
$openid->returnUrl = 'http://192.168.1.3/Poolersv1/login.php'
?>


<!--<a href="<?php echo $openid->authUrl() ?>">Login with Google</a>-->
<?php 
$url = $openid->authUrl();
header("Location: ". $url);

?>