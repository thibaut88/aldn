
	<div class="row" style="margin:12px auto 12px auto;">
			<div class="text-center">
					<ul class="pagination">
					
							  <li><a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME'])?>Offres">&laquo;</a></li>
					<?php
						for ($i=1;$i<$this->last_page+1;$i++){  ?>
							<li 
							<?php  if($i==$this->current_page) {echo 'class="active"';} ?>
							>
									<a href="<?=WEBROOT?>Offres/<?=$i?>"><?=$i?></a>
							  </li>
					<?php	} ?>
							<li><a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME'])?>Offres/<?=$this->last_page?>">&raquo;</a></li>
							
					</ul>
			</div><!-- PAGINATION END -->
						
		</div><!-- ROW END PAGINATION -->