<?php

//Connect Database
	$conn = mysqli_connect('localhost','admin','admin','aldn');
	if (!$conn) {   die("Connection failed: " . mysqli_connect_error()); 	}
	//Caractères spéciaux
	if (!$conn->set_charset("utf8")) {
		printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $conn->error);
		exit();
	}