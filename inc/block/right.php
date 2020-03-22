
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
				<a href="https://hotmc.ru/vote-188390" target="_blank"	>
					<div class="button_voice">
						HOTMC
					</div>
				</a>
				</div>
				<div class="server_box">
				<a href="https://topcraft.ru/servers/10251/" target="_blank"	>
					<div class="button_voice">
						TOPCRAFT
						</div>
				</a>
				</div>
				<div class="server_box">
				<a href="https://mctop.su/servers/5964/" target="_blank"	>
				<div class="button_voice">
					MCTOP
					</div>
			</a>
				</div>
				<div class="server_box">
				<a href="http://mcrate.su/project/8692" target="_blank"	>
				<div class="button_voice">
					MCRATE
					</div>
			</a>
				</div>


				<div class="servers">
					ИВЕНТЫ И АКЦИИ
					<?php
						$ivent = new Ivent;
						$ivent-> right_bar($pdo);
					?>
				
				</div>