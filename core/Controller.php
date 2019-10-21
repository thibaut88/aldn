<?php
class Controller{
	//@vars = ARRAY()
	var $vars = array();
	//@layout = VAR()
	var $layout='default';
	//@datas = requete POST
	public $datas;
	//@model = modele de base de donnée
	public $model;
	
	//LE CONSTRUCTEUR
	function __construct(){
		if(isset($_POST)){
		$this->datas = $_POST;
	}}
	//LIRE UN PLUGIN
	public function loadPlugin($filename){
		$filename = strtolower($filename);
		require_once(ROOT.'plugins/'.$filename.'.php');				
	}
	//LIRE UN MODULE
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
	public function loadModel($filename){

		$filename = strtolower($filename);
	    require_once(ROOT.'models/'.$filename.'.php');
		$class = str_replace(' ','',ucwords(str_replace('_',' ', $filename))); 
		$this->$filename= new $class();
	}
	//PASSER A LA VUE LE FICHIER CORRESPONDANT
	public function render($filename){
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
	public function set($d){
		$this->vars=array_merge($this->vars,$d);
	}
}