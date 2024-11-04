<!--// Latest Blog Start //-->
          
          

<?php 


//Select Homepage Title
$selectTitle= "SELECT * FROM `homepage` WHERE id = '29'";
$sql12=$dbconn->prepare($selectTitle);
$sql12->execute();
$wlvd12=$sql12->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd12 as $rows12);

?>          
          
            <section class="section bg-white pb-minus-70" id="latest-blog" style="bacground-color:white; font-family:Poppins">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10">
                            <div class="section-heading">
                                <h4 style="font-family: Poppins;"><?php echo $rows12->homepage_content_1 ;?></h4>
                                <p style="font-family: Poppins;">
                                    <?php echo $rows12->homepage_content_2 ;?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                  
                    <div class="pricing-carousel owl-carousel owl-theme">
      
       <?php 

$select_latest = "SELECT * FROM homepage where status = 'Active' and homepage_type = 'LatestNewsUpdate' order by id desc";
$sql13=$dbconn->prepare($select_latest);
$sql13->execute();
$wlvd13=$sql13->fetchAll(PDO::FETCH_OBJ);

if($sql13->rowCount() > 0){
  
    foreach($wlvd13 as $rows13){
$field7A = $rows13->homepage_content_1;
$field7B= $rows13->homepage_content_2;
$field7C = $rows13->homepage_content_3;
$field7D = $rows13->homepage_content_4;

$field7D = $rows13->homepage_content_6;
$fieldIU= $rows13->id;  

  ?>
                        <div class="item">
                            <div class="blog-item">
                                
                                <div class="blog-img" style="width: 100%; height: 250px;">
            
                                    <a href="index.php?page=homeLatestNews&id=<?php echo $fieldIU; ?>">
                                        <img src="assets/img/home/<?php echo $rows13->homepage_content_6;?>" style="height: 250px;" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i><?php echo $rows13->homepage_content_3 ;?></span>
                                        <span><i class="far fa-bookmark"></i><?php echo substr("$rows13->homepage_content_4 ",0,15);?></span>
                                    </div>
                                    <h6><a href="index.php?page=homeLatestNews&id=<?php echo $fieldIU; ?>" style="font-family: Poppins;"><?php echo substr("$rows13->homepage_content_1",0,40) ;?></a></h6>
                                    <p style="font-family: Poppins;">
                                        <?php echo substr("$rows13->homepage_content_2",0,80);?>
                                    </p>
                                    <a href="index.php?page=homeLatestNews&id=<?php echo $fieldIU; ?>" class="blog-outline-btn">Read More</a>
                                </div>
                            </div>
                        </div>
          <?php }} ?>            
                    </div>
                      
                </div>     
                
            </section>
            <!--// Latest Blog End //-->