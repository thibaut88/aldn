<?php
    //Si image non vide
    if (!empty($_FILES['avatar']['size']))
    {
        //On d�finit les variables :
        $maxsize = 10024; //Poid de l'image
        $maxwidth = 100; //Largeur de l'image
        $maxheight = 100; //Longueur de l'image
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' ); //Liste des extensions valides
        $i=0;
		
		//Si Erreur Ttansfert
        if ($_FILES['avatar']['error'] > 0)
        {
                $avatar_erreur = "Erreur lors du transfert de l'avatar : ";
        }
        if ($_FILES['avatar']['size'] > $maxsize)
        {
                $i++;
                $avatar_erreur1 = "Le fichier est trop gros : (<strong>".$_FILES['avatar']['size']." Octets</strong>    contre <strong>".$maxsize." Octets</strong>)";
        }
		//R�cup tailles image
        $image_sizes = getimagesize($_FILES['avatar']['tmp_name']);
		//Si Erreur Taille
        if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight)
        {
                $i++;
                $avatar_erreur2 = "Image trop large ou trop longue : 
                (<strong>".$image_sizes[0]."x".$image_sizes[1]."</strong> contre <strong>".$maxwidth."x".$maxheight."</strong>)";
        }
		//R�cup Extension fichier
        $extension_upload = strtolower(substr(  strrchr($_FILES['avatar']['name'], '.')  ,1));
        if (!in_array($extension_upload,$extensions_valides) )
        {
                $i++;
                $avatar_erreur3 = "Extension de l'avatar incorrecte";
        }
    }//Endif avatar size

		//Nom final de l'image	
		$nomImage='img_'.time();
		$nomavatar=(!empty($_FILES['avatar']['size']))?move_avatar($_FILES['avatar'],$nomImage):'';

		//D�placer le fichier sur le serveur !
		function move_avatar($avatar,$name)
		{
			$extension_upload = strtolower(substr(  strrchr($avatar['name'], '.')  ,1));
			$nameImage = str_replace(' ','',$name).".".$extension_upload;
			$Path_Image = "ressources/images/profils/avatars/".str_replace(' ','',$name).".".$extension_upload;
			move_uploaded_file($avatar['tmp_name'],$Path_Image);
			return $nameImage;
		}
?>
