<?php 
session_start();
if($_SESSION['cookie']!='Y'){
    setcookie('username','',0,'/');
    setcookie('password','',0,'/');
}
session_destroy();
header('Location: ../pages/Login.php')

?>