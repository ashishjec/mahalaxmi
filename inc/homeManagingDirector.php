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
  -webkit-border-bottom-left-radius:70px 20px;/* WebKit */
  -moz-border-bottom-left-radius:70px 20px;/* Firefox */
  -o-border-bottom-left-radius:70px 20px;/* Opera */
  border-bottom-left-radius:70px 20px;/* Standard */
  -webkit-box-shadow: -10px 10px 35px #888;/* WebKit */
  -moz-box-shadow: -10px 10px 35px #888;/* Firefox */
  -o-box-shadow: -10px 10px 35px #888;/* Opera */
  box-shadow: -10px 10px 35px #888;/* Standard */
}
</style>


<!--
<div class="container-fluid" style="background-image: url('assets/img/bg13.png');">
    <div class="row">
        <div class="col-md-12" style="text-align:center;"><img height="700" src="assets/img/kk.png" style="height: 400px;">
        </div>
    </div>
</div>


     <hr style="padding-top:50px">    
--->


<?php 


//Select Homepage Title
$select_director= "SELECT * FROM `homepage` WHERE id = '22'";
$sql11=$dbconn->prepare($select_director);
$sql11->execute();
$wlvd11=$sql11->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd11 as $rows11);

?>

<?php 
if($browser == 'Desktop'){
?>

<div class="container-fluid" style="background-image: url('assets/img/bg13.png');">
    <div class="container-fluid" style="text-align:center;">
        <div class="row" style="padding-top:100px; padding-bottom:100px; padding-left: 100px">
            
            
             <div class="col-md-8" style="border-radius: 1px 60px 1px 60px ;background: #fff; padding: 20px; margin-right: 5px; border-color: #dce5f7; border-style:solid;">
                 
                  <div class="row">
                      <div class="col-md-4 " style="text-align:center;">
                          <a href="index.php?page=ChairmanCorner"><img src="assets/img/home/<?php echo $rows11->homepage_content_3 ;?>"></a>
                          <p style="font-family:Poppins; color:#000; font-size: 13px;">
                            <br>
                            <span style="font-size:20px; font-family:Poppins; color:#000"><?php echo $rows11->homepage_content_1 ;?></span>
                            <br>
                       <span style="font-size:12px; font-family:Poppins; color:#000"><a><?php echo $rows11->homepage_content_2 ;?></a></span></p>
                      </div>
                      <div class="col-md-8" style="text-align:center; font-family:Poppins;  line-height: 33px;">
                          <div class="row">
                            
                            <div class="col-md-12">
                                
                                <h2 style="font-size: 30px;">Chairman Wisdom</h2>
                                
                            </div>
                            
                            <div class="col-md-1" style="margin-top: 63px"> 
                                <span style="font-size: 100px;color: #e0e0e0; ">"</span>
                            
                              </div>
                              <div class="col-md-10" style="margin-top: 65px"> 
                                <span style="font-size:20px; color: #000; margin-top:-100px; text-align:left">
                              
                          <?php echo $rows11->homepage_content_4 ;?>
                          </span>
                            
                              </div>
                              <div class="col-md-1" style="padding-top: 237px"> 
                                
                            <span style="font-size: 100px;color: #e0e0e0; ">"</span>
                              </div>
                              
                            </div>
                          
                      </div>
                  </div>
             </div>
               
             <div class="col-md-3" style="border-radius: 20px ;background: #dbe4f8; padding: 20px; border-color: #fff; border-style:solid;">
                 <span style="font-family:Poppins; color:#000; font-size:20px"> News & Updates</span>
                 <hr style="background-color:#000">


<?php 

  
$select_latest_news = "SELECT * FROM media_blog where status = 'Active' and media_type = 'Latest_News_Update' order by id desc limit 3 ";
$sql8=$dbconn->prepare($select_latest_news);
$sql8->execute();
$wlvd8=$sql8->fetchAll(PDO::FETCH_OBJ);

if($sql8->rowCount() > 0){
  
    foreach($wlvd8 as $rows8){
$field8A = $rows8->media_content_1;
$field8B=  $rows8->id;
  ?> 


                 <div class="row" style="height: 70px; ">
                     <div class="col-md-3" style="text-align:right;"><img src="assets/img/news.png" height="30" ></div>
                     <div class="col-md-9" style="text-align:justify;font-size: 12px; font-family:Poppins; color:#000">
                         <a href="index.php?page=homeNewsUpdates&id=<?php echo $field8B; ?>" style="color:#000"><?php echo substr("$field8A",0,120) ;?></a>
                     </div>

                 </div>
                 <hr style="background-color:#a5a2a2">
<?php }} ?>                 
                 
                 <div class="row" style="text-align:right: ">
                    <div class="col-md-12" style="text-align:right: ">
                     <a style="color:#000; font-size: 12px" href="index.php?page=Media">Read More..</a>
                     </div>
                 </div>
                  
             </div>
             
              
        </div>
    </div>   
</div>

<?php }else{ ?>

<div class="container-fluid" style="background-image: url('assets/img/bg13.png');">
    <div class="container-fluid" style="text-align:center;">
        <div class="row" style="padding-top:100px; padding-bottom:100px; ">
            
            
             <div class="col-md-8" style="border-radius: 1px 60px 1px 60px ;background: #fff; padding: 20px; margin-right: 5px; border-color: #dce5f7; border-style:solid;">
                 
                  <div class="row">
                      <div class="col-md-4 " style="text-align:center;">
                          <a href="index.php?page=ChairmanCorner"><img src="assets/img/home/<?php echo $rows11->homepage_content_3 ;?>"></a>
                          <p style="font-family:Poppins; color:#000; font-size: 13px;">
                            <br>
                            <span style="font-size:20px; font-family:Poppins; color:#000"><?php echo $rows11->homepage_content_1 ;?></span>
                            <br>
                       <span style="font-size:12px; font-family:Poppins; color:#000"><a><?php echo $rows11->homepage_content_2 ;?></a></span></p>
                      </div>
                      <div class="col-md-8" style="text-align:center; font-family:Poppins;  line-height: 33px;">
                          <div class="row">
                            
                            <div class="col-md-12">
                                
                                <h2 style="font-size: 30px;">Chairman Wisdom</h2>
                                
                            </div>
                            
                             
                              <div class="col-md-10" style="margin-top: 65px"> 
                                <span style="font-size:20px; color: #000; margin-top:-100px; text-align:left">
                              
                          <?php echo $rows11->homepage_content_4 ;?>
                          </span>
                            
                              </div>
                               
                              
                            </div>
                          
                      </div>
                  </div>
             </div>
               
             <div class="col-md-3" style="border-radius: 20px ;background: #dbe4f8; padding: 20px; border-color: #fff; border-style:solid;">
                 <span style="font-family:Poppins; color:#000; font-size:20px"> News & Updates</span>
                 <hr style="background-color:#000">


<?php 

  
$select_latest_news = "SELECT * FROM media_blog where status = 'Active' and media_type = 'Latest_News_Update' order by id desc limit 3 ";
$sql8=$dbconn->prepare($select_latest_news);
$sql8->execute();
$wlvd8=$sql8->fetchAll(PDO::FETCH_OBJ);

if($sql8->rowCount() > 0){
  
    foreach($wlvd8 as $rows8){
$field8A = $rows8->media_content_1;
$field8B=  $rows8->id;
  ?> 


                 <div class="row" style="height: 70px; ">
                     <div class="col-md-3" style="text-align:right;"><img src="assets/img/news.png" height="30" ></div>
                     <div class="col-md-9" style="text-align:justify;font-size: 12px; font-family:Poppins; color:#000">
                         <a href="index.php?page=homeNewsUpdates&id=<?php echo $field8B; ?>" style="color:#000"><?php echo substr("$field8A",0,120) ;?></a>
                     </div>

                 </div>
                 <hr style="background-color:#a5a2a2">
<?php }} ?>                 
                 
                 <div class="row" style="text-align:right: ">
                    <div class="col-md-12" style="text-align:right: ">
                     <a style="color:#000; font-size: 12px" href="index.php?page=Media">Read More..</a>
                     </div>
                 </div>
                  
             </div>
             
              
        </div>
    </div>   
</div>

<?php } ?>

         

