<?php 


//Select Homepage Title
$select6= "SELECT * FROM `homepage` WHERE id = '16'";
$sql6=$dbconn->prepare($select6);
$sql6->execute();
$wlvd6=$sql6->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd6 as $rows6);

?>

<!--// Our Projects Start //-->
            <section class="section bg-white pb-minus-70" id="our-projects">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10">
                            <div class="section-heading">
                                <h4 style="font-family: Poppins;"><?php echo $rows6->homepage_content_1 ;?></h4>
                                <p style="font-family: Poppins;">
                                    <?php echo $rows6->homepage_content_2 ;?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest-projects-carousel owl-carousel owl-theme">
                   
                  
 <?php 
  
$select_activities = "SELECT * FROM homepage where status = 'Active' and homepage_type = 'Activities' order by id asc";
$sql7=$dbconn->prepare($select_activities);
$sql7->execute();
$wlvd7=$sql7->fetchAll(PDO::FETCH_OBJ);

if($sql7->rowCount() > 0){
  
    foreach($wlvd7 as $rows7){
$fieldid = $rows7->id;
$field7A = $rows7->homepage_content_1;
$field7B= $rows7->homepage_content_2;
$field7C = $rows7->homepage_content_3;
$field7D = $rows7->homepage_content_4;
  
  ?>              
                   <a href="index.php?page=homeActivities&id=<?php echo $fieldid; ;?>">
                    <div class="item">
                        <div class="profile-card-2"><img style="width: 650px; height: 400px; " src="assets/img/home/<?php echo $field7C ;?>" class="img img-responsive">
                            <div class="profile-name" style="padding-bottom: 20px; color: #fff;" ><?php echo substr("$field7A",0,15);?></div>
                            <div class="profile-username" style="font-family:Poppins;font-size: 15px; padding-top:10px; color: #fff;" ><?php echo substr("$field7B",0,30);?></div>
                        </div>
                    </div>
                    </a>
                    
                    
    <?php }} ?>                
                    
                    
                    
                    
                    
            </section>
            <!--// Our Projects End //-->