<?php
//MODEL table partenaires
//RECUPERE TOUS LES PARTENAIRES
class PartenairesModel extends Model{

	public $datas;
	public $id;
	public $table;
	public $sql;
	
	//LIRE INFOS TABLE
	public function readTable($field=null)
	{
		global $conn;
		if(!$conn)
			$conn = new Database();
  		//SQL
		if($field==null or !isset($field)){ $field='*';}
 		$sql = "SELECT $field FROM partenaires"; 
		if($this->id!=NULL){
			$sql.=" WHERE id_partenaire = ".$this->id."";
		} 
		$this->sql = $sql;
 		$req = mysqli_query($conn->conn, $sql) or die(mysqli_error($conn->conn));
		if (mysqli_num_rows($req) > 0) {
			while($data = mysqli_fetch_assoc($req)){
				$this->datas[] = $data;
			}
		} else {
			echo "<p>0 resultats</p>";
		}
		mysqli_close($conn->conn);
		return $this->datas;
	}
} 
?>