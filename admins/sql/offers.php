<?php
	if(isset($_POST)&&isset($_POST['add'])){

	$addOffer = "INSERT INTO offers (
		category_offer, type_offer,
		titre_offer, description_offer,
		code_postal, length_offer,
		addresse_offer, pseudo_offer,
		email_offer, phone_offer,
		hide_phone, offer_diplome,
		date_ajout
		) VALUES ( 
		".$_POST['category_offer'].", ".$_POST['type_offer'].",
		'".$_POST['titre_offer']."', '".$_POST['description_offer']."',
		".$_POST['code_postal'].", ".$_POST['length_offer'].",
		'".$_POST['addresse_offer']."',
		'".$_POST['pseudo_offer']."', '".$_POST['email_offer']."',
		".$_POST['phone_offer'].", '".$_POST['hide_phone']."',
		'".$_POST['offer_diplome']."',NOW())";
	if (mysqli_query($conn, $addOffer)) {
		$_POST = null;
	} else {
	    echo "Error: " . $addOffer . "<br>" . mysqli_error($conn);
	}
	} 

	?>
		<table class='w3-small w3-table w3-striped w3-centered w3-border w3-table-responsive'>
		<thead class='w3-light-green'><tr>
		<td>id</td>
		<td>catégorie</td>
		<td>type</td>
		<td>titre</td>
		<td>description</td>
		<td>code postal</td>
		<td>duree</td>
		<td>adresse</td>
		<td>pseudo</td>
		<td>email</td>
		<td>téléphonne</td>
		<td>masquer num</td>
		<td>diplome</td>
		<td>inscription</td>
		<td>supprimer</td>
		<td></td>
		</tr></thead>
				<tr class="w3-hide w3-animate-left"id="useraddForm">
		<form action="offers.php"method="post">
		<td><i class="fa fa-times fa-lg w3-text-red" aria-hidden="true"></i></td>
		<td><input type="text"name="category_offer"></td><td><input type="text"name="type_offer"></td>
		<td><input type="text"name="titre_offer"></td><td><input type="text"name="description_offer"></td>
		<td><input type="text"name="code_postal"></td><td><input type="text"name="length_offer"></td>
		<td><input type="text"name="addresse_offer"></td><td><input type="text"name="pseudo_offer"></td>
		<td><input type="text"name="email_offer"></td><td><input type="text"name="phone_offer"></td>
		<td><input type="text"name="hide_phone"></td><td><input type="text"name="offer_diplome"></td>
		<td><input type="text"name="date_ajout"></td>
		<td>NULL</td>
		<td><input class="w3-btn w3-green"type="submit"name="add"></td>
		</form></tr>
		<?php
	$countOffers = 0;
	$sql = "SELECT * FROM offers as OFFERS
	JOIN category_offers as catO ON OFFERS.category_offer = catO.id_category_offer
	JOIN category_time as catT ON OFFERS.length_offer = catT.category_time_name
	";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
 
    while($row = mysqli_fetch_assoc($result)) {
        echo "<form action='../sql/offers.php'method='POST'>
		<tr>
		<td>" . $row["id_offer"]."</td><input type='hidden'name='id_offer'value='" . $row["id_offer"]."'></td>
		<td>" . $row["category_name"]."</td><input type='hidden'name='category_offer'value='" . $row["category_offer"]."'></td>
		<td>" . $row["type_offer"]."</td><input type='hidden'name='type_offer'value='" . $row["type_offer"]."'></td>
		<td>" . $row["titre_offer"]."</td><input type='hidden'name='titre_offer'value='" . $row["titre_offer"]."'></td>
		<td>" . $row["description_offer"]."</td><input type='hidden'name='description_offer'value='" . $row["description_offer"]."'></td>
		<td>" . $row["code_postal"]."</td><input type='hidden'name='code_postal'value='" . $row["code_postal"]."'></td>
		<td>" . $row["category_time_name"]."</td><input type='hidden'name='length_offer'value='" . $row["length_offer"]."'></td>
		<td>" . $row["addresse_offer"]."</td><input type='hidden'name='addresse_offer'value='" . $row["addresse_offer"]."'></td>
		<td>" . $row["pseudo_offer"]."</td><input type='hidden'name='pseudo_offer'value='" . $row["pseudo_offer"]."'></td>
		<td>" . $row["email_offer"]."</td><input type='hidden'name='email_offer'value='" . $row["email_offer"]."'></td>
		<td>" . $row["phone_offer"]."</td><input type='hidden'name='phone_offer'value='" . $row["phone_offer"]."'></td>
		<td>" . $row["hide_phone"]."</td><input type='hidden'name='hide_phone'value='" . $row["hide_phone"]."'></td>
		<td>" . $row["offer_diplome"]."</td><input type='hidden'name='offer_diplome'value='" . $row["offer_diplome"]."'></td>
		<td>" . $row["date_ajout"]."</td><input type='hidden'name='date_ajout'value='" . $row["date_ajout"]."'></td>
		<td><a href='javascript:void(0)'onclick='deleteOffer(" . $row["id_offer"].")'><i  class='fa fa-trash' aria-hidden='true'></i></a></td>
		</tr></form>";
		$countOffers++;
	
	}
	} 
	mysqli_close($conn);
	echo "</table>";
	echo "<p>Il y a ".$countOffers." offres</p>";
	?>
	<input id='add'type='submit'name='add'value='ajouter'class="w3-btn w3-white w3-border">
	<div class="w3-panel"id="result"><!-- RESULTAT AJAX --></div>
<script type="text/javascript">

	
	function hide(elem){
		
		$(elem).parent().addClass('w3-hide');
		}
	
	function deleteOffer(offer_id){
		
			var data = 'id_offer='+offer_id;
				$.ajax({
				type : "GET",
				url : "../sql/remove_offer.php",
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
