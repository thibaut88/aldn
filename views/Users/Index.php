<?php
		// Alerte User Register
		if ($alertAddUser){
		?>
		<div class="container">
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Vous êtes bien enregistré !!</strong>
			</div>
		</div>
		<?php
		} 
		// Alerte User Register EROOR
		if ($alertErrorRegister){
		?>
		<div class="container">
			<div class="alert alert-warning">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Problème lors de l'enregistrement !!</strong>
			</div>
		</div>
		<?php
		} 
		 if(!$displayUserProfil){ 
		 // Alerte User NOT LOGGED
		?>
			<div class="container">
				<div class="alert alert-default">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Vous n'êtes pas connecté !!</strong>
				</div>
			</div>
		<?php
		} else { 
		?>
			<!-- AFFICHAGE DU PROFIL UTILISATEUR -->
			<div id="content-profil">
				<?php require "views/elements/content_profil.php"; ?>
			</div>
		<?php  } 
		?><!-- End Content Profil
		
		







