<?php
require_once $_SERVER['DOCUMENT_ROOT']."/core/core.php";
?>

<!DOCTYPE html>
<html>
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/inc/block/head.php";
?>
<body>
	<div id="content1"></div>
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/inc/block/topline.php";
require_once $_SERVER['DOCUMENT_ROOT']."/inc/block/header.php";
?>	

	

	<div class="main_box">
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/inc/block/headmenu.php";
?>		
		<div class="main_box_2">
		<?php	require_once $_SERVER['DOCUMENT_ROOT']."/inc/main/servers.php"; ?>	
			<div class="main_box_lz2">

		<?php	require_once $_SERVER['DOCUMENT_ROOT']."/inc/block/right.php"; ?>
			
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<script>  
        $(document).ready(function(){  
          
            $('#btn1').click(function(){  
                $.ajax({  
                    url: "/inc/login.php",  
                    cache: false,  
                    success: function(html){  
                        $("#content1").html(html);  
                    }  
                });  
            });  
              
            $('#btn2').click(function(){  
                $.ajax({  
                    url: "/inc/reg.php",
                    cache: false,  
                    success: function(html){  
                        $("#content1").html(html);  
                    }  
                });  

            });   
              
            $('#btn3').click(function(){  
                $.ajax({  
                    url: "/inc/reg.php",
                    cache: false,  
                    success: function(html){  
                        $("#content1").html(html);  
                    }  
                });  

						});    
						
            $('#btn4').click(function(){  
                $.ajax({  
                    url: "/inc/exit.php",
                    cache: false,  
                    success: function(html){  
												$("#content1").html(html);  
												location.reload()
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
</body>
</html>


