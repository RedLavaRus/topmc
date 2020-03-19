<div class="main_box_lz1">
				<div class="nes_box1">
				<?php
					$news = new News;
					$news -> show_last_new($pdo);
					?>
				</div>
				<h3>СТРИМЕРЫ НА ПРОЕКТЕ</h3>
				<div class="stream_box">
					<iframe width="340" height="200" src="https://player.twitch.tv/?channel=fr1zz_tv&enableExtensions=true&muted=false&player=popout&volume=0.5" frameborder="0" allowfullscreen>
					</iframe>
				</div>
				<div class="stream_box">
					<iframe width="340" height="200" src="https://www.youtube.com/embed/dHhKIs1LXJ0&autoplay=1" frameborder="0" allowfullscreen>
					</iframe>
				</div>
				<div class="stream_box">
					<iframe width="340" height="200" src="https://www.youtube.com/embed/dHhKIs1LXJ0&autoplay=1" frameborder="0" allowfullscreen>
					</iframe>
				</div>
				<div class="stream_box">
					<iframe width="340" height="200" src="https://www.youtube.com/embed/dHhKIs1LXJ0&autoplay=1" frameborder="0" allowfullscreen>
					</iframe>
				</div>
				<div class="clear"></div>
				<h3>НОВОСТИ</h3>
				<?php
					$news -> show_main_new($pdo);
					?>
				<br><br>
			</div>