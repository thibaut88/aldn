<?php
		//Si form add user posted
		if (!empty($_POST) && isset($_POST['sendLogin'])){
			$securise = new Securise();
			
			$_SESSION['Auth']['logged'] = false;
			
			//Get Inputs vals && securise
			$inputEmail = (isset($_POST['inputEmail']) && !empty($_POST['inputEmail']))?$_POST['inputEmail']:false;
			// $inputEmail = (string) htmlspecialchars($inputEmail);
			$inputEmail = (string) $securise->securiseForm($inputEmail);
			$inputPassword = (isset($_POST['inputPassword']) && !empty($_POST['inputPassword']))?$_POST['inputPassword']:false;
			// $inputPassword = (string) htmlspecialchars($inputPassword);
			$inputPassword = (string) $securise->securiseForm($inputPassword);
			
		//Récup conn BDD
		$conn = $GLOBALS['conn'];
		$sql = "SELECT * FROM users WHERE password = MD5('$inputPassword') AND email = '$inputEmail' ";
		
		//Check query
		$user = mysqli_query($conn,$sql);
			if(mysqli_num_rows($user)>0)
			{
				$user = mysqli_fetch_assoc($user);
				session_destroy();
				session_start();
				$_SESSION['Auth']['logged'] = true;
				$_SESSION['Auth']['id'] = $user['id_user'];
				$_SESSION['Auth']['pseudo'] = $user['pseudo'];
				$_SESSION['Auth']['is_admin'] = $user['is_admin'];
				$_SESSION['Auth']['is_active_mail'] = $user['is_active_mail'];
				$_SESSION['Auth']['is_gold'] = $user['is_gold'];
				$_SESSION['Auth']['email'] = $user['email'];
				//Redirection Acceuil + alerte TRUE
				$location=WEBROOT."Association/LogsOk";
				header("Location:$location");
			}
			else
			{
				echo mysqli_error($conn);
				session_destroy();
				session_start();
				$_SESSION['Auth']['logged'] = false;
				//Redirection Acceuil + alerte FALSE
				$location=WEBROOT."Association/Redirect";
				header("Location:$location");				
			}
		}//End form add user	
		require 'views/elements/header.php';
		require 'views/Users/Connection.php';
		require 'views/elements/footer.php';