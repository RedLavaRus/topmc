<?php
  $secret_hotmc = "oUIYJv5WCgsMJN5K4HK5yfBURIYiI8";
  $secret_topcraft = "5327d6a91f3566a3ad7edf8be4eeae64";
  $secret_mctop = "04258bb73b31af69cf2b68d13c3b7353";
  $secret_mcrate = "ywKKJi29iEyEprWkK6P4o2odAIOdeVBp";

  $addsum = 1;

	 $pdo_host = "78.46.218.117:3306";
	 $pdo_bd = "mc";
	 $pdo_user = "webuser";
	 $pdo_pass = "wBlrgsS3SHOAYyB9yf4XucgIfN3rcVj0R2hAF4hv";

    $pdo = new PDO('mysql:host='.$pdo_host.';dbname='.$pdo_bd,$pdo_user, $pdo_pass, array(
        PDO::ATTR_PERSISTENT => true
    ));
    $tek_date = time();



    if(isset($_GET['hash']))
    {
      $rate['nick'] =       $_GET["nick"];
      $rate['timestamp'] =  $_GET["timestamp"];
      $rate['hash'] =       $_GET["hash"];

      if( $rate['hash'] == md5(md5($rate['nick'] . $secret_mcrate . 'mcrate')))
      {
        $user =         $rate['nick'];
        $servis_vote =  "rate";
        $sth = $pdo->prepare('INSERT INTO `golosok` (username, servic, dat, stat)
        VALUES (?, ?, ?, ?)');
    
        $sth->execute(array(
          "$user",
          "$servis_vote",
          "$tek_date",		
          "1"
        ));

        $rln_nic = $rate['nick'];
        $sth1 = $pdo->prepare('Select `id`  FROM `authme` WHERE (username = ? or realname=?) limit 1');
		    $sth1->execute(array("$rln_nic","$rln_nic"));
        $array = $sth1->fetch(PDO::FETCH_ASSOC);
        $id=$array['id'];

        $sth2 = $pdo->prepare('UPDATE balance SET lp=lp + ? WHERE iduser = ?');
		    $sth2->execute(array("$addsum","$id"));
        



        exit("OK");
      }
    }
    if(isset($_GET['token']))
    {
      $mctop["token"] =       $_GET['token'];
      $mctop["nickname"] =    $_GET['nickname'];
      if($mctop["token"] == md5($mctop["nickname"].$secret_mctop))
        {
          $user =         $mctop["nickname"];
          $servis_vote =  "mctop";
          $sth = $pdo->prepare('INSERT INTO `golosok` (username, servic, dat, stat)
          VALUES (?, ?, ?, ?)');
      
          $sth->execute(array(
            "$user",
            "$servis_vote",
            "$tek_date",		
            "1"
          ));

        $rln_nic =  $mctop["nickname"];
        $sth1 = $pdo->prepare('Select `id`  FROM `authme` WHERE (username = ? or realname=?) limit 1');
		    $sth1->execute(array("$rln_nic","$rln_nic"));
        $array = $sth1->fetch(PDO::FETCH_ASSOC);
        $id=$array['id'];

        $sth2 = $pdo->prepare('UPDATE balance SET lp=lp + ? WHERE iduser = ?');
		    $sth2->execute(array("$addsum","$id"));
        exit("OK");
        }
    }
    if(isset($_POST['signature'] ))
    {
      $topcraft['username'] =   $_POST['username'];
      $topcraft['sign'] =       $_POST['signature'];
      $topcraft['timestamp'] =  $_POST['timestamp'];

      if ($_POST['signature'] == sha1($topcraft['username'].$topcraft['timestamp'].$secret_topcraft))
      {
          $user =         $topcraft['username'];
          $servis_vote =  "topcraft";
          $sth = $pdo->prepare('INSERT INTO `golosok` (username, servic, dat, stat)
          VALUES (?, ?, ?, ?)');
      
          $sth->execute(array(
            "$user",
            "$servis_vote",
            "$tek_date",		
            "1"
          ));

          $rln_nic =  $topcraft['username'];
          $sth1 = $pdo->prepare('Select `id`  FROM `authme` WHERE (username = ? or realname=?) limit 1');
          $sth1->execute(array("$rln_nic","$rln_nic"));
          $array = $sth1->fetch(PDO::FETCH_ASSOC);
          $id=$array['id'];
  
          $sth2 = $pdo->prepare('UPDATE balance SET lp=lp + ? WHERE iduser = ?');
          $sth2->execute(array("$addsum","$id"));
          
         exit("OK");
      }
    }
    if(isset($_POST['sign'] ))
    {
      $hotmc['sign'] =  $_POST['sign'];
      $hotmc['nick'] =  $_POST['nick'];
      $hotmc['time'] =  $_POST['time'];
      if ($hotmc['sign'] == sha1($hotmc['nick'] .  $hotmc['time'] . $secret_hotmc))
      {
        $user =          $hotmc['nick'];
        $servis_vote =  "hotmc";
        $sth = $pdo->prepare('INSERT INTO `golosok` (username, servic, dat, stat)
        VALUES (?, ?, ?, ?)');
    
        $sth->execute(array(
          "$user",
          "$servis_vote",
          "$tek_date",		
          "1"
        ));

        $rln_nic =  $hotmc['nick'];
        $sth1 = $pdo->prepare('Select `id`  FROM `authme` WHERE (username = ? or realname=?) limit 1');
        $sth1->execute(array("$rln_nic","$rln_nic"));
        $array = $sth1->fetch(PDO::FETCH_ASSOC);
        $id=$array['id'];

        $sth2 = $pdo->prepare('UPDATE balance SET lp=lp + ? WHERE iduser = ?');
        $sth2->execute(array("$addsum","$id"));


        exit('ok');
      }
    }
  
    exit("Ops");
  
  
  
  /*
 ?> 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  if(!isset($_GET['servic']) and !isset($_POST['servic']))  
  {
    exit('ОШИБКА ДОСТУПА. FATAL ERROR 0XFA478E');
  }

if(isset($_GET['servic']))
{
  //get
  $servic=$_GET['servic'];
  if($servic == "hotmc")
  {
    $SECRET_KEY = 'oUIYJv5WCgsMJN5K4HK5yfBURIYiI8';
    if (isset($_POST['nick'], $_POST['time'], $_POST['sign'])) 
    {
      if ($_POST['sign'] !== sha1($_POST['nick'] . $_POST['time'] . $SECRET_KEY)) 
      {
        exit('Переданные данные не прошли проверку.');
      }
    }
    else 
    {
      exit('Не переданы необходимые данные.');
    }

    //operators
    exit('ok');
  }
  elseif($servic == "topcraft")
  {
    $SECRET_KEY = '5327d6a91f3566a3ad7edf8be4eeae64';
    $username = $_POST['username'];
    $timestamp = $_POST['timestamp'];
    $signature = $_POST['signature'];
    if ($signature != sha1($username.$timestamp.$SECRET_KEY)) exit('ОШИБКА ДОСТУПА. FATAL ERROR 0XFA478E');


    //operators

      exit('OK<br />');
  }
  elseif($servic == "mctop")
  {

   
    

  }
  elseif($servic == "mcrate")
  {
      echo "test";
      $SECRET_KEY = 'ftaGxO9LUtSX6PaH9DFSIV112rj9leiX';
    

  }
  else
  {
    
  }
  

}
elseif(isset($_POST['servic']))
{
//post
  $servic=$_POST['servic'];
  
}
else
{
  
     exit('ОШИБКА ДОСТУПА. FATAL ERROR 0XF1478E');
  
}








*/
?>