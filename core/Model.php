<?php
class Model{

public $table;
public $id;
public $datas;


// LIT UNE TABLE LES CHAMPS D'UNE TABLE
	// public function read($field='*'){
	// if($this->id==NULL){$this->id=1;}
	// if($fields==null){ $fields='*';}
	// $sql = "select $fields from ".$this->table."where id=".$this->id;
	// $req = mysql_query($sql) or die(mysql_error());
	// $data=mysql_fetch_assoc($req);
	// foreach($datas as $key=>$data){
		// $this->$datas=$data;}  
	// return $this->datas;
	// }
	
	//CHARGE UN MODEL BDD
	function loadModel($name){
		$name = strtolower($name);
	    require_once(ROOT.'models/'.$name.'.php');
		$name = ucfirst($name);
		$this->$name= new $name();
		}
	public function save($data){
	if(isset($data['id']) && !empty($data['id'])){
		$sql="UPDATE".$this->table." SET ";
		foreach($data as $k=>$v){
			if($k!='id'){
				$sql.="$k='$v',";
			}
		}
		$sql=substr($sql,0,-1);
		$sql.="WHERE id=".$data['id'];
	}
	else{
	$sql="INSERT INTO ".$this->table."(";
	foreach($data as $k=>$v){
		$sql.="$k,";
	}
	$sql=substr($sql,0,-1);
	$sql .=" VALUES (";
	foreach($data as $v){
		$sql .="$v,";
	}
	$sql .="WHERE id=".$data['id'];
	$sql .=")";
		}
	mysql_query($sql) or die(mysql_error()."<br> =>".mysqli_query());

	if((isset($data['id']))|| !empty($data['id'])){
		$this->id=mysqli_insert_id;
	}else{
		$this->id=$data['id'];
	}
	}
}
	
?>