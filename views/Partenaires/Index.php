
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
<div class="container">

<!-- Portfolio -->
            <div id="portfolio" class="bottom-border-shadow">
                <div class="container bottom-border">
                    <div class="row padding-top-40">
                        <ul class="portfolio-group">
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInLeft">
                                        <img alt="image1" src="/www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/site/assets/img/frontpage/image1.jpg">
                                        <figcaption>
                                            <h3>Velit esse molestie</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeIn">
                                        <img alt="image2" src="/www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/site/assets/img/frontpage/image2.jpg">
                                        <figcaption>
                                            <h3>Quam nunc putamus</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInRight">
                                        <img alt="image3" src="/www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/site/assets/img/frontpage/image3.jpg">
                                        <figcaption>
                                            <h3>Placerat facer possim</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInLeft">
                                        <img alt="image4" src="/www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/site/assets/img/frontpage/image4.jpg">
                                        <figcaption>
                                            <h3>Nam liber tempor</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeIn">
                                        <img alt="image5" src="/www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/site/assets/img/frontpage/image5.jpg">
                                        <figcaption>
                                            <h3>Donec non urna</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInRight">
                                        <img alt="image6" src="/www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/site/assets/img/frontpage/image6.jpg">
                                        <figcaption>
                                            <h3>Nullam consectetur</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Portfolio -->


</div>

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