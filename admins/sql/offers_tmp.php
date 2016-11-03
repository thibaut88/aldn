
<?php
		//ADD OFFER TMP
	$displayAddOffer=false;

	if(isset($_POST)&&isset($_POST['add'])){
	if(!empty($_POST['tmp_category_offer'])){
		$_POST['tmp_category_offer'] = (int)$_POST['tmp_category_offer'];
	}	
	if(!empty($_POST['tmp_duree'])){
		$_POST['tmp_duree'] = (int)$_POST['tmp_duree'];
	}	
	if(!empty($_POST['tmp_code_postal'])){
		$_POST['tmp_code_postal'] = (int)$_POST['tmp_code_postal'];
	}		
	$addTmpOffer = "INSERT INTO temporary_offers (
		tmp_category_offer, tmp_offer_type, tmp_offer_type_offer, tmp_titre_offer, 
		tmp_description_offer,
		tmp_code_postal, tmp_duree, tmp_offer_addresse, tmp_offer_pseudo,
		tmp_offer_email, tmp_offer_phone, tmp_offer_hide_phone,
		date_ajout, tmp_offer_diplome
		) VALUES ( ".$_POST['tmp_category_offer'].", '".$_POST['tmp_offer_type']."',
		'".$_POST['tmp_offer_type_offer']."','".$_POST['tmp_titre_offer']."',
		'".$_POST['tmp_description_offer']."', ".$_POST['tmp_code_postal'].",
		".$_POST['tmp_duree'].",'".$_POST['tmp_offer_addresse']."','".$_POST['tmp_offer_pseudo']."',
		'".$_POST['tmp_offer_email']."','".$_POST['tmp_offer_phone']."',
		'".$_POST['tmp_offer_hide_phone']."',NOW(),'".$_POST['tmp_offer_diplome']."')";
	if (mysqli_query($conn, $addTmpOffer)) {
		$displayAddOffer = true;
	} else {
		$displayAddOffer = false;
	    echo "Error: " . $addTmpOffer . "<br>" . mysqli_error($conn);
	}


	} 

	?>
	
		<table class='w3-small w3-table w3-striped w3-centered w3-border w3-table-responsive'>
		<thead class='w3-light-green'><tr>
		<td>id</td>
		<td>catégorie</td>
		<td>type</td>
		<td>type demande</td>
		<td>titre</td>
		<td>description</td>
		<td>code postal</td>
		<td>duree</td>
		<td>adresse</td>
		<td>pseudo</td>
		<td>email</td>
		<td>téléphonne</td>
		<td>masquer num</td>
		<td>inscription</td>
		<td>diplome</td>
		<td>Valider</td>
		<td>supprimer</td>
		</tr></thead>
				<tr class="w3-hide w3-animate-left"id="useraddForm">
		<form action="offers_tmp.php"method="post">
		<td><i class="fa fa-times fa-lg w3-text-red" aria-hidden="true"></i></td>
		<td><input type="text"name="tmp_category_offer"></td><td><input type="text"name="tmp_offer_type"></td>
		<td><input type="text"name="tmp_offer_type_offer"></td><td><input type="text"name="tmp_titre_offer"></td>
		<td><input type="text"name="tmp_description_offer"></td><td><input type="text"name="tmp_code_postal"></td>
		<td><input type="text"name="tmp_duree"></td><td><input type="text"name="tmp_offer_addresse"></td>
		<td><input type="text"name="tmp_offer_pseudo"></td><td><input type="text"name="tmp_offer_email"></td>
		<td><input type="text"name="tmp_offer_phone"></td><td><input type="text"name="tmp_offer_hide_phone"></td>
		<td><input type="text"name="date_ajout"></td><td><input type="text"name="tmp_offer_diplome"></td>
		<td><input class="w3-btn w3-green"type="submit"name="add"value="ajouter"><td>NULL</td></td>
		</form>
		</tr>
		<?php
	$countOffers = 0;
	$sql = "SELECT * FROM temporary_offers as tmpO
	JOIN category_offers as catO ON tmpO.tmp_category_offer = catO.id_category_offer";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
 
    while($row = mysqli_fetch_assoc($result)) {
        echo "<form action='../sql/move_offer_tmp.php'method='POST'>
		<tr><td>" . $row["id_tmp_offer"]."</td><input type='hidden'name='id_tmp_offer'value='" . $row["id_tmp_offer"]."'>
		<td>". $row["tmp_category_offer"]."</td></td><input type='hidden'name='tmp_category_offer'value='" . $row["tmp_category_offer"]."'>
		<td>". $row["tmp_offer_type"]."</td></td><input type='hidden'name='tmp_offer_type'value='" . $row["tmp_offer_type"]."'>
		<td>". $row["tmp_offer_type_offer"]."</td></td><input type='hidden'name='tmp_offer_type_offer'value='" . $row["tmp_offer_type_offer"]."'>
		<td>". $row["tmp_titre_offer"]."</td></td><input type='hidden'name='tmp_titre_offer'value='" . $row["tmp_titre_offer"]."'>
		<td>". $row["tmp_description_offer"]."</td></td><input type='hidden'name='tmp_description_offer'value='" . $row["tmp_description_offer"]."'>
		<td>". $row["tmp_code_postal"]."</td></td><input type='hidden'name='tmp_code_postal'value='" . $row["tmp_code_postal"]."'>
		<td>". $row["tmp_duree"]."</td></td><input type='hidden'name='tmp_duree'value='" . $row["tmp_duree"]."'>
		<td>". $row["tmp_offer_addresse"]."</td></td><input type='hidden'name='tmp_offer_addresse'value='" . $row["tmp_offer_addresse"]."'>
		<td>". $row["tmp_offer_pseudo"]."</td></td><input type='hidden'name='tmp_offer_pseudo'value='" . $row["tmp_offer_pseudo"]."'>
		<td>". $row["tmp_offer_email"]."</td></td><input type='hidden'name='tmp_offer_email'value='" . $row["tmp_offer_email"]."'>
		<td>". $row["tmp_offer_phone"]."</td></td><input type='hidden'name='tmp_offer_phone'value='" . $row["tmp_offer_phone"]."'>
		<td>". $row["tmp_offer_hide_phone"]."</td></td><input type='hidden'name='tmp_offer_hide_phone'value='" . $row["tmp_offer_hide_phone"]."'>
		<td>". $row["date_ajout"]."</td></td><input type='hidden'name='date_ajout'value='" . $row["date_ajout"]."'>
		<td>". $row["tmp_offer_diplome"]."</td></td><input type='hidden'name='tmp_offer_diplome'value='" . $row["tmp_offer_diplome"]."'>
		<td><input class='w3-btn w3-green'type='submit'name='move'value='valider !'></td>
		<td><a href='javascript:void(0)'onclick='deleteOffer(".$row["id_tmp_offer"].")'>
		<i  class='fa fa-trash' aria-hidden='true'></i></a></td></tr></form>
		";
		$countOffers++;
	
	}
	} 
	mysqli_close($conn);
	echo "</table>";
	echo "<p>Il y a ".$countOffers." offres en attente de validation</p>";
	?>
	<input id='add'type='submit'name='add'value='ajouter'class="w3-btn w3-white w3-border">
	<div class="w3-panel"id="result"><!-- RESULTAT AJAX --></div>
<?php
	if($displayAddOffer){
		$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Offre temporaire ajoutée !<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;
	}
?>
	<script type="text/javascript">

	
	function hide(elem){
		
		$(elem).parent().addClass('w3-hide');
		}
	
	function deleteOffer(offer_tmp){
		
			var data = 'id_offer_tmp='+offer_tmp;
				$.ajax({
				type : "GET",
				url : "../sql/remove_offer_tmp.php",
				data : data,
				success : function(server_response){
					$("#result").html(server_response).show();
				}
				
			});
	};

	
	var $add = $('#add');

	$add.on('click', function(){
		$('#useraddForm').toggleClass('w3-hide');
		$('#useraddForm').css('width','100px');
		$('#td').css('width','100px');
			if($(this).attr('value')=="ajouter"){
				$(this).attr('value','annuler');
				
			}else{
				$(this).attr('value','ajouter');

			}
	});

	</script>
