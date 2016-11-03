<?php


function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}

function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}




class Users extends Controller{
	
	public $users;
	
	/*********************************PROFIL*****************************************/
	function Index(){
		// Gérer les alertes:
		//si le paramètre de l'url est pas vide alors on affiche une alerte
		$get = $GLOBALS['parametre'];
		$alertAddUser=false;
		$alertErrorRegister=false;//point d'entrée depuis page "register"
		//Affichage des alertes
		if ($get==="AddUserIsOk")
		{
			$alertAddUser=true;
		}
		else if 
		($get==="AddUserIsFalse")
		{
			$alertErrorRegister=true;
		}else{
			$alertAddUser=false;
			$alertErrorRegister=false;
		}
		
		// SIL MANQUE PAS logged_user_id ALORS user_id = false;
		// SI MANQUE PAS user_id et pseudo ALORS user = true;
		// GERE L'ID DU PROFIL A AFFICHER
		$user_id =(isset($_SESSION['Auth']['id']))?$_SESSION['Auth']['id']:false;
		// GERE SI LE PROFIL DOIT ETRE AFFICHER
		$displayUserProfil=((isset($_SESSION['Auth']['id']))&&(isset($_SESSION['Auth']['pseudo']))) ? true : false;
		//Includes partials pages :
		$Controller = $GLOBALS['Controller'];
		$AlerteSuccess =(isset($GLOBALS['param'][1]))?$GLOBALS['param'][1]:false;
		require 'views/elements/header.php';
		require 'views/Users/Index.php';
		require 'views/elements/footer.php';
	}
	
	/*********************************** PARTIE CONNECTION ************************************/
	function Connection(){
		//si formulaire posté
		if (!empty($_POST) && isset($_POST['sendConnection'])){
					$_SESSION['Auth']['logged'] = false;
			//inputs forms
			$inputEmail = (isset($_POST['inputEmail']) && !empty($_POST['inputEmail']))?$_POST['inputEmail']:false;
			$inputEmail = (string) htmlspecialchars($inputEmail);
			$inputPassword = (isset($_POST['inputPassword']) && !empty($_POST['inputPassword']))?$_POST['inputPassword']:false;
			$inputPassword = (string) htmlspecialchars($inputPassword);
			$cleSecrete = "MaCleEstIncassable";
			// $inputPassword = encrypt($inputPassword,$cleSecrete);
		//conn
		$conn = $GLOBALS['conn'];
		$sql = "SELECT * FROM users WHERE password = '$inputPassword' AND adresse_mail = '$inputEmail' ";
		//connection
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
				$location=WEBROOT."Association/LogsOk";
				header("Location:$location");
			}
			else
			{
				session_destroy();
				session_start();
				$_SESSION['Auth']['logged'] = false;
				$location=WEBROOT."Association/Redirect";
				header("Location:$location");				
			}
		}//Fin du formulaire posté
		require 'views/elements/header.php';
		require 'views/Users/Connection.php';
		require 'views/elements/footer.php';
	}	
	
	/**========================== PARTIE INSCRIPTION ==========================**/
	function Inscription(){

		//Si formulaire d'inscription est envoyé 
		if (isset($_POST) && !empty($_POST['register'])){
		if(!empty($_POST['pseudo'])){$user_pseudo = (string) $_POST['pseudo'];}
		if(!empty($_POST['pass'])){
			$user_pass = (string) $_POST['pass'];
			$user_pass = htmlspecialchars($user_pass);
			$cleSecrete = "MaCleEstIncassable";
			// $user_pass = encrypt($user_pass,$cleSecrete);
		}
		if(!empty($_POST['cpass'])){
			$user_cpass = (string) $_POST['cpass'];
			$user_cpass = htmlspecialchars($user_cpass);
			// $user_cpass = encrypt($user_cpass,$cleSecrete);
		}
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
		// Vérifier l'avatar ( pas obligatoire !!! )
		if(!empty($_FILES) || isset($_FILES['avatar'])){
			include 'scripts/move_avatar.php'; 	
		}
		// SI ok : inclure model addUser.php qui s'occupera de la redirection
			include 'models/addUser.php'; 
		} //Fin du contrôle du post	
		require 'views/elements/header.php';
		require 'views/Users/Inscription.php';
		require 'views/elements/footer.php';	

	}	
}

