<div class="main_box_lz1">

				<div class="nes_box1">
          <h3>Новости</h3>
					<?php
					$news = new News;
					$news -> show_all_new($pdo);
					?>

				
				</div>
				
				<br><br>
			</div>