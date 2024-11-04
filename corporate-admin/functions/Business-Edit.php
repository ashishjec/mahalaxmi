<?php

$table_name = 'businesses';
$redirection_page = "index.php?action=$page_name";
$action_name = "action=$page_name";
$type = $_REQUEST['type'];
$name = $_REQUEST['name'];
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
      $target_path = "../assets/img/company/";
      $photo1 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo1;
      move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path);
      $sql = ($photo1!='')?" bus_image='$photo1' ". ',':'';
    }
  
  }
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
   $sql
  
  bus_name   = '".addslashes($field1)."'
  where bus_type   = 'BusinessEdit$name'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&name=$name");
  
    
}



// For Submitting The 2nd Form 

if(isset($_POST['submit2'])){
  
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

 
 
   $insert_bookings = "UPDATE `$table_name` SET
   $sql
  
  bus_desc   = '".addslashes($field1)."'
  where bus_type   = 'BusinessEdit$name'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&name=$name");
  
    
}




// For Submitting The 3rd Form

if(isset($_POST['submit3'])){
  
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
  if($_FILES['photo2']['name'] == "") {
    //echo "No Image"
  } else {

    $photo2=basename($_FILES['photo2']['name']);
    $extension = pathinfo($photo2, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo2 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo2;
      move_uploaded_file($_FILES['photo2']['tmp_name'], $target_path);
      $sql2 = ($photo2!='')?" bus_icon1_image='$photo2' ". ',':'';
    }
  
  }
  
  
  if($_FILES['photo3']['name'] == "") {
    //echo "No Image"
  } else {

    $photo3=basename($_FILES['photo3']['name']);
    $extension = pathinfo($photo3, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo3 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo3;
      move_uploaded_file($_FILES['photo3']['tmp_name'], $target_path);
      $sql3 = ($photo3!='')?" bus_icon2_image='$photo3' ". ',':'';
    }
  
  }
  
  
  if($_FILES['photo4']['name'] == "") {
    //echo "No Image"
  } else {

    $photo4=basename($_FILES['photo4']['name']);
    $extension = pathinfo($photo4, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo4 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo4;
      move_uploaded_file($_FILES['photo4']['tmp_name'], $target_path);
      $sql4 = ($photo4!='')?" bus_icon3_image='$photo4' ". ',':'';
    }
  
  }
  
  
  if($_FILES['photo5']['name'] == "") {
    //echo "No Image"
  } else {

    $photo5=basename($_FILES['photo5']['name']);
    $extension = pathinfo($photo5, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo5 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo5;
      move_uploaded_file($_FILES['photo5']['tmp_name'], $target_path);
      $sql5 = ($photo5!='')?" bus_icon4_image='$photo5' ". ',':'';
    }
  
  }
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
   $sql2 $sql3 $sql4 $sql5
  
  bus_icon_title   = '".addslashes($field1)."',
  bus_icon1_desc   = '".addslashes($field2)."',
  bus_icon2_desc   = '".addslashes($field3)."',
  bus_icon3_desc   = '".addslashes($field4)."',
  bus_icon4_desc   = '".addslashes($field5)."'
  where bus_type   = 'BusinessEdit$name'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&name=$name");
  
    
}


// For Submitting The 4th Form
if(isset($_POST['submit4'])){
  
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

 
 
   $insert_bookings = "INSERT `$table_name` SET
  bus_name   = 'BusinessEdit$name',
  bus_desc   = '".addslashes($field1)."',
  bus_extra   = '".addslashes($field2)."',
  bus_icon_title   = '".addslashes($field3)."',
  bus_type   = 'BusinessLocation',
  status='Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&name=$name");
  
    
}


if(isset($_POST['submit5'])){
  
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
  if($_FILES['photo7']['name'] == "") {
    //echo "No Image"
  } else {

    $photo7=basename($_FILES['photo7']['name']);
    $extension = pathinfo($photo7, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo7 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo7;
      move_uploaded_file($_FILES['photo7']['tmp_name'], $target_path);
      $sql7 = ($photo7!='')?" bus_extra='$photo7' ". ',':'';
    }
  
  }
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
   $sql7
  
  bus_name   = '$name'
  where bus_type   = 'BusinessEdit$name'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&name=$name");
  
    
}

if(isset($_POST['submit7A'])){
  
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
  if($_FILES['photo7A']['name'] == "") {
    //echo "No Image"
  } else {

    $photo7A=basename($_FILES['photo7A']['name']);
    $extension = pathinfo($photo7A, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo7A = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo7A;
      move_uploaded_file($_FILES['photo7A']['tmp_name'], $target_path);
      $sql7A = ($photo7A!='')?" bus_extra2='$photo7A' ". ',':'';
    }
  
  }
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
   $sql7A
  
  bus_name   = '$name'
  where bus_type   = 'BusinessEdit$name'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&name=$name");
  
    
}



if(isset($_POST['submit6'])){
  
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
  if($_FILES['photo9']['name'] == "") {
    //echo "No Image"
  } else {

    $photo9=basename($_FILES['photo9']['name']);
    $extension = pathinfo($photo9, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo9 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo9;
      move_uploaded_file($_FILES['photo9']['tmp_name'], $target_path);
      $sql9 = ($photo9!='')?" bus_image='$photo9' ". ',':'';
    }
  
  }

 
 
   $insert_bookings = "INSERT `$table_name` SET
   $sql9
  bus_name   = 'BusinessEdit$name',
  bus_desc   = '".addslashes($field1)."',
  bus_extra   = '".addslashes($field2)."',
  bus_type   = 'BusinessCompany',
  status='Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&name=$name");
  
    
}

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
      $sql10 = ($photo10!='')?" bus_image='$photo10' ". ',':'';
    }
  
  } 
  
  
  $allow = array("jpg", "JPG", "jpeg", "JPEG", "gif", "GIF", "png", "PNG", "pdf", "PDF");
  //1st File
  if($_FILES['photo100']['name'] == "") {
    //echo "No Image"
  } else {

    $photo100=basename($_FILES['photo100']['name']);
    $extension = pathinfo($photo100, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo100 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo100;
      move_uploaded_file($_FILES['photo100']['tmp_name'], $target_path);
      $sql100 = ($photo100!='')?" bus_extra2='$photo100' ". ',':'';
    }
  
  }

 
 
   $insert_bookings = "INSERT `$table_name` SET
   $sql10 $sql100
  bus_name   = 'BusinessEdit$name',
  bus_desc   = '".addslashes($field1)."',
  bus_extra   = '".addslashes($field2)."',
  bus_link   = '".addslashes($field3)."',
  bus_type   = 'BusinessMedia',
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


 $select_bookings= "SELECT * FROM `$table_name` WHERE bus_type   = 'BusinessEdit$name' and status = 'Active'";
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
  header("Location: $redirection_page&name=$name");
 
      
      }else {
        ?>
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-dot"></i> 
              Header
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone"> Page Title</label>
                      <input name="field1" type="text" class="form-control" id="field1"   value="<?php echo $rows1->bus_name;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 
                     
                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone"> Page Header Image</label>
                      <input name="photo1" type="file" class="form-control" id="field1"   value="<?php echo $rows1->homepage_content_1;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 
                     
                      <div class="col-md-4" style="margin-top:20px">
                      <button type="submit"  name="submit" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>

 
                    </div>

                    

                    
                     

                     
                    

                    
                     
                  
                  
                  </form>


            </div>
            </div>
          </div>
        </div>

         

            </div>
            
            
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"> 
              Description
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                      <label for="inv_phone"> Page Description</label>
                      
                      <textarea name="field1" type="text" class="form-control"><?php echo $rows1->bus_desc;?></textarea>
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 
                      
 
                     
                      <div class="col-md-12" style="margin-top:20px">
                      <button type="submit"  name="submit2" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>

 
                    </div>

                    

                    
                     

                     
                    

                    
                     
                  
                  
                  </form>


            </div>
            </div>
          </div>
        </div>

         

            </div>
            
            
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"> 
              Icons
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Title</label>
                          
                          <textarea name="field1" type="text" class="form-control"><?php echo $rows1->bus_icon_title;?></textarea>
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>

 
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 1 Text</label>
                          
                          <input name="field2" type="text" class="form-control" value="<?php echo $rows1->bus_icon1_desc;?>">
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>

 
                     
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 1 Image</label>
                          
                          <input name="photo2" type="file" class="form-control">
                          </div>
                      </div>

 
                    
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 2 Text</label>
                          
                          <input name="field3" type="text" class="form-control" value="<?php echo $rows1->bus_icon2_desc;?>">
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>

 
                     
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 2 Image</label>
                          
                          <input name="photo3" type="file" class="form-control" >
                          </div>
                      </div>

 
                    
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 3 Text</label>
                          
                          <input name="field4" type="text" class="form-control" value="<?php echo $rows1->bus_icon3_desc;?>">
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>

 
                     
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 3 Image</label>
                          
                          <input name="photo4" type="file" class="form-control" >
                          </div>
                      </div>

 
                    
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 4 Text</label>
                          
                          <input name="field5" type="text" class="form-control" value="<?php echo $rows1->bus_icon4_desc;?>">
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>

 
                     
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 4 Image</label>
                          
                          <input name="photo5" type="file" class="form-control" >
                          </div>
                      </div>

 
                      
 
                     
                      <div class="col-md-12" style="margin-top:20px">
                      <button type="submit"  name="submit3" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>

 
                    </div>

                    

                    
                     

                     
                    

                    
                     
                  
                  
                  </form>


            </div>
            </div>
          </div>
        </div>

         

            </div>
            
            
            
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"> 
              Locations
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone"> Location</label>
                      <input type="text" class="form-control" name="field1" >
                      </div>
                      </div>

                    <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone"> Type</label>
                       
                      <select name="field2" class="form-control">
                          <option>National</option>
                          <option>International</option>
                          <option>National-Description</option>
                          <option>International-Description</option>
                      </select>
                      </div>
                      </div>
                      
                     <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone"> Description</label>
                      <input type="text" class="form-control" name="field3" >
                      </div>
                      </div>
                      
                      
                    <div class="col-md-3" style="padding-top:20px">
                       <button type="submit"  name="submit4" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>

 
                      
 
                     
                       
 
                    </div>

                    

                    
                     

                     
                    

                    
                     
                  
                  
                  </form>
                  
                  
                  <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center"> ID</th>
                        <th class="center">  Name</th>
                        <th class="center">  Type</th>
                        <th class="center">  Description</th>
                        
                        
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
$field2 = $rows->bus_desc;
$field3 = $rows->bus_extra;
$field4 = $rows->bus_icon_title;
 





 
?>                  
                      <tr>
                      <td class="center"><?php echo ++$a;?></td>
                      <td class="center"><?php echo $field2;?></td>
                      <td class="center"><?php echo $field3;?></td>
                      <td class="center"><?php echo $field4;?></td>
                       
                      <td class="center">
                       
                      
                      <a href="<?php echo $redirection_page;?>&delete_id=<?php echo $field1;?>&type=Delete&name=<?php echo $name;?>"target="_self" ><i class="fa fa-trash"></i> </a> 
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
            
            
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-dot"></i> 
              National Map Image
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                       

 
                     
                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone"> Map Image</label>
                      <input name="photo7" type="file" class="form-control" id="field1"   value="<?php echo $rows1->homepage_content_1;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 
                     
                      <div class="col-md-4" style="margin-top:20px">
                      <button type="submit"  name="submit5" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>

 
                    </div>

                    

                    
                     

                     
                    

                    
                     
                  
                  
                  </form>


            </div>
            </div>
          </div>
        </div>

         

            </div> 
            
            
            <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-dot"></i> 
              Global Map Image
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                       

 
                     
                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone"> Map Image</label>
                      <input name="photo7A" type="file" class="form-control" id="field1"   value="<?php echo $rows1->homepage_content_1;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 
                     
                      <div class="col-md-4" style="margin-top:20px">
                      <button type="submit"  name="submit7A" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>

 
                    </div>

                    

                    
                     

                     
                    

                    
                     
                  
                  
                  </form>


            </div>
            </div>
          </div>
        </div>

         

            </div>
            
        
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"> 
              Companies
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Company Name / Description</label>
                      <input type="text" class="form-control" name="field1" >
                      </div>
                      </div>

                    <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Grid Percent</label>
                       
                      <select name="field2" class="form-control">
                          <option value="col-md-3">25%</option>
                          <option value="col-md-4">33%</option>
                          <option value="col-md-5">50%</option>
                           
                      </select>
                      </div>
                      </div>
                      
                      
                      <div class="col-md-3">
                      <div class="form-group">
                      <label for="inv_phone">Company Logo</label>
                      <input type="file" class="form-control" name="photo9" >
                      </div>
                      </div>
                      
                      
                    <div class="col-md-3" style="padding-top:20px">
                       <button type="submit"  name="submit6" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>

 
                      
 
                     
                       
 
                    </div>

                    

                    
                     

                     
                    

                    
                     
                  
                  
                  </form>
                  
                  
                  <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center"> ID</th>
                        <th class="center">  Name</th>
                        <th class="center">  Width</th>
                        
                        
                        <th class="center">  Action</th>  
                      </tr>
                    </thead>
                    <tbody>
     <?php

//while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
//{ 
$select = "SELECT * FROM $table_name where   bus_type   = 'BusinessCompany' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql99=$dbconn->prepare($select);
 $sql99->execute();
 $wlvd99=$sql99->fetchAll(PDO::FETCH_OBJ);
if($sql99->rowCount() > 0){
  
    foreach($wlvd99 as $rows99){
$field199 = $rows99->id;
$field299 = $rows99->bus_desc;
$field399 = $rows99->bus_extra;
$field499 = $rows99->sidebar_menu_master;
 





 
?>                  
                      <tr>
                      <td class="center"><?php echo ++$ab;?></td>
                      <td class="center"><?php echo $field299;?></td>
                      <td class="center"><?php echo $field399;?></td>
                       
                      <td class="center">
                       
                      
                      <a href="<?php echo $redirection_page;?>&delete_id=<?php echo $field199;?>&type=Delete&name=<?php echo $name;?>"target="_self" ><i class="fa fa-trash"></i> </a> 
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
            
            
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"> 
              Image Data
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                        <div class="col-md-2">
                      <div class="form-group">
                      <label for="inv_phone">Name</label>
                      <input type="text" class="form-control" name="field1" >
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
                      
                      <div class="col-md-6">
                      <div class="form-group">
                      <label for="inv_phone">Blog Page Background Image</label>
                      <input type="file" class="form-control" name="photo100" >
                      </div>
                      </div>
                      
                      
                    <div class="col-md-6" style="padding-top:20px">
                       <button type="submit"  name="submit8" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Submit</button>
                      </div>

 
                      
 
                     
                       
 
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
$select11 = "SELECT * FROM $table_name where   bus_type   = 'BusinessMedia' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql991=$dbconn->prepare($select11);
 $sql991->execute();
 $wlvd991=$sql991->fetchAll(PDO::FETCH_OBJ);
if($sql991->rowCount() > 0){
  
    foreach($wlvd991 as $rows991){
$field1991 = $rows991->id;
$field2991 = $rows991->bus_desc;
$field3991 = $rows991->bus_extra;
$field4991 = $rows991->bus_link;
 





 
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
            
            
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"> 
              Enquiries
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                
                  
                  
                  <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center"> ID</th>
                        <th class="center">  Name</th>
                        <th class="center">  Email</th>
                        <th class="center">  Phone</th>
                        <th class="center">  Department</th>
                        <th class="center">  Enquiry</th>
                         
                        
                        
                        <th class="center">  Action</th>  
                      </tr>
                    </thead>
                    <tbody>
     <?php

//while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
//{ 
$select66 = "SELECT * FROM $table_name where   bus_type   = 'BusinessEnquiry' and bus_name = 'BusinessEdit$name' and status = 'Active'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql99111=$dbconn->prepare($select66);
 $sql99111->execute();
 $wlvd99111=$sql99111->fetchAll(PDO::FETCH_OBJ);
if($sql99111->rowCount() > 0){
  
    foreach($wlvd99111 as $rows99111){
$field199111 = $rows99111->id;
$field299111 = $rows99111->bus_icon1_desc;
$field399111 = $rows99111->bus_icon2_desc;
$field499111 = $rows99111->bus_icon3_desc;
$field599111 = $rows99111->bus_icon4_desc;
$field699111 = $rows99111->bus_icon1_image;
 





 
?>                  
                      <tr>
                      <td class="center"><?php echo ++$abc;?></td>
                      <td class="center"><?php echo $field299111;?></td>
                      <td class="center"><?php echo $field399111;?></td>
                      <td class="center"><?php echo $field499111;?></td>
                      <td class="center"><?php echo $field599111;?></td>
                      <td class="center"><?php echo $field699111;?></td>
                       
                      <td class="center">
                       
                      
                      <a href="<?php echo $redirection_page;?>&delete_id=<?php echo $field199111;?>&type=Delete&name=<?php echo $name;?>"target="_self" ><i class="fa fa-trash"></i> </a> 
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