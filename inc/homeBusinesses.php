<?php 


//Select Homepage Title
$select5= "SELECT * FROM `homepage` WHERE id = '11'";
$sql5=$dbconn->prepare($select5);
$sql5->execute();
$wlvd5=$sql5->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd5 as $rows5);

?>

 <!--// Services Start //-->
<section class="section bg-white pb-minus-70" id="services"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="section-heading">
                    <h4 style="font-family: Poppins;"><?php echo $rows5->homepage_content_1 ;?></h4>
                    <p style="font-family: Poppins;">
                        <?php echo $rows5->homepage_content_2 ;?>
                    </p>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            
                
                
  <?php 
  
$select_business = "SELECT * FROM homepage where status = 'Active' and homepage_type = 'Business'";
$sql6=$dbconn->prepare($select_business);
$sql6->execute();
$wlvd6=$sql6->fetchAll(PDO::FETCH_OBJ);

if($sql6->rowCount() > 0){
  
    foreach($wlvd6 as $rows6){
$field6A = $rows6->homepage_content_1;
$field6B= $rows6->homepage_content_2;
$field6C = $rows6->homepage_content_3;
$field6D = $rows6->homepage_content_4;
  
  ?>
            <div class="col-md-6 col-lg-4 box-mb-30 animate__animated animate__jackInTheBox animate__delay-1s">
                
            <a class="card4" href="<?php echo $field6D ;?>" style="height:200px">
            <div style="text-align:left">
                <i style="font-size:30px; color:#0445e0; text-align:center" class="<?php echo $field6C ;?>"></i>
            
                <h3 style="font-family: Poppins;"><?php echo $field6A ;?></h3>
                <p class="small" style="font-family: Poppins;"><?php echo $field6B ;?></p>
                </div>    
                <div class="dimmer"></div>
                <div class="go-corner" href="<?php echo $field6D ;?>">
                <div class="go-arrow">
                    →
                </div>
                </div>
            </a>
                
                
            </div>
            
            
<?php }} ?>            

 
                
        </div>
    </div>
</section>
<!--// Services End //-->