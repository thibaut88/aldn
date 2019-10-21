<?php
class Alerting{
	
	private $alerts = array();

	public function setAlert(string $ype, string $alert){

	} 
	public function getAlerts(){
		if(is_array($this->alerts) AND count($this->alerts) > 0){
			return $this->alerts;
		}
	}
}