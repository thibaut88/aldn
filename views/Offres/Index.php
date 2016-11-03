
	<!-- CONTENEUR DE LA LISTE DES OFFRES -->
<div id="content_offres"class="container  ">
<h1 class=" "style="font-size:25px">
<b>Offres <?php echo "Lorraine" ?></b></h1>


	<?php 
	//Alerte pas de résultat
	$displayNoResult=$this->Errors;
	// var_dump($displayNoResult);
	if ($displayNoResult){ ?>
	<!-- ALERTE IL N'Y A PAS D'OFFRES -->
	<div ><p>Aucune offre ne correspond à vos recherches</span>
	<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
	</p></div>
	<?php 
	}	
	?>
	<div class="container  animated fadeIn" style="word-wrap:break-word;">
	<div class="row background-white">
	
	<?php
	//LES OFFRES
	$datas=$this->datas;
	
	foreach($datas as $key=>$value){  
	//ON VERIFIE LE TYPE ET LA DUREE DE L'OFFRE POUR AJOUTER DES CLASSES SERVANT AU TRI
	foreach($inputtimes as $cle=>$valeur){
		if($valeur['id_category_time']==$value['length_offer']){
			$dureeOffre= $valeur['category_time_name'];
		}
	}
	foreach($inputtype as $cl=>$val){
		if($val['id_category_offer']==$value['category_offer']){
			$categoryOffer= $val['category_name'];
		}
	}	
	?>

	<div class="col-xs-6 ">
	<div class="col-xs-12 ">
	<img class="" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQmb9wM9ZzGTWjWatG_efBfrVHNCQV5WDnl8T6udMQ6lrteU2G-"
	style="max-width:150px!important;max-height:150px!important;">
	</div>
	
	<div class="col-xs-12 "style="max-height:150px">
	<h2 class=""><b><?=$value['titre_offer'];?></b></h2>
	<p><?= "<b>catégorie</b> : $categoryOffer"?><br>
	<?= "<b>durée</b> : $dureeOffre"?><br>
	<b>type de demande : </b><?=($value['type_offer']==1)?"demande d'emploi":"depot d'offre"?><br>
	<?= ($value['hide_phone']!=="on")?"<b>contact</b> : ".$value['phone_offer']."<br>":"";?>
	<?= "<b>Localisation</b> : "; ?><?= $value['code_postal'];?><br>
	<?= "<b>Date d'ajout</b> : ". $value['date_ajout']?></p>
	<span class=""></span>
	</div>
	<div class="w3-col s12 ">
	<a class=" "
	href="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres/Details/'.$value['id_offer']?>"
	style="min-height:50px;line-height:50px;"title="details offre">Details </a>
	<p><a href=''alt='postuler'title='postuler'>Déposer une candidature</a></p>
	</div>
	</div>

	<?php  }  ?>
		</div><!-- ROW -->
	</div><!-- ARTICLE ROW -->
</div><!--FIN CONTENT -->






<div>

<?php


		//PAGINATION 

// $per_page=5;

// $page = (isset($GLOBALS['parametre'])) ? $_GET['parametre']:1;

// var_dump($GLOBALS['param']);
// var_dump($GLOBALS['parametre']);

// la page commence à 0 et on multiplie par le nombre de pages
// $start_from = ($page-1)*$per_page;

// $query = "SELECT * FROM table LIMIT $start_from, $per_page";

// $total_pages = ceil($total_records/$per_page);

// echo "<center><a href='./Offres/'>premiere page</a>";


// for ($i=0;$i<$total_pages;$i++){
// echo "<a href='./Offres/".$i."'>".$i."</a> ";
	
// }
// echo "<a href='./Offres/".$total_pages."'>Last Page</a></center>";

?>

</div>








?>




<!-- PAGINATION -->
<div class="w3-container w3-center">
  <ul class="w3-pagination w3-border w3-round w3-white">
    <li><a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres/5';?>">&#10094; Précédents</a></li>
  </ul>
   <ul class="w3-pagination w3-border w3-round w3-white">
    <li><a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres/5';?>">Prochains &#10095;</a></li>
  </ul>
</div>












