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
  top: -20px;
  border-radius: 0px;
   
}
</style>

<div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
You Are Here > <a href="#" style="color:#000;">About</a> > <a style="color:#000;" href="index.php?page=<?php echo $page?>"><?php echo $page?></a>
</div>
<section class="section" style="background-color: #fff; text-align:center;background-image: url('assets/img/bg13.png');" >
     

     <!--
    <div class="container-fluid" style="text-align:center; margin-top: -100px;background-image: url('assets/img/teaam.png');">
        <div class="row" style="text-align:center; ">
            <div class="col-md-12" style="text-align:center; padding-top:250px; padding-bottom:200px; ">
             <span style="font-family:Poppins; text-align:center; color: #fff; font-size: 25px;">Our Team</span>
         </div>
        </div>
        
    </div>

-->

<?php 

//Select Homepage Title
$select_directorDeg= "SELECT * FROM `teampage` WHERE id = '1'";
$sql31=$dbconn->prepare($select_directorDeg);
$sql31->execute();
$wlvd31=$sql31->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd31 as $rows31);

?>


    <div class="row" >
            <div class="col-md-12" style="padding-bottom:20px; margin-top:-50px; text-align: center;">
               
               
                <span style="font-size:30px; font-family:Poppins; color:#000"><?php echo $rows31->teampage_content_1;  ?></span>

            </div>
        </div>
    <?php 
    
    if($browser == 'Desktop'){
    
    ?>
    <div class="container" >
        <div class="row" style="text-align:center;">
            <div class="col-md-12" style="text-align:center;">
                 
                <div class="row">
<?php 
  
$select_directorImg = "SELECT * FROM teampage where status = 'Active' and teampage_type = 'Team_Directors' order by id asc";
$sql32=$dbconn->prepare($select_directorImg);
$sql32->execute();
$wlvd32=$sql32->fetchAll(PDO::FETCH_OBJ);

if($sql32->rowCount() > 0){
  
    foreach($wlvd32 as $rows32){
$field9A = $rows32->teampage_content_1;
$field9B= $rows32->teampage_content_2;
$field9C = $rows32->teampage_content_3;

  
  ?> 


                    <div class="col-md-3 card" style="text-align:left; background-color: #0000; border-style:solid; border-size: 1px; border-color:#0000">
                        <div class="row m-0" >
                        <div class="card card1" style="width: 18rem;">
                              <img src="assets/img/home/<?php echo $field9C ;?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                <p class="card-text"><a  style="font-size: 18px;background-color: #fff; color: #000;line-height: 1.5;" href="index.php?page=Chairman&name=<?php echo $field9A; ?>"> <?php echo $field9A ;?> <br> <span style="font-size:12px"><?php echo $field9B ;?></span> </a></p>
                              </div>
                            </div>
                        </div>
                    </div>

<?php }} ?>
                    

   

                </div>


                 

 
            </div>
        </div>
         


    
    </div>
    
    <?php }else{ ?>
    
    <div class="container" style="text-align:center;">
        <div class="row" style="text-align:center;">
            <div class="col-md-12" style="text-align:center;">
                 
                <div class="row" style="text-align:center">
<?php 
  
$select_directorImg = "SELECT * FROM teampage where status = 'Active' and teampage_type = 'Team_Directors' order by id asc";
$sql32=$dbconn->prepare($select_directorImg);
$sql32->execute();
$wlvd32=$sql32->fetchAll(PDO::FETCH_OBJ);

if($sql32->rowCount() > 0){
  
    foreach($wlvd32 as $rows32){
$field9A = $rows32->teampage_content_1;
$field9B= $rows32->teampage_content_2;
$field9C = $rows32->teampage_content_3;

  
  ?> 


                    <div class="col-md-3" style="text-align:center; background-color: #0000; border-style:solid; border-size: 1px; border-color:#0000; margin-left:38px">
                        <div class="row m-0" >
                        <div class="card card1" style="width: 17rem;">
                              <img src="assets/img/home/<?php echo $field9C ;?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                <p class="card-text">
                                    <a  style="font-size: 18px;background-color: #fff; color: #000;line-height: 1.5" href="index.php?page=Chairman&name=<?php echo $field9A; ?>"> <?php echo $field9A ;?> <br> <span style="font-size:12px"><?php echo $field9B ;?></span> </a></p>
                              </div>
                            </div>
                        </div>
                    </div>

<?php }} ?>
                    

   

                </div>


                 

 
            </div>
        </div>
         


    
    </div>
    
    <?php }?>
</section>
 
