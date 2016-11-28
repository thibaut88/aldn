<?php

	$bdd = $GLOBALS['conn'];
	if (!$bdd){
		die("Connection false: " . mysqli_connect_error());
	}
	
	//LES DROITS AU DEPART :
	$is_admin = (int) 0;
	$is_active_mail = (int) 0;
	$is_gold = (int) 0;


	//SQL AJOUTER UN UTILISATEUR
	$adduser = "INSERT INTO `users` (
	`name`, `firstname`, `pseudo`,
	`password`, `email`,
	`addresse`, `phone`, `is_admin`, 
	`is_active_mail`, `is_gold`, 
	`ville`, `code_postal`,`path_avatar`,
	`date_inscription`
	) VALUES (
	'$user_lastname', '$user_firstname','$user_pseudo', MD5('$user_pass'),
	'$user_email','$user_addresse','$user_phone', $is_admin,
	$is_active_mail, $is_gold,'$user_city', '$user_cp','$path_avatar',NOW())";
	
	//SEND QUERY
	if(mysqli_query($bdd, $adduser)){
		$location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Users/AddUserIsOk';
		header("Location:$location");
	} else {
		echo mysqli_error($bdd);
		$location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Users/AddUserIsFalse';
		header("Location:$location");
	}
