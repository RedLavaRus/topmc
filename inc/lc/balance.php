<div class="lc_top_mid_bar">
        <?php
        //$bal = new Balance;
        $balance_fun = new Balance;
        
      
        $balance['gold'] = $balance_fun->show_gold($pdo,$_SESSION['id']);
        $balance['silver'] = $balance_fun->show_silver($pdo,$_SESSION['id']);
        $balance['likepoint'] = $balance_fun->show_lp($pdo,$_SESSION['id']);
       
        ?>
        <div class="lc_element_top_balans_bar">GOLD <div class="lc_summa_ballans"><img src="/thems/img/mgd.png" alt="GOLD"><?php echo $balance['gold']; ?> <div class="lc_summa_ballans_plus">+</div></div></div>
        <div class="lc_element_top_balans_bar">SILVER <div class="lc_summa_ballans"><img src="/thems/img/msv.png" alt="SILVER"><?php echo $balance['silver']; ?><div class="lc_summa_ballans_plus">+</div></div></div>
        <div class="lc_element_top_balans_bar">LIKE POINT <div class="lc_summa_ballans"><img src="/thems/img/mlp.png" alt="LIKE POINT"><?php echo $balance['likepoint']; ?><div class="lc_summa_ballans_plus">+</div></div></div>
        
    
        
    </div>