 <?php $name = $_GET['name']; ?>

<style type="text/css">
     

 

.card1 {
  position: relative;
  top: 0;
  background-color: #fff;
   
  box-shadow: 0 1px 0px 0 rgba(0, 0, 0, 0.21);
   
  margin: 10px;
  -webkit-transition: all 1s ease;/* WebKit */
  -moz-transition: all 1s ease;/* Firefox */
  -o-transition: all 1s ease;/* Opera */
  transition: all 1s ease;/* Standard */
}

.card1:hover {
  top: -20px;
   
  
}



</style>


       
    <?php 
  
$selectcsr4 = "SELECT * FROM csr where status = 'Active' and csr_facts_title1 = '$name'";
$sql64=$dbconn->prepare($selectcsr4);
$sql64->execute();
$wlvd64=$sql64->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd64 as $rows64);
$field_XX = $rows64->csr_name;
$field51 = $rows64->csr_facts_5;


$selectcsr5 = "SELECT * FROM csr where status = 'Active' and csr_facts_title2 = '$name'";
$sql65=$dbconn->prepare($selectcsr5);
$sql65->execute();
$wlvd65=$sql65->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd65 as $rows65);
$field_XY = $rows65->csr_desc;
$field52 = $rows65->csr_facts_6;


$selectcsr6 = "SELECT * FROM csr where status = 'Active' and csr_facts_title3 = '$name'";
$sql66=$dbconn->prepare($selectcsr6);
$sql66->execute();
$wlvd66=$sql66->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd66 as $rows66);
$field_XZ = $rows66->csr_img;
$field53 = $rows66->csr_facts_7;


$selectcsr7 = "SELECT * FROM csr where status = 'Active' and csr_facts_title4 = '$name'";
$sql67=$dbconn->prepare($selectcsr7);
$sql67->execute();
$wlvd67=$sql67->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd67 as $rows67);
$field_XO = $rows67->csr_facts_title5;
$field54 = $rows67->csr_facts_8;



  
  ?>  


<div class="" style="background-image: url('assets/img/bg13.png');">
    <section class="section" style="text-align:center; background-image: url('assets/img/company/<?php echo $field51; echo $field52; echo $field53; echo $field54;  ?>');">
        <div class="container" style="padding-top: 200px;padding-bottom: 200px;text-align:center;">
            <span style="font-family:Poppins; font-size: 30px; color:#fff"><?php $name = $_GET['name']; echo $name?></span>
         </div>
    </section>
    
    <div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
    You Are Here > <a href="index.php?page=Sustainability" style="color:#000;">Sustainability</a> > <a style="color:#000;" href="page=CSR&name=<?php echo $name?>"><?php echo $name?></a>
    </div>
</div>
<div class="" style="background-image: url('assets/img/bg13.png');">
<div class="container" style="text-align:center;">

 


  
    
    <div class="row" style="margin-bottom: 20px; ;text-align:center;"> <!-- #### FrontEnd Changed here was -40px #### -->
        
       
      <div class="container">
          
          <div class="col-md-12 card p-5 " style="text-align: justify; margin-top:20px  ">
              
              <p><?php echo $field_XX; echo $field_XY; echo $field_XZ; echo $field_XO; ?></p>
              
          </div>
          
      </div>
                      
                 
    
    
    </div>
    
    
</div>
</div>