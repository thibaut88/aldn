<?php 
class Post {
	#@description : ...
	#@string : 255
	private $form_property; 

	private $send; 

	public  $is_valide;
 
 	public $errors = null;
 	public $err    = 0;

 	const empty='';

 	public function __construct($datas=null)
	{
 		if($datas == null OR count($datas) == 0 ){ return false; }
 		
		$this->_datas = $datas;

		foreach($this->_datas as $name => $value):
			if(!array_key_exists(str_replace('-','_',$name), get_object_vars($this))){
				throw new Error('Le champ'. $name. ' est manquant !');
			}   
 		endforeach; 

		$postValidator = new PostValidator($this->_datas);
		$validation = $postValidator->validate();
		$this->is_valide = $validation;
		
		if($this->isValide()){
			$this->ftp_user = $datas['ftp-user'];
			$this->ftp_pass = $datas['ftp-pass'];
			$this->ftp_host = $datas['ftp-host'];
			$this->ftp_port = $datas['ftp-port'];

			if(isset($datas['passiv-mode']) AND !empty($datas['passiv-mode'])) 
				$this->passiv_mode = $datas['passiv-mode'];
			if(isset($_POST) AND !empty($_POST['passiv-mode']))
				$this->passiv_mode = ($_POST['passiv-mode'] == 'on') ? TRUE:FALSE;

		} else {
			// ICI ON RECUPERE LA LISTE DES ERREURS DE VALIDATION
			$this->errors = $postValidator->errors;
			$this->err    = $postValidator->err;
		} 
 	}
	
	public function isValide(){
		return $this->is_valide;
	}

	public function getProperty(){
		return $this->ftp_user;
	}
	
	public function setProperty(){
		return $this->ftp_user;
	}  
}