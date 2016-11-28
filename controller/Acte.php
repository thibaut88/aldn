<?php
class Acte extends Controller{
	
	function CompromisVente(){
		require 'Controller/Acte/CompromisVente.php';
	}
	
	function LocationEtCollocation(){
		require 'Controller/Acte/LocationEtCollocation.php';
	}
	
	function CessionDeDroits(){
		require 'Controller/Acte/CessionDeDroits.php';
	}	
	
	function SortieIndivision(){
		require 'Controller/Acte/SortieIndivision.php';
	}		
	
	function AutreDemande(){
		require 'Controller/Acte/AutreDemande.php';
	}			
}//End Controller Acte
?>