<?php
class showOffer extends Model{
			public function lire($id){
					$conn = $GLOBALS['conn'];
					if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}
					$sql = "SELECT * FROM offers WHERE id_offer = $id";
					$result = mysqli_query($conn, $sql);
					$res =  mysqli_fetch_assoc($result);
					$this->datas = $res;
					mysqli_close($conn);
					return $this->datas;
				}
	}
$showOffer = new showOffer();
?>
