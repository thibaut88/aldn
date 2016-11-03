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
	
	//CONNECTION BDD
	define('DBNAME','aldn2');
	define('DBUSER','admin');
	define('DBPASS','admin');
	define('HOST','localhost');
	$conn = mysqli_connect(HOST,DBUSER,DBPASS,DBNAME);
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	if (!$conn->set_charset("utf8")) {
		printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $conn->error);
		exit();
	}

	//WEB ( POUR LA CONFIG DES LIENS DE ALDN)
	$web =  $_SERVER['SCRIPT_NAME'];
	$pos = strpos($web ,'ALDN4');
	$before=null;
	for ($i=0;$i<$pos;$i++){
		$before .=  $web[$i];
	}
	define('WEB', $before.'ALDN4/');
	
	//récupère url as string and explode params to table
	$_GET['p'] = str_replace('.php','',$_GET['p']);
	$param=explode('/',$_GET['p']);
	$controller=(empty($param[0])) ? "error" : $param[0] ;
	$controller=ucfirst($controller);//controlleur=Controlleur
	$action=(empty($param[1])) ? "index" : $param[1] ;
	$action=ucfirst($action);//action=Action
	
	//SI PAS VIDE PARAM2 
	//ALORS PARAMETRE=PARAM2 
	//SINON PARAMETRE=PARAM1
	if (!empty($param[2])) {$parametre=$param[2];}else{$parametre=(!empty($param[1]))?$param[1]:$param[0];}
	require('controller/'.$controller.'.php');
	$controller = new $controller();
	
	//AJOUTER UNE SECURITEE SUR LES ACTIONS
	//SI ACTION EXIST POUR UN CONTROLLER ALORS
	if(method_exists($controller,$action)){
		unset($param[0]);
		unset($param[1]);
	//APPEL UNE FONCTION AVEC LES PARAMETRE PASSES DANS LE TABLEAU
		call_user_func_array(array($controller,$action),$param);}
	else{
		$action = ucfirst('index');
		$controller->$action();
		}
		
	//Session controller && action
	$_SESSION['controller'] = $controller;
	$_SESSION['action'] = $action;
	$_SESSION['web'] = WEBROOT;

	
	
	
	
	
	
	
	
	
	
	
	
	