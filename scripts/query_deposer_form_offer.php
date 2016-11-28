<?php
// DEPOSER UNE OFFRE


$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "aldn";

// Create connection
$bdd = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$bdd) {
    die("Connection failed: " . mysqli_connect_error());
}

$categorie=null;$type_user=null;$type_offer=null;$titre_annonce=null;$texte_annonce=null;
$categorie_time =null;$code_postal=null;$addresse=null;$user_pseudo=null;
$user_phone=null;$accept_terms=null;$hide_phone=null;$user_email=null;
$image1=null;
$en_ligne=(int)0;

if (isset($_FILES['image1'])){
	require '../class/upload_avatar.php';
	$up = new Upload();
	$image1= $up->upload_image($_FILES['image1'],$_POST['titre_annonce'],'ressources/annonces/');

}else{
	$image1="";
}


if (!empty($_POST['deposer']) && isset($_POST)){




if(!empty($_POST['categorie'])){
$categorie = (int) $_POST['categorie'];
}
 if(!empty($_POST['type_user'])){
$user_type = $_POST['type_user'];
}
 if(!empty($_POST['type_offer'])){
$annonce_type = $_POST['type_offer'];
}
 if(!empty($_POST['diplome'])){
	 if($_POST['diplome']=='on'){
		 $diplome=(int)1;
	 }else{
		 $diplome=(int)0;
	 }
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
	 if($_POST['hide_phone']=='on'){
		 $hide_phone=(int)1;
	 }else{
		 $hide_phone=(int)0;
	 }
}	
}


$add_tmp_offer = "INSERT INTO `offers` (
`category_offer`,`user_type`, `annonce_type`,
 `titre_offer`, `description_offer`,
 `ville`,`code_postal`,`length_offer`,`addresse_offer`,
 `pseudo_offer`, `email_offer`,
 `phone_offer`, `hide_phone`,
 `offer_diplome`, `en_ligne`,
 `image1`,`date_ajout`
	) VALUES (
  $categorie , '$user_type' ,  '$annonce_type' ,
  '$titre_annonce' ,  '$texte_annonce' , '$ville' ,
  '$code_postal' , $categorie_time , '$addresse' ,
  '$user_pseudo' ,  '$user_email' ,
  '$user_phone' ,   $hide_phone ,
   $diplome ,  $en_ligne ,
  '$image1' ,NOW() )";

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
