<?php
// la pagination avec les SESSIONS
//pag_direction, prev, next, limit_page
/****
$_SESSION['limite_page']=50;
$limit_page = $_SESSION['limite_page'];

if (!empty($_GET)){

		$_SESSION['pag_direction'] = $_GET['pag'];
		$_SESSION['debut'] = $_GET['p'];
		$_SESSION['fin'] = $_GET['n'];
		$pag_direction = $_SESSION['pag_direction'];
		$debut = $_SESSION['debut'];
		$fin = $_SESSION['fin'];



}else{
		$_SESSION['current_debut'] = 0;
		$_SESSION['current_fin'] = $limit_page;
		$_SESSION['debut'] =0;//0
		$_SESSION['fin'] = $limit_page;//5
		$debut = $_SESSION['debut'];
		$fin = $_SESSION['fin'];
		$current_debut =$debut;
		$current_fin =$fin;
}
****/
//SI ON A CLIQUE SUR UN BOUTTON ALORS 
/***
if (!empty($pag_direction)){
	switch($pag_direction){
	case 'p':{
		
		break;}
	case 'n':{
		if ($current_debut == 0){
	$_SESSION['current_debut']+= $debut;//5
	$_SESSION['current_fin']= $fin;//5
		}

		break;}
	
}

}
*****/