<?php

$table_name = 'book_stock';
$redirection_page = "index.php?action=Book-Stock";
$action_name = "action=$page_name";
$type = $_REQUEST['type'];
$edit_id = $_REQUEST['edit_id'];
$delete_id = $_REQUEST['delete_id'];
$search = $_REQUEST['search'];
$name = $_REQUEST['name'];
$author = $_REQUEST['author'];
$isbn = $_REQUEST['isbn'];
$publisher = $_REQUEST['publisher'];
$bookType = $_REQUEST['bookType'];

 

 $select_bookings= "SELECT * FROM `$table_name` WHERE  status = 'Active' and id = '$edit_id'";
 $sql1=$dbconn->prepare($select_bookings);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);


 $select_books= "SELECT * FROM `books` WHERE  status = 'Active' and id = '$edit_id'";
 $sql2=$dbconn->prepare($select_books);
 $sql2->execute();
 $wlvd2=$sql2->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd2 as $rows2);

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
  $manageStock    =  $_POST['manageStock'];

    
  
  $insert_bookings = "INSERT `$table_name` SET
  bs_book_id   = '".addslashes($field1)."',
  bs_stock_name   = '".addslashes($field2)."',
  bs_bar_code = '".addslashes($field3)."',
  bs_qnty = '1',
  status   = 'Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();
  
  $message="Details successfully updated.";
  $status="success";



if ($myid == 0) {
   // code...
 }else{
  $update_stock_number = "UPDATE `books` SET
  book_quantity   = (book_quantity + 1)
  where id = '$edit_id'"; 
 } 
  
 

$sql_insert = $dbconn->prepare($update_stock_number);
$sql_insert->execute();
$myid = $dbconn->lastInsertId(); 
 header("Location: $redirection_page&edit_id=$edit_id");
  
}




// For Displaying the table

if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name WHERE bs_book_id = '$edit_id' and status = 'Active'  order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE bs_book_id = '$edit_id' and status = 'Active' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);


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
       <a href="index.php?action=Books-Inventory-Edit" class="btn btn-success btn-lg btn-block ">Add New</a>
       <!-- Button trigger modal -->
 

 



     </div>
     
     </div>




<div class="row">
        
 
                
          
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-user"></i> Manage Stock For 
                <strong style="color:#7934f3"><?php echo "$rows2->book_name";?></strong>  |  <span style="color:red">    Total Stock : <?php echo "$rows2->book_quantity";?></span></div>
            
            <div class="card-body">
              
              <div class="table-responsive">
               
                <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center">ID</th>
                        <th class="center">Sub name</th>
                        <th class="center">Action</th>  
                      </tr>
                    </thead>
                    <tbody>
     <?php

 
 
if($sql->rowCount() > 0){
  
    foreach($wlvd as $rows){
$field1 = $rows->id;
$field2 = $rows->bs_stock_name;


 
 
?>                  
                      <tr>
                      <td class="center"><?php echo $field1;?></td>
                      <td class="center"><?php echo $field2;?></td>
                       
                       
                      <td class="center">
                      


<?php 

$total_pages = 0;
$query881  = "SELECT COUNT(`id`) as pages_no FROM `transactions` WHERE  status = 'Active' and trans_book_school_name = '$field1' and trans_receive_date = '0'";
$sql881=$dbconn->prepare($query881);
$sql881->execute();
$wlvd881=$sql881->fetchAll(PDO::FETCH_OBJ);
if($sql881->rowCount() > 0){
  foreach($wlvd881 as $row881)
  {
    $total_pages = $row881->pages_no;
    //echo $total_pages;

    if ($total_pages == 0) {
      ?>
<a class="btn btn-success" href="index.php?action=Issue&edit_id=<?php echo $field1;?>&book=<?php echo $edit_id;?>"target="_self" ><i class="fa fa-user"></i> Issue</a> 
      <?php
    }else{
      ?>

<a class="btn btn-danger" href="index.php?action=Return&edit_id=<?php echo $field1;?>&book=<?php echo $edit_id;?>"target="_self" ><i class="fa fa-user"></i> Return</a>
      <?php
    }
  }
}
?>                    
                      
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




      <!-------Page ends here-------->

  <?php
}elseif ( $type == 'Delete') {
  $delete_statement = "UPDATE `$table_name` SET
      status   = 'Inactive'
      where id='".$delete_id."'";   
  
  
$sql_insert = $dbconn->prepare($delete_statement);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";



$update_stock_number = "UPDATE `books` SET
  book_quantity   = (book_quantity - 1)
  where id = '$edit_id'"; 
 

$sql_insert = $dbconn->prepare($update_stock_number);
$sql_insert->execute();  
  header("Location: $redirection_page&edit_id=$edit_id");
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
 
 
    