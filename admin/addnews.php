<?php

require_once('../layouts/admin_header.php');
$category_rows = mysqli_num_rows($category);

$upload_errors = array(
	// http://www.php.net/manual/en/features.file-upload.errors.php
	UPLOAD_ERR_OK 				=> "No errors.",
  UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
  UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
  UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
  UPLOAD_ERR_NO_FILE 		=> "No file.",
  UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
  UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
  UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
);

$message ="";
	if(isset($_POST['submit'])) {
		// process the form data

		// form validation
		
		$max_field_length = array("title" => 18,"details" => 300);
		validate_max_length($max_field_length);





		if(empty($errors)){
		$tmp_file = $_FILES['file_upload']['tmp_name'];
		$target_file = basename($_FILES['file_upload']['name']);
		$upload_dir = "product_images_news";


		
		$title =$_POST['title'];
		$details= $_POST['details'];
		$date = date("Y-m-d");
		//$specifications = nl2br($specifications);
		$details = $database->escape_value($details);


		 if (!(substr($type,0,5) == "image")) {
			$message ="only Image Allowed";
		}


		else{

			 if(file_exists("../".$upload_dir."/".$target_file)){

			 	$existing = find_file_name($target_file);
			 	
			 	if($existing['filename'] == "{$target_file}");{
			 	$target_file = "{$imageRows}-".strftime("%d-%m-%Y-%H-%M-%S",time())."-".$target_file;
			     }
			  }
			  else{
			  		
			 	    $target_file = "newsimg-".strftime("%d-%m-%Y-%H-%M-%S",time())."-".$target_file;

			  }


			if(move_uploaded_file($tmp_file, "../". $upload_dir."/".$target_file)) {


				$filename = $target_file;


				$sql = "INSERT INTO product_images (category_id,filename,type,size,caption,specifications) " ;
				$sql .="VALUES ({$category_id},'{$filename}','{$type}','{$size}','{$caption}','{$specifications}')";

				global $database;

				$database->query($sql);



				$message = "File uploaded successfully.";

			} else {
				$error = $_FILES['file_upload']['error'];
				$message = $upload_errors[$error];
			}

		}	

	  } //end if empty errors
		$error_message = $errors;
	}
?>



<center><h2> + Upload Photo </h2></center>


				<h3 class="notification"><strong><center><?php echo output_message($message); ?></center></strong></h3>
		     	<?php  if(isset($error_message)){
		   		echo form_errors($error_message);
		   		}  ?>



  <form action="addnews.php" enctype="multipart/form-data" method="POST">
  

   <fieldset>
   <legend>Photo Details:</legend>


   <p> SELECT PHOTO : <input type="file" required="true" name="file_upload" > </p>


  <input type="hidden" name="MAX_FILE_SIZE" value="1000000" >



<p>

	*Title: <input type="text"  required name="title" placeholder="Title" value="" >

</p>

<p>
	News Details : </br>
	  <textarea name="details" rows="9" cols="50"  placeholder="Any details available?? if any then write it within max 300 charecters !! NOTE : THE FORMAT YOU WILL PUT HERE WILL BE SAME IN WEB-SITE , HTML TAGS CAN BE USED TO STYLE TEXTS EX: <STRONG> ,<i> " ></textarea>

</p>		  

<p>
	 <input type="submit" name="submit" value="Upload" onclick="return confirm('Are You Sure ?');" />			
</p>

  </fieldset>
  </form>















<?php

require_once('../layouts/admin_footer.php');


 ?>
