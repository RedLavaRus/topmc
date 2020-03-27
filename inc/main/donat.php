<div class="main_box_lz1">
	<div id="msg_wie_don"></div>
				<div class="nes_box2">
					<h3>Донат</h3>
					<div class="donat_select_server_box">
							<div class="donat_select_server_head">СЕРВЕР:</div>
							<a id="don_vanila"><div class="donat_select_server_item1">VANILA</div></a>
							<?php //<a id="don_tehno"><div class="donat_select_server_item">TEHNO</div></a>?>
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

            $('#shop_act_vanila_by_1').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?pr=1",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_vanila_by_2').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?pr=2",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });
            $('#shop_act_vanila_by_3').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?pr=3",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });
            $('#shop_act_vanila_by_4').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?pr=4",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });
            $('#shop_act_vanila_by_5').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?pr=5",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            }); 
             
            $('#shop_act_vanila_info_1').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?info=1",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_vanila_info_2').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?info=2",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });
            $('#shop_act_vanila_info_3').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?info=3",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });
            $('#shop_act_vanila_info_4').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?info=4",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });
            $('#shop_act_vanila_info_5').click(function(){  
                $.ajax({  
                    url: "/donat/vanila/by1.php?info=5",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
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

$(document).mouseup(function (e)
{
    var container = $("#shad");
    var container1 = $("#shad2");
    var containersha= $("#shad1");
    var container2= $("#close_windows_shop");
    if ((!container.is(e.target) && container.has(e.target).length === 0) ) {
        $('#shad').fadeOut(600, function(){});
    }
    if (container2.is(e.target) ) {
        $('#shad').fadeOut(600, function(){});
    }
});




    </script> 