<div class="lc_right_bar">
            <?php if($_SESSION['id'] >=1){ ?>
				<a id="btn4"><div class="lc_item_top_line_mz2" >ВЫХОД</div></a>
			<a href="/lc/?id=<?php echo $_SESSION['id']; ?>"><div class="lc_item_top_line_mz1"> <?php echo $_SESSION['Login']; ?></div></a>
			<?php }else{ ?>
			<a id="btn2"><div class="lc_item_top_line_mz2" >РЕГИСТРАЦИЯ</div></a>
			<a id="btn1"><div class="lc_item_top_line_mz1">ВХОД  </div></a>
			<?php }?>
    
</div>