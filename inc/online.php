<?php
require_once "on.php";

echo "<div class='servers'>
СЕРВЕРА:
</div>";

//for ($i = 0; $i < $server_coll; $i++)
//  {
  $i=0;
?>

				<div class="server_box">

						<?php
          if( $Servers_config[$i][3] == "online")
          {
            ?>
          
            <img src="/thems/img/circlonline2.png" id="c1" class="crd1"></canvas>
            <div class="onnnline">
              <?php
            
            echo $Servers_config[$i][4]; 
          }
          else
          { ?>
            <img src="/img/circloffline10.png" id="c1" class="crd2"></canvas>
            <div class="onnnline">
              <?php
            echo "OFF";
          }
            ?>  </div>
					<div class="server_name">
          <div class="server_name_h1">		<?php echo $Servers_config[$i][0]; ?>   </div>
					<div class="server_name_ip">			<?php echo $Servers_config[$i][1]; ?>  </div> 
          <div class="server_name_tag"> ОТКРЫТИЕ 20.03.2018 </div> 
						

					</div>	
					<div class="clear"></div>				
				</div>

        <?php


 // };
/*  echo "<div class='servers'>
Общий онлаин: $on_total
</div>";
/*$sth_max_online = $pdo->prepare('Select `total`  FROM `online` order by total desc limit 0,1');
$sth_max_online->execute(array(""));
$array2 = $sth_max_online->fetch(PDO::FETCH_ASSOC);
echo "<div class='servers'>Рекорд онлаин: ".$array2['total']."</div>";*/
  ?>