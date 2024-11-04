<?php

$table_name = 'csr';
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
      $sql = ($photo1!='')?" csr_img='$photo1' ". ',':'';
    }
  
  }
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
   $sql
  
  csr_name   = '".addslashes($field1)."'
  where csr_type   = 'csr_header'";   
  
  
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
  
  csr_desc   = '".addslashes($field1)."'
  where csr_type   = 'csr_description'";   
  
  
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
  $fielddesc1    =  $_POST['fielddesc1'];
  $fielddesc2    =  $_POST['fielddesc2'];
  $fielddesc3    =  $_POST['fielddesc3'];
  $fielddesc4    =  $_POST['fielddesc4'];


  //File Upload Codes Starts Here

   $allow = array("jpg", "JPG", "jpeg", "JPEG", "gif", "GIF", "png", "PNG", "pdf", "PDF");
  //1st File
  
  if($_FILES['photo11']['name'] == "") {
    //echo "No Image"
  } else {

    $photo11=basename($_FILES['photo11']['name']);
    $extension = pathinfo($photo11, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo11 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo11;
      move_uploaded_file($_FILES['photo11']['tmp_name'], $target_path);
      $sql11 = ($photo11!='')?" csr_img='$photo11' ". ',':'';
    }
  
  }
  
  
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
      $sql2 = ($photo2!='')?" csr_facts_1='$photo2' ". ',':'';
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
      $sql3 = ($photo3!='')?" csr_facts_2='$photo3' ". ',':'';
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
      $sql4 = ($photo4!='')?" csr_facts_3='$photo4' ". ',':'';
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
      $sql5 = ($photo5!='')?" csr_facts_4='$photo5' ". ',':'';
    }
  
  }
   
    
  if($_FILES['photo51']['name'] == "") {
    //echo "No Image"
  } else {

    $photo51=basename($_FILES['photo51']['name']);
    $extension = pathinfo($photo51, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo51 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo51;
      move_uploaded_file($_FILES['photo51']['tmp_name'], $target_path);
      $sql51 = ($photo51!='')?" csr_facts_5='$photo51' ". ',':'';
    }
  
  }
   
    
  if($_FILES['photo52']['name'] == "") {
    //echo "No Image"
  } else {

    $photo52=basename($_FILES['photo52']['name']);
    $extension = pathinfo($photo52, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo52 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo52;
      move_uploaded_file($_FILES['photo52']['tmp_name'], $target_path);
      $sql52 = ($photo52!='')?" csr_facts_6='$photo52' ". ',':'';
    }
  
  }
   
    
  if($_FILES['photo53']['name'] == "") {
    //echo "No Image"
  } else {

    $photo53=basename($_FILES['photo53']['name']);
    $extension = pathinfo($photo53, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo53 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo53;
      move_uploaded_file($_FILES['photo53']['tmp_name'], $target_path);
      $sql53 = ($photo53!='')?" csr_facts_7='$photo53' ". ',':'';
    }
  
  }
   
    
  if($_FILES['photo54']['name'] == "") {
    //echo "No Image"
  } else {

    $photo54=basename($_FILES['photo54']['name']);
    $extension = pathinfo($photo54, PATHINFO_EXTENSION);
    if(in_array($extension,$allow)){
      $target_path = "../assets/img/company/";
      $photo54 = md5(rand() * time()).'.'.$extension;
      $target_path = $target_path . $photo54;
      move_uploaded_file($_FILES['photo54']['tmp_name'], $target_path);
      $sql54 = ($photo54!='')?" csr_facts_8='$photo54' ". ',':'';
    }
  
  }
   
  
 
   $insert_bookings = "UPDATE `$table_name` SET
    $sql11 $sql2 $sql3 $sql4 $sql5 
    $sql51 $sql52 $sql53 $sql54
  

  csr_facts_title1   = '".addslashes($field2)."',
  csr_facts_title2   = '".addslashes($field3)."',
  csr_facts_title3   = '".addslashes($field4)."',
  csr_facts_title4   = '".addslashes($field5)."', 
  csr_name   = '".addslashes($fielddesc1)."',
  csr_desc   = '".addslashes($fielddesc2)."',
  csr_img   = '".addslashes($fielddesc3)."',
  csr_facts_title5   = '".addslashes($fielddesc4)."'
  where csr_type   = 'csr_facts'";   
  
  
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
      $sql10 = ($photo10!='')?" csr_img='$photo10' ". ',':'';
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
      $sql100 = ($photo100!='')?" csr_facts_title5='$photo100' ". ',':'';
    }
  
  }

 
 
   $insert_bookings = "INSERT `$table_name` SET
   $sql10 $sql100
  csr_name   = '".addslashes($field1)."',
  csr_facts_1   = '".addslashes($field2)."',
  csr_facts_2   = '".addslashes($field3)."',
  csr_facts_4   = '".addslashes($field4)."',
  csr_type   = 'csr_act',
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
 
 $select_desc= "SELECT * FROM `$table_name` WHERE csr_types = 'csr_facts_desc'";
 $sql14=$dbconn->prepare($select_desc);
 $sql14->execute();
 $wlvd14=$sql14->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd14 as $rows14);


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
                      <input name="field1" type="text" class="form-control" id="field1"   value="<?php echo $rows1->csr_name;?>" >
                      <small id="emailHelp" class="form-text text-muted"></small> 
                      </div>
                      </div>

 
                     
                      <div class="col-md-4">
                      <div class="form-group">
                      <label for="inv_phone"> Page Header Image</label>
                      <input name="photo1" type="file" class="form-control" id="field1"   value="<?php echo $rows1->csr_img;?>" >
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
                      
                      <textarea name="field1" type="text" class="form-control"><?php echo $rows12->csr_desc;?></textarea>
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
              Facts Icons and Images
          </div>
            <div class="card-body">
              <div class="table-responsive">
               
                <form id="formID" class="m-t-30" method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Image</label>
                          
                          <input name="photo11" type="file" class="form-control"> 
                          </div>
                      </div>

 
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 1 Text</label>
                          
                          <input name="field2" type="text" class="form-control" value="<?php echo $rows13->csr_facts_title1;?>">
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>

 
                     
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 1 Image</label>
                          
                          <input name="photo2" type="file" class="form-control">
                          </div>
                      </div>
                      
                      <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts 1 Blog Image</label>
                          
                          <input name="photo51" type="file" class="form-control">
                          </div>
                      </div>
                    
                    
                    <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Description</label>
                          
                          <textarea type="text" name="fielddesc1" id="editor" ><?php echo $rows13->csr_name; ?></textarea>
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>
 
                    
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 2 Text</label>
                          
                          <input name="field3" type="text" class="form-control" value="<?php echo $rows13->csr_facts_title2;?>">
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>

 
                     
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 2 Image</label>
                          
                          <input name="photo3" type="file" class="form-control" >
                          </div>
                      </div>
                      
                      <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts 2 Blog Image</label>
                          
                          <input name="photo52" type="file" class="form-control" >
                          </div>
                      </div>

                    <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Description</label>
                          
                          <textarea type="text" name="fielddesc2" id="editor1" ><?php echo $rows13->csr_desc; ?></textarea>
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>
                    
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 3 Text</label>
                          
                          <input name="field4" type="text" class="form-control" value="<?php echo $rows13->csr_facts_title3;?>">
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>

 
                     
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 3 Image</label>
                          
                          <input name="photo4" type="file" class="form-control" >
                          </div>
                      </div>
                      
                      <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts 3 Blog Image</label>
                          
                          <input name="photo53" type="file" class="form-control" >
                          </div>
                      </div>

                    <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Description</label>
                          
                          <textarea type="text" name="fielddesc3" id="editor2" ><?php echo $rows13->csr_img; ?></textarea>
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>
                    
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 4 Text</label>
                          
                          <input name="field5" type="text" class="form-control" value="<?php echo $rows13->csr_facts_title4;?>">
                          <small id="emailHelp" class="form-text text-muted"></small> 
                          </div>
                      </div>
                     
                     <div class="col-md-6">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Icon 4 Image</label>
                          
                          <input name="photo5" type="file" class="form-control" >
                          </div>
                      </div>
                    
                    <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts 4 Blog Image</label>
                          
                          <input name="photo54" type="file" class="form-control" >
                          </div>
                      </div>
 
                      <div class="col-md-12">
                          <div class="form-group">
                          <label for="inv_phone"> Facts Description</label>
                          
                          <textarea type="text" name="fielddesc4" id="editor3" ><?php echo $rows13->csr_facts_title5; ?></textarea>
                          <small id="emailHelp" class="form-text text-muted"></small> 
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
                          <option value="col-md-5">45%</option>
                          <option value="col-md-6">50%</option>
                          <option value="col-md-8">70%</option>
                           
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
                      <label for="inv_phone">Description</label>
                      <textarea type="text" id="editor4" name="field4" ></textarea>
                      </div>
                      </div>
                      
                      <div class="col-md-6">
                      <div class="form-group">
                      <label for="inv_phone">Blog Page Background Image</label>
                      <input type="file" class="form-control" name="photo100" >
                      </div>
                      </div>
                      
                      
                      <div class="col-md-12" style="padding-top:5px">
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
$select11 = "SELECT * FROM $table_name where   csr_type  = 'csr_act' and status = 'Active'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql991=$dbconn->prepare($select11);
 $sql991->execute();
 $wlvd991=$sql991->fetchAll(PDO::FETCH_OBJ);
if($sql991->rowCount() > 0){
  
    foreach($wlvd991 as $rows991){
$field1991 = $rows991->id;
$field2991 = $rows991->csr_name;
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
    