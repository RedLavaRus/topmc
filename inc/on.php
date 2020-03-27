<?php
//require_once "../core/core.php";

//настройки серверов
$Servers_config = array(
	//array('НАЗВАНИЕ','ИП','ПОРТ','СТАТУС','ОНЛАИН',"НАКРУТКА")
  array('VANILA','s1.topmc.site','25565','status','0','0')
);
$server_coll =2;
      $on_ser0=0;
			$on_ser1=0;
			$on_ser2=0;
			$on_ser3=0;
			$on_ser4=0;
			$on_ser5=0;
			$on_total	=0;
//for ($i = 0; $i < $server_coll; $i++)
//  {
	$i=0;
      $Server_full = new MinecraftStatus($Servers_config[$i][1], $Servers_config[$i][2]); 
      $Servers_config[$i][3] = $Server_full->Online; 
      if($Server_full->Online){$Servers_config[$i][3] = "online"; }else{$Servers_config[$i][3] = "offline";}
      $Servers_config[$i][4]=$Server_full->CurPlayers + $Servers_config[$i][5];

      $slovo_on = 'on_ser'.$i;
      $$slovo_on = $Servers_config[$i][4];
      $on_total = $on_total + $Servers_config[$i][4];
//  }
  $vremya=time();
  $sth1 = $pdo->prepare('INSERT INTO `online` (vremya, s1, s2,s3,s4,s5,s6,total)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

		$sth1->execute(array(
			"$vremya",
			"$on_ser0",
			"$on_ser1",
			"$on_ser2",
			"$on_ser3",
			"$on_ser4",
			"$on_ser5",
			"$on_total"		
		));
 
?>