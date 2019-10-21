<?php
  // Code PHP pour traiter l'envoi de l'email
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Récupération des variables et sécurisation des données
   // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
  $nom     = htmlentities($_POST['firstname']);
  $email   = htmlentities($_POST['email']);
  $message = htmlentities($_POST['message']);
   //Les erreurs
  $nombreErreur = 0;
    if(!isset($_POST['email']) || empty($_POST['email'])){
  $nombreErreur++; 	  
  $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  // Sinon, cela signifie que la variable existe (c'est normal)
  if (empty($_POST['email'])) { // Si la variable est vide
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
  } else {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
    } 
  }
 }
if (!isset($_POST['message']) || empty($_POST['message'])) {
			$nombreErreur++;
			$erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
			$nombreErreur++;
			$erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }  
if ($nombreErreur==0) {  
 // Variables concernant l'email
  $destinataire = 'code.thibaut@gmail.com'; // Adresse email du webmaster (à personnaliser)
  $sujet = 'Nouveau Message (page contacts)'; // Titre de l'email
  $contenu = '<html><head><title>Titre du message</title></head>';
  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
 
  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers  = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
 
  // Envoyer l'email
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
			//Redirection
			$redirect = '../Association/Contacts/sendIsOk';
			header("Location:$redirect");
  } else { 
			//Redirection
			$redirect = '../Association/Contacts/sendIsNo';
			header("Location:$redirect");		
  }
}