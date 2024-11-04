<?php

$table_name = 'books';
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
      $target_path = "uploads/";
      $photo1 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo1;
      move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path);
      $sql = ($photo1!='')?" book_cover='$photo1' ". ',':'';
    }
  
  }

  //2nd File
  if($_FILES['photo2']['name'] == "") {
    //echo "No Image"
  } else {

    $photo2=basename($_FILES['photo2']['name']);
    $extension = pathinfo($photo2, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "uploads/Ebook/";
      $photo2 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo2;
      move_uploaded_file($_FILES['photo2']['tmp_name'], $target_path);
      $sql = ($photo2!='')?" book_ebook='$photo2' ". ',':'';
    }
  
  }
   
  
 if ($type == 'Edit') {
   $insert_bookings = "UPDATE `$table_name` SET
  $sql $sql2
  book_name   = '".addslashes($field1)."',
  book_description   = '".addslashes($field2)."',
  book_language = '".addslashes($field3)."',
  book_category = '".addslashes($field4)."',
  book_publisher = '".addslashes($field5)."',
  book_published_year = '".addslashes($field6)."',
  book_author = '".addslashes($field7)."',
  book_volume = '".addslashes($field8)."',
  book_rack_location = '".addslashes($field9)."',
  book_quantity = '".addslashes($field10)."',
  book_isbn = '".addslashes($field11)."',
  book_barcode = '".addslashes($field12)."',
  book_type = '".addslashes($field13)."'
  where id='".$edit_id."'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&edit_id=$edit_id&type=Edit");
 }else{
  $insert_bookings = "INSERT `$table_name` SET
  $sql $sql2
  book_name   = '".addslashes($field1)."',
  book_description   = '".addslashes($field2)."',
  book_language = '".addslashes($field3)."',
  book_category = '".addslashes($field4)."',
  book_publisher = '".addslashes($field5)."',
  book_published_year = '".addslashes($field6)."',
  book_author = '".addslashes($field7)."',
  book_volume = '".addslashes($field8)."',
  book_rack_location = '".addslashes($field9)."',
  book_quantity = '".addslashes($field10)."',
  book_isbn = '".addslashes($field11)."',
  book_barcode = '".addslashes($field12)."',
  book_type = '".addslashes($field13)."',
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
       <a href="index.php?action=Books-Inventory" class="btn btn-secondary btn-lg btn-block "><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
 

 



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
                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Book Name</label>
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field1" type="text" class="form-control" id="field1"   value="<?php echo $rows1->book_name;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Language</label>
                      <select 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field3" class="form-control">
                        <?php 
                        if ($type == 'Edit') {
                          echo "<option>$rows1->book_language</option>";
                          echo "<option>---------------------</option>";
                        }
                        ?>
                        <option>English</option>
                        <option>Hindi</option>
                        <option>Assamese</option>
                        <option>Bengali</option>
                        <option>Bodo</option>
                        <option>Nepali</option>
                        <option>Manipuri</option>
                        <option>Urdu</option>
                      </select>
                       
                      </div>
                      </div>




                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Category</label>
                      <select 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field4" class="form-control">
                        <?php 
                        if ($type == 'Edit') {
                          echo "<option>$rows1->book_category</option>";
                          echo "<option>---------------------</option>";
                        }
                        ?>
                        
                         
                         <?php  
                        $select_bookings= "SELECT * FROM `book_categories` where status = 'Active'";
                       $sql11=$dbconn->prepare($select_bookings);
                       $sql11->execute();
                       $wlvd11=$sql11->fetchAll(PDO::FETCH_OBJ);
                       if($sql11->rowCount() > 0){
                        foreach($wlvd11 as $rows11){
                       $user_grp_name = $rows11->bk_cat_name;
                       ?>
                        <option><?php  echo $user_grp_name;?></option>
                         <?php }} ?>
                         
                      </select>
                       
                      </div>
                      </div>


                       <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Publisher</label>
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field5" type="text" class="form-control" id="field5"   value="<?php echo $rows1->book_publisher;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Published Year</label>
                      <input name="field6" type="text" class="form-control" id="field5"   value="<?php echo $rows1->book_published_year;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>


                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Author</label>
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field7" type="text" class="form-control" id="field5"   value="<?php echo $rows1->book_author;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>


                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Volume</label>
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field8" type="text" class="form-control" id="field5"   value="<?php echo $rows1->book_volume;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 

                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Rack No</label>
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>

                      name="field9" type="text" class="form-control" id="field5"   value="<?php echo $rows1->book_rack_location;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 

 

                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Quantity</label>
                      <input  readonly  name="field10" type="text" class="form-control" id="field10"   value="<?php echo $rows1->book_quantity;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 

 

                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">ISBN Number</label>
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field11" type="text" class="form-control" id="field11"   value="<?php echo $rows1->book_isbn;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 

 

                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Barcode</label>
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field12" type="text" class="form-control" id="field12"   value="<?php echo $rows1->book_barcode;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 

 

                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Book Type</label>
                      <select 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="field13" class="form-control">
                        <?php 
                        if ($type == 'Edit') {
                          echo "<option>$rows1->book_type</option>";
                          echo "<option>---------------------</option>";
                        }
                        ?>
                        <option>Physical</option>
                        <option>E-Book</option> 
                         
                      </select>
                       
                      </div>
                      </div>

                  <div class="row">

            

                      <div class="col-md-8">
                        <div class="form-group">
                        <label for="inv_phone">Description</label>

                        <textarea 
                        <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      id="editor" name="field2"  ><?php echo $rows1->book_description;?></textarea>

                         <small id="emailHelp" class="form-text text-muted"></small> 
                        </div>
                      </div>

 

                      <div class="col-md-4">
                      
                        <div class="row">
                          <div class="col-md-12">
                          <div class="form-group">
                      <label for="inv_phone">Cover</label>
                       
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="photo1" type="file" id="photo1" class="form-control">

                      <small id="emailHelp" class="form-text text-muted"></small> 

                      

                      <?php 
              if ($type == 'Edit') {
                ?>
                <img style="padding-top: 25px" src="uploads/<?php echo $rows1->book_cover;?>" height="270px" width="420px">
                <?php
              
              }else {
                
              }
              ;?>
                      </div>
                      </div>



                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone">E-Book Upload</label>
                       
                      <input 
                      <?php 
                      if($type == 'View'){
                        echo "readonly";
                      }?>
                      name="photo2" type="file" id="photo1" class="form-control">

                      <small id="emailHelp" class="form-text text-muted"></small> 

                      

                      <?php 
              if ($type == 'Edit') {
                ?>
                <a target="_blank" href="uploads/Ebook/<?php echo $rows1->book_ebook;?>">Preview</a>
                <?php
              
              }else {
                
              }
              ;?>
                      </div>
                      </div>

                        </div>

                    </div>
                  </div>

                     
 

                    
                    <?php 
                      if($type == 'View'){
                         
                      }else{
                        echo "<button type='submit'  name='submit' value='Submit' class='btn btn-primary btn-lg btn-block waves-effect waves-light m-1'>Submit</button>";
                      }?>

                  
                  
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
 
 
    