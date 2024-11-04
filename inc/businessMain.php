<?php 

//Select Homepage Title
$select= "SELECT * FROM `businesses` WHERE id = '1'";
$sql=$dbconn->prepare($select);
$sql->execute();
$wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd as $rows);

?>

<style type="text/css">
	 

 

.card1 {
  position: relative;
  top: 0;
  background-color: #fff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.21);
   
  margin: 30px;
  -webkit-transition: all 1s ease;/* WebKit */
  -moz-transition: all 1s ease;/* Firefox */
  -o-transition: all 1s ease;/* Opera */
  transition: all 1s ease;/* Standard */
}

.card1:hover {
  top: -20px;
  -webkit-box-shadow: -10px 10px 35px #000;/* WebKit */
  -moz-box-shadow: -10px 10px 35px #000;/* Firefox */
  -o-box-shadow: -10px 10px 35px #000;/* Opera */
  box-shadow: -10px 10px 35px #000;/* Standard */
}
</style>
<div style="">
<section class="section" style="text-align:center; background-image: url('assets/img/company/<?php echo $rows->bus_image ;?>');" >
    <div class="container" style="padding-top: 200px;padding-bottom: 200px;text-align:center;">
    	<span style="font-family:Poppins; font-size: 30px; color:#fff"><?php echo $rows->bus_extra ;?></span>
     </div>
</section>
  <div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
You Are Here > <a style="color:#000;" href="index.php?page=Group-Of-Verticals"> Group Of Verticals</a>
</div>
  
<?php 
  
$select_activities = "SELECT * FROM businesses where status = 'Active' and bus_type = 'SingleBusiness' order by id asc";
$sql7=$dbconn->prepare($select_activities);
$sql7->execute();
$wlvd7=$sql7->fetchAll(PDO::FETCH_OBJ);

if($sql7->rowCount() > 0){
  
    foreach($wlvd7 as $rows7){
$field7A = $rows7->bus_name;
$field7B= $rows7->bus_desc;
$field7C = $rows7->bus_link;
$field7D = $rows7->bus_image;
  
  ?>              
       
<section class="section animate__animated animate__slideInLeft animate__delay-1s" style="text-align:center; background-image: url('assets/img/company/<?php echo $field7D?>');" >
    <div class="container" style="padding-top: 50px;padding-bottom: 50px;text-align:center;">
    	
    	<div class="row">
    		 
    		<div class="col-md-12 card1" style="background-color:#000000a8; padding-bottom:20px; padding-top:20px">
    			<span style="font-family:Poppins; font-size: 46px; color:#fff"><?php echo $field7A?></span>
    			<br>
    			<br>
    			<span style="font-family:Poppins; font-size: 14px; color:#fff">
                    <?php echo $field7B?>

    			</span>
    			<br>
    			<br>
    			<style>
a:hover {
  color: #0045E1;
}

a {
  color: white;
}
</style>
    			<a class="default-nav-btn" href="index.php?page=SingleBusiness&name=<?php echo $field7A?>"  >Read More >> </a>
    		</div>
    	</div>
     </div>
</section>
 
  <br>
  
  <?php }} ?>
  
  
  
   
</div>