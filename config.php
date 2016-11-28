<?php
	//ON DEFINIT LES CHEMINS PATH DE BASE 
	define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));  //www/PROJETS EXTERNES/ALDN3/
	define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME'])); //C:Chemin_absolu/ALDN3/
	
	//INCLUDE CORE/MODEL && CORE/CONTROLLER
	//ILS SERVENT A TOUTES LES PAGES DU SITE
	require(ROOT.'core/Controller.php');
	require(ROOT.'core/Model.php');
	$Controller = new Controller();
	$Model = new Model();
	
	//Constantes
	define('DBNAME','aldn');
	define('DBUSER','admin');
	define('DBPASS','admin');
	define('HOST','localhost');
	//Connect Database
	$conn = mysqli_connect(HOST,DBUSER,DBPASS,DBNAME);
	if (!$conn) {   die("Connection failed: " . mysqli_connect_error()); 	}
	//Caractères spéciaux
	if (!$conn->set_charset("utf8")) {
		printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $conn->error);
		exit();
	}

	//WEB (POUR LA CONFIG DES LIENS DE ALDN)
	$web =  $_SERVER['SCRIPT_NAME']; // /www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/site/index.php
	$pos = strpos($web ,'ALDN4'); 
	$before=null;
	//Racine du projet
	for ($i=0;$i<$pos;$i++){
		$before .=  $web[$i];
	}
	define('WEB', $before.'ALDN4/'); // /www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/

	//Transforme string > tableau
	$_GET['p'] = str_replace('.php','',$_GET['p']); //www/PROJETS EXTERNES/ALDNTemplate4/ALDN4/site/index
	$param=explode('/',$_GET['p']);		
	//Param 1 && 2
	$controller=(empty($param[0])) ? "error" : $param[0] ;
	$controller=ucfirst($controller);//controlleur=Controlleur
	$action=(empty($param[1])) ? "index" : $param[1] ;
	$action=ucfirst($action);//action=Action
	//Param 3
	if (!empty($param[2])) {$parametre=$param[2];}else{$parametre=(!empty($param[1]))?$param[1]:$param[0];}
	//Appel du Controller
	require('controller/'.$controller.'.php');
	$controller = new $controller();
	
	//Sécurité sur les actions
	//Si une action existe pour un controller
	if(method_exists($controller,$action)){
		unset($param[0]);
		unset($param[1]);
	//APPEL UNE FONCTION AVEC LES PARAMETRE PASSES DANS LE TABLEAU
		call_user_func_array(array($controller,$action),$param);}
	else{
		$action = ucfirst('index');
		$controller->$action();
		}
		
	//Stocker controller && action dans la $_SESSION
	$_SESSION['controller'] = $controller;
	$_SESSION['action'] = $action;
	$_SESSION['web'] = WEBROOT;

	
	
	
	
	
	
	
	
	
	
	
	
	