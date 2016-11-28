<?php
class Controller{
	//@ vars = ARRAY()
	//@ layout = VAR()
	//@datas = requete POST
	var $vars = array();
	var $layout='default';
	public $datas;
	public $model;
	
	//LE CONSTRUCTEUR
	function __construct(){
	//La requete POST
		if(isset($_POST)){
		$this->datas = $_POST;
	}}
	//LIRE UN PLUGIN
	public function loadPlugin($filaname){
		$filename = strtolower($filename);
		require_once(ROOT.'plugins/'.$filename.'.php');				
	}
	//LIRE UN MODUL
	public function loadModul($filename){
		$filename = strtolower($filename);
		require_once(ROOT.'views/moduls/'.$filename.'.php');		
	}
	//LIRE UN ELEMENT
	public function loadElement($filename){
		$filename = strtolower($filename);
		require_once(ROOT.'views/elements/'.$filename.'.php');
	}
	//LIRE UN FICHIER SCRIPT.PHP
	public function loadScript($filename){
		$filename = strtolower($filename);
		require_once(ROOT.'scripts/'.$filename.'.php');
	}
	//LIRE UN FICHIER JS
	public function loadJs($filename){
		$filename = strtolower($filename);
		require_once(ROOT.'js/'.$filename.'.js');
	}
	//LIRE UN MODEL BDD
	public function loadModel($name){
	    require_once(ROOT.'models/'.$name.'.php');
		$name = ucfirst($name);
		$this->$name= new $name();
		}
	//passe a la vue le fichier qui correspond
	function render($filename){
		extract($this->vars);
		ob_start();
		require(ROOT.'views/'.get_class($this).'/'.$filename.'.php');
		$content_for_layout = ob_get_clean();
		if($this->layout==false){
			echo $content_for_layout;
		}
		else{
			require(ROOT.'views/layout/'.$this->layout.'.php');
		}
	}

	//PASSER LES VARIABLES A LA VUE
	function set($d){
		$this->vars=array_merge($this->vars,$d);
	}


	}


?>