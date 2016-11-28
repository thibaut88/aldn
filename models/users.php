<?php
class UsersModel extends Model{

	public $datas;
	public $sql;
	
	public function read($fields="*"){
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT $fields FROM users";
		$this->sql = $sql;
		$req = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if (mysqli_num_rows($req) > 0) {
		while($data = mysqli_fetch_assoc($req)){
			$this->datas[] = $data;
		}
		}else
		{
			$this->datas=null;
			}
		return $this->datas;
		mysqli_close($conn);
		}
	};
$usersModel = new UsersModel();
?>