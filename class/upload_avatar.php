<?php
		//Déplacer le fichier sur le serveur !
		function move_avatar($avatar,$name,$to_path,$options=null) {
					$extension_upload = strtolower(substr(  strrchr($avatar['name'], '.')  ,1));
					$Path_Image = $to_path;
					$Path_Image .= str_replace(' ','',$name).".".$extension_upload;
					if($options=='pg_profil'){
						move_uploaded_file($avatar['tmp_name'],'../'.$Path_Image);
					}else{
						move_uploaded_file($avatar['tmp_name'],$Path_Image);
					}
					return $Path_Image;

		}
				
				
class Upload{
	
	private    $errors=array();
	private    $maxsize = 10024; //Poid
    private    $maxwidth = 400; //Largeur 
    private    $maxheight = 400; //Longueur 
    private    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' ); //Extensions
	public      $image=null;
	
	public function upload_image($file, $to_path, $options=null){

		 if (!empty($file['size'])){
				$i=0;
				
				if ($file['error'] > 0){//Si Erreur Ttansfert
							$this->errors['transfert'] = "Erreur lors du transfert";  $i++;
				}
				if ($file['size'] > $this->maxsize){
							$i++;
							$this->errors['size']  = "Le fichier est trop gros : (<strong>".$file['avatar']['size']." Octets</strong>    contre <strong>".$maxsize." Octets</strong>)";
				}
				//get image sizes
				$image_sizes = getimagesize($file['tmp_name']);
				if ($image_sizes[0] > $this->maxwidth OR $image_sizes[1] > $this->maxheight){
							$i++;
							$this->errors['tailles']  = "Image trop large ou trop longue : 
							(<strong>".$image_sizes[0]."x".$image_sizes[1]."</strong> contre <strong>".$this->maxwidth."x".$this->maxheight."</strong>)";
				}
				//Récup Extension fichier
				$extension_upload = strtolower(substr(  strrchr($file['name'], '.')  ,1));
				if (!in_array($extension_upload,$this->extensions_valides) )
				{
							$this->errors['extension']  = "Extension de l'avatar incorrecte"; $i++;
				}

				//Nom final de l'image	
				$nom='img_'.time();
				$nom_image="";
				$nom_image=(!empty($file['size']))?move_avatar($file,$nom,$to_path,$options):'';
				
		}else{
				$nom_image="";

		}
		$this->image= $nom_image;
		return $this->image;		
				
	}
}
