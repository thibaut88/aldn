<?php

//Connect Database
	$conn = mysqli_connect('localhost','admin','admin','aldn');
	if (!$conn) {   die("Connection failed: " . mysqli_connect_error()); 	}
	//Caract�res sp�ciaux
	if (!$conn->set_charset("utf8")) {
		printf("Erreur lors du chargement du jeu de caract�res utf8 : %s\n", $conn->error);
		exit();
	}