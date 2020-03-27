<?php
if($up_id == 0){
?>
<div class="lc_main_bloc">
        
    </div>

<?php
}
else
{
?>
<div class="lc_main_bloc">
        <div class="lc_ava_block">
            <div class="lc_status_login"><?php echo  $lc -> realname($pdo, $up_id); ?></div>
            <div class="lc_status_onl"><?php echo  $lc -> status($pdo, $up_id); ?></div>
            <img src="/lc/avatarka/1.png" alt="avatarka" class="avatarka">
            <?php  
            if ($up_id == $_SESSION["id"]){
            ?>
            <div class="lc_button_1">Сменить пароль<br>(Временно недоступно)</div>
            <div class="lc_button_1">Сменить почту<br>(Временно недоступно)</div>
            <?php
            }
            else
            {
            ?>

            <div class="lc_button_1">Написать<br>(Временно недоступно)</div>
            <?php
            }
            ?>
            
            
            <br>
        </div>
        <div class="lc_skin_block">
            <div class="lc_skin_l"> Скин не выбран</div>
            <div class="lc_skin_r"> Плащ не выбран</div>
            <div class="clear"></div>
            <?php  
            if ($up_id == $_SESSION["id"]){
            ?>
            <div class="lc_button_2">Загрузить скин<br>(Временно недоступно)</div>
            <div class="lc_button_2r">Загрузить плащ<br>(Временно недоступно)</div>
            <?php 
            }
            ?>
        </div>
    </div>





<?php




}
?>
