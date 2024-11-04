<?php

$table_name = 'csr_single';
$redirection_page = "index.php?action=$page_name";
$action_name = "action=$page_name";
$type = $_REQUEST['type'];
$name = $_REQUEST['name'];
$edit_id = $_REQUEST['edit_id'];
$delete_id = $_REQUEST['delete_id'];
 
 
if(isset($_POST['submit8'])){
  
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
  if($_FILES['photo10']['name'] == "") {
    //echo "No Image"
  } else {

    $photo10=basename($_FILES['photo10']['name']);
    $extension = pathinfo($photo10, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo10 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo10;
      move_uploaded_file($_FILES['photo10']['tmp_name'], $target_path);
      $sql10 = ($photo10!='')?" csrS_image='$photo10' ". ',':'';
    }
  
  }

 
 
   $insert_bookings = "INSERT `$table_name` SET
   $sql10
  csrS_cat   = '".addslashes($field1)."',
  csrS_grid   = '".addslashes($field2)."',
  csrS_name   = '".addslashes($field3)."', 
  csrS_desc   = '".addslashes($field4)."',
  status='Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&name=$name");
  
    
}


// For Displaying the table

if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 25;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name where bus_type   = 'BusinessLocation' and bus_name = 'BusinessEdit$name' and status = 'Active' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name where   bus_type   = 'BusinessLocation' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);


 $select_bookings= "SELECT * FROM `$table_name` WHERE id = 1";
 $sql1=$dbconn->prepare($select_bookings);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);


 $select_bookings2= "SELECT * FROM `$table_name` WHERE id = 2";
 $sql12=$dbconn->prepare($select_bookings2);
 $sql12->execute();
 $wlvd12=$sql12->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd12 as $rows12);


 $select_bookings3= "SELECT * FROM `$table_name` WHERE id = 3";
 $sql13=$dbconn->prepare($select_bookings3);
 $sql13->execute();
 $wlvd13=$sql13->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd13 as $rows13);


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
  header("Location: $redirection_page&name=$name");
 
      
      }else {
        ?>
         
            
        
        
            
            
        
            
            
     
        
            
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
             
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                        <div class="col-md-2">
                      <div class="form-group">
                      <label for="inv_phone">Category</label>
                      
                      <select name="field1" class="form-control">
                          <option>Environment</option>
                          <option>Safety</option>
                          <option>Health</option>
                          <option>Education</option>
                      </select>
                      </div>
                      </div>

                        <div class="col-md-2">
                      <div class="form-group">
                      <label for="inv_phone">Grid Percent</label>
                       
                      <select name="field2" class="form-control">
                          <option value="col-md-3">25%</option>
                          <option value="col-md-4">33%</option>
                          <option value="col-md-5">50%</option>
                          <option value="col-md-6">60%</option>
                          <option value="col-md-7">80%</option>
                           
                      </select>
                      </div>
                      </div>
                      
                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">One Liner</label>
                      <input type="text" class="form-control" name="field3" >
                      </div>
                      </div>
                      
                      
                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone">Image</label>
                      <input type="file" class="form-control" name="photo10" >
                      </div>
                      </div>
                      
                      
                    <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">Description</label>
                      <textarea name="field4" id="editor" class="form-control"></textarea>
                      
                      </div>
                      </div>
                      
                       <div class="col-md-4" style=""></div>
                      
                    <div class="col-md-4" style="padding-bottom:50px">
                       <button type="submit"  name="submit8" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>
                      
                      <div class="col-md-4" style=""></div>


                    </div>
                    

              
                  </form>
                  
                  
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
$select11 = "SELECT * FROM $table_name where    status = 'Active'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql991=$dbconn->prepare($select11);
 $sql991->execute();
 $wlvd991=$sql991->fetchAll(PDO::FETCH_OBJ);
if($sql991->rowCount() > 0){
  
    foreach($wlvd991 as $rows991){
$field1991 = $rows991->id;
$field2991 = $rows991->csrS_name;
$field3991 = $rows991->csr_facts_1;
$field4991 = $rows991->csr_facts_2;
 





 
?>                  
                      <tr>
                      <td class="center"><?php echo ++$abc;?></td>
                      <td class="center"><?php echo $field2991;?></td>
                      
                       
                      <td class="center">
                       
                      
                      <a href="<?php echo $redirection_page;?>&delete_id=<?php echo $field1991;?>&type=Delete&name=<?php echo $name;?>"target="_self" ><i class="fa fa-trash"></i> </a> 
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
    