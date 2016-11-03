<?php
$displayAddArticle=false;
	if(isset($_POST)&&isset($_POST['add'])){

	$addArticles = "INSERT INTO articles (
		nom_article, description_article,
		date_ajout_article, link_image_article,
		link_button_download, link_pdf, category_article
		) VALUES ( 
		'".$_POST['nom_article']."', '".$_POST['description_article']."',
		NOW(), '".$_POST['link_image_article']."',
		'".$_POST['link_button_download']."','".$_POST['link_pdf']."',
		'".$_POST['category_article']."'
		)";
	if (mysqli_query($conn, $addArticles)) {
		$_POST = null;
		$displayAddArticle = true;
	} else {
	    echo "Error: " . $addArticles . "<br>" . mysqli_error($conn);
		$displayAddArticle = true;

	}
	} 

	?>
		<table class='w3-small w3-table w3-striped w3-centered w3-border w3-table-responsive'>
		<thead class='w3-light-green'><tr>
		<td>id</td>
		<td>nom</td>
		<td>description</td>
		<td>date d'ajout</td>
		<td>lien image</td>
		<td>bouton telecharger</td>
		<td>lien pdf</td>
		<td>catégorie</td>
		<td>supprimer</td>
		<td></td>
		</tr></thead>
				<tr class="w3-hide w3-animate-left"id="useraddForm">
		<form action="articles.php"method="post">
		<td><i class="fa fa-times fa-lg w3-text-red" aria-hidden="true"></i></td>
		<td><input type="text"name="nom_article"></td>
		<td><input type="text"name="description_article"></td>
		<td><input type="text"name="date_ajout_article"></td>
		<td><input type="text"name="link_image_article"></td>
		<td><input type="text"name="link_button_download"></td>
		<td><input type="text"name="link_pdf"></td>
		<td><input type="text"name="category_article"></td>
		<td>NULL</td>
		<td><input class="w3-btn w3-green"type="submit"name="add"value="ajouter"></td>
		</form></tr>
		<?php
	$countArticles = 0;
	$sql = "SELECT * FROM articles";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
 
    while($row = mysqli_fetch_assoc($result)) {
        echo "<form action='../sql/articles.php'method='POST'>
		<tr>
		<td>" . $row["id_article"]."</td><input type='hidden'name='id_article'value='" . $row["id_article"]."'></td>
		<td>" . $row["nom_article"]."</td><input type='hidden'name='nom_article'value='" . $row["nom_article"]."'></td>
		<td>" . $row["description_article"]."</td><input type='hidden'name='description_article'value='" . $row["description_article"]."'></td>
		<td>" . $row["date_ajout_article"]."</td><input type='hidden'name='date_ajout_article'value='" . $row["date_ajout_article"]."'></td>
		<td><img src='" . $row["link_image_article"]."'width='100px'height='100px'></td><input type='hidden'name='link_image_article'value='" . $row["link_image_article"]."'></td>
		<td>" . $row["link_button_download"]."</td><input type='hidden'name='link_button_download'value='" . $row["link_button_download"]."'></td>
		<td>" . $row["link_pdf"]."</td><input type='hidden'name='link_pdf'value='" . $row["link_pdf"]."'></td>
		<td>" . $row["category_article"]."</td><input type='hidden'name='category_article'value='" . $row["category_article"]."'></td>
		<td><a href='javascript:void(0)'onclick='deleteArticle(" . $row["id_article"].")'><i  class='fa fa-trash' aria-hidden='true'></i></a></td>
		</tr></form>";
		$countArticles++;
	
	}
	} 
	mysqli_close($conn);
	echo "</table>";
	echo "<p>Il y a ".$countArticles." articles</p>";
	?>
	<input id='add'type='submit'name='add'value='ajouter'class="w3-btn w3-white w3-border">
	<div class="w3-panel"id="result"><!-- RESULTAT AJAX --></div>
	
	<?php
	if($displayAddArticle){
		$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Article ajouté<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;
	}
	?>
<script type="text/javascript">

	
	function hide(elem){
		
		$(elem).parent().addClass('w3-hide');
		}
	
	function deleteArticle(id_article){
		
			var data = 'id_article='+id_article;
				$.ajax({
				type : "GET",
				url : "../sql/remove_article.php",
				data : data,
				success : function(server_response){
					$("#result").html(server_response).show();
				}
				
			});
	};

	
	var $add = $('#add');

	$add.on('click', function(){
		$('#useraddForm').toggleClass('w3-hide');
		$('#useraddForm').css('width','100px');
		$('#td').css('width','100px');
			if($(this).attr('value')=="ajouter"){
				$(this).attr('value','annuler');
				
			}else{
				$(this).attr('value','ajouter');

			}
	});

	</script>
