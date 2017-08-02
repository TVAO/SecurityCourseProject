<?php
// Disable error reporting to avoid giving the adversary useful information about the system that may be exploited 
error_reporting(~0); 
require_once("ssas.php");
$ssas = new Ssas();
$ssas -> logout();
header("Location: index.php");
?>
