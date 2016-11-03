<?php

		$conn = mysqli_connect('localhost','admin','admin','aldn2');
		
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		if(isset($_GET['idUser'])){
		$id = $_GET['idUser'];
		$sql = "DELETE FROM users WHERE id_user= $id";
		if (mysqli_query($conn, $sql)) {
			$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Utilisateur supprimé<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;
		} else {
		$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Erreur lors de la suppression de l\'utilisateur<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;
		}

		}

		mysqli_close($conn);
?>