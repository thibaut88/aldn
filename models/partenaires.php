<?php
//MODEL table partenaires
//RECUPERE TOUS LES PARTENAIRES
class PartenairesModel extends Model{

	public $datas;
	public $id;
	public $table;
	public $sql;
	
	//LIRE INFOS TABLE
	public function readTable($field=null){
	$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		
	//SQL
	if($field==null){ $field='*';}
	if(isset($field)){ $field='*';}
	$sql = "SELECT $field FROM partenaires";
	if($this->id==NULL){}
	else{
	$sql.=" WHERE id_partenaire = ".$this->id."";
	}
	$this->sql = $sql;
	$req = mysqli_query($conn,$sql) or die(mysqli_error());
	if (mysqli_num_rows($req) > 0) {
	while($data = mysqli_fetch_assoc($req)){
		$this->datas[] = $data;
	}
	} else {
		echo "<p>0 resultats</p>";
	}
		mysqli_close($conn);
		return $this->datas;
		}
}

$QueryPartenaires = new PartenairesModel();

?>