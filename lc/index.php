<?php
require_once $_SERVER['DOCUMENT_ROOT']."/core/core.php";
if(!isset($_SESSION["id"]))
{
    if(isset($_GET["id"]))
    {
        $page_id = $_GET["id"]; 
    }
    else
    {
        $page_id ="error404";
    }
}
else
{
    if(isset($_GET["id"]))
    {
        $page_id = $_GET["id"]; 
    }
    else
    {
        $page_id =$_SESSION["id"];
    }
}
?>

<!DOCTYPE html>
<html>
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/inc/block/head.php";
?>
<body>
    <div class="lc">
<div id="content1"></div>
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/inc/lc/left.php";
require_once $_SERVER['DOCUMENT_ROOT']."/inc/lc/right.php";
?>

<div class="lc_midl">
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/inc/lc/balance.php";
require_once $_SERVER['DOCUMENT_ROOT']."/inc/lc/main.php";
?> 
   
    
   
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
    </div>
</body>
</html>


