<?php


	
	//ON VERIFIE L'IMAGE DU PROFIL DE L'USER
    if (!empty($_FILES['avatar']['size']))
    {
		
		var_dump($_FILES);

        //On définit les variables :
        $maxsize = 2097152; //Poid de l'image en bits
        $maxwidth = 400; //Largeur de l'image
        $maxheight = 400; //Longueur de l'image
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' ); //Liste des extensions valides
        $i=0;
		//SI IL Y A UNE ERREUR
        if ($_FILES['avatar']['error'] > 0)
        {
                $avatar_erreur = "Erreur lors du transfert de l'avatar : ";
        }
		
		//SI LA TAILLE DEPASSE
        if ($_FILES['avatar']['size'] > $maxsize)
        {
                $i++;
                $avatar_erreur1 = "Le fichier est trop gros : (<strong>".$_FILES['avatar']['size']." Octets</strong>    contre <strong>".$maxsize." Octets</strong>)";
        }

        $image_sizes = getimagesize($_FILES['avatar']['tmp_name']);
        if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight)
        {
                $i++;
                $avatar_erreur2 = "Image trop large ou trop longue : 
                (<strong>".$image_sizes[0]."x".$image_sizes[1]."</strong> contre <strong>".$maxwidth."x".$maxheight."</strong>)";
        }
        
        $extension_upload = strtolower(substr(  strrchr($_FILES['avatar']['name'], '.')  ,1));
        if (!in_array($extension_upload,$extensions_valides) )
        {
                $i++;
                $avatar_erreur3 = "Extension de l'avatar incorrecte";
        }
		
    }/** FIN IMAGE CONTROL **/
	
$nameImage = $user_firstname.''.$user_lastname;
$nomavatar=(!empty($_FILES['avatar']['size']))?move_avatar($_FILES['avatar'],$nameImage):'';

function move_avatar($avatar,$nameImage)
{
    $extension_upload = strtolower(substr(  strrchr($avatar['name'], '.')  ,1));

    $nomavatar = str_replace(' ','',$nameImage).".".$extension_upload;
	
    $pathImage = "ressources/images/profils/avatars/".$nomavatar;
    move_uploaded_file($avatar['tmp_name'],$pathImage);
	$GLOBALS['path_avatar']=$pathImage;
    return $nomavatar;
}

?>
