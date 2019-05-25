<?php
require_once("../includes/initialize.php");
if (!$session->is_logged_in()) { redirect_to("login.php");}	
$category = select_all_category();



if (isset($_GET['id']) && $_GET['category_id']) {
	

	$id = $database->escape_value($_GET['id']);
	$category_id = $database->escape_value($_GET['category_id']);

	if($unlink = find_image_by_id($id)){

	$value =unlink("../"."product_images/"."{$unlink['filename']}");
	
	if($value==true){
	$sql = "DELETE FROM product_images WHERE ID ={$id}";

	global $database;

	$result = $database->query($sql);
	$session->message("PHOTO DELETE SUCCESSFULL !!");
	//reset_id();
	redirect_to("view.php?id={$category_id}");
}

	else{
			$sql = "DELETE FROM product_images WHERE ID ={$id}";

		    global $database;

		    $result = $database->query($sql);
		  
			$session->message("DELETE SUCCESS WITH SOME ERROR REGARDING UNLINKING NOTE IDCODE:{$id} & CONTACT DEVELOPER IF POSSIBLE !!");
			 redirect_to("view.php?id={$category_id}");
			
	}
}


	
	$session->message("THERE WAS SOME ERROR !!");
		redirect_to("home.php");

}



?>