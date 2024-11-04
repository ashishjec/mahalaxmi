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
<?php 


$name = $_REQUEST['name'];
$id = $_REQUEST['id'];



$select_blog = "SELECT * FROM media_blog where id = '$id' order by id asc";
$sql44=$dbconn->prepare($select_blog);
$sql44->execute();
$wlvd44=$sql44->fetchAll(PDO::FETCH_OBJ);
    foreach($wlvd44 as $rows44)
$field44C = $rows44->media_content_4;





$select_csr = "SELECT * FROM csr where csr_name = '$name'  and csr_type = 'csr_act' order by id asc";
$sql45=$dbconn->prepare($select_csr);
$sql45->execute();
$wlvd45=$sql45->fetchAll(PDO::FETCH_OBJ);
    foreach($wlvd45 as $rows45)
$field45C = $rows45->csr_name;
$field45D = $rows45->csr_facts_4;




$select_act = "SELECT * FROM homepage where id = '$id' and status = 'Active' and homepage_type = 'Activities'";
$sql46=$dbconn->prepare($select_act);
$sql46->execute();
$wlvd46=$sql46->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd46 as $rows46);

//Not Working-----------
$select_busi = "SELECT * FROM businesses where name = '$name' and bus_type = 'BusinessMedia' and bus_name = 'BusinessEdit$name' and status = 'Active'";
$sql47=$dbconn->prepare($select_busi);
$sql47->execute();
$wlvd47=$sql47->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd47 as $rows47);


$select_latestnews = "SELECT * FROM homepage where id = '$id' and status = 'Active' and homepage_type = 'LatestNewsUpdate'";
$sql48=$dbconn->prepare($select_latestnews);
$sql48->execute();
$wlvd48=$sql48->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd48 as $rows48);




  
?> 
<section class="section" style="text-align:center; background-image: url('assets/img/bg13.png');" >
    

    <div class="container-fluid" style="text-align:center; margin-top: -100px;background-image: url('assets/img/blogDetail.png');">
        <div class="row" style="text-align:center; ">
            <div class="col-md-12" style="text-align:center; padding-top:250px; padding-bottom:200px; padding-left:100px; padding-right:100px">
             <span style="font-family:Poppins; text-align:center; color: #fff; font-size: 25px;">
                 <?php 
                 echo $rows44->media_content_1; 
                 
                 echo $rows45->csr_name; 
                 
                 echo $rows46->homepage_content_1;
                 
                 echo $rows47->bus_desc;
                 
                 echo $rows48->homepage_content_1;
                 ?></span>
         </div>
        </div>
        
    </div>



    <div class="container" >
        <div class="row">
            <div class="col-md-12 shadow-lg p-3 mb-5 bg-white rounded" style="text-align:justify; color: #000; padding-top:30px; margin-top: 30px;">
                                
                <?php 
                echo $field44C ; 
                
                echo $field45D; 
                
                echo $rows46->homepage_content_4;
                
                echo $rows47->bus_link;
                
                echo $rows48->homepage_content_2;
                ?>
    
    
            </div>
    
    
    
    
             
    </div>
     
</section>
