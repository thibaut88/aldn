<?php


// DEPOSER UNE OFFRE

//categorie , type_user , type_offer , titre_annonce , texte_annonce , categorie_time , code_postal , addresse , 
//user_pseudo , user_email , user_phone , hide_phone , accept_terms , envoyer
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "aldn2";

// Create connection
$bdd = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$bdd) {
    die("Connection failed: " . mysqli_connect_error());
}

$categorie=null;$type_user=null;$type_offer=null;$titre_annonce=null;$texte_annonce=null;
$categorie_time =null;$code_postal=null;$addresse=null;$user_pseudo=null;
$user_phone=null;$accept_terms=null;$hide_phone=null;$user_email=null;
?>


<?php

if (!empty($_POST['deposer']) && isset($_POST)){
	

if(!empty($_POST['categorie'])){
$categorie = (int) $_POST['categorie'];
}
 if(!empty($_POST['type_user'])){
$type_user = $_POST['type_user'];
}
 if(!empty($_POST['type_offer'])){
$type_offer = $_POST['type_offer'];
}
 if(!empty($_POST['titre_annonce'])){
$titre_annonce =(string)  $_POST['titre_annonce'];
}
 if(!empty($_POST['texte_annonce'])){
$texte_annonce = (string) $_POST['texte_annonce'];
}
 if(!empty($_POST['categorie_time'])){
 $categorie_time = (int) $_POST['categorie_time'];
}
 if(!empty($_POST['code_postal'])){
$code_postal = (int) $_POST['code_postal'];
}
 if(!empty($_POST['ville'])){
$ville = (string) $_POST['ville'];
}
 if(!empty($_POST['addresse'])){
$addresse = (string) $_POST['addresse'];
}
 if(!empty($_POST['user_pseudo'])){
$user_pseudo =(string)  $_POST['user_pseudo'];
}
 if(!empty($_POST['user_email'])){
$user_email = (string) $_POST['user_email'];
}
 if(!empty($_POST['user_phone'])){
$user_phone = (string) $_POST['user_phone'];
}
 if(!empty($_POST['accept_terms'])){
$accept_terms = $_POST['accept_terms'];
}
 if(!empty($_POST['hide_phone'])){
$hide_phone = $_POST['hide_phone'];
}	

}


$add_tmp_offer = "INSERT INTO `temporary_offers` (
`tmp_category_offer`, `tmp_offer_type`,
 `tmp_offer_type_offer`, `tmp_titre_offer`,
 `tmp_description_offer`,`tmp_code_postal`,`tmp_ville`,
 `tmp_duree`, `tmp_offer_addresse`,
 `tmp_offer_pseudo`, `tmp_offer_email`,
 `tmp_offer_phone`, `tmp_offer_hide_phone`,`date_ajout`
	) VALUES (
	'".$categorie."','".$type_user."',
	'".$type_offer."','".$titre_annonce."',
	'".$texte_annonce."',".$code_postal.",'".$ville."',
	'".$categorie_time."','".$addresse."',
	'".$user_pseudo."','".$user_email."',
	'".$user_phone."','".$hide_phone."',NOW()
	)";

if (mysqli_query($bdd, $add_tmp_offer)) {
    echo "New record created successfully";
	$redirect = "../Offres/Deposer/AddOfferIsOk";
	header("Location: $redirect");

} else {
    echo "Error: " . $add_tmp_offer . "<br>" . mysqli_error($bdd);
	$redirect = "../Offres/Deposer/addOfferIsFalse";
	header("Location: $redirect");
}

mysqli_close($bdd);

?>
