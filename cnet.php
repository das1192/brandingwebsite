<?php   
require_once("includes/initialize.php");


/* 

This is Computer Networking page id :5

ids:
1 cctv
2 Access Control and Attendance
3 Public Allowance and Conference
4 PABX and IP PABX
5 Computer Networking
6 Fire Fighting & Control
7 Video Door & Home Automation
8 Printer Toner & Catridge
9 ID card printing


*/

$id=5;

// 1 the current page number

$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1 ;

// per page content
$per_page = 12;
// total number of images available in that category
$total_count = count_images_by_category_id($id);

// constructing pagination with above details
$paginations = new Pagination($page, $per_page, $total_count);

// sql for getting page wise data
$sql  = "SELECT * FROM product_images  WHERE category_id ={$id} ORDER BY id ASC ";
$sql .="LIMIT {$per_page} ";
$sql .="OFFSET {$paginations->offset()}";
$product_images =  $database->query($sql);

require_once("layouts/product_header.php"); ?>
<?php 

// client  logo id
$bannerid =10;
// Core brand id
$principalid =11;

$banners= find_images_by_category_id($bannerid);
$principals = find_images_by_category_id($principalid);
$image_folder = "product_images";

?>


<div class="container">

<section class="topic">
<div class="jumbotron" style="background-image:url(product_page_banner/05.jpg);">

</div>

</section>


<!-- ABOUT US section -->
<section class="our-cause section-padding text-center" id="aboutus">
  <div class="container">
    <div class="cause-title">
      <div class="section-title title"><h2>Computer <span>Networking</span></h2></div>
      <div><p>...............................</p>
            </div>
      </div>
    </div>
  </section>









<section class="products text-center">

    <div class="cause-title">
      <div class="section-title title" ><h2><span>PRODUCTS</span></h2>
      </div>
    </div>



	
<div class="row">

<?php foreach($product_images as $row){ 

  $output =  "<div class=\" col-6 col-sm-6 col-md-3 col-lg-3 border\">";
  $output .= "<div class=\"thumbnail bg\">";
  $output .=" <img  class=\"img-thumbnail\" ";
  $output .= "type=\"button\"  data-toggle=\"modal\" data-target=\".bs-example-modal-lg{$row['id']}\" "; 
  $output .="src=\"{$image_folder}/{$row['filename']}\" alt=\"{$row['filename']}\"  title=\"PREVIEW\"  >";
  $output .="</div>";
  $output .="  <div class=\"caption\">";
  $output .="<h3>{$row['caption']}</h3>";
  $output .="</div>";
  $output .="</div>";
  echo $output;

?>
 

<!-- Modal -->

<div class="modal fade bs-example-modal-lg<?php echo "{$row['id']}";?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-default close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo "{$row['caption']}"; ?></h4>
      </div>
      <div class="modal-body">

      <div class="window row">
        <div class="col-sm-6 col-md-6 col-lg-6 "><img src="<?php echo "{$image_folder}/{$row['filename']}\" alt=\"{$row['filename']}\" " ?>" width="100%" height="280px"></div>
        <div class="col-sm-6 col-md-6 col-lg-6 ">
          <h3 class="specification-title">SPECIFICATIONS </h3>
            <pre><?php echo "{$row['specifications']}"; ?></pre>
        </div>
      </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> <!-- End MODAL -->


<?php } ?>









</div> <!-- end of row -->

</section> <!-- end of product section -->

<section class="container">

<nav aria-label="..."><ul class="pagination pagination-lg">


            <?php 
                    if($paginations->total_pages() > 1) {

                         if ($paginations->has_previous_page()) {
                          echo "<li>";
                          echo "<a href=\"cctv.php?page=";
                          echo $paginations->previous_page();
                          echo " \"> &laquo PREVIOUS</a>";
                          echo "</li>";

                      }

                        for($i=1;$i <=$paginations->total_pages();$i++){
                           
                           if($i==$page){
                                echo "<li>";
                                echo "<span class=\"selected\">{$i}</span>";
                                echo "</li>";
                           }
                             else{
                             echo "<li>";
                             echo " <a href=\"cctv.php?page={$i}\">{$i}</a> ";
                             echo "</li>";
                           }
                        }


                      if($paginations->has_next_page()) {
                           echo "<li>";
                           echo "<a href=\"cctv.php?page=";
                           echo $paginations->next_page();
                           echo " \"> NEXT &raquo</a>";
                          echo "</li>";

                      }


                      
                    }





            ?>


</ul></nav>

</section>




<hr>





</div> <!-- end container -->



<!--Client section Start -->
<section class="our-sponsors section-padding text-center" style="background-color: #FFF;" id="clients">
      <div class="container">
        
          <div class="section-title title"><h2><span>OUR KEY CLIENTS</span></h2></div>
        
        <ul class="sponsors-slider">
                        <?php 

                            while ($banner=$database->fetch_array($banners)) {
                                
                             $logo =  "<li><figure><img src=\"{$image_folder}/{$banner['filename']}\" alt=\"{$banner['filename']}\" ></figure></li> ";

                                echo $logo;
                            }
                            ?> 

                    
        </ul>
      </div>
    </section>
    <!-- our-clients section end -->


<!--Client Principals Start -->
<section class="our-sponsors section-padding text-center" style="background-color: #FFF;" id="clients">
      <div class="container">
        
          <div class="section-title title"><h2><span>OUR CORE BRAND</span></h2></div>
        
        <ul class="sponsors-slider">
                        <?php 

                            while ($principal=$database->fetch_array($principals)) {
                                
                             $logo =  "<li><figure><img src=\"{$image_folder}/{$principal['filename']}\" alt=\"{$principal['filename']}\" ></figure></li> ";

                                echo $logo;
                            }
                            ?> 

                    
        </ul>
      </div>
    </section>
    <!-- our-principals section end -->







<?php   require_once("layouts/product_footer.php"); ?>