<?php
	//MODEL AJOUTER UTILISATEUR 
	//TABLE "users"

	$bdd = $GLOBALS['conn'];
	if (!$bdd){
		die("Connection false: " . mysqli_connect_error());
	}
	
	//LES DROITS AU DEPART :
	$is_admin = (int) 0;
	$is_active_mail = (int) 0;
	$is_gold = (int) 0;
	$path_avatar =(isset($GLOBALS['path_avatar']))?$GLOBALS['path_avatar']:"";
	//SQL AJOUTER UN UTILISATEUR
	$adduser = "INSERT INTO `users` (
	`name`, `firstname`, `pseudo`,
	`password`, `c_password`, `adresse_mail`,
	`adresse`, `phone`, `is_admin`, 
	`is_active_mail`, `is_gold`, 
	`ville`, `code_postal`,`date_inscription`,
	`path_avatar`
	) VALUES (
	'".$user_lastname."','".$user_firstname."',
	'".$user_pseudo."','".$user_pass."',
	'".$user_cpass."','".$user_email."'
	,'".$user_addresse."','".$user_phone."',
	".$is_admin.",".$is_active_mail.",".$is_gold.",
	'".$user_city."',".$user_cp.",
	NOW(),'".$path_avatar."')";
	
	//SEND QUERY
	if(mysqli_query($bdd, $adduser)){
		//REDIRECTION
		$Location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Users/AddUserIsOk';
		header("Location:$Location");
	} else {
		//REDIRECTION
		$location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Users/AddUserIsFalse';
		header("Location:$location");
	}

?>