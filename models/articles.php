<?php
//MODEL table articles
//RECUPERE LA TABLE articles
class ArticlesModel extends Model{

	public $datas;
	public $table;
	public $sql;
	
	//LIRE INFOS TABLE
	public function readTable($field="*"){
	$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		
	//SQL

	$sql = "SELECT $field FROM articles";
	$this->sql = $sql;
	$req = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if (mysqli_num_rows($req) > 0) {
	while($data = mysqli_fetch_assoc($req)){
		$this->datas[] = $data;
	}
	} else {
	}
		mysqli_close($conn);
		return $this->datas;
		}
}

$ArticlesModel = new ArticlesModel();

?>