<?php
	session_start();
	
		//UTILISE LES SESSIONS POUR FONCTIONNER

	if(isset($_SESSION['logged'])){
		if(isset($_SESSION['logged_user_id'])&&isset($_SESSION['pseudo'])){
			
			
			$_SESSION['panier']['tobuy']['id_article'][] = (int) $_GET['tobuy'];
			$_SESSION['panier']['user'] = $_SESSION['logged_user_id'];
			$_SESSION['panier']['pseudo'] = $_SESSION['pseudo'];
			
			
			$redirect = "../Articles/AddPanierOk";
			header("Location:$redirect");
		
		}
		
	}else{
			$redirect = "../Articles/ShouldConnect";
			header("Location:$redirect");
		
	}
	// var_dump($_SESSION);
	// var_dump($_SESSION['panier']);
?>