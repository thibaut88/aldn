<?php 
	//Constantes de connexion � la base de donn�e
	define('DBNAME','aldn2');
	define('DBUSER','root');
	define('DBPASS','root');
	define('HOST','localhost');

	//Connect Database
	$conn = mysqli_connect(HOST,DBUSER,DBPASS,DBNAME);
	//Test la connexion
	if (!$conn) {   die("Connection failed: " . mysqli_connect_error()); 	}
	//Caract�res sp�ciaux
	if (!$conn->set_charset("utf8")) {
		printf("Erreur lors du chargement du jeu de caract�res utf8 : %s\n", $conn->error);
		exit();
	}