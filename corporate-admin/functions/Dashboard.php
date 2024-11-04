<?php
 
  
 
$total_pages = 0;
$query881  = "SELECT COUNT(`id`) as pages_no FROM web_contents where web_type = 'Pages' and web_website_id = '$website_real_id' and status = 'Active'";
$sql881=$dbconn->prepare($query881);
$sql881->execute();
$wlvd881=$sql881->fetchAll(PDO::FETCH_OBJ);
if($sql881->rowCount() > 0){
	foreach($wlvd881 as $row881)
	{
		$total_pages = $row881->pages_no;
	}
}


$total_products = 0;
$query882  = "SELECT COUNT(`id`) as products_no FROM web_contents where web_type = 'Products-Services' and web_website_id = '$website_real_id' and status = 'Active'";
$sql882=$dbconn->prepare($query882);
$sql882->execute();
$wlvd882=$sql882->fetchAll(PDO::FETCH_OBJ);
if($sql882->rowCount() > 0){
	foreach($wlvd882 as $row882)
	{
		$total_products = $row882->products_no;
	}
}


$total_gallery = 0;
$query883  = "SELECT COUNT(`id`) as gallery_no FROM web_contents where web_type IN ('Photo-Gallery','Video-Gallery') and web_website_id = '$website_real_id' and status = 'Active'";
$sql883=$dbconn->prepare($query883);
$sql883->execute();
$wlvd883=$sql883->fetchAll(PDO::FETCH_OBJ);
if($sql883->rowCount() > 0){
	foreach($wlvd883 as $row883)
	{
		$total_gallery = $row883->gallery_no;
	}
}


$total_messages = 0;
$query884  = "SELECT COUNT(`id`) as message_no FROM website_queries where  web_que_id = '$website_real_id'";
$sql884=$dbconn->prepare($query884);
$sql884->execute();
$wlvd884=$sql884->fetchAll(PDO::FETCH_OBJ);
if($sql884->rowCount() > 0){
	foreach($wlvd884 as $row884)
	{
		$total_messages = $row884->message_no;
	}
}


?>


<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" style="text-align: center; font-size: 20px; color:#000; margin-bottom: 30px">Welcome <?php echo $master_user_name ?></div>
        <div class="col-md-12" style="text-align: center; font-size: 20px; color:#000; margin-bottom: 20px">Please use the left menu to update the website</div>

        
        <!--
        <div class="col-md-4" style="text-align: center; background-color: ">
          <a href="index.php?action=Books-Inventory">
          <div class="card" style="padding-top:40px; padding-bottom: 40px; padding-left:30px; padding-right:30px;  color:#000; background-color: #8EC5FC;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
            ">
            <span style="font-size: 20px">Browse Inventory</span>
           
          </div>
          </a>
        </div>


        <div class="col-md-4" style="text-align: center;">
          <a href="index.php?action=Issue-New-Book">
          <div class="card" style="padding-top:40px; padding-bottom: 40px; padding-left:30px; padding-right:30px; color: #000; background-color: #85FFBD;
              background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
              ">
              <span style="font-size: 20px">Browse Transactions</span>
              
              </div>
            </a>
        </div>

        
        <div class="col-md-4" style="text-align: center;">
          <a href="index.php?action=Books-Inventory">
          <div class="card" style="padding-top:40px; padding-bottom: 40px; padding-left:30px; padding-right:30px; color: #000; background-color: #FFDEE9;
            background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
            ">
            <span style="font-size: 20px">Browse Members</span>
            
            </div>
          </a>
        </div>
        
        -->

        
      </div>

      

     </div>



     <!--End Row-->

       <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->