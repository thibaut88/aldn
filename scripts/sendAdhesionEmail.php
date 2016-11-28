<?php
		
		if(isset($_POST)&&!empty($_POST['sendAdhesion']) && $_POST['acceptTerms']=="on"){
			
			require'../database.php';
			
			$lastname = (isset($_POST['lastname']) && !empty($_POST['lastname']))?(string)$_POST['lastname']:"";
			$firstname = (isset($_POST['fistname']) && !empty($_POST['fistname']))?(string)$_POST['fistname']:"";
			$email = (isset($_POST['email']) && !empty($_POST['email']))?(string)$_POST['email']:"";
			$pseudo = (isset($_POST['pseudo']) && !empty($_POST['pseudo']))?(string)$_POST['pseudo']:"";
			$password = (isset($_POST['pass']) && !empty($_POST['pass']))?(string)$_POST['pass']:"";
			$c_password = (isset($_POST['cpass']) && !empty($_POST['cpass']))?(string)$_POST['cpass']:"";
			$addresse = (isset($_POST['addresse']) && !empty($_POST['addresse']))?(string)$_POST['addresse']:"";
			$postal_code = (isset($_POST['postal_code']) && !empty($_POST['postal_code']))?(int)$_POST['postal_code']:"";
			$city = (isset($_POST['city']) && !empty($_POST['city']))?(string)$_POST['city']:"";
			$phone = (isset($_POST['phone']) && !empty($_POST['phone']))?(string)$_POST['phone']:"";
			$membre = (isset($_POST['membre']) && !empty($_POST['membre']))?(int)$_POST['membre']:"";
			$acceptTerms = (isset($_POST['acceptTerms']) && !empty($_POST['acceptTerms']))?(string)$_POST['acceptTerms']:"";
			
			$is_admin = (int) 0;
			$is_active_mail = (int) 0;
		
			$nomavatar="";
				if(!empty($_FILES) || isset($_FILES['avatar'])){
					$location=str_replace('sendAdhesionEmail.php','',$_SERVER['SCRIPT_NAME']).'move_avatar.php';
					include $location;
				}
				
			if($password == $c_password){

				$sql = "INSERT INTO `users` (
				`name`, `firstname`, `pseudo`,
				`password`, `email`,
				`addresse`, `phone`, `is_admin`, 
				`is_active_mail`, `is_gold`, 
				`ville`, `code_postal`,`path_avatar`,
				`date_inscription`
				) VALUES (
				'$firstname', '$firstname','$pseudo', MD5('$password'),
				'$email','$addresse','$phone', $is_admin,
				$is_active_mail, $membre,'$city', '$postal_code','$nom_avtar',NOW())";
					

				if(mysqli_query($conn, $sql)){
							$location = "../Association/Candidater/isOk";
							header("Location:$location");
				}else{
							$location = "../Association/Candidater/isNo";
							header("Location:$location");
				}
				
			}
					
			}else{
				$location="../Association/Candidater/isNo";
				header("Location:$location");
			}		
			
	
		
