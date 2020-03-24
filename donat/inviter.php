<?php

require_once $_SERVER['DOCUMENT_ROOT']."/core/core.php";

//$invitor_server = $_GET['server'];
//$invitor_type = $_GET['type'];
//$invitor_atribut = $_GET['atribut'];

/*
база данных по итемам
 server -> vanila tehno
 type -> predmet privelegiya
 atribut -> ид привелегии или предмета  id9999x99999k99999 (ид, подтип, количество)

*/






?>
<div class="windows_result_by_shop" id="windows_result_by_shop">
<?php 
$shop = new Shop;
echo $shop-> test_windows(); ?>
</div>