<?php
	if (isset($_POST) && !empty($_POST['register'])){
		$securise = new Securise();
		//PASS
		if(!empty($_POST['pass'])){
			$user_pass = (string) $_POST['pass'];
			$user_pass = $securise->securiseForm($user_pass);
		}
		//C_PASS
		if(!empty($_POST['cpass'])){
			$user_cpass = (string) $_POST['cpass'];
			$user_cpass =  $securise->securiseForm($user_cpass);
		}
		//VARS
		if(!empty($_POST['pseudo'])){$user_pseudo = (string) $_POST['pseudo'];}
		if(!empty($_POST['lastname'])){$user_lastname = (string) ucfirst($_POST['lastname']);}
		$user_lastname = htmlspecialchars($user_lastname);
		if(!empty($_POST['firstname'])){$user_firstname = (string) ucfirst($_POST['firstname']);}
		$user_firstname = htmlspecialchars($user_firstname);
		if(!empty($_POST['addresse'])){$user_addresse = (string) $_POST['addresse'];}
		$user_addresse = htmlspecialchars($user_addresse);
		if(!empty($_POST['city'])){$user_city =(string)  ucfirst($_POST['city']);}
		$user_city = htmlspecialchars($user_city);
		if(!empty($_POST['postal_code'])){$user_cp = (int) $_POST['postal_code'];}
		$user_cp = htmlspecialchars($user_cp);
		if(!empty($_POST['email'])){$user_email = (string) $_POST['email'];}
		$user_email = htmlspecialchars($user_email);
		if(!empty($_POST['phone'])){$user_phone = (string) $_POST['phone'];}else{$user_phone="";}
		$user_phone = htmlspecialchars($user_phone);
			
		$path_avatar="";
		if(!empty($_FILES['avatar']) &&  isset($_FILES['avatar'])){
			$to_path= 'ressources/images/profils/avatars/';
			require 'class/upload_avatar.php'; 	
			$up= new Upload();
			$path_avatar=$up->upload_image($_FILES['avatar'],$to_path);
		}else{
			$path_avatar="";
		}				
		// Add user in bdd 
		include('models/addUser.php'); 	
					
	} //Fin du contrôle du post	
	
	require 'views/elements/header.php';
	require 'views/Users/Inscription.php';
	require 'views/elements/footer.php';	
