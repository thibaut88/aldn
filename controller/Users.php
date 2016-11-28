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
	
	function Index(){
		require 'Controller/Users/Index.php';
	}
	
	function Connection(){
		require 'Controller/Users/Connection.php';
	}	
	
	function Inscription(){
		require 'Controller/Users/Inscription.php';
	}	
	
	function Restauration(){
		require 'Controller/Users/Restauration.php';
	}		
}

