<?php 

//Select Homepage Title
$select= "SELECT * FROM `career` WHERE id = '1'";
$sql=$dbconn->prepare($select);
$sql->execute();
$wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd as $rows);


//Select Homepage Title
$select5= "SELECT * FROM `company` WHERE id = '4'";
$sql5=$dbconn->prepare($select5);
$sql5->execute();
$wlvd5=$sql5->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd5 as $rows5);

//Select Homepage Title
$select6= "SELECT * FROM `company` WHERE id = '6'";
$sql6=$dbconn->prepare($select6);
$sql6->execute();
$wlvd6=$sql6->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd6 as $rows6);


//Select Homepage Title
$select7= "SELECT * FROM `company` WHERE id = '7'";
$sql7=$dbconn->prepare($select7);
$sql7->execute();
$wlvd7=$sql7->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd7 as $rows7);


//Select Homepage Title
$select8= "SELECT * FROM `company` WHERE id = '8'";
$sql8=$dbconn->prepare($select8);
$sql8->execute();
$wlvd8=$sql8->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd8 as $rows8);


//Select Homepage Title
$select11= "SELECT * FROM `career` WHERE id = '2'";
$sql11=$dbconn->prepare($select11);
$sql11->execute();
$wlvd11=$sql11->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd11 as $rows11);

if(isset($_POST['submit'])){
  
  $field1    =  $_POST['name'];
  $field2    =  $_POST['email'];
  $field3    =  $_POST['number'];
  $field4    =  $_POST['id'];
  $field5    =  $_POST['field5'];
  $field6    =  $_POST['field6'];
  $field7    =  $_POST['field7'];
  $field8    =  $_POST['field8'];
  $field9    =  $_POST['field9'];
  $field10    =  $_POST['field10'];
  
  
  
  //File Upload Codes Starts Here

   $allow = array("jpg", "JPG", "jpeg", "JPEG", "gif", "GIF", "png", "PNG", "pdf", "PDF");
  //1st File
  if($_FILES['photo1']['name'] == "") {
    //echo "No Image"
  } else {

    $photo1=basename($_FILES['photo1']['name']);
    $extension = pathinfo($photo1, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "assets/img/career/";
      $photo1 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo1;
      move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path);
      $sql = ($photo1!='')?" career_image='$photo1' ". ',':'';
    }
  
  }

$insert_bookings = "INSERT `career` SET
$sql
  career_type   = 'Applicant',
  career_content_1   = '".addslashes($field1)."',
  career_content_2   = '".addslashes($field2)."',
  career_content_3   = '".addslashes($field3)."',
  career_content_4   = '".addslashes($field4)."',
  status = 'Active'";  
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();
  
  $message="Details successfully updated.";
  $status="success";
  header("Location: index.php?page=Thanks");
  
}
?>





<style type="text/css">
     

 .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
    background: 0 0;
    color: inherit;
    border: none;
    padding: 0!important;
    font: inherit;
    font-size: 40px;
}

.card1 {
  position: relative;
  top: 0;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.21);
   
  margin: 30px;
  -webkit-transition: all 1s ease;/* WebKit */
  -moz-transition: all 1s ease;/* Firefox */
  -o-transition: all 1s ease;/* Opera */
  transition: all 1s ease;/* Standard */
}

.card1:hover {
  top: -20px;
  border-radius: 0px;
}
</style>

<div class="" style="background-image: url('assets/img/bg13.png');">
<section class="section" style='text-align:center; background-image: url("assets/img/career/<?php echo $rows->career_image ;?>");' >
    <div class="container" style="padding-top: 200px;padding-bottom: 200px;text-align:center;">
        <span style="font-family:Poppins; font-size: 30px; color:#fff"><?php echo $rows->career_extra ;?></span>
     </div>
</section>
 
<div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
You Are Here > <a href="index.php?page=Career" style="color:#000;">Career</a>  
</div>
 
 
 
 <style>
          .counter-section i {
     display: block;
     margin: 0 0 10px
 }

 .counter-section span.counter {
     font-size: 40px;
     color: #000;
     line-height: 60px;
     display: block;
     font-family: "Oswald", sans-serif;
     letter-spacing: 2px
 }

 .counter-title {
     font-size: 16px;
     letter-spacing: 2px;
     text-transform: uppercase;
     color: #000;
     font-family: Poppins;
     font-weight: 500;
 }

 .counter-icon {
     top: 25px;
     position: relative;
     color: #000;
 }

 .counter-style2 .counter-title {
     letter-spacing: 0.55px;
     float: left
 }

 .counter-style2 span.counter {
     letter-spacing: 0.55px;
     float: left;
     margin-right: 10px
 }

 .counter-style2 i {
     float: right;
     line-height: 26px;
     margin: 0 10px 0 0
 }

 .counter-subheadline span {
     float: right
 }

 .medium-icon {
     font-size: 45px !important;
     margin-bottom: 15px !important;
     color: #000;
 }

  
     </style>
     
     <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        
        <div class="row" style="margin-top:100px">
            <div class="col-md-12" style="text-align:center"><span style="font-family:Poppins; font-size:25px;margin-top:100px; padding-bottom:100px; color:#000">Mahalaxmi in Numbers</span></div>
        </div>
        <div class="row" style="margin-top:70px">
            
            
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="<?php echo $rows5->company_content_1 ;?>"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php echo $rows5->company_content_2 ;?></span>
                <p class="counter-title"><?php echo $rows5->company_content_4 ;?></p>
            </div> 
            <!-- end counter -->
             
              
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="<?php echo $rows6->company_content_1 ;?>"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php echo $rows6->company_content_2 ;?></span>
                <p class="counter-title"><?php echo $rows6->company_content_4 ;?></p>
            </div> 
            <!-- end counter -->
             
              
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="<?php echo $rows7->company_content_1 ;?>"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php echo $rows7->company_content_2 ;?></span>
                <p class="counter-title"><?php echo $rows7->company_content_4 ;?></p>
            </div> 
            <!-- end counter -->
             
              
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="<?php echo $rows8->company_content_1 ;?>"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php echo $rows8->company_content_2 ;?></span>
                <p class="counter-title"><?php echo $rows8->company_content_4 ;?></p>
            </div> 
            <!-- end counter -->
              
            
             </div>
    </div>
</section>


<script>
    $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
</script>




<div class="container" style="margin-top:100px">
  <div class="row" style="text-align:center">
    <div class="col-md-5 card1 p-5" style="color:#000; text-align:justify; font-family:Poppins; margin-top: 46px;">
        <span style="font-size:20px">Life at Mahalaxmi</span><hr>
        <?php echo $rows11->career_extra ;?>
    </div>

    <div class="col-md-6 p-6" style="border-radius:20px; margin-top: 47px;
margin-bottom: 30px;">
         <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <?php
                $select_enquiry = "SELECT * FROM career where status = 'Active' and career_type = 'Slideshow' and id = 3";
                $sql31=$dbconn->prepare($select_enquiry);
                 $sql31->execute();
                 $wlvd31=$sql31->fetchAll(PDO::FETCH_OBJ);
                 foreach($wlvd31 as $rows31);
                ?>
              <img src="assets/img/company/<?php echo $rows31->career_image?>" class="d-block w-100" alt="...">
            </div>
            
            <?php
                $select_enquiry1 = "SELECT * FROM career where status = 'Active' and career_type = 'Slideshow' and id != 3";
                $sql32=$dbconn->prepare($select_enquiry1);
                 $sql32->execute();
                 $wlvd32=$sql32->fetchAll(PDO::FETCH_OBJ);
                 if($sql32->rowCount() > 0){
                foreach($wlvd32 as $rows32){
                $field1 = $rows32->id;
                $field2 = $rows32->career_image;
 

                ?>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="assets/img/company/<?php echo $field2?>" class="d-block w-100" alt="...">
            </div>
            <?php }} ?>
          </div>
</div>
    </div>

  </div>
</div>

<script type="text/javascript">
    var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false
})
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




 <?php
                $select_enquiry101 = "SELECT * FROM career where status = 'Active' and career_type = 'Opportunity' ";
                $sql101=$dbconn->prepare($select_enquiry101);
                 $sql101->execute();
                 $wlvd101=$sql101->fetchAll(PDO::FETCH_OBJ);
                 
                foreach($wlvd101 as $rows101) 
                $fieldAA1 = $rows101->id;
                $fieldBB1 = $rows101->career_content_1;
                $fieldCC1 = $rows101->career_content_2;
                
                if($fieldAA1 > 0){
 

                ?>

<div class="container " style="marging-bottom:20px">

  <div class="row shadow-lg" style="background-color:#fff; ">
        <div class="col-md-12" style="text-align:center; margin-top:50px">
         
                 
                    <span style="font-family:Poppins; font-size:30px; text-align: left;color: #000; margin-bottom:20px">
                        Current Job Openings
                    </span>
                     
                 
        </div>

        <div class="col-md-12" style="background-color:#fff; margin-top: 30px;">
            
            
            <div class="row" style="text-align:left; color:#000; font-family: Poppins; font-weight: 500; margin-bottom: 20px;">
                <div class="col-md-1">#</div>
                <div class="col-md-2">Date</div>
                <div class="col-md-7">Description</div>
                <div class="col-md-2" style="text-align:center;">Apply</div>
            </div>

                
                
                <?php
                $select_enquiry10 = "SELECT * FROM career where status = 'Active' and career_type = 'Opportunity' and id != 3";
                $sql10=$dbconn->prepare($select_enquiry10);
                 $sql10->execute();
                 $wlvd10=$sql10->fetchAll(PDO::FETCH_OBJ);
                 if($sql10->rowCount() > 0){
                foreach($wlvd10 as $rows10){
                $fieldAA = $rows10->id;
                $fieldBB = $rows10->career_content_1;
                $fieldCC = $rows10->career_content_2;
 

                ?>
                
                
            <div class="row" style="text-align:left; color:#000; font-family: Poppins; margin-top:10px; margin-bottom: 10px;">
                <div class="col-md-1"><?php echo ++$a?></div>
                <div class="col-md-2"><?php echo $fieldBB?></div>
                <div class="col-md-7" style="text-align:justify;"><?php echo $fieldCC ;?></div>
                <div class="col-md-2" style="text-align:center;"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fieldAA?>">Apply Now</button></div>
            </div> 

            <hr>
            
            <div class="modal fade" id="exampleModal<?php echo $fieldAA?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title" id="exampleModalLabel" style="font-size:20px; color:#000">Apply Now</span>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
      <div class="modal-body">
       
                <input type="hidden" name="id" class="form-control" value="<?php echo $fieldAA?>">
            <label style="color:#000">Your Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name">
            
            <hr>

            <label style="color:#000">Your Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Enter Your Email Address">
            <hr>

             
            <label style="color:#000">Your Mobile Number:</label>
            <input type="text" name="number" class="form-control" placeholder="Enter Your Mobile Number">
            <hr>

            <label style="color:#000">Upload Resume (PDF Files Only):</label>
            <input type="file" name="photo1" class="form-control">

             
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit Application</button>
       </div>
      </form>
    </div>
  </div>
</div>
            
            <?php }} ?>
             
               
        </div>
        <br>
    </div>
     

<div class="container" style="height:20px"></div>
</div>
</div>

<?php } ?>

