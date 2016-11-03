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

$display_in_time = "SELECT id_category_time, category_time_name FROM category_time";
$category_durees = mysqli_query($bdd, $display_in_time);
$in_time = null;

if (mysqli_num_rows($category_durees) > 0) {
    // output data of each row
	$y=0;
    while($time = mysqli_fetch_assoc($category_durees)) {
//CREER LA PAGINATION
$in_time[$y]['id'] = $time['id_category_time'];
$in_time[$y]['name'] = $time['category_time_name'];
$y++;
    }
} else {
    echo "erreur input durée";
}

mysqli_close($bdd);
?>
