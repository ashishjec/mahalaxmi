<style type="text/css">
  /*   
a {
  display: inline-block;
  position: relative;
  text-decoration: none;
  color: inherit;
  z-index: 1;
}

a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: .07em;
  height: .1em;
  width: 100%;
  background: linear-gradient(110deg, #fff,  #0445e0);
  z-index: -1;
  transition: height .25s cubic-bezier(.6,0,.4,1);
}
 */

.card1 {
  position: relative;
  top: 0;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.21);
   
  margin: 0px;
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
You Are Here > <a href="index.php" style="color:#000;">Home</a> > <a style="color:#000;" href="index.php?page=<?php echo $page?>">Chairman's Message</a>
</div>
<section class="section" style="background-color: #fff; text-align:center;background-image: url('assets/img/bg13.png');" >
     <!--
         <div class="container-fluid" style="text-align:center; margin-top: -100px;background-image: url('assets/img/whitebg.png');">
            <div class="row" style="text-align:center; ">
            <div class="col-md-12" style="text-align:center; padding-top:200px; padding-bottom:150px; ">
             <span style="font-family:Poppins; text-align:center; color: #fff; font-size: 25px;">Chairman's Message</span>
         </div>
        </div>
        
        </div>
-->
    <?php 
    
    if($browser == 'Desktop'){
        ?>
         <div class="container-fluid" style="margin-top:-70px">
         <div class="row" style="margin-bottom:10px">
            <div class="col-md-12">
                <span style="font-size:30px; font-family:Poppins; color:#000">Chairman's Message</span>
            </div>
           </div>
           <hr>
           <div class="row">
           <div class="col-md-1"></div>
             <div class="col-md-3" style="text-align:center" >

<?php


$select_chairman = "SELECT * FROM teampage where status = 'Active' and id = '11'";
$sql43=$dbconn->prepare($select_chairman);
$sql43->execute(); 
$wlvd43=$sql43->fetchAll(PDO::FETCH_OBJ);

    foreach($wlvd43 as $rows43)
$field43A = $rows43->teampage_content_1;
$field43B= $rows43->teampage_content_2;
$field43C = $rows43->teampage_content_3;
$field43D = $rows43->teampage_content_4;

  
?>                  
                 
              <img style="text-align:center" class="card" src="assets/img/home/<?php echo $field43C ;?>" >
                  <br>
                  <br>
                  <span style="font-size:20px; font-family:Poppins; color:#000"><?php echo $field43A ;?></span><br>
                  <span style="font-size:12px; font-family:Poppins; color:#000"><a><?php echo $field43B ;?></a></span><br>
                  
 
            </div>
                  
                 
             <div class="col-md-7" style="text-align:justify; min-height: 200px; ">
                    
                     
                    <div class="row shadow-lg p-5 mb-5 bg-white rounded">
                        <style>
.vl {
  border-left: 4px solid #0045E1;
  height: 50px;
  margin-right:20px;
}


</style>

<?php 

if($browser == 'Desktop'){
    ?>
                        <div class="vl"></div><span style="font-family:Poppins; font-size: 52px; color:#e0e0e0; margin-top:-10px; ">"</span> <span style="font-family:Poppins; font-size: 25px; color:#0045E1">Keeping Dreams Alive</span><span style="font-family:Poppins; font-size: 52px; color:#e0e0e0; margin-top:-10px">"</span> 
                       
                       
                       <?php }else{
                           ?> <span style="font-family:Poppins; font-size: 25px; color:#0045E1">Keeping Dreams Aslive</span> 
                        
                       <?php } ?>
                        
                        <br>
                        <br>
                        <br>
                        <hr>
                        <span style="line-height: 2;">
                        <?php echo $field43D ;?>
                        </span>
                    </div>
                    
                    <div class="row">
                        <a class="btn btn-primary" href="assets/img/home/<?php echo $field43C ;?>" download="assets/img/home/<?php echo $field43C ;?>">Download High Resolution Photo</a>
                    </div>
                    


             </div>
             <div class="col-md-1"></div>
             
             
         </div>
     </div>
        <?php
    }else{
        ?>
        
         <div class="container-fluid" style="margin-top:-70px">
         <div class="row" style="margin-bottom:10px">
            <div class="col-md-12">
                <span style="font-size:30px; font-family:Poppins; color:#000">Chairman's Message</span>
            </div>
           </div>
           <hr>
           <div class="row" style="text-align:center" >
            
             <div class="col-md-6" style="text-align:center;justify-content: center;flex-direction: column;display: flex;" >

<?php


$select_chairman = "SELECT * FROM teampage where status = 'Active' and id = '11'";
$sql43=$dbconn->prepare($select_chairman);
$sql43->execute(); 
$wlvd43=$sql43->fetchAll(PDO::FETCH_OBJ);

    foreach($wlvd43 as $rows43)
$field43A = $rows43->teampage_content_1;
$field43B= $rows43->teampage_content_2;
$field43C = $rows43->teampage_content_3;
$field43D = $rows43->teampage_content_4;

  
?>                  
                 
              <img style="r" class="card" src="assets/img/home/<?php echo $field43C ;?>" height="380" >
                  <br>
                   
                  <span style="font-size:20px; font-family:Poppins; color:#000;text-align:center"><?php echo $field43A ;?></span>
                  <span style="font-size:12px; font-family:Poppins; color:#000;text-align:center"><a><?php echo $field43B ;?></a></span><br>
                  
                    <br>
                    <br>
            </div>
                  
                 
             <div class="col-md-6" style="text-align:justify; min-height: 200px; ">
                    
                     
                    <div class="row shadow-lg p-5 mb-5 bg-white rounded">
                        <style>
.vl {
  border-left: 4px solid #0045E1;
  height: 50px;
  margin-right:20px;
}


</style>

<?php 

if($browser == 'Desktop'){
    ?>
                        <div class="vl"></div><span style="font-family:Poppins; font-size: 52px; color:#e0e0e0; margin-top:-10px; ">"</span> <span style="font-family:Poppins; font-size: 25px; color:#0045E1">Keeping Dreams Alive</span><span style="font-family:Poppins; font-size: 52px; color:#e0e0e0; margin-top:-10px">"</span> 
                       
                       
                       <?php }else{
                           ?> <span style="font-family:Poppins; font-size: 25px; color:#0045E1">"Keeping Dreams Alive"</span> 
                        
                       <?php } ?>
                        
                        <br>
                        <br>
                        <br>
                        <hr>
                        <span style="line-height: 2;">
                        <?php echo $field43D ;?>
                        </span>
                    </div>
                    
                    <div class="row" style="text-align:center">
                        <a class="btn btn-primary" href="assets/img/home/<?php echo $field43C ;?>" download="assets/img/home/<?php echo $field43C ;?>">Download High Resolution Photo</a>
                    </div>
                    


             </div>
             
             
             
         </div>
     </div>
        
        <?php
    }
    
    ?>
         


    
    </div>
    
</section>
 
