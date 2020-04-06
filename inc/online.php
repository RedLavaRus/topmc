<?php
require_once "on.php";

echo "<div class='servers'>
СЕРВЕРА:
</div>";


?>

				<div class="server_box">
          <div class="onliner_v2_main">
            <div class="onliner_v2_main_l1">
            <div class="onliner_v2_main_l1_n1"><img src="/img/icos/vanila.png" class="onliner_icos_st_s1"> 	<?php echo $Servers_config[0][0]; ?> </div>
            <div class="onliner_v2_main_l1_n2">            
            <img src="/img/icos/ekonimik.png" class="onliner_icos_st_s" alt="ЭКОНОМИКА" title="ЭКОНОМИКА"> 
            <img src="/img/icos/vanil.png" class="onliner_icos_st_s" alt="Ванильный сервер" title="Ванильный сервер"> 
           </div>
            <?php //<div class="onliner_v2_main_l1_n3">1.14.4</div>
            ?>
            </div>
            <div class="clear"></div>
            <div class="onliner_v2_main_l2">
              <div class="onliner_v2_main_bar">
              <?php
                  $width = $Servers_config[0][4] * 3;
                ?>
              <div class="onliner_v2_main_barin" style="width:<?php echo $width;?>px;">
                <div class="onliner_v2_main_barin_online">Онлаин: 	<?php echo $Servers_config[0][4]; ?> / 100</div>
              </div>
              </div>
            </div>
            <div class="onliner_v2_main_l3">ip : 	<?php echo $Servers_config[0][1]; ?></div>
            
            
            
          </div> 
          <br>
					<div class="onliner_v2_main">
            <div class="onliner_v2_main_l1">
            <div class="onliner_v2_main_l1_n1"><img src="/img/icos/serv.png" class="onliner_icos_st_s1"> 	<?php echo $Servers_config[1][0]; ?> </div>
            <div class="onliner_v2_main_l1_n2">
            <img src="/img/icos/pvp.png" class="onliner_icos_st_s" alt="PVP сервер" title="PVP сервер"> 
            <img src="/img/icos/laun2.png" class="onliner_icos_st_s" alt="Сервер доступен только через лаунчер" title="Сервер доступен только через лаунчер"> 
            <img src="/img/icos/mod.png" class="onliner_icos_st_s" alt="Сервер с модами" title="Сервер с модами"> 
            <img src="/img/icos/ekonimik.png" class="onliner_icos_st_s" alt="ЭКОНОМИКА" title="ЭКОНОМИКА"> 
            </div>
            <?php //<div class="onliner_v2_main_l1_n3">1.7.10</div>
            ?>
            </div>
            <div class="clear"></div>
            <div class="onliner_v2_main_l2">
              <div class="onliner_v2_main_bar">
                <?php
                 $width =0;
                  $width = $Servers_config[1][4] * 3;
                ?>
              <div class="onliner_v2_main_barin" style="width:<?php echo $width;?>px;">
                <div class="onliner_v2_main_barin_online">Онлаин: <?php echo $Servers_config[1][4]; ?>  / 100</div>
              </div>
              </div>
            </div>
            <div class="onliner_v2_main_l3">ЛАУНЧЕР</div>
            
            
            
          </div> 

				</div>
<?php
 
/*  
		<?php
          if( $Servers_config[0][3] == "online")
          {
            ?>
          
            <img src="/thems/img/circlonline2.png" id="c1" class="crd1"></canvas>
            <div class="onnnline">
              <?php
            
            echo $Servers_config[0][4]; 
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
          <div class="server_name_h1">		<?php echo $Servers_config[0][0]; ?>   </div>
					<div class="server_name_ip">			<?php echo $Servers_config[0][1]; ?>  </div> 
          <div class="server_name_tag"> ОТКРЫТИЕ 20.03.2020 </div> 
						

					</div>	
					<div class="clear"></div>				
				</div>

        <?php
    if( $Servers_config[0][3] == "online")
          {
            ?>
          
            <img src="/thems/img/circlonline2.png" id="c1" class="crd1"></canvas>
            <div class="onnnline">
              <?php
            
            echo $Servers_config[0][4]; 
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
          <div class="server_name_h1">		<?php echo $Servers_config[0][0]; ?>   </div>
					<div class="server_name_ip">			<?php echo $Servers_config[0][1]; ?>  </div> 
          <div class="server_name_tag"> ОТКРЫТИЕ 20.03.2020 </div> 
						

					</div>	
					<div class="clear"></div>		

echo "<div class='servers'>
Общий онлаин: $on_total
</div>";
/*$sth_max_online = $pdo->prepare('Select `total`  FROM `online` order by total desc limit 0,1');
$sth_max_online->execute(array(""));
$array2 = $sth_max_online->fetch(PDO::FETCH_ASSOC);
echo "<div class='servers'>Рекорд онлаин: ".$array2['total']."</div>";*/
  ?>