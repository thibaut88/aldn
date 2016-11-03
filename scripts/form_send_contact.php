<?php
//POSTS : nom, prenom, emali, message

if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email
 // (1) Code PHP pour traiter l'envoi de l'email
 
  // Récupération des variables et sécurisation des données
  $nom     = htmlentities($_POST['firstname']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
  $email   = htmlentities($_POST['email']);
  $message = htmlentities($_POST['message']);
 
  // Variables concernant l'email
 
  $destinataire = 'code.thibaut@gmail.com'; // Adresse email du webmaster (à personnaliser)
  $sujet = 'Titre du message'; // Titre de l'email
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
 
  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
 
  // Envoyer l'email
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
  echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
  // (2) Fin du code pour traiter l'envoi de l'email
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  // Définit toutes les erreurs possibles
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
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
 
  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }    // (3) Ici, il sera possible d'ajouter plus tard un code pour vérifier un captcha anti-spam.
 
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Ici il faut ajouter tout le code pour envoyer l'email.
    // Dans le code présenté au chapitre précédent, cela signifie au code entre les commentaires (1) et (2).
  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
    // (4) Ici, il sera possible d'ajouter un code d'erreur supplémentaire si un captcha anti-spam est erroné.
    echo '</div>';
  }
}

$redirect = str_replace('scripts/form_send_contact.php','',$_SERVER['SCRIPT_NAME']).'Association/Contacts/sendIsOk';
header("Location:$redirect");

?>