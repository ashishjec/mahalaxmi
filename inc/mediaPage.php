<style type="text/css">
     

 

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
 <div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
You Are Here > <a href="index.php?page=Media" style="color:#000;">Media</a> 
</div>

<?php

$select_latestNews1 = "SELECT * FROM media_blog where media_type = 'Latest_News_Update' and status = 'Active' ";
$sql011=$dbconn->prepare($select_latestNews1);
$sql011->execute();
$wlvd011=$sql011->fetchAll(PDO::FETCH_OBJ);

foreach($wlvd011 as $rows011);

?>
 
<div style="background-color: #fff;margin-top:00px;"></div>
<section class="section" style=" text-align:center; background-image: url('assets/img/bg13.png');" >

    <div class="container" style=";text-align:center; margin-top:-100px; margin-bottom:20px">
        <span style="font-family:Poppins; font-size: 30px; color:#000; ">Media & Blog</span>
     </div>

     <div class="container">
      <div class="row">
       <div class="col-md-6 card" style="overflow-y: scroll; max-height:500px;">
         <div class="row m-0 p-4 " style="font-family:Poppins">
              <div class="col-md-12" style="font-size:20px; text-align: left;"><img src="assets/img/home/<?php echo $rows011->media_content_6; ?>" height="40px"> Latest News & Updates</div>
              <div class="col-md-12">
               <hr>
              </div>

<?php 


  
$select_latestNews = "SELECT * FROM media_blog where status = 'Active' and media_type = 'Latest_News_Update' order by id desc";
$sql01=$dbconn->prepare($select_latestNews);
$sql01->execute();
$wlvd01=$sql01->fetchAll(PDO::FETCH_OBJ);

if($sql01->rowCount() > 0){
  
    foreach($wlvd01 as $rows01){
$field0A = $rows01->media_content_1;
$field0B= $rows01->media_content_2;
$field0F= $rows01->id;

  
  ?>
              <div class="col-md-12" style="font-size:13px; color: #726f6f; text-align: left; padding-bottom: 5px;">
                <div class="row">
                    <div class="col-md-2" style="text-align:center; padding-top: 10px"><img src="assets/img/home/<?php echo $rows011->media_content_6; ?>" height="30" ></div>
                    <div class="col-md-10" style="text-align:left"><a href="index.php?page=mediaLatestNews&id=<?php echo $field0F; ?>" style="font-size:13px; color: #726f6f;"><?php echo $rows01->media_content_1;  ?></a>

                     <br>
                     <span style="color:#b1adad; font-size:10px"><?php echo $rows01->media_content_2;  ?></span>
                    </div>

                      <div class="col-md-12">
                       <hr>
                      </div>
                  </div>
              </div>

<?php }} ?>
 
              
           </div>
           
         </div>
         <div class"col-md-1"></div>
        <div class="col-md-6 card" style="overflow-y: scroll; max-height:500px;">
         <div class="row m-0 p-4" style="font-family:Poppins">
              <div class="col-md-12" style="font-size:20px; text-align: left;"><img src="assets/img/newspaper.png" height="40px"> Media Coverage</div>
              <div class="col-md-12">
               <hr>
              </div>
<?php 
  
$select_latestMedia = "SELECT * FROM media_blog where status = 'Active' and media_type = 'Media_Coverage' order by id desc";
$sql02=$dbconn->prepare($select_latestMedia);
$sql02->execute();
$wlvd02=$sql02->fetchAll(PDO::FETCH_OBJ);

if($sql01->rowCount() > 0){
  
    foreach($wlvd02 as $rows02){
$field0C = $rows02->media_content_1;
$field0D= $rows02->media_content_2;
$field0E= $rows02->id;

?>

              <div class="col-md-12" style="font-size:13px; color: #726f6f; text-align: left; padding-bottom: 5px;">
                <div class="row">
                    <div class="col-md-3" style="text-align:right"><img src="assets/img/home/<?php echo $rows02->media_content_3;  ?>" style="border-radius: 5px"></div>
                    <div class="col-md-9" style="text-align:left"><a href="index.php?page=mediaCoverageBlogs&id=<?php echo $field0E; ?>" style="font-size:13px; color: #726f6f;"><?php echo $rows02->media_content_1;  ?></a>

                     <br>
                     <span style="color:#b1adad; font-size:10px"><?php echo $rows02->media_content_2;  ?></span>
                    </div>

                      <div class="col-md-12">
                       <hr>
                      </div>
                  </div>
              </div>
<?php }} ?>
              
           </div>
           
         </div>
        
        

         
     </div>
</section>


