	<?php
	if(isset($_GET["pr"])){$title_shop = "Магазин [купить]";}
	if(isset($_GET["info"])){$title_shop = "Магазин [информация]";}
	if( (isset($_GET["info"])) && (isset($_GET["pr"])) ) {exit;}
	?>
	<div class="shop_vindows" id="shad">
		
		<div id="msg_wie_don1"></div>
		<div class="head_shop_by_or_info">
			<img src="/img/close.png" class="close_windows_shop" alt="close" id="close_windows_shop"/>
			<?php echo $title_shop; ?>
		</div>
		<?php 
		if(isset($_GET["pr"]))
		{
			if($_GET["pr"]  == 1)
			{
				?>
<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/vip.png" id="donat_vip_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">VIP на 30 дней</div>
				<div class="prise_shop_text_blokc">
					50
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb1"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">VIP на 30 дней</div>
				<div class="prise_shop_text_blokc">
					100
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb4"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/vip.png" id="donat_vip_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">VIP на 90 дней</div>
				<div class="prise_shop_text_blokc">
					125
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb2"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">VIP на 90 дней</div>
				<div class="prise_shop_text_blokc">
					250
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb5"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/vip.png" id="donat_vip_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">VIP на всегда</div>
				<div class="prise_shop_text_blokc">
					450
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb3"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			
		</div>
				<?php
			}
			if($_GET["pr"]  == 2)
			{
				?>
<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/prem.png" id="donat_prem_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">PREMIUM на 30 дней</div>
				<div class="prise_shop_text_blokc">
					100
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb6"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">PREMIUM на 30 дней</div>
				<div class="prise_shop_text_blokc">
					200
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb9"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/prem.png" id="donat_prem_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">PREMIUM на 90 дней</div>
				<div class="prise_shop_text_blokc">
					250
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb7"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">PREMIUM на 90 дней</div>
				<div class="prise_shop_text_blokc">
					500
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb10"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/prem.png" id="donat_prem_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">PREMIUM на всегда</div>
				<div class="prise_shop_text_blokc">
					650
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb8"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			
		</div>
				<?php
			}
			if($_GET["pr"]  == 3)
			{
				?>
<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/lord.png" id="donat_lord_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">LORD на 30 дней</div>
				<div class="prise_shop_text_blokc">
					200
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb11"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">LORD на 30 дней</div>
				<div class="prise_shop_text_blokc">
					400
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb14"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/lord.png" id="donat_lord_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">LORD на 90 дней</div>
				<div class="prise_shop_text_blokc">
					500
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb12"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">LORD на 90 дней</div>
				<div class="prise_shop_text_blokc">
					1000
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb15"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/lord.png" id="donat_lord_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">LORD на всегда</div>
				<div class="prise_shop_text_blokc">
					1250
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb13"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			
		</div>
				<?php
			}
			if($_GET["pr"]  == 4)
			{
				?>
<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/king.png" id="donat_king_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">KING на 30 дней</div>
				<div class="prise_shop_text_blokc">
					400
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb16"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">KING на 30 дней</div>
				<div class="prise_shop_text_blokc">
					800
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb19"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/king.png" id="donat_king_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">KING на 90 дней</div>
				<div class="prise_shop_text_blokc">
					1000
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb17"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">KING на 90 дней</div>
				<div class="prise_shop_text_blokc">
					2000
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb20"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/king.png" id="donat_king_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">KING на всегда</div>
				<div class="prise_shop_text_blokc">
					2500
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb18"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			
		</div>
				<?php
			}
			if($_GET["pr"]  == 5)
			{
				?>
		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/mecen.png" id="donat_mic_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">МЕЦЕНАТ на 30 дней</div>
				<div class="prise_shop_text_blokc">
					1000
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb21"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">МЕЦЕНАТ на 30 дней</div>
				<div class="prise_shop_text_blokc">
					2000
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb24"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/mecen.png" id="donat_mic_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">МЕЦЕНАТ на 90 дней</div>
				<div class="prise_shop_text_blokc">
					2500
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb22"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">МЕЦЕНАТ на 90 дней</div>
				<div class="prise_shop_text_blokc">
					5000
					<img src="/thems/img/mlp.png">
				</div>
				<a id="sb25"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Заработать</div>
			</div>
		</div>


		<div class="shop_item_pos_xr">
			<img class="shop_item_pos_xr_av" src="/img/priv/mecen.png" id="donat_mic_box">
			<div class="shop_text_blokc_items_sr1">
				<div class="head_shop_text_blokc">МЕЦЕНАТ на всегда</div>
				<div class="prise_shop_text_blokc">
					7000
					<img src="/thems/img/mgd.png">
				</div>
				<a id="sb23"><div class="donat_but_by1">Купить</div></a>
				<div class="donat_but_add">Пополнить</div>
			</div>
			
		</div>
				<?php
			}
		}
		elseif(isset($_GET["info"]))
		{
			if($_GET["info"] == 1)
			{
				?>
				<div class="info_sop_blok_left_drx"><br>
					/back - вернуться назад<br><br>
					/ext - потушить себя<br><br>
					/feed - покормить себя<br><br>
					/ptime - установить личное время<br><br>
					/repair - отремонтировать предмет который в руках<br><br>
				</div>
				<div class="info_sop_blok_right_drx">
					
					<br>
					/kit vip (кд 7 дней)
					<img src ="/img/kits/vanila/vip.png">

					/kit vipbonus (кд 1 дней)
					<img src ="/img/kits/vanila/vipbonus.png">
					<hr><br>
					Количество приватов: 2шт<br>
					Количество домов: 2шт<br>
					Количество Варпов: 0 шт<br>
					<br><br>
				</div>
				<?php
			}
			if($_GET["info"] == 2)
			{
				?>
				<div class="info_sop_blok_left_drx"><br>
					/back - вернуться назад<br><br>
					/ext - потушить себя<br><br>
					/feed - покормить себя<br><br>
					/ptime - установить личное время<br><br>
					/repair - отремонтировать предмет который в руках<br><br>
					/fly - включает режим полета(в пвп отключается)<br><br>
				</div>
				<div class="info_sop_blok_right_drx">
					
					<br>
					/kit prem (кд 7 дней)
					<img src ="/img/kits/vanila/prem.png">

					/kit prembonus (кд 1 дней)
					<img src ="/img/kits/vanila/prembonus.png">
					<hr><br>
					Количество приватов: 2шт<br>
					Количество домов: 2шт<br>
					Количество Варпов: 0 шт<br>
					<br><br>
				</div>
				<?php
			}
			if($_GET["info"] == 3)
			{
				?>
				<div class="info_sop_blok_left_drx"><br>
					/back - вернуться назад(даже после смерти)<br><br>
					/ext - потушить себя<br><br>
					/feed - покормить себя<br><br>
					/ptime - установить личное время<br><br>
					/repair - отремонтировать предмет который в руках и вашу одетую броню<br><br>
					/fly - включает режим полета(в пвп отключается)<br><br>
				</div>
				<div class="info_sop_blok_right_drx">
					
					<br>
					/kit lord (кд 7 дней)
					<img src ="/img/kits/vanila/lord.png">

					/kit lordbonus (кд 1 дней)
					<img src ="/img/kits/vanila/lordbonus.png">
					<hr><br>
					Количество приватов: 3шт<br>
					Количество домов: 3шт<br>
					Количество Варпов: 0 шт<br>
					<br><br>
				</div>
				<?php
			}
			if($_GET["info"] == 4)
			{
				?>
				<div class="info_sop_blok_left_drx"><br>
					/back - вернуться назад(даже после смерти)<br>
					сохраняя опыт<br><br>
					/ext - потушить себя<br><br>
					/feed - покормить себя<br><br>
					/ptime - установить личное время<br><br>
					/repair - отремонтировать предмет который в руках и вашу одетую броню<br>
					включая зачарованые вещи<br><br>
					/bigtree - выращивает большое дерево<br><br>
					/heal - полное востановление здоровья<br><br>
					/god - режим год мод (в пвп отключается)<br><br>
					/fly - включает режим полета(в пвп отключается)<br><br>
				</div>
				<div class="info_sop_blok_right_drx">
					
					<br>
					/kit king (кд 7 дней)
					<img src ="/img/kits/vanila/king.png">

					/kit kingbonus (кд 1 дней)
					<img src ="/img/kits/vanila/kingbonus.png">
					<hr><br>
					Количество приватов: 4шт<br>
					Количество домов: 4шт<br>
					Количество Варпов: 1 шт<br>
					<br><br>
				</div>
				<?php
			}
			if($_GET["info"] == 5)
			{
				?>
				<div class="info_sop_blok_left_drx"><br>
					/back - вернуться назад(даже после смерти)<br>
					сохраняя опыт<br><br>
					/ext - потушить себя<br><br>
					/feed - покормить себя<br><br>
					/ptime - установить личное время<br><br>
					/repair - отремонтировать предмет который в руках и вашу одетую броню<br>
					включая зачарованые вещи<br><br>
					/bigtree - выращивает большое дерево<br><br>
					/heal - полное востановление здоровья<br><br>
					/god - режим год мод (в пвп отключается)<br><br>
					/fly - включает режим полета(в пвп отключается)<br><br>
				</div>
				<div class="info_sop_blok_right_drx">
					
					<br>
					/kit mecenat (кд 7 дней)
					<img src ="/img/kits/vanila/mecenat.png">

					/kit mecenatgbonus (кд 1 дней)
					<img src ="/img/kits/vanila/mecenatbonus.png">
					<hr><br>
					Количество приватов: 8шт<br>
					Количество домов: 8шт<br>
					Количество Варпов: 2 шт<br>
					<br><br>
				</div>
				<?php
			}
		}
		else{
			echo "Error";
		}
		?>
		
		
		
		

	</div>

	<script>
						$('#sb1').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=1",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb2').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=2",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb3').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=3",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb4').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=4",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb5').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=5",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });


						$('#sb6').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=6",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb7').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=7",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb8').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=8",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb9').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=9",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb10').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=10",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb11').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=11",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb12').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=12",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb13').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=13",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb14').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=14",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb15').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=15",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb16').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=16",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb17').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=17",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb18').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=18",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb19').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=19",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb20').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=20",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb21').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=21",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb22').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=22",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb23').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=23",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb24').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=24",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });
						$('#sb25').click(function(){  
                $.ajax({  
                    url: "/donat/inviter.php?server=vanila&type=privelegiya&atribut=25",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don1").html(html);  
                    }  
                });  

            });


						$(document).mouseup(function (e)
{
    var containerwind = $("#windows_result_by_shop");
    if ((!containerwind.is(e.target) && containerwind.has(e.target).length === 0) ) {
        $('#windows_result_by_shop').fadeOut(600, function(){});
    }
});
		</script>
