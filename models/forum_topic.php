<?php
class ForumTopicModel extends Model{
	public $PostsAll=array();
	public $sql;
	function read($fields='*'){
		//LIRE INFOS TABLE
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT $fields FROM forum_topic";
		$this->sql = $sql;
		$resultat = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if (mysqli_num_rows($resultat) > 0) {
		while($row = mysqli_fetch_assoc($resultat)){
			$this->TopicAll[] = $row;
		}
		} else {
			echo "<p>0 resultats</p>";
		}
		return $this->TopicAll;
		}
};
$ForumTopicModel= new ForumTopicModel();

?>