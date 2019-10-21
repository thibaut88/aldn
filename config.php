<?php
	use Core\Router;

	//Environnement
	$env='developpement';

	//Paths 
	define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));  //Chemin relatif   
	define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME'])); //Chemin absolue  

	//Base de donnée
	require ROOT.'/class/database.php';
	$conn = new Database();  

	//Inclure le core/Router 
	require(ROOT.'core/Router.php');
	//Inclure le core/Controller et le core/Model
	require(ROOT.'core/Controller.php');
	require(ROOT.'core/Model.php');

	// Le router qui désservira la bonne vue
	$router = new Core\Router();
	$router->dispatchURI();

	//Appel du Controller
	require('controller/'.ucfirst($controller).'.php');
	$controller = ($controller == 'error') ? $controller.'Controller':$controller;
	$controller = new $controller(); 

 	//Sécurité sur les actions
	//Si une action existe pour un controller
	if(method_exists($controller, strtolower($action))){
		unset($param[0]);
		unset($param[1]);
		//APPEL UNE FONCTION AVEC LES PARAMETRE PASSES DANS LE TABLEAU
		$action = strtolower($action); 
 		call_user_func_array(array($controller, $action), $param);}
	else{
		$action = strtolower('index'); 
		$controller->$action();
	}

	//Stoquer le controller et l'action dans la session
	$_SESSION['controller'] = $controller;
	$_SESSION['action'] = $action;
	$_SESSION['web'] = WEBROOT;