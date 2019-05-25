<?php
require_once('../layouts/admin_header.php');

if( !(isset($_GET['imageid'])) ) {
		
		 $session->logout();
        redirect_to("login.php");

	}

	else{

		$image_id = $_GET['imageid'];
		$image_id = $database->escape_value($image_id);
		
		$imageData =find_image_by_id($image_id);
		$category_name = find_categoryname_by_image_id($image_id);


	}


$message ="";
	if(isset($_POST['submit'])) {
		// process the form data

		// form validation
		$requierd_fields = array("caption");
		validate_presence($requierd_fields);
		$max_field_length = array("caption" => 25,"specifications" => 300);
		validate_max_length($max_field_length);


	 if(!($_FILES['file_upload']['error']==UPLOAD_ERR_NO_FILE))	{

		$value = unlink("../"."product_images/"."{$imageData['filename']}");

		if($value==true){
				$tmp_file = $_FILES['file_upload']['tmp_name'];
				$target_file = basename($_FILES['file_upload']['name']);
				$type = $_FILES['file_upload']['type'];
				$size = $_FILES['file_upload']['size'];
				$size = size_as_text($size) ;
				
				$upload_dir = "product_images";



				if (!(substr($type,0,5) == "image")) {
					$message ="only Image Allowed";
				}


				else{

							 if(file_exists("../".$upload_dir."/".$target_file)){

							 	$existing = find_file_name($target_file);
							 	$imageRows = $image_id;
							 	if($existing['filename'] == "{$target_file}");{
							 	//strftime("%d-%m-%Y-%H-%M-%S",time())
							 	$target_file ="{$imageRows}-".strftime("%d-%m-%Y-%H-%M-%S",time())."-".$target_file;
							     }
							  }
							  else{
							  $imageRows = $image_id;
							  $target_file ="{$imageRows}-".strftime("%d-%m-%Y-%H-%M-%S",time())."-".$target_file;
							}
							if(move_uploaded_file($tmp_file, "../". $upload_dir."/".$target_file)){

								$filename = $target_file;

								if(empty($errors)){



								$caption =$_POST['caption'];
								$specifications = $_POST['specifications'];
								//$specifications = nl2br($specifications);
								$specifications = $database->escape_value($specifications);		
								


										$sql = "UPDATE product_images " ;
										$sql .="SET ";
										$sql .="filename = '{$filename}', ";
										$sql .="size = '{$size}', ";
										$sql .="type = '{$type}', ";
										$sql .="caption = '{$caption}', ";
										$sql .="specifications = '{$specifications}' ";
										$sql .="WHERE id = {$image_id}  LIMIT 1 ";
										global $database;

										$database->query($sql);



										$message = "IMAGE & Details Updated successfully Reload The Page to See Changes.";






								}



							}

					} // end if submitted file is image
    	}// end if unlink success

    	else{


    			$tmp_file = $_FILES['file_upload']['tmp_name'];
				$target_file = basename($_FILES['file_upload']['name']);
				$type = $_FILES['file_upload']['type'];
				$size = $_FILES['file_upload']['size'];
				$size = size_as_text($size) ;
				
				$upload_dir = "product_images";



				if (!(substr($type,0,5) == "image")) {
					$message ="only Image Allowed";
				}


				else{

							 if(file_exists("../".$upload_dir."/".$target_file)){

							 	$existing = find_file_name($target_file);
							 	$imageRows = $image_id;
							 	if($existing['filename'] == "{$target_file}");{
							 	$target_file = "{$imageRows}-" .$target_file;
							     }
							  }


							if(move_uploaded_file($tmp_file, "../". $upload_dir."/".$target_file)){

								$filename = $target_file;

								if(empty($errors)){



								$caption =$_POST['caption'];
								$specifications = $_POST['specifications'];
								//$specifications = nl2br($specifications);
								$specifications = $database->escape_value($specifications);		
								


										$sql = "UPDATE product_images " ;
										$sql .="SET ";
										$sql .="filename = '{$filename}', ";
										$sql .="size = '{$size}', ";
										$sql .="type = '{$type}', ";
										$sql .="caption = '{$caption}', ";
										$sql .="specifications = '{$specifications}' ";
										$sql .="WHERE id = {$image_id}  LIMIT 1 ";
										global $database;

										$database->query($sql);



										$message = "IMAGE UPDATED SUCCESSFULLY WITH ERROR CODE 404 contact developer if possible";






								}



							}

					} 







    	}


     } //end if pic sumited

	else if(empty($errors)){
		$caption =$_POST['caption'];
		$specifications = $_POST['specifications'];
		//$specifications = nl2br($specifications);
		$specifications = $database->escape_value($specifications);		
		


				$sql = "UPDATE product_images " ;
				$sql .="SET ";
				$sql .="caption = '{$caption}', ";
				$sql .="specifications = '{$specifications}' ";
				$sql .="WHERE id = {$image_id}  LIMIT 1 ";
				global $database;

				$database->query($sql);



				$message = "Details Updated successfully Reload The Page to See Changes.";

					

	  } 
    else {
    	      $message = "Something went wrong !!."; 
    }
	  //end if empty errors
		$error_message = $errors;
} //end of is set


 ?>




<center><h2> + Edit Photo Details </h2></center>


				<h3 class="notification"><strong><center><?php echo output_message($message); ?></center></strong></h3>
		     	<?php  if(isset($error_message)){
		   		echo form_errors($error_message);
		   		}  ?>



  <form action="edit.php?imageid=<?php echo $image_id ?>" enctype="multipart/form-data"  method="POST">
  

   <fieldset>
   <legend>Photo Details:</legend>


   <p> <?php  echo "<img src=\"../product_images/{$imageData['filename']}\" width=\"150\">"; ?>   </p>



<p> CHANGE PHOTO : <input type="file" name="file_upload" > </p>


  <input type="hidden" name="MAX_FILE_SIZE" value="1000000" >

<p>



 

<p>

	*Caption: <input type="text" name="caption" value="<?php echo $imageData['caption'];?>">

</p>

<p>
	PRODUCT SPECIFICATIONS : </br>
	  <textarea name="specifications" rows="9" cols="50"  placeholder="Any details available?? if any then write it within max 300 charecters !! NOTE : REMOVE ALLL <br /> (if any) TAGS EVERY TIME YOU EDIT OR UPDATE" ><?php echo $imageData['specifications'];?></textarea>

</p>		  

<p>
	 <input type="submit" name="submit" value="EDIT" onclick="return confirm('Are You Sure ?');" />			
</p>

  </fieldset>
  </form>






















<?php

require_once('../layouts/admin_footer.php');


 ?>
