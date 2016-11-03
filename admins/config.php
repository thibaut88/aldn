<?php
	//pour le header
	define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));  //www/PROJETS EXTERNES/ALDN3/
	define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME'])); //C:Chemin_absolu/ALDN3/
	
	$servername = "localhost";
	$username = "admin";
	$password = "admin";
	$dbname = "aldn2";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>