
<!-- NAVIGATION TOP BODY -->
<div id="searchnav"class="w3-container w3-card-4 w3-center w3-hide-small w3-margin-0 w3-margin-bottom  w3-padding-12 w3-white w3-border w3-border-lightgrey w3-card-4 "style="margin-top:50px!important;">

<h2 style="line-height:80px!important;"class="w3-text-white w3-allerta w3-teal w3-animate-top w3-margin-0 w3-margin-bottom">Rechercher une offre</h2>
<form action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres';?>"method="post"style="margin-left:20%!important;">
<div class="w3-hide-small w3-allerta">
<div class="w3-row-padding w3-threequarter w3-animate-left">
<!-- FORMULAIRE RECHERCHE PETITS ECRANS -->
<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="<?php if(isset($_POST['nom_offre'])){echo $_POST['nom_offre'];}else{echo "Nom";};?>" name="nom_offre">
<select class="w3-select w3-border w3-margin-bottom" name="categorie">
  <option value="0" disabled selected>catégorie</option>
  <?php
  foreach($inputtype as $key){
	  echo "<option value='".$key['id_category_offer']."'>".$key['category_name']."</option>";}
  ?>
</select> 
<select class="w3-select w3-border w3-margin-bottom" name="duree">
  <option value="default" disabled selected>durée </option>
    <?php
  foreach($inputtimes as $key){
	  echo "<option value='".$key['id_category_time']."'>".$key['category_time_name']."</option>";}
  ?>
</select> 

<div class="w3-center w3-margin-bottom">

<label for="typeformation">avec ou sans diplôme ?</label><br>
<input class="w3-radio" type="radio" name="diplome" value="avec" >
<label class="w3-validate">avec</label>

<input class="w3-radio" type="radio" name="diplome" value="sans">
<label class="w3-validate">sans</label>

<input class="w3-radio" type="radio" name="diplome" value="tous" >
<label class="w3-validate">tous</label>
</div>
<div class="w3-row">	

<input class="w3-col s6 w3-input w3-border w3-margin-bottom" type='text'name="ville" placeholder="ville">
<input class="w3-col s6 w3-input w3-border w3-margin-bottom"  type='number'name="code_postal" placeholder="code postal">
</div>

<div class="w3-row">	
<input class="w3-col s6 w3-input w3-border w3-margin-bottom"  type='date'name="date_d" placeholder="date debut">
<input class="w3-col s6 w3-input w3-border w3-margin-bottom"  type='date'name="date_f" placeholder="date fin">
</div>
<div class="w3-center">
<input class="w3-btn w3-large w3-xlarge w3-teal" type="submit" name="send"value="Rechercher">
</div>
</div>
</div>
</form>
</div>

<!-- HIDE LARGE/MEDIUM : Ouvrir le formulaire recherche que pour portable -->
<nav class=" w3-hide-large w3-black w3-hide-medium w3-navbar w3-large w3-white w3-left-align">
	<li class="w3-hide-medium w3-hide-large w3-white  w3-opennav w3-right">
	<a href="javascript:void(0);" onclick="searchsmall()"><i class="fa fa-search"></i></a>
	</li>
<li>
<a href="#"class="w3-hover-white w3-center">Rechercher une offre</a>
</li>

<!-- SHOW SMALL SCREEN : SEARBAR -->
<div id="search_small" class=" w3-hide w3-hide-large w3-hide-medium w3-allerta">
<form action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres';?>"method="post">

<div class="w3-row-padding w3-animate-top">
<!-- FORMULAIRE RECHERCHE PETITS ECRANS -->
<input class="w3-input w3-border w3-margin-bottom" type="text" 
placeholder="<?php if(isset($_POST['nom_offre'])){echo $_POST['nom_offre'];}
else{echo "Nom ou numéro";};?>"name="nom_offre">
<select class="w3-select w3-border w3-margin-bottom" name="categorie">
  <option value="default" disabled selected>catégorie de l'offre</option>
  <?php
  foreach($inputtype as $key){
	  echo "<option value='".$key['id_category_offer']."'>".$key['category_name']."</option>";}
  ?>
</select> 
<select class="w3-select w3-border w3-margin-bottom" name="duree">
  <option value="default" disabled selected>durée de l'offre</option>
    <?php
  foreach($inputtimes as $key){
	  echo "<option value='".$key['id_category_time']."'>".$key['category_time_name']."</option>";}
  ?>
</select> 

	<div class="w3-center w3-margin-bottom">

	<label for="typeformation">avec ou sans diplôme ?</label><br>

	<input class="w3-radio" type="radio" name="diplome" value="avec">
	<label class="w3-validate">avec</label>

	<input class="w3-radio" type="radio" name="diplome" value="sans">
	<label class="w3-validate">sans</label>

	<input class="w3-radio" type="radio" name="diplome" value="tous" >
	<label class="w3-validate">tous</label>
	</div>

<input class="w3-input w3-border w3-margin-bottom" type="text" name="ville"placeholder="ville">
<input class="w3-input w3-border w3-margin-bottom" type="number" name="code_postal"placeholder="code postal">

<div class="w3-row">	
<input class="w3-col s6 w3-input w3-border w3-margin-bottom" name="date_d"type="date" placeholder="date debut">
<input class="w3-col s6 w3-input w3-border w3-margin-bottom" name="date_f"type="date" placeholder="date fin">
</div>
<input class="w3-btn w3-btn-block w3-large w3-teal" type="submit" name="send"value="Rechercher">
</div>
</form>
</div>
</nav>

<script>

//Contenu des offres 
$(function(){
	var offres = $("#content_offres");
	offres.css('border','1px solid grey');
});
//RECHERCHE SMALL ECRAN
function searchsmall() {
    var x = document.getElementById("search_small");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>







