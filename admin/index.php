<?php 
require_once("../includes/initialize.php");
if($session->is_logged_in()) {
redirect_to("home.php");
$message ="";
}
else{

	redirect_to("login.php");
}




?>