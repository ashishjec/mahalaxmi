<?php

$table_name = 'web_contents';
$redirection_page = "index.php?action=$page_name";
$action_name = "action=$page_name";
$type = $_REQUEST['type'];
$edit_id = $_REQUEST['edit_id'];
$delete_id = $_REQUEST['delete_id'];


$select_website= "SELECT * FROM `websites` WHERE website_owner = '$master_user_id' and website_type = '$website_real_type' and status = 'Active'";
 $sql101=$dbconn->prepare($select_website);
 $sql101->execute();
 $wlvd101=$sql101->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd101 as $rows101);

 $website_id = $rows101->id;

 

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

   //File Upload Codes Starts Here

   $allow = array("jpg", "JPG", "jpeg", "JPEG", "gif", "GIF", "png", "PNG", "pdf", "PDF");
  //1st File
  if($_FILES['photo1']['name'] == "") {
    //echo "No Image"
  } else {

    $photo1=basename($_FILES['photo1']['name']);
    $extension = pathinfo($photo1, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../uploads/";
      $photo1 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo1;
      move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path);
      $sql = ($photo1!='')?" web_image='$photo1' ". ',':'';
    }
  
  }
   
  
 if ($type == 'Edit') {
   $insert_bookings = "UPDATE `$table_name` SET
   $sql
  web_name   = '".addslashes($field1)."',
  web_nav_type   = '".addslashes($field2)."',
  web_parent_name   = '".addslashes($field3)."',
  web_type   = '$page_name',
   web_website_id = '$website_id'
  where id='".$edit_id."'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$edit_id");
 } else{
  $insert_bookings = "INSERT `$table_name` SET
  $sql
  web_name   = '".addslashes($field1)."',
  web_nav_type   = '".addslashes($field2)."',
  web_parent_name   = '".addslashes($field3)."',
  web_type   = '$page_name',
   web_website_id = '$website_id',
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


$select_enquiry="SELECT * FROM $table_name where status = 'Active' and web_type = '$page_name' and web_website_id = '$website_id' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name where status = 'Active' and web_type = '$page_name' and web_website_id = '$website_id' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);


 $select_bookings= "SELECT * FROM `$table_name` WHERE id = '$edit_id' and status = 'Active' and web_type = '$page_name' and web_website_id = '$website_id'";
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
        <h4 class="page-title"><?php  echo $page_name;?></h4>
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
        <div class="col-lg-6">
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
                      <div class="col-md-6">
                      <div class="form-group">
                      <label for="inv_phone"> Name</label>
                      <input name="field1" type="text" class="form-control" id="field1"   value="<?php echo $rows1->web_name;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                      <label for="inv_phone">Navigation Type</label>
                      
                      <select name="field2" class="form-control">
                       <option><?php echo $rows1->web_nav_type;?></option>
                       <option>------ Select -----</option>
                       <option value="Home">Home</option>
                       <option value="Page">Page</option>
                       <option value="Blog">Blog</option>
                       <option value="Testimonial">Testimonial</option>
                       <option value="Service-Products">Service / Products</option>
                       <option value="Contact">Contact</option>
                    
                       <option value="Category">Course Category</option>
                       <option value="#">Parent (Non Clickable)</option>
                      </select>
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Parent</label>

                      <select name="field3" class="form-control">

                        
                        <option><?php  echo $rows1->web_parent;?></option>
                        <option>----Select-----</option>
                         <?php  
                        $select_bookings= "SELECT * FROM `web_contents` where web_type= 'Navigation' and status = 'Active' and web_website_id = '$website_id' ";
                       $sql99=$dbconn->prepare($select_bookings);
                       $sql99->execute();
                       $wlvd99=$sql99->fetchAll(PDO::FETCH_OBJ);
                       if($sql99->rowCount() > 0){
                        foreach($wlvd99 as $rows99){
                       $web_name = $rows99->web_name;
                       ?>
                        <option><?php  echo $web_name;?></option>
                         <?php }} ?>
                      </select>

                       </div>
                       </div>

               </div>       

   
                     
                  <button type="submit"  name="submit" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                  
                  </form>


            </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-header"><i class="fa fa-user"></i> All Data</div>
            <div class="card-body">
              <div class="table-responsive">
               
                <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center"> ID</th>
                        <th class="center">  Name</th>
                        
                        <th class="center">  Action</th>  
                      </tr>
                    </thead>
                    <tbody>
     <?php

//while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
//{ 
if($sql->rowCount() > 0){
  
    foreach($wlvd as $rows){
$field1 = $rows->id;
$field2 = $rows->web_name;
 
?>                  
                      <tr>
                      <td class="center"><?php echo $field1;?></td>
                      <td class="center"><?php echo $field2;?></td>
                       
                      <td class="center">
                        <a href="<?php echo $redirection_page;?>&edit_id=<?php echo $field1;?>&type=Edit"target="_self" ><i class="fa fa-edit"></i> </a> 
                      
                      <a href="<?php echo $redirection_page;?>&delete_id=<?php echo $field1;?>&type=Delete"target="_self" ><i class="fa fa-trash"></i> </a> 
                    </td>
                     </tr> 

                      <?php }} ?>
                     </tbody> 
                  </table>

                  <?php include ('plugins/pagination.php') ;?>
                
        </div>

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