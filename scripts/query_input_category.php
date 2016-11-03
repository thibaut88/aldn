<?php
// A FINIR
// user_pseudo , user_pass , user_cpass , user_addresse , user_city , user_cp , user_email ,user_firstname , user_lastname
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "aldn2";

// Create connection
$bdd = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
?>
<?php
if (!$bdd) {
    die("Connection failed: " . mysqli_connect_error());
}

$select_input_categories = "SELECT id_category_offer, category_name FROM category_offers";
$category_offers = mysqli_query($bdd, $select_input_categories);
$in_cat = array();
if (mysqli_num_rows($category_offers) > 0) {
    // output data of each row
	$i=0;
    while($category = mysqli_fetch_assoc($category_offers)) {
	
//CREER LA PAGINATION

$in_cat[$i]['id'] = $category['id_category_offer'];
$in_cat[$i]['name'] = $category['category_name'];
$i++;
    }
} else {
    echo "erreur input categories";
}

mysqli_close($bdd);
?>
