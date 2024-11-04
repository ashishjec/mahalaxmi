<?php

$table_name = 'book_stock';
$redirection_page = "index.php?action=Book-Stock";
$action_name = "action=$page_name";
$type = $_REQUEST['type'];
$edit_id = $_REQUEST['edit_id'];
$delete_id = $_REQUEST['delete_id'];
$search = $_REQUEST['search'];
$book = $_REQUEST['book'];
$author = $_REQUEST['author'];
$isbn = $_REQUEST['isbn'];
$publisher = $_REQUEST['publisher'];
$bookType = $_REQUEST['bookType'];

 

 $select_transactions= "SELECT * FROM `transactions` WHERE  status = 'Active' and trans_book_school_name = '$edit_id' and trans_receive_date = '0'";
 $sql1=$dbconn->prepare($select_transactions);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);
 $temp_student = $rows1->trans_student;
 $temp_book = $rows1->trans_book_name;
 $temp_issue = $rows1->trans_issue_date;
 $temp_return = $rows1->trans_return_date;


 $select_student= "SELECT * FROM `membership` WHERE  status = 'Active' and id = '$temp_student'";
 $sql2=$dbconn->prepare($select_student);
 $sql2->execute();
 $wlvd2=$sql2->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd2 as $rows2);

 // For Submitting The Form

if(isset($_POST['submit'])){
  
  $receiveDate    =  $_POST['receiveDate'];
  $remarks    =  $_POST['remarks'];
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

    
  
  $insert_bookings = "UPDATE `transactions` SET
  trans_receive_date   = '".addslashes($receiveDate)."',
  trans_remarks   = '".addslashes($remarks)."'
  WHERE trans_book_school_name = '$edit_id'";
   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();
  
  $message="Details successfully updated.";
  $status="success";


 
  
 

$sql_insert = $dbconn->prepare($update_stock_number);
$sql_insert->execute();
$myid = $dbconn->lastInsertId(); 
 header("Location: index.php?action=Receive-Book");
  
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
              
                <form id="formID" class="m-t-30" method="POST" action="">
                 
                 <div class="row">
                  
                  <div class="col-lg-6">
                    <label>Student Name</label>
                    <input type="text" class="form-control" readonly name="student" value="<?php echo  $rows2->mem_name;  ?>">
                  </div>
                   
                  <div class="col-lg-6">
                    <label>Book Name</label>
                    <input type="text" class="form-control" readonly name="student" value="<?php echo  $temp_book ?>">
                  </div>
                   
                  <div class="col-lg-4">
                    <label>Issue Date</label>
                    <input type="text" class="form-control" readonly name="student" value="<?php echo  $temp_issue ?>">
                  </div>
                   
                  <div class="col-lg-4">
                    <label>Due Date</label>
                    <input type="text" class="form-control" readonly name="student" value="<?php echo  $temp_return ?>">
                  </div>
                    
                  <div class="col-lg-4">
                    <label>Receive Date</label>
                    <input type="date" class="form-control"  name="receiveDate" value="<?php echo "student" ?>">
                  </div>
                     
                  <div class="col-lg-12">
                    <label>Remarks</label>
                    <textarea class="form-control" name="remarks"></textarea>
                  </div>
                   

                    <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light m-1">Receive Book</button>
                 </div>
               </form>
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
 
 
    