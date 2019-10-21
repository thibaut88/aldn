<?php
# Class non instanciable pour la validation
class AbstractValidator {

	protected $data;
 	protected $validator;

 	public $errors=array();
 	public $err=0;

 	public function __construct(array $data)
	{
		# Données postées $_POST
		$this->data = $data; 
		# Validateur de formulaire
		$this->validator = new Validator($this->data); 
 	}
	public function validate(): bool
	{
  		# Récupère les erreurs
		$this->errors = ($this->validator->err > 0 )? $this->validator->errors:array();
		$this->err    = ($this->validator->err > 0 )? $this->validator->err:0;
		
 		if($this->errors == null AND $this->err  == 0 ){

		}

 		return $this->validator->validate();
	}
	public function errors(): array
	{
		return $this->validator->errors;
	}
}

class PostValidator extends AbstractValidator {
	public function __construct(array $data)
	{
		parent::__construct($data);
		$this->validator
		->rule('required', ['field-name']);
		$this->validator
		->rule('lengthBetween', ['field-name'], 2, 4);  
 	}
}