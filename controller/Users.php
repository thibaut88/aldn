<?php

//Crypt function
include 'class/securise.php';

//FUNC String random
function random_str($nbr) {
	$str = "";
	$chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ0123456789";
	$nb_chars = strlen($chaine);

	for($i=0; $i<$nbr; $i++)
	{
		$str .= $chaine[ rand(0, ($nb_chars-1)) ];
	}
	return $str;
}		
		
		
class Users extends Controller{
	
	public $datas;
	
	function index(){
		require 'controller/Users/Index.php';
	}
	
	function Connection(){
		require 'controller/Users/Connection.php';
	}	
	
	function Inscription(){
		require 'controller/Users/Inscription.php';
	}	
	
	function Restauration(){
		require 'controller/Users/Restauration.php';
	}		
}

