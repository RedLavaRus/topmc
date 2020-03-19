
				<div id="show_online" class="show_online"> </div>
				<?php /*
				<script>
$.get("/inc/online.php",function(data){
$("#show_online").html(data);
});

				function ajax_function(){
					$.get("/inc/online.php",function(data){
$("#show_online").html(data);
});
				}
				
				setInterval(ajax_function, 10000);

				</script>*/
				include $_SERVER['DOCUMENT_ROOT']."/inc/online.php";?>

				<div class="servers">
					ГОЛОСУЙ И ПОЛУЧАЙ ПОДАРКИ!
				</div>
				<div class="server_box">
					<div class="button_voice">
					TOPMC
					</div>
				</div>
				<div class="server_box">
				<div class="button_voice">
					NJG4NJG
					</div>
				</div>
				<div class="server_box">
				<div class="button_voice">
					TOP5TOP
					</div>
				</div>


				<div class="servers">
					ИВЕНТЫ И АКЦИИ
					<?php
						$ivent = new Ivent;
						$ivent-> right_bar($pdo);
					?>
				
				</div>