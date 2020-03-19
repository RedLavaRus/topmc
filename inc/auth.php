<?php
require_once $_SERVER['DOCUMENT_ROOT']."/core/core.php";
$login =$_POST['login'];
$pass=$_POST['password'];
$auth = new Login;
echo $auth -> auth_form($pdo,$login,$pass);



?>