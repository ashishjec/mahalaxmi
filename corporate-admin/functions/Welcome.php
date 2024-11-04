<?php
 
 if ($master_user_role != 'Customer') {
   header("Location: index.php?action=Dashboard");
 }
 
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
       

      <!--Start Dashboard Content-->

     <div class="row mt-3">
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-deepblue">
           <div class="card-body">
              <h5 class="text-white mb-0"><?php echo "$total_pages"; ?> <span class="float-right"><i class="fa fa-file-text"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Pages <span class="float-right"><i class="zmdi zmdi-long-arrow-right"></i></span></p>
            </div>
         </div> 
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="text-white mb-0"><?php echo "$total_products"; ?> <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Product/Services <span class="float-right"> <i class="zmdi zmdi-long-arrow-right"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ohhappiness">
            <div class="card-body">
              <h5 class="text-white mb-0"><?php echo "$total_gallery"; ?> <span class="float-right"><i class="fa fa-picture-o"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Gallery Items <span class="float-right"><i class="zmdi zmdi-long-arrow-right"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ibiza">
            <div class="card-body">
              <h5 class="text-white mb-0"><?php echo "$total_messages"; ?> <span class="float-right"><i class="fa fa-commenting-o"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Messages <span class="float-right"><i class="zmdi zmdi-long-arrow-right"></i></span></p>
            </div>
         </div>
       </div>
     </div><!--End Row-->

	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
		 <div class="card-header">Recent Messages
		   
		 </div>
		 <div class="card-body">
		        <div class="table-responsive">
               
                <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center"> ID</th>
                        <th class="center"> Name</th>
                        <th class="center"> Email</th>
                        <th class="center"> Phone</th>
                         
                          
                      </tr>
                    </thead>
                    <tbody>
     <?php
     
 $select_bookings= "SELECT * FROM `website_queries` WHERE web_que_id = '$website_real_id' order by id desc limit 7";
 $sql885=$dbconn->prepare($select_bookings);
 $sql885->execute();
 $wlvd885=$sql885->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd885 as $rows885);     

//while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
//{ 
if($sql885->rowCount() > 0){
  
    foreach($wlvd885 as $rows885){
$field1 = $rows885->id;
$field2 = $rows885->web_que_name;
$field3 = $rows885->web_que_email;
$field4 = $rows885->web_que_mobile;





 
?>                  
                      <tr>
                      <td class="center"><?php echo $field1;?></td>
                      <td class="center"><?php echo $field2;?></td>
                      <td class="center"><?php echo $field3;?></td>
                      <td class="center"><?php echo $field4;?></td>
                      
                      
                     </tr> 

                      <?php }} ?>
                     </tbody> 
                     
                  </table>

                   
                
        </div>
		 </div>
		 
	 
		 
		</div>
	 </div>

     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Your Plan Details
             <div class="card-action">
              
             </div>
           </div>
           <div class="card-body">
              <div class="chart-container-2">
                 <span style="color:#000; font-size:15px"><strong>Website Type</strong>: <?php echo $website_real_type; ?></span> <br>
                 <span style="color:#000; font-size:15px"><strong>Website Registered</strong>: <?php echo $website_real_registration; ?></span> <br>
                 <span style="color:#000; font-size:15px"><strong>Website Expiry</strong>: <?php echo $website_real_expiry; ?></span> <br>
                  <br>
                  
                  <!----Countdown Script ---->
                  <h3 style ="text-align:center;">Time Left For Expiry</h3>
                  <p style ="text-align:center; font-size:30px; color:red;" id="demo"></p>
                  <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("<?php echo $website_real_expiry; ?> 00:00:00").getTime();
                    
                    // Update the count down every 1 second
                    var x = setInterval(function() {
                    
                      // Get today's date and time
                      var now = new Date().getTime();
                        
                      // Find the distance between now and the count down date
                      var distance = countDownDate - now;
                        
                      // Time calculations for days, hours, minutes and seconds
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        
                      // Output the result in an element with id="demo"
                      document.getElementById("demo").innerHTML = days + "Days " + hours + "h "
                      + minutes + "m " + seconds + "s ";
                        
                      // If the count down is over, write some text 
                      if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                      }
                    }, 1000);
                </script>
                  
                  <!----Countdown Script Ends--->
                  
                  
			  </div>
			  
           </div>
            
         </div>
     </div>
	</div><!--End Row-->
	
   
     
  
  

      <!--End Dashboard Content-->
       <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->