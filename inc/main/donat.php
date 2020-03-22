<div class="main_box_lz1">
	<div class="shop_vindows">
		<div class="head_shop_by_or_info">
		<img src="/img/close.png" class="close_windows_shop" alt="close"/>
		Магазин
		</div>

	</div>
				<div class="nes_box2">
					<h3>Донат</h3>
					<div class="donat_select_server_box">
							<div class="donat_select_server_head">СЕРВЕР:</div>
							<a id="don_vanila"><div class="donat_select_server_item1">VANILA</div></a>
							<a id="don_tehno"><div class="donat_select_server_item">TEHNO</div></a>
					<div class="clear"></div>
					</div>
					<div class="clear"></div>
					<div class="donat_blokc_main" id="showshop">
          <?php require_once $_SERVER['DOCUMENT_ROOT']."/donat/vanila/main.php"; ?>
          <?php //require_once $_SERVER['DOCUMENT_ROOT']."/donat/tehno/main.php"; ?>
					</div>
				
				</div>
				
				<br><br>
			</div>

			<script>  
        $(document).ready(function(){  
          
            $('#don_vanila').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/main.php",  
                    cache: false,  
                    success: function(html){  
                        $("#showshop").html(html);  
                    }  
                });  
            });  
              
            $('#don_tehno').click(function(){  
                $.ajax({  
                    url: "/donat/tehno/main.php",
                    cache: false,  
                    success: function(html){  
                        $("#showshop").html(html);  
                    }  
                });  

            });   
              
            
         
              
        });  

	 $(document).mouseup(function (e)
{
    var container = $("#shad");
    var container1 = $("#shad2");
    var containersha= $("#shad1");
    if ((!container.is(e.target) && container.has(e.target).length === 0) ) {
        $('#shad1').fadeOut(600, function(){});
    }
});
    </script> 