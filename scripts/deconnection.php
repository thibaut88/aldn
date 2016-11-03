<?php
session_start();
session_destroy();
$redirect = "../Association/Redirect";
header("Location: $redirect");	
?>