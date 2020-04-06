
<div id="msg_wie_don"></div>
<h3>СЕРВЕР VANILA</h3>
						<div class="donat_box" id="donat_vip_box">
							<div class="donat_box_head" id="donat_vip_head">VIP</div>
							<img src="/img/priv/vip.png" class="donat_ava_byuX">
							<a id="shop_act_vanila_by_1"><div class="donat_but_buy">Купить</div></a>
							<a id="shop_act_vanila_info_1"><div class="donat_but_info">Инфо</div></a>
						</div>
						<div class="donat_box" id="donat_prem_box">
							<div class="donat_box_head" id="donat_prem_head">PREMIUM</div>
							<img src="/img/priv/prem.png" class="donat_ava_byuX">
							<a id="shop_act_vanila_by_2"><div class="donat_but_buy">Купить</div></a>
							<a id="shop_act_vanila_info_2"><div class="donat_but_info">Инфо</div></a>
						</div>
						<div class="donat_box" id="donat_lord_box">
							<div class="donat_box_head" id="donat_lord_head">LORD</div>
							<img src="/img/priv/lord.png" class="donat_ava_byuX">
							<a id="shop_act_vanila_by_3"><div class="donat_but_buy">Купить</div></a>
							<a id="shop_act_vanila_info_3"><div class="donat_but_info">Инфо</div></a>
						</div>
						<div class="donat_box" id="donat_king_box">
							<div class="donat_box_head" id="donat_king_head">KING</div>
							<img src="/img/priv/king.png" class="donat_ava_byuX">
							<a id="shop_act_vanila_by_4"><div class="donat_but_buy">Купить</div></a>
							<a id="shop_act_vanila_info_4"><div class="donat_but_info">Инфо</div></a>
						</div>
						<div class="donat_box" id="donat_mic_box">
							<div class="donat_box_head" id="donat_mic_head">МЕЦЕНАТ</div>
							<img src="/img/priv/mecen.png" class="donat_ava_byuX">
							<a id="shop_act_vanila_by_5"><div class="donat_but_buy">Купить</div></a>
							<a id="shop_act_vanila_info_5"><div class="donat_but_info">Инфо</div></a>
						</div>


<script>  
        $(document).ready(function(){  
          


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


            $('#shop_act_tehnowar_info_1').click(function(){  
                $.ajax({  
                    url: "/donat/tehnowar/by1.php?info=1",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_tehnowar_info_2').click(function(){  
                $.ajax({  
                    url: "/donat/tehnowar/by1.php?info=2",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_tehnowar_info_3').click(function(){  
                $.ajax({  
                    url: "/donat/tehnowar/by1.php?info=3",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_tehnowar_info_4').click(function(){  
                $.ajax({  
                    url: "/donat/tehnowar/by1.php?info=4",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_tehnowar_by_1').click(function(){  
                $.ajax({  
                    url: "/donat/tehnowar/by1.php?pr=1",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_tehnowar_by_2').click(function(){  
                $.ajax({  
                    url: "/donat/tehnowar/by1.php?pr=2",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_tehnowar_by_3').click(function(){  
                $.ajax({  
                    url: "/donat/tehnowar/by1.php?pr=3",
                    cache: false,  
                    success: function(html){  
                        $("#msg_wie_don").html(html);  
                    }  
                });  

            });  
            $('#shop_act_tehnowar_by_4').click(function(){  
                $.ajax({  
                    url: "/donat/tehnowar/by1.php?pr=4",
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
					