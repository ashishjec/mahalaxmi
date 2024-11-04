<?php 

$name = $_GET['name'];
$id = $_GET['id'];
$table_name = 'businesses';

//Select Homepage Title
$select= "SELECT * FROM `$table_name` WHERE bus_type = 'BusinessEdit$name'";
$sql=$dbconn->prepare($select);
$sql->execute();
$wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd as $rows);

// For Displaying the table

if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name where status = 'Active' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name where status = 'Active' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
 
 
 
 
// For Displaying the table




if(isset($_POST['submit'])){
  
  $field1    =  $_POST['name'];
  $field2    =  $_POST['email'];
  $field3    =  $_POST['phone'];
  $field4    =  $_POST['department'];
  $field5    =  $_POST['message'];
  $field6    =  $_POST['field6'];
  $field7    =  $_POST['field7'];
  $field8    =  $_POST['field8'];
  $field9    =  $_POST['field9'];
  $field10    =  $_POST['field10'];


   
  
 
   $insert_bookings = "INSERT `$table_name` SET
   
  bus_type = 'BusinessEnquiry',
  bus_name   = 'BusinessEdit$name',
  bus_icon1_desc   = '".addslashes($field1)."',
  bus_icon2_desc   = '".addslashes($field2)."',
  bus_icon3_desc   = '".addslashes($field3)."',
  bus_icon4_desc   = '".addslashes($field4)."',
  bus_icon1_image   = '".addslashes($field5)."',
  status   = 'Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  //header("Location: index.php?page=Thanks");
  //echo '<script type="text/javascript">alert("Data has been submitted to ' . $to . '");</script>';
  echo '<script type="text/javascript">sweetAlert("Thank you for contacting. ", "We shall contact you soon!",  "success")</script>';
  
  
   


  
    
}

?>





<style type="text/css">
	 

 

.card1 {
  position: relative;
  top: 0;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.21);
   
  margin: 10px;
  -webkit-transition: all 1s ease;/* WebKit */
  -moz-transition: all 1s ease;/* Firefox */
  -o-transition: all 1s ease;/* Opera */
  transition: all 1s ease;/* Standard */
}

.card1:hover {
  top: -05px;
  border-radius: 0px;
}




</style>


<style type="text/css">
    /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 220px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */

}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #fff;
  color: black;
  border-color: #0445e0;
  border-style: solid;
  border-size: 1px;
  padding: 10px;
}

/* Style the back side */
.flip-card-back {
  background-color: #fff;
  color: white;
  transform: rotateY(180deg);
  border-color: #0445e0;
  border-style: solid;
  border-size: 1px;
  padding: 10px;
}
</style>



<style type="text/css">
   .image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>




<div class="" style="background-image: url('assets/img/bg13.png');">
<section class="section" style='text-align:center; background-image: url("assets/img/company/<?php echo $rows->bus_image ;?>");' >
    <div class="container" style="padding-top: 200px;padding-bottom: 200px;text-align:center;">
        <span style="font-family:Poppins; font-size: 45px; color:#fff"><?php echo $rows->bus_name ;?></span>
     </div>
</section>

 
<div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
You Are Here > <a href="index.php?page=Group-Of-Verticals" style="color:#000;">Group Of Verticals</a> > <a style="color:#000;" href="index.php?page=SingleBusiness&name=<?php echo $name?>"><?php echo $name?></a>
</div>
  
<section class="section " style="background-image: url('assets/img/bg13.png');">
    <div class="container animate__animated animate__slideInLeft animate__delay-1s" style="padding-top: 0px;padding-bottom: 50px;text-align:center;">
    	
    	<div class="row">
    		
    		<div class="col-md-7" style="padding-bottom:20px; padding-top:20px ; text-align: justify;">
                <div class="card1 p-5" style="padding:20px;  text-align: justify;">
    			<span style="font-family:Poppins; font-size: 25px; color:#000">Mahalaxmi <?php echo $rows->bus_name ;?></span>
    			<br>
    			<br>
    			<span style="font-family:Poppins; font-size: 14px; color:#000; ">
    			
                    <?php echo $rows->bus_desc ;?>

    			</span>
            </div>
    			 
    		</div>


            <div class="col-md-5">
                    
                    <!--   FLIPBOX REMOVED STARTS
                    <div class="row">
                        <div class="col-md-4">
                            <div class="flip-card">
                              <div class="flip-card-inner" >
                                <div class="flip-card-front" style="border-radius: 1px 60px 1px 60px;vertical-align: middle;text-align: center; padding-top: 70px; background-image: linear-gradient( 135deg, #FDEB71 10%, #F8D800 100%);border-color: #fff;">
                                  <span style="font-family:Poppins; font-size: 30px; font-weight:500">Fact 1</span>
                                </div>
                                <div class="flip-card-back" style="border-radius: 1px 60px 1px 60px ;">
                                  <h2>Fact 1</h2>
                                  <p>1000+ Numbers imported during the last financial year. This made a history and several awards recieved.</p>
                                  
                                </div>
                              </div>
                            </div>

                        </div>

                        <div class="col-md-3"></div>


                        <div class="col-md-4" style="padding-top:40px">
                            <div class="flip-card">
                              <div class="flip-card-inner" >
                                <div class="flip-card-front" style="border-radius: 1px 60px 1px 60px;vertical-align: middle;text-align: center; padding-top: 70px; background-image: linear-gradient( 135deg, #ABDCFF 10%, #0396FF 100%);
                                    border-color: #fff;">
                                  <span style="font-family:Poppins; font-size: 30px; font-weight:500">Fact 2</span>
                                </div>
                                <div class="flip-card-back" style="border-radius: 1px 60px 1px 60px ;">
                                  <h2>Fact 2</h2>
                                  <p>1000+ Numbers imported during the last financial year. This made a history and several awards recieved.</p>
                                  
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                    -->
                    
                    

                    <!--   FLIPBOX REMOVED STARTS
                    <div class="row">
                        <div class="col-md-4">
                            <div class="flip-card">
                              <div class="flip-card-inner" >
                                <div class="flip-card-front" style="border-radius: 1px 60px 1px 60px;vertical-align: middle;text-align: center; padding-top: 70px; background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%);border-color: #fff;">
                                  <span style="font-family:Poppins; font-size: 30px; font-weight:500">Fact 3</span>
                                </div>
                                <div class="flip-card-back" style="border-radius: 1px 60px 1px 60px ;">
                                  <h2>Fact 3</h2>
                                  <p>1000+ Numbers imported during the last financial year. This made a history and several awards recieved.</p>
                                  
                                </div>
                              </div>
                            </div>

                        </div>

                        <div class="col-md-3"></div>


                        <div class="col-md-4" style="padding-top:40px">
                            <div class="flip-card">
                              <div class="flip-card-inner" >
                                <div class="flip-card-front" style="border-radius: 1px 60px 1px 60px;vertical-align: middle;text-align: center; padding-top: 70px; background-image: linear-gradient( 135deg, #81FBB8 10%, #28C76F 100%);
                                    border-color: #fff;">
                                  <span style="font-family:Poppins; font-size: 30px; font-weight:500">Fact 4</span>
                                </div>
                                <div class="flip-card-back" style="border-radius: 1px 60px 1px 60px ;">
                                  <h2>Fact 4</h2>
                                  <p>1000+ Numbers imported during the last financial year. This made a history and several awards recieved.</p>
                                  
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                    
                    -->
                    
                    
                    <div class="row" style="margin-top:12px;text-align:center">
                        <!--
                        <div class="col-md-12" style="font-size:18px; color:#000; font-family:Poppins">
                            <?php echo $rows->bus_icon_title ;?>
                        </div>
                        
                        -->
                        
                        <?php
                        $iconX1 = $rows->bus_icon1_desc ;
                        $iconX2 = $rows->bus_icon2_desc ;
                        $iconX3 = $rows->bus_icon3_desc ;
                        $iconX4 = $rows->bus_icon4_desc ;
                        ?>
                        
                        
                        <div class="col-md-6  p-2 " style="text-align:center">
                            <div class="card shadow-lg card1" style="height:200px; border-radius:10px; color:#000; font-family:Poppins; font-size:13px; padding:19px;text-align:center">
                                 <img src="assets/img/company/<?php echo $rows->bus_icon1_image ;?>" height="100px" width="100px" style="<?php if($browser == 'Desktop'){echo 'margin-left:15%';}else{echo 'margin-left:35%';} ?>"><br>
                                 <?php echo $rows->bus_icon1_desc ;?>
                            </div>
                        </div>
                         <?php
                         if($iconX2 != ''){
                             ?>
                             <div class="col-md-6  p-1 " style="">
                            <div class="card shadow-lg card1" style="height:200px; border-radius:10px; color:#000; font-family:Poppins; font-size:13px; padding:19px; ">
                                 <img src="assets/img/company/<?php echo $rows->bus_icon2_image ;?>" height="100px" width="100px" style="<?php if($browser == 'Desktop'){echo 'margin-left:15%';}else{echo 'margin-left:35%';} ?>"><br>
                                 <?php echo $rows->bus_icon2_desc ;?>
                            </div>
                        </div>
                             <?php
                         }else{
                             
                         }
                         
                         ?>
                        
                        
                        <?php
                        if($iconX4 != ''){
                            ?>
                            <div class="col-md-6  p-1 ">
                            <div class="card shadow-lg card1" style="height:200px; border-radius:10px; color:#000; font-family:Poppins; font-size:13px; padding:19px">
                                 <img src="assets/img/company/<?php echo $rows->bus_icon4_image ;?>" height="100px" width="100px" style="<?php if($browser == 'Desktop'){echo 'margin-left:15%';}else{echo 'margin-left:35%';} ?>"><br>
                                 <?php echo $rows->bus_icon4_desc ;?>
                            </div>
                        </div>
                            <?php
                        }else{
                            
                        }
                        ?>
                         
                         
                    </div>
            </div>
    	</div>

  <!--      

        <div class="row" style="padding-top: 50px; padding-bottom: 0px; padding-right: 2px;">

                <div class="col-md-12" style="text-align:center">
                    <span style="font-family:Poppins; font-size:30px; color:#000">Group Companies</span>
                </div>
                     
                    <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon1.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Mahalaxmi Continental Ltd.
                    </div>
                      
                    <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon2.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Mahalaxmi Associates Pvt. Ltd.
                    </div>
                      
                     <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon3.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Mahalaxmi India Pvt. Ltd.
                    </div>
                      
                       
                      
                       <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon4.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Maa Kamakhya Coke Industries
                    </div>


                      <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon5.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Pride Coke Pvt. Ltd.
                    </div>
                      
        </div>
-->

<div class="row" style="padding-top:50px">
    <div class="col-md-5">
            <div style="text-align:left">
         <span style="font-family:Poppins; font-size: 25px; color:#000">Our Presence</span><br><br>
         </div>
        <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="flex-sm-fill text-sm-center nav-link active" id="national-tab" data-bs-toggle="tab" data-bs-target="#national" type="button" role="tab" aria-controls="home" aria-selected="true" style="width:200px;  border-color:#fff" onclick="national()">INDIA</button>
          </li>
          
          
          <?php 
             
             $select_enquiry14A = "SELECT * FROM $table_name where  bus_extra = 'International-Description' and bus_type   = 'BusinessLocation' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id asc ";
            $sql14A=$dbconn->prepare($select_enquiry14A);
             $sql14A->execute();
             $wlvd14A=$sql14A->fetchAll(PDO::FETCH_OBJ);
             foreach($wlvd14A as $rows14A)
            $fieldAAAA = $rows14A->id;
            
            
            if($fieldAAAA == ''){
                
            }else{
             
            
            ?>
           
          <li class="nav-item" role="presentation">
            <button class="flex-sm-fill text-sm-center nav-link" id="international-tab" data-bs-toggle="tab" data-bs-target="#international" type="button" role="tab" aria-controls="profile" aria-selected="false" style="width:200px;  border-color:#fff" onclick="global()">GLOBAL</button>
          </li>
          <?php } ?>
          
           
           
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="national" role="tabpanel" aria-labelledby="home-tab">
             <div class="card p-3 shadow-md" style="text-align:justify">
                 <?php 
             
             $select_enquiry14 = "SELECT * FROM $table_name where  bus_extra = 'National-Description' and bus_type   = 'BusinessLocation' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id asc ";
            $sql14=$dbconn->prepare($select_enquiry14);
             $sql14->execute();
             $wlvd14=$sql14->fetchAll(PDO::FETCH_OBJ);
             foreach($wlvd14 as $rows14)
            $fieldAAA = $rows14->bus_desc;
            echo "$fieldAAA";
             
            
            ?>
                 
                 </div>
             
             <div class="accordion accordion-flush" id="accordionFlushExample" >
             <?php 
             
             $select_enquiry11 = "SELECT * FROM $table_name where  bus_extra = 'National' and bus_type   = 'BusinessLocation' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id asc ";
            $sql11=$dbconn->prepare($select_enquiry11);
             $sql11->execute();
             $wlvd11=$sql11->fetchAll(PDO::FETCH_OBJ);
                         if($sql11->rowCount() > 0){
  
                foreach($wlvd11 as $rows11){
            $fieldA = $rows11->id;
            $fieldB = $rows11->bus_desc;
            $fieldC = $rows11->bus_extra;
            $fieldD = $rows11->bus_icon_title;
             
            
            ?>
            
            
            
              
                     <div class="accordion-item" style="padding-top:10px; padding-bottom:10px">
                    <h2 class="accordion-header" id="flush-<?php echo $fieldA?>">
                      <button class="btn btn-primary btn-md btn-block accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $fieldA?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $fieldA?>">
                        <?php echo $fieldB?>
                      </button>
                    </h2>
                    <div id="flush-collapseOne<?php echo $fieldA?>" class="accordion-collapse collapse" aria-labelledby="flush-<?php echo $fieldA?>" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body" style="text-align:justify"><?php echo $fieldD?></div>
                    </div>
                    </div>
            
            
             
             <?php }} ?>
             </div>

            </div>
          <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="profile-tab">
              
             <div class="card p-3 shadow-md" style="text-align:justify">
                 <?php 
             
             $select_enquiry14 = "SELECT * FROM $table_name where  bus_extra = 'International-Description' and bus_type   = 'BusinessLocation' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id asc ";
            $sql14=$dbconn->prepare($select_enquiry14);
             $sql14->execute();
             $wlvd14=$sql14->fetchAll(PDO::FETCH_OBJ);
             foreach($wlvd14 as $rows14)
            $fieldAAA = $rows14->bus_desc;
            echo "$fieldAAA";
             
            
            ?>
             </div>
             
             
             <div class="accordion accordion-flush" id="accordionFlushExample" >
             <?php 
             
             $select_enquiry12 = "SELECT * FROM $table_name where  bus_extra = 'International' and bus_type   = 'BusinessLocation' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id asc ";
            $sql12=$dbconn->prepare($select_enquiry12);
             $sql12->execute();
             $wlvd12=$sql12->fetchAll(PDO::FETCH_OBJ);
                         if($sql12->rowCount() > 0){
  
                foreach($wlvd12 as $rows12){
            $fieldA1 = $rows12->id;
            $fieldB1 = $rows12->bus_desc;
            $fieldC1 = $rows12->bus_extra;
             $fieldD1 = $rows11->bus_icon_title;
             
            
            ?>
             
             
                     <div class="accordion-item" style="padding-top:10px; padding-bottom:10px">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="btn btn-primary btn-md btn-block accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $fieldA1?>" aria-expanded="false" aria-controls="flush-collapseOne">
                        <?php echo $fieldB1?>
                      </button>
                    </h2>
                    <div id="flush-collapseOne<?php echo $fieldA1?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body" style="text-align:justify"><?php echo $fieldD?></div>
                    </div>
                    </div>
            
             
             <?php }} ?>
             </div>
          </div>
        </div>
    </div>
     
    <div class="col-md-7" style="text-align:center">
         
        <img src="assets/img/company/<?php echo $rows->bus_extra ;?>" height="" width="" id="getImage"><br>
    </div>
</div>


<script>
        function national() {
            var Image_Id = document.getElementById('getImage');
            if (Image_Id.src.match("assets/img/company/<?php echo $rows->bus_extra ;?>")) {
                Image_Id.src = "assets/img/company/<?php echo $rows->bus_extra ;?>";
            }
            else {
                Image_Id.src = "assets/img/company/<?php echo $rows->bus_extra ;?>";
            }
        }function global() {
            var Image_Id = document.getElementById('getImage');
            if (Image_Id.src.match("assets/img/company/<?php echo $rows->bus_extra2 ;?>")) {
                Image_Id.src = "assets/img/company/<?php echo $rows->bus_extra2 ;?>";
            }
            else {
                Image_Id.src = "assets/img/company/<?php echo $rows->bus_extra2 ;?>";
            }
        }        
    </script>


<!--<div class="row" style="padding-top:50px; padding-bottom:50px">-->
<!--    <div style="text-align:left">-->
<!--         <span style="font-family:Poppins; font-size: 25px; color:#000">Companies</span><br><br>-->
<!--         </div>-->


         <!--i make Companies header comment because right now we dont need this -->
         
         <div class="row">
    <?php
    $select111 = "SELECT * FROM $table_name where   bus_type   = 'BusinessCompany' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id desc";
    $sql111=$dbconn->prepare($select111);
     $sql111->execute();
     $wlvd111=$sql111->fetchAll(PDO::FETCH_OBJ);
    if($sql111->rowCount() > 0){
      
        foreach($wlvd111 as $rows111){
    $fieldx = $rows111->id;
    $fieldy = $rows111->bus_desc;
    $fieldz = $rows111->bus_extra;
    $fieldw = $rows111->bus_image;
    ?>
    <div class="<?php echo $fieldz?>" style="text-align:center; color:#000; font-family:Poppins; font-size:13px; text-align:justify">
        <div class="card1 p-3">
        <img src="assets/img/company/<?php echo $fieldw ;?>">
        <br>
        <?php echo $fieldy?>
        </div>
        </div>
    <?php }} ?> 
    </div>
</div>

<br/><br/>

<div class="row" style="margin-top:50px">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="text-align:center">
        <button type="button" class="btn btn-primary btn-lg btn-block"  data-toggle="modal" data-target="#exampleModal">Get in touch</button>
    </div>
    <div class="col-md-4"></div>
</div>

<br/><br/>

<!--<div class="row" >-->
<!--    <div class="col-md-12" style="text-align:center; padding-top:50px; padding-bottom:10px">-->
<!--   <span style="font-family:Poppins; font-size: 25px; color:#000">More About Mahalaxmi <?php echo $name?></span> -->
<!--   </div>-->
<!--</div>-->                   <!--i make Companies header comment because right now we dont need this -->


<div class="row">
    
     <?php
    $select1111 = "SELECT * FROM $table_name where bus_type = 'BusinessMedia' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id asc";
    $sql1111=$dbconn->prepare($select1111);
     $sql1111->execute();
     $wlvd1111=$sql1111->fetchAll(PDO::FETCH_OBJ);
    if($sql1111->rowCount() > 0){
      
        foreach($wlvd1111 as $rows1111){
    $fieldx1 = $rows1111->id;
    $fieldy1 = $rows1111->bus_desc;
    $fieldz1 = $rows1111->bus_extra;
    $fieldw1 = $rows1111->bus_image;
    $fieldt1 = $rows1111->bus_link;
    ?>
    <div class="<?php echo $fieldz1 ;?> card1" style="background-image:url('assets/img/company/<?php echo $fieldw1 ;?>'); height: 400px;  ">
        <div class="row">
            <a href="index.php?page=verticalsBlogs&id=<?php echo $fieldx1; ?>&name=<?php echo $name; ?>">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; text-align: left;color: #fff;">
                    <?php echo $fieldy1 ;?>
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px"><?php echo $fieldt1 ;?><br></p>
            </div>
            </a>
        </div>
    </div>
    
    <?php }} ?>

    


     
       
       
       
</div>



       
      
 </div>
</section>

<!-- Button trigger modal -->
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get in touch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form method="POST">
      <div class="modal-body">
       
            <div class="row p-2" style="background-color:#fff">
               
                
                 
                
                    <div class="col-md-12 p-1">
                        <label style="font-size:13px; color:#000">Your Name:</label>
                         <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>

                
                    <div class="col-md-12 p-1">
                        <label style="font-size:13px; color:#000">Your Email:</label>
                         <input type="email" name="email" class="form-control" placeholder="Your Email">
                    </div>

                    <div class="col-md-12 p-1">
                        <label style="font-size:13px; color:#000">Your Phone:</label>
                         <input type="number" name="phone" class="form-control" placeholder="Your Phone">
                    </div>

                    <div class="col-md-12 p-1">
                        <label style="font-size:13px; color:#000">Query Type:</label>
                         <select name="department" class="form-control">
                             <option value="">---Select Department---</option>
                             <option >General Enquiry</option>
                             <option >Purchase Enquiry</option>
                             <option >Sale Enquiry</option>
                             <option >Trade Enquiry</option>
                             <option >Other Enquiry</option>
                         </select>
                    </div>
                    <div class="col-md-12 p-1">
                        <label style="font-size:13px; color:#000">Your Message:</label>
                        <textarea name="message" class="form-control" placeholder="Write Your Message"></textarea>
                    </div>
                    <div class="col-md-12" style="margin-top:20px"></div>
                     

                    <div class="col-md-12" style="margin-top:20px"></div>
                    

                

                     
                
                 
           </div>  
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" value="Submit" class="btn btn-primary">Submit</button>
         
        </form>
      </div>
    </div>
  </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
