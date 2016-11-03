<?php
		$conn = mysqli_connect('localhost','admin','admin','aldn2');
		
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}

		if(isset($_POST) && isset($_POST['move'])){
		$id = (!empty($_POST['id_tmp_offer'])) ? $_POST['id_tmp_offer'] : '';
		$category_offer = (!empty($_POST['tmp_category_offer'])) ? (int) $_POST['tmp_category_offer'] : '';
		$type_offer = (!empty($_POST['tmp_offer_type'])) ? (int) 1 : '';
		$type_offer_type_offer = (!empty($_POST['tmp_offer_type_offer'])) ? $_POST['tmp_offer_type_offer'] : '';
		$titre_offer = (!empty($_POST['tmp_titre_offer'])) ? $_POST['tmp_titre_offer'] : '';
		$description_offer = (!empty($_POST['tmp_description_offer'])) ? $_POST['tmp_description_offer'] : '';
		$code_postal = (!empty($_POST['tmp_code_postal'])) ? (int) $_POST['tmp_code_postal'] : '';
		$length_offer = (!empty($_POST['tmp_duree'])) ? (int) $_POST['tmp_duree'] : '';
		$addresse_offer = (!empty($_POST['tmp_offer_addresse'])) ? $_POST['tmp_offer_addresse'] : '';
		$pseudo_offer = (!empty($_POST['tmp_offer_pseudo'])) ? $_POST['tmp_offer_pseudo'] : '';
		$email_offer = (!empty($_POST['tmp_offer_email'])) ? $_POST['tmp_offer_email'] : '';
		$phone_offer = (!empty($_POST['tmp_offer_phone'])) ? (int) $_POST['tmp_offer_phone'] : '';
		$hide_phone = (!empty($_POST['tmp_offer_hide_phone'])) ? $_POST['tmp_offer_hide_phone'] : '';
		$date_ajout = (!empty($_POST['date_ajout'])) ? $_POST['date_ajout'] : '';
		$offer_diplome = (!empty($_POST['tmp_offer_diplome'])) ? $_POST['tmp_offer_diplome'] : '';
		
		$sql = "DELETE FROM temporary_offers WHERE id_tmp_offer = $id";
		
		if (mysqli_query($conn, $sql)) {
		$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Offre temporaire supprimée<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;		
		} else {
		$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Erreur lors de la suppression de l\'offre temporaire<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;	
		}
		
		$addOffer = "INSERT INTO offers (
		 category_offer,  type_offer,  titre_offer, 
		 description_offer,
		 code_postal,  length_offer,  addresse_offer,  pseudo_offer,
		 email_offer,  phone_offer,  hide_phone,
		offer_diplome,  date_ajout
		) VALUES ( ".$category_offer.", ".$type_offer.",
		'".$titre_offer."','".$description_offer."',
		".$code_postal.",".$length_offer.",
		'".$addresse_offer."', '".$pseudo_offer."',
		'".$email_offer."','".$phone_offer."','".$hide_phone."',
		'".$offer_diplome."',NOW())";
		
	if (mysqli_query($conn, $addOffer)) {

		echo "ajouté à offres";
		header("Location:../pages/offers_tmp.php?rem=ok");

		} else {
		echo "pas ajouté";    
		echo "Error: " . $addOffer . "<br>" . mysqli_error($conn);

	}		

		}


		mysqli_close($conn);
?>