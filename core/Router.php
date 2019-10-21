<?php
namespace Core;
require 'Route.php';
//@Class Router 
//Sert à rendre la vue en fonction de la requête client tapée
class Router {
	public $defaultAction='error';
	public $defaultController='index';
	private $routes=[];
	public function getRoutes()
	{
		$this->routes['get']=array();
		$this->routes['post']=array();
		require 'routes.php';
	}
	public function getURI()
	{
		// Supprimer le .php de la requête GET
		$_GET['p']=str_replace('.php','',$_GET['p']); 
		// Transforme la requête GET du client en tableau 
		return explode('/',$_GET['p']); 
	}
	//Dispatcher l'url
	public function dispatchURI($value='')
	{
		$routes = $this->getRoutes();
		//Récupérer les informations de routage de la barre d'URL
		$param = $this->getURI();
	 	//Param 1 && Param 2 dans la requête
		$controller=(!isset($param[0]) OR empty($param[0])) ? $this->defaultController : $param[0] ;
	 	$action=(!isset($param[0]) OR empty($param[1])) ? $this->defaultAction : $param[1] ;
	 	//Param 3 dans la requête
		if (isset($param[2]) OR !empty($param[2])) {
			$parametre=$param[2];
		}else{
			$parametre=(!empty($param[1]))?$param[1]:$param[0];
		}
		// Rend les variables globales
		$this->setGlobal(
			array(
			'param' => $param,'parametre' => $parametre,
			'controller' => $controller,'action' => $action
			)
		); 
	}
	// Rend les variables globales au script
	public function setGlobal($variable){
		if(!is_array($variable)){
			$GLOBALS[$variable]=$variable;
			return true;
		}
		if(is_array($variable)){
			foreach($variable as $index => $var){
				$GLOBALS[$index]=$var; 
			}	return true;
		}
	}
	public function get($url='', $callback)
	{
		if(!in_array($url, array_keys($this->routes['get']))){
			$this->routes['get'][] = new Route('get',$url,$callback);
		}
	}
	public function post($url='', $callback)
	{
		if(!in_array($url, array_keys($this->routes['post']))){
			$this->routes['post'][] = new Route('post',$url,$callback);
		}
	}
} 
