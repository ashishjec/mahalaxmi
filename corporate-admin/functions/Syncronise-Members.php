<?php

$table_name = 'class_structure';
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
   
  
 if ($type == 'Edit') {
   $insert_bookings = "UPDATE `$table_name` SET
  cs_name   = '".addslashes($field1)."',   
  cs_type   = 'Class'
  where id='".$edit_id."'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$edit_id");
 } else{
  $insert_bookings = "INSERT `$table_name` SET
  cs_name   = '".addslashes($field1)."',   
  cs_type   = 'Class', 
  status   = 'Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();
  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$myid");
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


$select_enquiry="SELECT * FROM $table_name where status = 'Active' and cs_type = 'Class' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name where status = 'Active' and cs_type = 'Class' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);


 $select_bookings= "SELECT * FROM `$table_name` WHERE id = '$edit_id'";
 $sql1=$dbconn->prepare($select_bookings);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);


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
    <!-- End Breadcrumb-->
    <?php if ($type == 'Delete'){

     $delete_statement = "UPDATE `$table_name` SET
      status   = 'Inactive'
      where id='".$delete_id."'";   
  
  
$sql_insert = $dbconn->prepare($delete_statement);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$delete_id");
 
      
      }else {
        ?>
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
            <div class="card-body" style="text-align:center;">
              <form method="GET" action="controllers/sync/index.php">

                <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Session</label>
                      <select name="session" class="form-control">
                        <option>----Select Session----</option>
                        
                         
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
                      <select name="class" class="form-control">
                        <option>----Select Class----</option>
                        
                         
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
                      <select name="semester" class="form-control">
                         <option>----Select Semester----</option>
                        
                         
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
                      <select name="stream" class="form-control">
                         <option>----Select Stream----</option>
                        
                         
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
                      <select name="major" class="form-control">
                         <option>----Select Major----</option>
                        
                         
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



                      <div class="col-md-4" style="padding-top:23px">
                      <div class="form-group">
                     <button name="submit" class="btn btn-primary btn-lg">Submit</button>
                        
                      </div>
                      </div>
                </div>
              </form>
              
            </div>
          </div>
        </div>

        
        </div>

        <?php
      };
      ?>

        
      </div><!-- End Row-->

      
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->