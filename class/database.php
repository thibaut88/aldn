<?php
class Database {
	public function __construct(){
		global $conn;
		$this->conn = ($conn)?$conn:false; 
		if (!$this->conn) {
			include ROOT.'/database.php';
			$this->conn = $conn;
 		}  return $this->conn;
	}
}