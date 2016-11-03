
	<div class=" container"style="">
		<div id="partenaires"class="row-padding">
		
		<?php
		$datas = $this->datas;

		foreach ($datas as $key=>$value){ ?>
		<div class="col-lg-2" >
		<p class=""><?=ucfirst($value['nom'])?></p>
		<img src="<?=$value['image']?>" width="50%"height="80%"title="image"alt="image">
		<p class=" "style="overflow:hidden"><?=$value['description']?></p>
		</div>

		<?php
		};
		?>

		</div><!--#id partenaires row -->
	</div><!--container -->


		<script>
		$(document).ready(function(){
			
			var $parts = $('.Partenaire');
			var $partsLen = $parts.length;
			$parts.each(function(){
				$(this).css('display','none');
			});

		var varCounter = 0;
		var showPartenaire = function(){
			 if(varCounter <= $partsLen) {
				 var $elem = $($parts[varCounter]);
				$elem.fadeIn('slow');
				  varCounter++;
			 } else {
				  clearInterval(showPartenaire);
			 }
		};

						 setInterval(showPartenaire, 230);

			




			
		});

		</script>