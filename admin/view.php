<?php
require_once('../layouts/admin_header.php');

if( !(isset($_GET['id'])) ) {
		
		 $session->logout();
        redirect_to("login.php");

	}

	else{

		$category_id = $_GET['id'];
		$category_id = $database->escape_value($category_id);
		$category_id =(int) $category_id;
		if($category_id > $database->num_rows($category)){
			 $session->logout();
        redirect_to("login.php");
		}
		$category_images = find_images_by_category_id($category_id);
		$category_name = find_categoryname_by_id($category_id);


	}

?>

<center><h2><?php if(isset($category_name)){echo strtoupper($category_name['category_name']);}   ?> PHOTOS </h2></center>
<?php if(isset($message)){
  $output = "<div class=\"message2\">";
  $output .= $message;
  $output .="</div>";
  echo $output;
}
 ?>
<table>
  <tr>
    <th>Image</th>
      <th>File Type</th>
     <th>Size</th>
      <th>Caption</th>
       <th>Specifications</th>
       <th>Option</th>
  </tr>
  
<?php while ($row=$database->fetch_array($category_images)) {
	echo "<tr>";
	echo "<td><img src=\"../product_images/{$row['filename']}\" width=\"180\"></td>";
	echo "<td>{$row['type']}</td>";
	echo "<td>{$row['size']}</td>";
	echo "<td>{$row['caption']}</td>";
	echo "<td style=\"overflow-x:auto;\">{$row['specifications']}</td>";
	
	$link = "<a href=\"edit.php?imageid={$row['id']}\"   onclick=\"return confirm('DO YOU WANT TO EDIT THE DETAILS ?');\" >EDIT</a>";
	$link  .= "/<a href=\"delete.php?id={$row['id']}&category_id={$category_id}\"   onclick=\"return confirm('Are You Sure TO DELETE The PHOTO ?');\" >DELETE</a>";

	echo "<td>{$link}</td>";
	echo "</tr>";

?>

<?php } ?>
</table>




















<?php

require_once('../layouts/admin_footer.php');


 ?>
