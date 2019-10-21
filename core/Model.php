<?php


class Model{

	public $table;
	public $id;
	public $datas;

	//CHARGE UN MODEL BDD
	public function loadModel($name){
		$name = strtolower($name);
		if(file_exists(ROOT.'models/'.$name.'.php'))
	    	require_once(ROOT.'models/'.$name.'.php');
		$name = ucfirst($name);
		$this->$name= new $name();
	}
	// LIT LES CHAMPS D'UNE TABLE DE L'ID 1
	public function read($field='*'){
		if($this->id==NULL){$this->id=1;}
		if($fields==null){ $fields='*';}
		$sql = "SELECT $fields FROM ".$this->table."WHERE id=".$this->id;
		$req = mysql_query($sql) or die(mysql_error());
		$data= mysql_fetch_assoc($req);
		foreach($datas as $key=>$data){
			$this->$datas=$data;}  
		return $this->datas;
	}
	// SAUVEGARDE UNE VALEUR DANS LA TABLE
	public function save($data){
		if(isset($data['id']) && !empty($data['id'])){
			$sql="UPDATE ".$this->table." SET ";
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
	public function and(){
		return ' AND ';
	}
	public function or(){
		return ' OR ';
	}
	public function order($orderBy){
		return ' ORDERBY '.$orderBy;
	}
	public function where($arrayWhere){
		if(count($arrayWhere) == 1){
			$sql= array_keys($arrayWhere)[0]."=".$arrayWhere[0];
		} 
		elseif(count($arrayWhere) > 1){
			foreach ($arrayWhere as $key => $value) {
				if(is_integer($value))
					$sql.= $key.'='.$value;
				if(is_string($value))
					$sql.= $key.'="'.$value.'"';
			}
		}	return $sql;
	}
	public function like(){}

	public function leftJoin(){}
	public function join(){}
}
?>