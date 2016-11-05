<div class="container">

		<div id="partenaires"class="row-padding">
<!-- Portfolio -->
            <div id="portfolio" class="bottom-border-shadow">
                <div class="container bottom-border">
                    <div class="row padding-top-40">
                        <ul class="portfolio-group">

		<?php
		$datas = $this->datas;
		$i=0;
		$hr=3;
		foreach ($datas as $key=>$value){ $i++;
		?>

		
		                   <!-- Portfolio Item -->
                            <li class="portfolio-item col-xs-12 col-sm-3 col-xs-4 margin-bottom-40"style="min-width:200px!important;">
                                <a href="#" style="display:block;width:80%;margin:auto;">
                                    <figure class="animate fadeInLeft" >
                                        <img src="<?=$value['image']?>" width="100%"height="160px;"title="image"alt="image" >
                                        <figcaption>
                                            <h3><?=ucfirst($value['nom'])?></h3>
                                            <span style="overflow:hidden"><?=$value['description']?></span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
		
		<?php
		}
		?>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Portfolio -->
		</div><!--#id partenaires row -->

</div>




		<script type="text/javascript">
		
		
		// $(document).ready(function(){
			
			// var $parts = $('.Partenaire');
			// var $partsLen = $parts.length;
			// $parts.each(function(){
				// $(this).css('display','none');
			// });

		// var varCounter = 0;
		// var showPartenaire = function(){
			 // if(varCounter <= $partsLen) {
				 // var $elem = $($parts[varCounter]);
				// $elem.fadeIn('slow');
				  // varCounter++;
			 // } else {
				  // clearInterval(showPartenaire);
			 // }
		// };

						 // setInterval(showPartenaire, 230);

		// });

		</script>