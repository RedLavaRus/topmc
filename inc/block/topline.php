<?php
require_once $_SERVER['DOCUMENT_ROOT']."/core/core.php";
include $_SERVER['DOCUMENT_ROOT']."/inc/on.php";
?>
<div class="top_line_box" >
		<div class="top_line_box_l" >
			<a href="/"><div class="item_top_line_mz1">TopMC.site</div></a>
			<div class="item_top_line_mz1">Онлаин: <?php echo $on_total ;?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php $sth_max_online = $pdo->prepare('Select `total`  FROM `online` order by total desc limit 0,1');
$sth_max_online->execute(array(""));
$array2 = $sth_max_online->fetch(PDO::FETCH_ASSOC);
echo " Рекорд: ".$array2['total']." ";?>
			
			
			
			</div>
			<?php if($_SESSION['id'] >=1){ ?>
				<a id="btn4"><div class="item_top_line_mz2" >ВЫХОД</div></a>
			<a href="/lc/"><div class="item_top_line_mz2">ЛИЧНЫЙ КАБИНЕТ</div></a>
			<?php }else{ ?>
			<a id="btn2"><div class="item_top_line_mz2" >РЕГИСТРАЦИЯ</div></a>
			<a id="btn1"><div class="item_top_line_mz2">ВХОД  </div></a>
			<?php }?>
		</div>
	</div>