<?php
class Validator {

	public $err   =0;
	public $errors=null;

	private $is_valide = null;
	private $_datas    = [];

	public function __construct(array $data){
		$this->_datas = $data; 
	}
	public function validate() { 
 		return ($this->getErrors() == null  AND $this->is_valide === TRUE) ? TRUE:FALSE;
	}
	public function getErrors() {
 		if($this->err === 0) 
			$this->is_valide = true;
  		return $this->errors;
	}

	public function rule($typeRule, $arr, ...$args) {
		switch($typeRule){
			case 'lengthBetween':
 				$min = $args[0];
				$max = $args[1]; 
				foreach ($arr as $entry => $value) {
					$inputField = $this->_datas[$value]; 
					$length = (int) strlen($inputField);
					if($length >= $min AND $length <= $max){ }
					else {
 						$this->err++;
						$this->errors[$value] = 'Erreur de champ '.$value.' qui doit être entre '.$min.' et '. $max.' caractères !';
 					}	
				} 
			break;
			case 'required':
 				foreach ($arr as $entry => $value) {
 					$inputField = $value;
 					$inputValue = trim($this->_datas[$inputField]); 
 					if(!array_key_exists($inputField, $this->_datas) OR $inputValue == ""){
						$this->err++;
						$this->errors[$inputField] = 'Le champ '.$inputField. ' est obligatoire et ne peut être une chaîne vide !';
 					}
				} 
			break;
			default: 
		}
	}
}
