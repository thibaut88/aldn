<?php
session_start();
//AJOUTER MODFIIER UNE IMAGE
		$path_avatar=null;
		$post_modified = array();
		$user_id=$_SESSION['Auth']['id'];
		
if (!empty($_POST)||!empty($_FILES)){
	
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
		include '../class/upload_avatar.php';
		$up = new Upload();
		$path_avatar="";
		$path_avatar=$up->upload_image($_FILES['changerAvatar'],'ressources/images/profils/avatars/' ,'pg_profil');
	}
	else{
		$redirect ='../Users/Modifno';
		header("Location:$redirect");
	}

				
		include('../database.php');

			$modif_user = "UPDATE users SET " ;
			if(!empty($_POST['pseudo'])){$modif_user .=" pseudo = '".$_POST['pseudo']."'";}
			if(!empty($_POST['email'])){$modif_user .=" email = '".$_POST['email']."'";}
			if(!empty($_POST['addresse'])){$modif_user .=" addresse = '".$_POST['addresse']."'";}
			if(!empty($_POST['city'])){$modif_user .=" ville = '".$_POST['city']."'";}
			if(!empty($_POST['postal_code'])){$modif_user .=" code_postal = ".$_POST['postal_code']." ";}
			if(isset($path_avatar)){$modif_user .= " path_avatar = '".$path_avatar."'";}
			//WHERE GET ID cest luser connecté
			$modif_user .= " WHERE id_user = ".$user_id."";

			if (mysqli_query($conn, $modif_user)) {
				mysqli_close($conn);
				foreach($post_modified as $k=>$v){
				$redirect ="../Users/$k$v";
				header("Location:$redirect");
			}
			} else {
				echo "Error: " . $modif_user . "<br>" . mysqli_error($conn);
				mysqli_close($conn);
				$redirect ='../Users/Modifno';
				header("Location:$redirect");
			}

			}

?>

