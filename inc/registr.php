<?php
require_once $_SERVER['DOCUMENT_ROOT']."/core/core.php";
$login=$_POST['login'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];
$mail=$_POST['mail'];

$regsts = new Login;
echo $regsts -> reg($pdo,$login,$pass,$pass2,$mail);



?>