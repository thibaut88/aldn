<?php

		$conn = mysqli_connect('localhost','admin','admin','aldn2');
		
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		if(isset($_GET['id_offer'])){
		$id = $_GET['id_offer'];
		$sql = "DELETE FROM offers WHERE id_offer = $id";
		if (mysqli_query($conn, $sql)) {
			$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Offre supprimée !<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;
		} else {
		$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Erreur lors de la suppression de l\'offre !<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;
		}

		}

		mysqli_close($conn);
?>