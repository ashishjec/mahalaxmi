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



//Not Working----------- WORKED
$select_busi = "SELECT * FROM businesses where id = '$id' and  status = 'Active'";
$sql47=$dbconn->prepare($select_busi);
$sql47->execute();
$wlvd47=$sql47->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd47 as $rows47);





  
?> 
<section class="section" style="text-align:center; background-image: url('assets/img/bg13.png');" >
    

    <div class="container-fluid" style="text-align:center; margin-top: -100px;background-image: url('assets/img/company/<?php echo $rows47->bus_extra2; ?>');">
        <div class="row" style="text-align:center; ">
            <div class="col-md-12" style="text-align:center; padding-top:250px; padding-bottom:200px; padding-left:100px; padding-right:100px">
             <span style="font-family:Poppins; text-align:center; color: #fff; font-size: 25px;">
                 <?php 
                 
                 echo $rows47->bus_desc;
                 
                 
                 ?></span>
         </div>
        </div>
        
    </div>

<div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0; text-align:left">
You Are Here > <a href="index.php?page=Group-Of-Verticals" style="color:#000;">Group Of Verticals</a> > <a style="color:#000;" href="index.php?page=SingleBusiness&name=<?php echo $name?>"><?php echo $name?></a> > <a style="color:#000;" href="index.php?page=verticalsBlogs&id=<?php echo $id?>&name=<?php echo $name?>">Details</a>
</div>

    <div class="container" >
        <div class="row">
            <div class="col-md-12 shadow-lg p-3 mb-5 bg-white rounded" style="text-align:justify; color: #000; padding-top:30px; margin-top: 30px;">
                                
                <?php 
                
                
                echo $rows47->bus_link;
                
                
                ?>
    
    
            </div>
    
    
    
    
             
    </div>
     
</section>
