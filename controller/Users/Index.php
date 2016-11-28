<?php		
		// Gérer les alertes:
		$Controller = $GLOBALS['Controller'];
		$get = $GLOBALS['parametre'];
		$AlerteSuccess =(isset($GLOBALS['param'][1]))?$GLOBALS['param'][1]:false; //Alerte modif profil
		$alertAddUser=false;
		$alertErrorRegister=false;
		//Alertes Register
		if ($get=="AddUserIsOk")
		{
			$alertAddUser=true;
		}
		else if 
		($get=="AddUserIsFalse")
		{
			$alertErrorRegister=true;
		}else{
			$alertAddUser=false;
			$alertErrorRegister=false;
		}
		$user_id =(isset($_SESSION['Auth']['id']))?(int)$_SESSION['Auth']['id']:false;
		$displayUserProfil=((isset($_SESSION['Auth']['id']))&&(isset($_SESSION['Auth']['pseudo']))) ? true : false;

		if(!$user_id && !$displayUserProfil){}
		else{
				//ON RECUPERE lE MODEL USER PROFIL
				include 'models/userProfil.php';
				$USER = $userProfilModel->readProfil($user_id);
				$this->datas=$USER;
		}
		include 'views/elements/header.php';
		include 'views/Users/Index.php';
		include 'views/elements/footer.php';
