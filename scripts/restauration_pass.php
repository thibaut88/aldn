<?php
		require "../database.php";
		require "../class/securise.php";
	
		//FUNC String random
		function random_str($nbr) {
			$str = "";
			$chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ0123456789";
			$nb_chars = strlen($chaine);

			for($i=0; $i<$nbr; $i++)
			{
				$str .= $chaine[ rand(0, ($nb_chars-1)) ];
			}

			return $str;
		}			

		//FUNC SEND EMAIL
		function envoyerEmail($email,$token){
			
				 // Contenu de l'email à envoyer
				  $destinataire = $email; // Adresse email du webmaster (à personnaliser)
				  $sujet = 'ALDN Restauration'; // Titre de l'email
				  $contenu = '<html><head><title>Restauration</title></head>';
				  $contenu .= '<p>Bonjour, vous avez demandé une restauration de votre mot de passe.</p>';
				  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
				  $contenu .= '<p><strong><a href="http://localhost/www/PROJETS%20EXTERNES/ALDNTemplate4/ALDN4/site/Users/restauration/ok/'.$token.'">Cliquez ici</strong></a> pour restaurer votre mot de passe: '.$email.'</p>';
				  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
				  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
				  $headers = 'MIME-Version: 1.0'."\r\n";
				  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
				  
			    // Envoyer l'email
				  mail($destinataire, $sujet, $contenu, $headers);

				//Redirection
				$redirect = '../Users/Restauration/ok';
				header("Location:$redirect");
				
				
		}
	
if(isset($_POST['Restaurer'])  && $_SERVER['REQUEST_METHOD']=='POST') { 
				var_dump($_POST);

		$Errors = 0;
		$securise=new Securise();
		$token = random_str(24);
		
		//SECURITE FORMULAIRE 
		if(!isset($_POST['email']) || empty($_POST['email'])){ 
					$Errors++; 	  
					$erreur1 = '<p>Il y a un problème dans l\'email.</p>';
						
					if (empty($_POST['email'])) { 
							$Errors++; 
							$erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
					}else{
							if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { $Errors++; 
									$erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
							 }
					 }

		}else{
					$email = (isset($_POST['email'])&&!empty($_POST['email'])) ? (string) $securise->securiseForm($_POST['email']) : "";
		}
				
				
		
		
//SI PAS D'ERREURS 
if ($Errors==0) 
{  
		
		//SELECTIONNE L'ID DU DEMANDEUR 
		$TableUser="SELECT id_user AS id FROM users WHERE email  = '$email' ";
		$result=mysqli_query($conn, $TableUser);
		var_dump($result);

		//SI LE DEMANDEUR EXISTE DANS LA BDD
		if(mysqli_num_rows($result)>0)
		{
		$USER  = mysqli_fetch_assoc($result);
		$id_user=$USER['id'];
		var_dump($id_user);
			
			//VERIFIE QUE LE TOKEN N'EXISTE PAS DANS LA BDD 
			$TableRestau="SELECT * FROM restauration_user WHERE id_user  = $id_user ";
			$rep = mysqli_query($conn,$TableRestau);
			
			//SI TOKEN EXISTE => UDPATE 
			if(mysqli_num_rows($rep)>0)
			{
			
						$RestauUp = "UPDATE restauration_user SET token = '$token' WHERE id_user = $id_user";
						if(mysqli_query($conn,$RestauUp))
						{
						$token_id = mysqli_insert_id($conn);	
						session_start();
						$_SESSION['token_id']=(int)$token_id;
						$_SESSION['token']=$token;
						$_SESSION['id_new_pass']=$id_user;
						envoyerEmail($email,$token);			
						echo "ok update token";
		

				}
			}else
			{		
					//SI TOKEN EXISTE PAS => INSERT INTO 
					$addToken="INSERT INTO restauration_user ( id_user, token) VALUES ($id_user, '$token')";
					if(mysqli_query($conn,$addToken))
					{
					$token_id = mysqli_insert_id($conn);	
					session_start();

					$_SESSION['token_id']=(int)$token_id;
					$_SESSION['token']=$token;
					$_SESSION['id_new_pass']=$id_user;
					envoyerEmail($email,$token);
					echo "ok creation du token";

					}
		
			} 
			
		}//SI ERREURS 
		else
		{ 
				//Redirection
				$redirect = '../Association/Restauration/no';
				header("Location:$redirect");		
		} 


	
//SI ERREURS 
} else { 
		//Redirection
		$redirect = '../Association/Restauration/no';
		header("Location:$redirect");		
} 

}//END Restaurer
	

