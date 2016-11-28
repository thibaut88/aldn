<?php	
$display_Restauration_form = true;
$display_New_Pass=false;
$display_send_mail = false;

$conn = $GLOBALS['conn'];
$get = $GLOBALS['param'];
$url1 = (string) (!empty($get[2]) && isset($get[2])) ? $get[2]: "";
$token = (string) (!empty($get[3]) && isset($get[3])) ? $get[3]: "";
$id_token = (!empty($_SESSION['token_id']) && isset($_SESSION['token_id'])) ? (int) $_SESSION['token_id']: "";

if($url1=='ok' && empty($token)){
	$display_send_mail = true;
}
if(!empty($token)){
	
	$sql="SELECT * FROM restauration_user WHERE  token = '$token' ";
	$rep = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($rep)>0){
		$res = mysqli_fetch_assoc($rep);
		$idUSER =(int) $res['id_user'];
		$new_pass = random_str(5);
		$sql="UPDATE users SET password = MD5('$new_pass') WHERE id_user = $idUSER";
		
		if(mysqli_query($conn,$sql)) {
			$display_Restauration_form = false;
			$display_New_Pass = true;

		}
}

}else{
	echo mysqli_error($conn);
}

		include 'views/elements/header.php';
		include 'views/Users/Restauration.php';
		include 'views/elements/footer.php';