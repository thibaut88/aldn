<?php
session_start();
session_unset();
session_destroy();
$redirect = "../Association/Redirect";
header("Location: $redirect");	
?>