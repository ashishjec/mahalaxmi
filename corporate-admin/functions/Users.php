<?php

$table_name = 'users';
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
  user_name   = '".addslashes($field1)."',   
  user_email   = '".addslashes($field2)."',   
  user_phone   = '".addslashes($field3)."',   
  user_password   = '".addslashes($field4)."',
  user_role   = '".addslashes($field5)."'
  where id='".$edit_id."'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$edit_id");
 } else{
  $insert_bookings = "INSERT `$table_name` SET
  user_name   = '".addslashes($field1)."',   
  user_email   = '".addslashes($field2)."',   
  user_phone   = '".addslashes($field3)."',   
  user_password   = '".addslashes($field4)."',
  user_role   = '".addslashes($field5)."',
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


$select_enquiry="SELECT * FROM $table_name where status = 'Active' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name where status = 'Active' order by id desc LIMIT $offset, $no_of_records_per_page";
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
               
                <form id="formID" class="m-t-30" method="POST" action="">
                   <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">User Name</label>
                      <input name="field1" type="text" class="form-control" id="field1"   value="<?php echo $rows1->user_name;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">User Email</label>
                      <input name="field2" type="text" class="form-control" id="field2"   value="<?php echo $rows1->user_email;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">User Phone</label>
                      <input name="field3" type="text" class="form-control" id="field3"   value="<?php echo $rows1->user_phone;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">User Password</label>
                      <input name="field4" type="text" class="form-control" id="field4"   value="<?php echo $rows1->user_password;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Role</label>
                      

                      <select name="field5" class="form-control">

                        
                        <option><?php  echo $rows1->user_role;?></option>
                        <option>----Select-----</option>
                         <?php  
                        $select_bookings= "SELECT * FROM `groups` where status = 'Active'";
                       $sql11=$dbconn->prepare($select_bookings);
                       $sql11->execute();
                       $wlvd11=$sql11->fetchAll(PDO::FETCH_OBJ);
                       if($sql11->rowCount() > 0){
                        foreach($wlvd11 as $rows11){
                       $user_grp_name = $rows11->user_grp_name;
                       ?>
                        <option><?php  echo $user_grp_name;?></option>
                         <?php }} ?>
                      </select>
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
            <div class="card-header"><i class="fa fa-user"></i> All Projects</div>
            <div class="card-body">
              <div class="table-responsive">
               
                <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center"> ID</th>
                        <th class="center">  Name</th>
                        <th class="center">  Email</th>
                        <th class="center">  Phone</th>
                        <th class="center">  Password</th>
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
$field2 = $rows->user_name;
$field3 = $rows->user_email;
$field4 = $rows->user_phone;
$field5 = $rows->user_password;





 
?>                  
                      <tr>
                      <td class="center"><?php echo $field1;?></td>
                      <td class="center"><?php echo $field2;?></td>
                      <td class="center"><?php echo $field3;?></td>
                      <td class="center"><?php echo $field4;?></td>
                      <td class="center"><?php echo $field5;?></td>
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