<?php
class Acte extends Controller{
	
	function compromisVente(){
		require 'Controller/Acte/CompromisVente.php';
	}
	
	function locationEtCollocation(){
		require 'Controller/Acte/LocationEtCollocation.php';
	}
	
	function cessionDeDroits(){
		require 'Controller/Acte/CessionDeDroits.php';
	}	
	
	function sortieIndivision(){
		require 'Controller/Acte/SortieIndivision.php';
	}		
	
	function autreDemande(){
		require 'Controller/Acte/AutreDemande.php';
	}			
}//End Controller Acte
?>