<?php
class UserProfil extends Model{

	public $datas;
	public $sql;
	
	public function readProfil($user_id){
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT * FROM users WHERE id_user = $user_id";
		$this->sql = $sql;
		$req = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if (mysqli_num_rows($req) > 0) {
			$usr = mysqli_fetch_assoc($req);
			$this->datas['id_user'] = $usr['id_user'];
			$this->datas['name'] = $usr['name'];
			$this->datas['firstname'] = $usr['firstname'];
			$this->datas['pseudo'] = $usr['pseudo'];
			$this->datas['password'] = $usr['password'];
			$this->datas['email'] = $usr['email'];
			$this->datas['addresse'] = $usr['addresse'];
			$this->datas['phone'] = $usr['phone'];
			$this->datas['is_admin'] = (int) $usr['is_admin'];
			$this->datas['is_active_mail'] = (int) $usr['is_active_mail'];
			$this->datas['is_gold'] = (int) $usr['is_gold'];
			$this->datas['ville'] = $usr['ville'];
			$this->datas['code_postal'] = $usr['code_postal'];
			$this->datas['path_avatar'] = $usr['path_avatar'];
			$this->datas['date_inscription'] = $usr['date_inscription'];
		
		}else
		{
			$this->datas=null;
		}
		return $this->datas;
		mysqli_close($conn);
		}
}

$userProfilModel = new UserProfil();
?>