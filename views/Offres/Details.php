
<?php
$categoryOffer=$inputtype;
$timeOffer=$inputtimes;
foreach($inputtimes as $key=>$value){
	if($value['id_category_time']==$offer['length_offer']){
		$timeOffer=$value['category_time_name'];
	}
}
foreach($inputtype as $key=>$value){
	if($value['id_category_offer']==$offer['category_offer']){
		$categoryOffer=$value['category_name'];
	}
}


?>
<!-- FIL D'ARIANE -->
<h1 class="w3-border-bottom w3-border-black w3-animate-right w3-allerta w3-padding-bottom w3-border-bottom w3-margin-bottom"
style="font-size:25px;max-width:1060px;margin:auto;margin-top:50px!important;"><b>Offres </b><small> / Offre n°<?= $offer['id_offer'];?> </small></h1>


<div style="max-width:1060px;margin:auto;margin-bottom:100px;">
<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres'; ?>"title="retour"
class="animate fadeInLeft animated">
<button type="submit"class="w3-large w3-btn w3-green"name="backpage">Retour</button></a>



<div class="w3-container"style="margin-bottom:50px;margin-top:50px!important;">
<div class="w3-row w3-allerta">
<div class="w3-card-2 w3-col s12 m8  l8 w3-white">

<div class="w3-border w3-padding-left w3-padding-right">
<h1 class="w3-xlarge  w3-text-shadow w3-center "><?= $offer['titre_offer']?></h1>
<img src="http://ultraimg.com/images/2016/07/29/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg"
width="80%"height="280px"class="w3-show-block"style="background:white!important;margin:auto!important;">
<p><b>Mise en ligne :</b> <?= $offer['date_ajout']?></p> 
<p><b>Par : </b> <?= $offer['pseudo_offer']?></p>
</div>

<div class="w3-border w3-padding-left w3-padding-right">
	<div class="">
	<p>Durée de l'offre :</b> <?= $offer['length_offer']?></p>
	<p><?= "<b>Localisation</b> : ". $offer['code_postal'];?></p>
	<p><?= ($offer['hide_phone']!=="on")?"<b>contact</b> : ".$offer['offer_phone']."<br>":"";?></p>
	<p><?= "<b>Type de demande : </b>".$offer['type_offer'];?></p>
	<p><?= "<b>Catégorie</b> : $categoryOffer"?></p>
	<p><?= "<b>Durée de l'offre</b> : $timeOffer"?></p>
	</div>
</div>

<div class="w3-border w3-padding-left w3-padding-right">
<h2 class="w3-large 3-allerta w3-text-shadow"><u>Description :</u></h2>
<p>
<?= $offer['description_offer']?>
</p>
</div>
</div>

<div class="w3-col s12 m4 l4 w3-allerta">
<div class="w3-border w3-padding-left w3-white">
<p class="w3-padding-left w3-large">Destinataire :<b><?=$offer['pseudo_offer'];?></b></p>
</div>

<div class="w3-margin-0 w3-border w3-margin-bottom">
<button style="line-height:45px!important;"class="w3-btn w3-large w3-btn-block w3-white w3-hover-light-green" type="submit"name="send">
<i class="fa fa-envelope" aria-hidden="true"></i>   envoyer un mail</button>
<?php if(isset($_SESSION['logged_user_id'])&&isset($_SESSION['pseudo'])){ ?>
<a href="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/deleteOffer.php?idOffer='.$offer['id_offer']?>">
<button  style="line-height:45px!important;"class="w3-btn w3-large w3-btn-block w3-white w3-hover-red" type="submit"name="send">
<i class="fa fa-trash" aria-hidden="true"></i>  supprimer l'annonce</button></a>
<button  style="line-height:45px!important;"class="w3-btn w3-large w3-btn-block w3-white w3-hover-light-green " type="submit"name="send">
<i class="fa fa-phone" aria-hidden="true"></i>  Voir le numéro</button></a>
<?php
}
 ?>
</div>
</div><!-- COL RIGHT-->
</div>
</div>