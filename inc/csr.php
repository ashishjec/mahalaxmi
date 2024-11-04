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
  top: -2px;
  border-radius: 0px;
}
</style>




<?php 


//Select Homepage Title
$selectcsr1= "SELECT * FROM `csr` WHERE id = '1'";
$sql60=$dbconn->prepare($selectcsr1);
$sql60->execute();
$wlvd60=$sql60->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd60 as $rows60);

?> 


<div class="" style="background-image: url('assets/img/bg13.png');">
<section class="section" style="text-align:center; background-image: url('assets/img/company/<?php echo $rows60->csr_img; ?>');" >
    <div class="container" style="padding-top: 200px;padding-bottom: 200px;text-align:center;">
        <span style="font-family:Poppins; font-size: 30px; color:#fff"><?php echo $rows60->csr_name; ?></span>
     </div>
</section>
 <div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
You Are Here > <a href="index.php?page=Sustainability" style="color:#000;">Sustainability</a>  
</div>
 
 <!-- We Care Section Starts --->
 <!--// Our Team Start //-->
<section class="section" id="our-team">
    <div class="container">


<?php 


//Select Homepage Title
$selectcsr3= "SELECT * FROM `csr` WHERE id = '3'";
$sql63=$dbconn->prepare($selectcsr3);
$sql63->execute();
$wlvd63=$sql63->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd63 as $rows63);

?>

                     
    <div class="row">
            <div class="col-md-6" >
                <img height="90%" src="assets/img/care3.png">
            </div>
            
            <div class="col-md-6" style="text-align:right;">
                  <div class="row" style="text-align:right">
                      
                        <div class="col-md-4 card1" style="text-align:center; border-radius:10px; min-height:160px; padding-top:30px; ">
                          <a href="index.php?page=CSR&name=<?php echo $rows63->csr_facts_title1; ?>"><img src="assets/img/company/<?php echo $rows63->csr_facts_1; ?>" style="border-size:1px; border-color:#000; height:80px"></a>
                          <br>
                          <br>
                          <span style="color:#000"><?php echo $rows63->csr_facts_title1; ?></span>
                          <br>
                          <br>
                        </div>
                       
                       <div class="col-md-4 card1" style="text-align:center; border-radius:10px; min-height:160px; padding-top:30px;margin-top:30px">
                          <a href="index.php?page=CSR&name=<?php echo $rows63->csr_facts_title3; ?>"><img src="assets/img/company/<?php echo $rows63->csr_facts_3; ?>" style="border-size:1px; border-color:#000; height:80px"></a>
                          <br>
                          <br>
                          <span style="color:#000"><?php echo $rows63->csr_facts_title3; ?></span>
                          <br>
                          <br>
                        </div>
                       
                       <div class="col-md-4 card1" style="text-align:center; border-radius:10px; min-height:160px; padding-top:30px">
                          <a href="index.php?page=CSR&name=<?php echo $rows63->csr_facts_title2; ?>"><img src="assets/img/company/<?php echo $rows63->csr_facts_2; ?>" style="border-size:1px; border-color:#000; height:80px"></a>
                          <br>
                          <br>
                          <span style="color:#000"><?php echo $rows63->csr_facts_title2; ?></span>
                          <br>
                          <br>
                        </div>
                       
                       <div class="col-md-4 card1" style="text-align:center; border-radius:10px; min-height:160px; padding-top:30px;margin-top:30px">
                          <a href="index.php?page=CSR&name=<?php echo $rows63->csr_facts_title4; ?>"><img src="assets/img/company/<?php echo $rows63->csr_facts_4; ?>" style="border-size:1px; border-color:#000; height:80px"></a>
                          <br>
                          <br>
                          <span style="color:#000"><?php echo $rows63->csr_facts_title4; ?></span>
                          <br>
                          <br>
                        </div>
                       
                       
                  </div> 
            </div>
        </div>
    </div>
</section>
            <!--// Our Team End //-->
<!-- We Care Section Ends --->


<?php 


//Select Homepage Title
$selectcsr2= "SELECT * FROM `csr` WHERE id = '2'";
$sql61=$dbconn->prepare($selectcsr2);
$sql61->execute();
$wlvd61=$sql61->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd61 as $rows61);

?>

<div class="container" style="margin-top:-100px">
  <div class="row" style="text-align:center">
    <div class="col-md-11 card1 p-5" style="color:#000; text-align:justify; font-family:Poppins">
      <?php echo $rows61->csr_desc; ?>
    </div>

  </div>
</div>




<div class="container">

  <!--<div class="row">-->
  <!--  <div class="col-md-12" style="text-align:center;">-->
     
             
  <!--              <span style="font-family:Poppins; font-size:30px; text-align: left;color: #000;">-->
  <!--                  Our Activities-->
  <!--              </span>-->
                 
             
  <!--      </div>-->
  <!--  </div>-->


  
    <!--i make Activities header comment because right now we dont need this -->
   


<div class="row">
    
     <?php
   $selectcsr4 = "SELECT * FROM csr where status = 'Active' and csr_type = 'csr_act' order by id asc";
$sql64=$dbconn->prepare($selectcsr4);
$sql64->execute();
$wlvd64=$sql64->fetchAll(PDO::FETCH_OBJ);

if($sql64->rowCount() > 0){
  
    foreach($wlvd64 as $rows64){
$field_XX = $rows64->csr_name;
$field_XY= $rows64->csr_img;
$field_XZ = $rows64->csr_facts_1;
$field_XL = $rows64->csr_facts_2;

    ?>
    
    <div class="<?php echo $field_XZ ;?> card1" style="background-image:url('assets/img/company/<?php echo $field_XY ;?>'); background-repeat: no-repeat; background-size: cover; ">
        <a href="index.php?page=csrBlogs&name=<?php echo $field_XX; ?>">
        <div class="row">
            
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; text-align: left;color: #fff;">
                    <?php echo $field_XX ;?>
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px"><?php echo $field_XL ;?><br></p>
            </div>
            
        </div>
        </a>
    </div>
    
    
    <?php }} ?>

    


     
       
       
       
</div>
    
    
    </div>
    
    
</div>
</div>