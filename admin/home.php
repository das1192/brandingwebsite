<?php

require_once('../layouts/admin_header.php');


 ?>

<h2>WELCOME TO PHOTO-MANAGEMENT PANEL</h2>
<?php if(isset($message)){
  $output = "<div class=\"message2\">";
  $output .= $message;
  $output .="</div>";
  echo $output;
}
 ?>
<CENTER><p> CLICK CATEGORYS TO VIEW EXISTING PHOTOS </p></CENTER>
<CENTER><p> CLICK UPLOAD TO UPLOAD PHOTOS CATEGORY WISE </p></CENTER>
<center><img src="images/globe.gif" alt="globe"></center>

<?php

require_once('../layouts/admin_footer.php');


 ?>
