<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/core/core.php";
  if(((isset($_GET['sd1'])) and (isset($_GET['rd1']))) and (isset($_GET['hex1'])))
  {
    $login = $_GET['sd1'];
    $pass = $_GET['rd1'];
    $ip =  $_GET['hex1'];

    $sthd = $pdo->prepare('Select *  FROM `authme` WHERE username = ? LIMIT 1');
		$sthd->execute(array("$login"));
    $arrayd = $sthd->fetch(PDO::FETCH_ASSOC);
     
    $l = new Login;

    
    if($arrayd['id'] < 1)
    {
      echo "Ошибка: Неверный логин или пароль!";
    }
    else
    {
      $salt = substr($arrayd['password'], 5, 16);
      //String encryptedPassword = "$SHA$" + salt + "$" + sha256(sha256(password) + salt);
      $pass = hash('SHA256', $pass);
      $pass = $pass.$salt;
      $pass = hash('sha256', $pass);
      $pass = '$SHA$' . $salt . '$' . $pass;
      if($pass != $arrayd['password'])
      {
        echo "Ошибка: Неверный логин или пароль!";
      }
      else
      {
         echo "OK:".$login;
      }
    }

  }
  else
  {
    echo "ERROR! ДОСТУП ОТКАЗАН!";
  }


?>