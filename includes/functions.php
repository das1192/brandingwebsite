<?php



function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}


function select_all_category(){


	global $database;
	  $sql = "SELECT * FROM category ";
	  $result = $database->query($sql);
	
	  return $result;


}

	function total_image_rows(){

	 global $database;
	  $sql = "SELECT * FROM product_images ";
	  $result = $database->query($sql);
	  $rownum = $database->num_rows($result);
	  return $rownum; 
	}

	function find_file_name($filename)
	{
		
	global $database;
	  $sql = "SELECT * FROM product_images WHERE filename = '{$filename}' ";
	 $result = $database->query($sql);
	 $data = $database->fetch_array($result);
	  return $data;

	}


	 function all_fetched_data($result){
	 	global $database ;
	 	while ($row=$database->fetch_array($result)){
	 		// nothing needed
	 	}

	 	return $row ;
	 }


 function find_image_by_id($id)
{		global $database;
	  $sql = "SELECT * FROM product_images ";
	  $sql .= "WHERE id ={$id}";
	  $result = $database->query($sql);
      $value = $database->fetch_array($result);

	  return $value;

}



function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}


function reset_id(){
	global $database;
	$sql = " SET @num := 0 ";
	$result = $database->query($sql);
    $sql = "UPDATE product_images SET id = @num := (@num+1) ";
    	$result = $database->query($sql);

    $sql ="ALTER TABLE product_images AUTO_INCREMENT =1  ";

	$result = $database->query($sql);


}


  function find_categoryname_by_id($id){


	global $database;
	  $sql = "SELECT * FROM category  WHERE id ={$id}";
	  $result = $database->query($sql);
	  $row = mysqli_fetch_assoc($result);	
	  return $row;





  }



  function find_categoryname_by_image_id($id){


	global $database;
	  $sql = "SELECT * FROM product_images  WHERE id ={$id}";
	  $result = $database->query($sql);
	  $data = mysqli_fetch_assoc($result);
	  $row = find_categoryname_by_id($data['category_id']);
	  return $row;


  }




	function size_as_text($size) {
		if($size < 1024) {
			return "{$size} bytes";
		} elseif($size < 1048576) {
			$size_kb = round($size/1024);
			return "{$size_kb} KB";
		} else {
			$size_mb = round($size/1048576, 1);
			return "{$size_mb} MB";
		}
	}



	function find_images_by_category_id($id){

		global $database;
	  $sql = "SELECT * FROM product_images  WHERE category_id ={$id}  ORDER BY id ASC";
	  $result = $database->query($sql);
	  return $result;


	}




	function count_images_by_category_id($id){

		global $database;
	  $sql = "SELECT COUNT(*) FROM product_images  WHERE category_id ={$id}";
	  $result = $database->query($sql);
	  $row  = $database->fetch_array($result);
	  return array_shift($row);


	}


	function max_id(){

		global $database;
	  $sql = "SELECT MAX(id) FROM product_images ;";
	  $result = $database->query($sql);
	  $row  = $database->fetch_array($result);
	  return array_shift($row);


	}





?>