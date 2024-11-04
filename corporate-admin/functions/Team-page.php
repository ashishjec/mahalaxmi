<?php

$table_name = 'teampage';
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
  
  
  
  
  //File Upload Codes Starts Here

   $allow = array("jpg", "JPG", "jpeg", "JPEG", "gif", "GIF", "png", "PNG", "pdf", "PDF");
  //1st File
  if($_FILES['photo1']['name'] == "") {
    //echo "No Image"
  } else {

    $photo1=basename($_FILES['photo1']['name']);
    $extension = pathinfo($photo1, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/home/";
      $photo1 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo1;
      move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path);
      $sql = ($photo1!='')?" teampage_content_3='$photo1' ". ',':'';
    }
  
  }
   
   
   
   
   
  
 if ($type == 'Edit') {
   $insert_bookings = "UPDATE `$table_name` SET
   $sql
  teampage_type   = 'Team_Directors',   
  teampage_content_1   = '".addslashes($field1)."',
  teampage_content_2   = '".addslashes($field2)."',
  teampage_content_4   = '".addslashes($field3)."'
  where id='".$edit_id."'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$edit_id");
 } else{
  $insert_bookings = "INSERT `$table_name` SET
  $sql
  teampage_type   = 'Team_Directors',   
  teampage_content_1   = '".addslashes($field1)."',
  teampage_content_2  = '".addslashes($field2)."',
  teampage_content_4  = '".addslashes($field3)."',
  status   = 'Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();
  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$myid");
 }
    
}




if(isset($_POST['submit1'])){
  
  $fieldA    =  $_POST['fieldA'];
  $fieldB    =  $_POST['fieldB'];
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
  teampage_type   = 'Title',   
  teampage_content_1   = '".addslashes($fieldA)."'
  where id='1'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$edit_id");
  
 
    
}

// For Displaying the table

if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name where status = 'Active' and teampage_type = 'Team_Directors' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name where status = 'Active' and teampage_type = 'Team_Directors' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);


 $select_bookings= "SELECT * FROM `$table_name` WHERE id = '$edit_id'";
 $sql1=$dbconn->prepare($select_bookings);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);


 $select_booking= "SELECT * FROM `$table_name` WHERE id = '1'";
 $sql2=$dbconn->prepare($select_booking);
 $sql2->execute();
 $wlvd2=$sql2->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd2 as $rows2);


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
       
       <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning btn-lg btn-block waves-effect waves-light m-1"><span style="color:#fff">Title Settings</span></a>
       <!-- Button trigger modal -->
       
       
       <!--- Pop up Title Settings Starts-->
       

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
         <form id="formID" class="m-t-30" method="POST" action="">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Section Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
              </div>
              <div class="modal-body">
               
                   <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Section Title</label>
                      <input name="fieldA" type="text" class="form-control"  required="" value="<?php echo $rows2->teampage_content_1;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>

                 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="submit1" value="Submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    </form>
  </div>
</div>
       <!--- Pop up Title Settings Ends-->
 

 



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
        <div class="col-lg-4">
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
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Director's Name</label>
                      <input name="field1" type="text" class="form-control"  required="" value="<?php echo $rows1->teampage_content_1;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>

                    
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Director's Designation</label>
                      <input name="field2" type="text" class="form-control"  required=""  value="<?php echo $rows1->teampage_content_2;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Director's Message</label>
                      <textarea   name="field3" class="form-control"  required=""><?php echo $rows1->teampage_content_4;?></textarea>
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>


                    
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Director's Image (540px X 640px)</label>
                      <input name="photo1" type="file" class="form-control"  >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>

                    

                    
                     
                  <button type="submit"  name="submit" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                  
                  </form>


            </div>
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="card">
            <div class="card-header"><i class="fa fa-user"></i> All Records</div>
            <div class="card-body">
              <div class="table-responsive">
               
                <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center"> ID</th>
                        <th class="center"> Director's Name</th>
                        <th class="center">  Director's Designation</th>
                        <th class="center">  Director's Message</th>
                        
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
$field2 = $rows->teampage_content_1;
$field3 = $rows->teampage_content_2;
$field4 = $rows->teampage_content_4;
 





 
?>                  
                      <tr>
                      <td class="center"><?php echo $field1;?></td>
                      <td class="center"><?php echo $field2;?></td>
                      <td class="center"><?php echo $field3;?></td>
                      <td class="center"><?php echo substr("$field4",0,20);?>...</td>
                      
                      
                       
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>