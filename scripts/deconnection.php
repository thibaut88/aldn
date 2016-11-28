<?php
session_start();
session_unset();
session_destroy();
//Redirect =  alert index
$redirect = "../Association/Redirect";
header("Location: $redirect");	
?>