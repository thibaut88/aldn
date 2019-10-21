<?php 
	//Constantes de connexion à la base de donnée
	define('DBNAME','aldn2');
	define('DBUSER','root');
	define('DBPASS','root');
	define('HOST','localhost');

	//Connect Database
	$conn = mysqli_connect(HOST,DBUSER,DBPASS,DBNAME);
	//Test la connexion
	if (!$conn) {   die("Connection failed: " . mysqli_connect_error()); 	}
	//Caractères spéciaux
	if (!$conn->set_charset("utf8")) {
		printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $conn->error);
		exit();
	}