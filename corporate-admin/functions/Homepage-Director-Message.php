<?php

$table_name = 'homepage';
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
      $sql = ($photo1!='')?" homepage_content_3='$photo1' ". ',':'';
    }
  
  }
   
   
   
   
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
   $sql
  homepage_type   = 'DirectorMessage',   
  homepage_content_1   = '".addslashes($field1)."',
  homepage_content_2   = '".addslashes($field2)."',

  homepage_content_4   = '".addslashes($field4)."',
  homepage_content_5   = '".addslashes($field4)."'
  where id='22'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$edit_id");
  
    
}




if(isset($_POST['submit1'])){
  
  $fieldA    =  $_POST['fieldA'];
  $fieldB    =  $_POST['fieldB'];
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
  homepage_type   = 'Title',   
  homepage_content_1   = '".addslashes($field11A)."',
  homepage_content_2   = '".addslashes($field12B)."',
  homepage_content_4   = '".addslashes($field14D)."',
  homepage_content_5   = '".addslashes($field14D)."'
  where id='22'";   
  
  
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


$select_enquiry="SELECT * FROM $table_name where status = 'Active' and homepage_type = 'DirectorMessage' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name where status = 'Active' and homepage_type = 'DirectorMessage' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);


 $select_bookings= "SELECT * FROM `$table_name` WHERE id = '$edit_id'";
 $sql1=$dbconn->prepare($select_bookings);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);


 $select_booking= "SELECT * FROM `$table_name` WHERE id = '22'";
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
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Director Name</label>
                      <input name="field1" type="text" class="form-control"  required="" value="<?php echo $rows2->homepage_content_1;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>

                    
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Director Occupation</label>
                      <input name="field2" type="text" class="form-control"  required=""  value="<?php echo $rows2->homepage_content_2;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Director Message</label>
                      <input name="field4" type="text" class="form-control"  required=""  value="<?php echo $rows2->homepage_content_4;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>

                    

                     
                    
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Director Photo (540px X 640px)</label>
                      <input name="photo1" type="file" class="form-control"   >
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