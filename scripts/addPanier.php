<?php
	session_start();
	
		//UTILISE LES SESSIONS POUR FONCTIONNER

	if(isset($_SESSION['Auth']['logged'])){
		if(isset($_SESSION['Auth']['id'])&&isset($_SESSION['Auth']['pseudo'])){
			
			
			$_SESSION['panier']['tobuy']['id_article'][] = (int) $_GET['tobuy'];
			$_SESSION['panier']['user'] = $_SESSION['Auth']['logged_user_id'];
			$_SESSION['panier']['pseudo'] = $_SESSION['Auth']['pseudo'];
			
			
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