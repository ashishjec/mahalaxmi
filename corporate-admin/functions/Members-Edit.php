<?php

$table_name = 'membership';
$redirection_page = "index.php?action=$page_name";
$action_name = "action=$page_name";
$type = $_REQUEST['type'];
$edit_id = $_REQUEST['edit_id'];
$delete_id = $_REQUEST['delete_id'];



 

// For Submitting The Form

if(isset($_POST['submit'])){
  
  $field1    =  $_POST['field1'];
  $field2    =  $_POST['field2'];
  $field3    =  $_POST['field3'];
  $field4    =  $_POST['field4'];
  $field5    =  $_POST['field5'];
  $field6    =  $_POST['field6'];
  $field7    =  $_POST['field7'];
  $field8    =  $_POST['field8'];
  $field9    =  $_POST['field9'];
  $field10    =  $_POST['field10'];
  $field11    =  $_POST['field11'];
  $field12    =  $_POST['field12'];
  $field13    =  $_POST['field13'];

   //File Upload Codes Starts Here

   $allow = array("jpg", "JPG", "jpeg", "JPEG", "gif", "GIF", "png", "PNG", "pdf", "PDF");
  //1st File
  if($_FILES['photo1']['name'] == "") {
    //echo "No Image"
  } else {

    $photo1=basename($_FILES['photo1']['name']);
    $extension = pathinfo($photo1, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "uploads/Members/";
      $photo1 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo1;
      move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path);
      $sql = ($photo1!='')?" mem_photo='$photo1' ". ',':'';
    }
  
  }

   
   
  
 if ($type == 'Edit') {
   $insert_bookings = "UPDATE `$table_name` SET
  $sql 
  mem_name   = '".addslashes($field1)."',
  mem_mobile   = '".addslashes($field2)."',
  mem_roll = '".addslashes($field3)."',
  mem_session = '".addslashes($field4)."',
  mem_class = '".addslashes($field5)."',
  mem_semester = '".addslashes($field6)."',
  mem_stream = '".addslashes($field7)."',
  mem_major = '".addslashes($field8)."'
  where id='".$edit_id."'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&edit_id=$edit_id&type=Edit");
 }else{
  $insert_bookings = "INSERT `$table_name` SET
  $sql  
  mem_name   = '".addslashes($field1)."',
  mem_mobile   = '".addslashes($field2)."',
  mem_roll = '".addslashes($field3)."',
  mem_session = '".addslashes($field4)."',
  mem_class = '".addslashes($field5)."',
  mem_semester = '".addslashes($field6)."',
  mem_stream = '".addslashes($field7)."',
  mem_major = '".addslashes($field8)."',
  status   = 'Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();
  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&edit_id=$myid&type=Edit");
 }
    
}

// For Displaying the table

if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name WHERE web_ecom_website_id = '$website_real_id' and status = 'Active' and web_ecom_type = 'Category' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE web_ecom_website_id = '$website_real_id' and status = 'Active' and web_ecom_type = 'Category' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);


 $select_bookings= "SELECT * FROM `$table_name` WHERE  status = 'Active' and id = '$edit_id'";
 $sql1=$dbconn->prepare($select_bookings);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);

if ($type != 'Delete') {
  
  ?>

    <!---- Page starts here------>
<div class="container-fluid">
      
      <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title"><?php  echo $page_name;?></h4>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?action=Welcome">Dashboard </a></li>
             
            <li class="breadcrumb-item active" aria-current="page"><a href="index.php?action=<?php  echo $page_name; ?>"><?php  echo $page_name; ?></a></li>
         </ol>
     </div>
     
     <div class="col-sm-3">
       <?php include ('plugins/alert.php') ;?>
       <!-- Button trigger modal -->
 

 



     </div>
     
     </div>


<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-user"></i> 
              <?php 
              if ($type == 'Edit') {
                echo("You Are Editing A Record");
              
              }else {
                echo "You Are Adding A New Record";
              }
              ;?>
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                 <form id="formID" class="m-t-30" method="post" action="" enctype="multipart/form-data">
       
             <div class="row">
                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Member / Students Name</label>
                      <input name="field1" type="text" class="form-control" id="field1"   value="<?php echo $rows1->mem_name;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Phone</label>
                      <input name="field2" type="text" class="form-control" id="field2"   value="<?php echo $rows1->mem_mobile;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Roll No</label>
                      <input name="field3" type="text" class="form-control"    value="<?php echo $rows1->mem_roll;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

                       

                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Session</label>
                      <select name="field4" class="form-control">
                        <?php 
                        if ($type == 'Edit') {
                          echo "<option>$rows1->mem_session</option>";
                          echo "<option>---------------------</option>";
                        }
                        ?>
                        
                         
                         <?php  
                        $select_bookings= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Session'";
                       $sql11=$dbconn->prepare($select_bookings);
                       $sql11->execute();
                       $wlvd11=$sql11->fetchAll(PDO::FETCH_OBJ);
                       if($sql11->rowCount() > 0){
                        foreach($wlvd11 as $rows11){
                       $cs_name = $rows11->cs_name;
                       ?>
                        <option><?php  echo $cs_name;?></option>
                         <?php }} ?>
                         
                      </select>
                       
                      </div>
                      </div>


                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Class</label>
                      <select name="field5" class="form-control">
                        <?php 
                        if ($type == 'Edit') {
                          echo "<option>$rows1->mem_class</option>";
                          echo "<option>---------------------</option>";
                        }
                        ?>
                        
                         
                         <?php  
                        $select_bookings2= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Class'";
                       $sql121=$dbconn->prepare($select_bookings2);
                       $sql121->execute();
                       $wlvd121=$sql121->fetchAll(PDO::FETCH_OBJ);
                       if($sql121->rowCount() > 0){
                        foreach($wlvd121 as $rows121){
                       $cs_name2 = $rows121->cs_name;
                       ?>
                        <option><?php  echo $cs_name2;?></option>
                         <?php }} ?>
                         
                      </select>
                       
                      </div>
                      </div>


                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Semester</label>
                      <select name="field6" class="form-control">
                        <?php 
                        if ($type == 'Edit') {
                          echo "<option>$rows1->mem_semester</option>";
                          echo "<option>---------------------</option>";
                        }
                        ?>
                        
                         
                         <?php  
                        $select_bookings3= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Semester'";
                       $sql131=$dbconn->prepare($select_bookings3);
                       $sql131->execute();
                       $wlvd131=$sql131->fetchAll(PDO::FETCH_OBJ);
                       if($sql131->rowCount() > 0){
                        foreach($wlvd131 as $rows131){
                       $cs_name3 = $rows131->cs_name;
                       ?>
                        <option><?php  echo $cs_name3;?></option>
                         <?php }} ?>
                         
                      </select>
                       
                      </div>
                      </div>


                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Stream</label>
                      <select name="field7" class="form-control">
                        <?php 
                        if ($type == 'Edit') {
                          echo "<option>$rows1->mem_stream</option>";
                          echo "<option>---------------------</option>";
                        }
                        ?>
                        
                         
                         <?php  
                        $select_bookings4= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Stream'";
                       $sql141=$dbconn->prepare($select_bookings4);
                       $sql141->execute();
                       $wlvd141=$sql141->fetchAll(PDO::FETCH_OBJ);
                       if($sql141->rowCount() > 0){
                        foreach($wlvd141 as $rows141){
                       $cs_name4 = $rows141->cs_name;
                       ?>
                        <option><?php  echo $cs_name4;?></option>
                         <?php }} ?>
                         
                      </select>
                       
                      </div>
                      </div>


                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Major</label>
                      <select name="field8" class="form-control">
                        <?php 
                        if ($type == 'Edit') {
                          echo "<option>$rows1->mem_major</option>";
                          echo "<option>---------------------</option>";
                        }
                        ?>
                        
                         
                         <?php  
                        $select_bookings5= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Major'";
                       $sql151=$dbconn->prepare($select_bookings5);
                       $sql151->execute();
                       $wlvd151=$sql151->fetchAll(PDO::FETCH_OBJ);
                       if($sql151->rowCount() > 0){
                        foreach($wlvd151 as $rows151){
                       $cs_name5 = $rows151->cs_name;
                       ?>
                        <option><?php  echo $cs_name5;?></option>
                         <?php }} ?>
                         
                      </select>
                       
                      </div>
                      </div>

 
 

                      <div class="col-md-4">
                      
                         
                          <div class="form-group">
                      <label for="inv_phone">Photo</label>
                       
                      <input name="photo1" type="file" id="photo1" class="form-control">

                      <small id="emailHelp" class="form-text text-muted"></small> 

                      

                      <?php 
              if ($type == 'Edit') {
                ?>
                <img style="padding-top: 25px" src="uploads/Members/<?php echo $rows1->mem_photo;?>" height="100px" width="150px">
                <?php
              
              }else {
                
              }
              ;?>
                      </div>
                      </div>


 
                     
 

                    
                     
                  <button type="submit"  name="submit" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                  
                  </form>


            </div>
            </div>
          </div>
        </div>

         

            </div>
            </div>
          </div>
        </div>




      <!-------Page ends here-------->

  <?php
}elseif ($type == 'Delete') {
  $delete_statement = "UPDATE `$table_name` SET
      status   = 'Inactive'
      where id='".$edit_id."'";   
  
  
$sql_insert = $dbconn->prepare($delete_statement);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: index.php?action=Books-Inventory");
} else{
  ?>

  <div class="container-fluid">
      
      <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title"><?php  echo $page_name; ?></h4>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?action=Welcome">Dashboard</a></li>
             
            <li class="breadcrumb-item active" aria-current="page"><a href="index.php?action=<?php  echo $page_name; ?>"><?php  echo $page_name; ?></a></li>
         </ol>
     </div>
     
     <div class="col-sm-3">
       <?php include ('plugins/alert.php') ;?>
       <!-- Button trigger modal -->
 

 



     </div>
     
     </div>
     
          <p style="color: #000">You are Not Allowed To Access This Page. Kindly contact support team, if you want to access this feature! </p>

          

        
      </div><!-- End Row-->

      
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->


  <?php
}
?>
 
 
    