<?php
session_start();
//AJOUTER MODFIIER UNE IMAGE
		$path_avatar=null;
		$post_modified = array();

	function move_avatar($avatar){
			$extension_upload = strtolower(substr(  strrchr($avatar['name'], '.')  ,1));
			$name = time();
			$nomavatar = str_replace(' ','',$name).".".$extension_upload;
			$pathImage = "../ressources/images/profils/avatars/".str_replace(' ','',$name).".".$extension_upload;
			move_uploaded_file($avatar['tmp_name'],$pathImage);
			$GLOBALS['path_avatar']=str_replace('../','',$pathImage);
			$GLOBALS['post_modified']['avatar'] = 'ok';

			return $nomavatar;
		}
if (!empty($_POST)||!empty($_FILES)){
	//pseudo ,  adresse , ville ,  cp, mail , modify_avatar
	
	if(!empty($_POST['pseudo'])){
	$_POST['pseudo'] = (string) $_POST['pseudo'] ;
	$post_modified['ps'] = 'ok';
	}
	elseif(!empty($_POST['adresse'])){
		$_POST['adresse'] = (string) $_POST['adresse'] ;
		$post_modified['addr'] = 'ok';
	}
	elseif(!empty($_POST['ville'])){
		$_POST['ville'] = (string) $_POST['ville'] ;
		$post_modified['city'] = 'ok';
	}
	elseif(!empty($_POST['cp'])){
		$_POST['cp'] = (int) $_POST['cp'] ;
		$post_modified['cp'] = 'ok';
	}
	elseif(!empty($_POST['mail'])){
		$_POST['mail'] = (string) $_POST['mail'] ;
		$post_modified['mail'] = 'ok';
	}
		//ON VERIFIE L'IMAGE DU PROFIL DE L'USER
    elseif (!empty($_FILES['changerAvatar']['size']))
    {
        //On définit les variables :
        $maxsize = 2097152; //Poid de l'image en bits
        $maxwidth = 200; //Largeur de l'image
        $maxheight = 200; //Longueur de l'image
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' ); //Liste des extensions valides
        $i=0;
		//SI IL Y A UNE ERREUR
        if ($_FILES['changerAvatar']['error'] > 0)
        {
                $avatar_erreur = "Erreur lors du transfert de l'avatar : ";
        }else{
			echo "par d'erreurs files<br>";
		}
		
		//SI LA TAILLE DEPASSE
        if ($_FILES['changerAvatar']['size'] > $maxsize)
        {
                $i++;
                $avatar_erreur1 = "Le fichier est trop gros : (<strong>".$_FILES['changerAvatar']['size']." Octets</strong>    contre <strong>".$maxsize." Octets</strong>)";
        }
		else{
			echo "par d'erreurs de taille<br>";
		}
		//ON RECUPERE LES DIMENSIONS DE L'IMAGE
        $image_sizes = getimagesize($_FILES['changerAvatar']['tmp_name']);
        if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight)
        {
                $i++;
                $avatar_erreur2 = "Image trop large ou trop longue : 
                (<strong>".$image_sizes[0]."x".$image_sizes[1]."</strong> contre <strong>".$maxwidth."x".$maxheight."</strong>)";
        }
		else{
			echo "par d'erreurs de de dimensions<br>";
		}
        
        $extension_upload = strtolower(substr(  strrchr($_FILES['changerAvatar']['name'], '.')  ,1));
        if (!in_array($extension_upload,$extensions_valides) )
        {
                $i++;
                $avatar_erreur3 = "Extension de l'avatar incorrecte";
        }
		
		$nomavatar=(!empty($_FILES['changerAvatar']['size']))?move_avatar($_FILES['changerAvatar']):'';


	}
	else{
		$redirect ='../Users/Modifno';
		header("Location:$redirect");
		echo "erreur POST";
	}
	
				



			//REQUETE DE MODIFICATION DU PROFIL
			$servername = "localhost";
			$username = "admin";
			$password = "admin";
			$dbname = "aldn2";
			// Create connection
			$bdd = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$bdd) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$modif_user = "UPDATE users SET " ;
			if(!empty($_POST['pseudo'])){$modif_user .=" pseudo = '".$_POST['pseudo']."'";}
			if(!empty($_POST['email'])){$modif_user .=" adresse_mail = '".$_POST['email']."'";}
			if(!empty($_POST['addresse'])){$modif_user .=" adresse = '".$_POST['addresse']."'";}
			if(!empty($_POST['city'])){$modif_user .=" ville = '".$_POST['city']."'";}
			if(!empty($_POST['postal_code'])){$modif_user .=" code_postal = ".$_POST['postal_code']." ";}
			if(isset($path_avatar)){$modif_user .= " path_avatar = '".$path_avatar."'";}
			//WHERE GET ID cest luser connecté
			$modif_user .= " WHERE id_user = ".$_SESSION['Auth']['id']."";

			if (mysqli_query($bdd, $modif_user)) {
				mysqli_close($bdd);
				foreach($post_modified as $k=>$v){
				$redirect ="../Users/$k$v";
				header("Location:$redirect");
			}
			} else {
				echo "Error: " . $modif_user . "<br>" . mysqli_error($bdd);
				mysqli_close($bdd);
				$redirect ='../Users/Modifno';
				header("Location:$redirect");
			}

			}

?>

