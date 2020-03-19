<div class="main_box_lz1">
<?php
$banlist = new Ban;

?>
				<div class="nes_box1">
					<h3 id="message1">БАН ЛИСТ </h3>
          <table class="table_banlist_main">
            <tr class="bannlist_leibl_tab">
              <td>Ник</td>
              <td>Причина</td>
              <td>Забанил</td>
              <td>Дата бана</td>
              <td>Дата разбана</td>
            </tr>
            <?php
            $banlist ->banlist($pdo);


            ?>

          </table>

				
				</div>
				
				<br><br>
			</div>