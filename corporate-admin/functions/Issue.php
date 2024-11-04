<?php

$table_name = 'transactions';
$redirection_page = "index.php?action=Issue-New-Book";
$action_name = "action=$page_name";
$type = $_REQUEST['type'];
$edit_id = $_REQUEST['edit_id'];
$delete_id = $_REQUEST['delete_id'];
$search = $_REQUEST['search'];
$name = $_REQUEST['name'];
$roll = $_REQUEST['roll'];
$mobile = $_REQUEST['mobile'];
$book = $_REQUEST['book'];
 
if(isset($_POST['submit'])){
  
  $book_id    =  $_POST['book'];
  $member_id    =  $_POST['member_id'];
  $return_date    =  $_POST['return_date'];
  $issue_date    =  $_POST['issue_date'];
  $book_name_temp    =  $_POST['book_name_temp'];

 
  $return_date_new = date('Y-m-d',strtotime($issue_date . "+ $return_date days"));
  
  $insert_bookings = "INSERT `$table_name` SET
  trans_student   = '".addslashes($member_id)."',
  trans_book   = '".addslashes($book_id)."',
  trans_issue_date = '".addslashes($issue_date)."',
  trans_return_date = '".addslashes($return_date_new)."',
  trans_book_name = '".addslashes($book_name_temp)."',
  trans_book_school_name = '$edit_id',
  status   = 'Active'";   
  
  
$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();



  

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&edit_id=$myid&type=Edit");
 
    
}
 

// For Displaying the table

if ($search == '') {
   
}elseif ($search == 'Submit' & $name != '') {


   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM membership WHERE status = 'Active' AND mem_name LIKE '%$name%'  order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM membership WHERE status = 'Active' AND mem_name LIKE '%$name%'    order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
}elseif ($search == 'Submit' & $roll != '') {
   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM membership WHERE status = 'Active' AND mem_roll LIKE '%$roll%'   order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM membership WHERE status = 'Active' AND mem_roll LIKE '%$roll%'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
}elseif ($search == 'Submit' & $mobile != '') {
   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM membership WHERE status = 'Active' AND mem_mobile LIKE '%$mobile%' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM membership WHERE status = 'Active' AND mem_mobile LIKE '%$mobile%'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
}elseif ($search == 'Submit' & $session != '' & $class != '' & $semester != '' & $stream != '' & $major != '') {



   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM membership WHERE status = 'Active' AND mem_session = '$session'  AND mem_class = '$class'  AND mem_semester = '$semester'  AND mem_stream = '$stream'  AND mem_major = '$major'   order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM membership WHERE status = 'Active' AND mem_session = '$session'  AND mem_class = '$class'  AND mem_semester = '$semester'  AND mem_stream = '$stream'  AND mem_major = '$major' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
}

 

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
 

 



     </div>
     
     </div>




<div class="row">
        
 
                
          
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-user"></i> Book Issue</div>
            
            <div class="card-body">

              

<?php
if ($search == 'Submit') {
  ?>
 
<div class="row" style="margin-bottom:10px; margin-top:10px; text-align:center;">
  



  <form id="formID" class="m-t-30" method="POST" action="">



  <div class="row" style="margin-bottom: 10px;">
    <input type="hidden" name="action" value="Issue">
    <input type="hidden" name="book" value="<?php echo $book?>"> 
    <div class="col-md-3">
       
      <input type="hidden" name="member_id" class="form-control" value="<?php 
if($sql->rowCount() > 0){
  
    foreach($wlvd as $rows){
$field1AA = $rows->id;
echo "$field1AA";
}}
?>">
      <input type="text"  class="form-control" name="book_name_temp" readonly value="<?php  
 $select_bookings= "SELECT * FROM `books` WHERE id = '$book'";
 $sql1=$dbconn->prepare($select_bookings);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);
 $quantity = $rows1->book_quantity;
 echo $rows1->book_name;




 

    ?>">
    </div>
    <div class="col-md-3">
           <input type="text"  class="form-control" readonly value="<?php 
if($sql->rowCount() > 0){
  
    foreach($wlvd as $rows){
$field1 = $rows->id;
$field_temp = $rows->id;
$field2A = $rows->mem_name;
echo "$field2A";
}}
?>">
    </div>
    <div class="col-md-2">
          <input type="date" name="issue_date" class="form-control" placeholder="Issue Date">
    </div>
    <div class="col-md-2">
          <input type="number" name="return_date" class="form-control" placeholder="Days" >
    </div>


 
    
   



    <div class="col-md-2">
          
<?php

if ($quantity < 1) {
  // code...
}else{
  ?>
 

          <button type="submit" name="submit" value="Submit" class="btn btn-primary">Issue Book</button>

        <?php } ?>
    </div>
  </div>

</form>






</div>             
<?php }

else{
  ?>

<form   method="GET" action="">


  <div class="row" style="margin-bottom: 10px;">
    <input type="hidden" name="action" value="Issue">
    <input type="hidden" name="book" value="<?php echo $book?>">
    <input type="hidden" name="edit_id" value="<?php echo $edit_id?>">
    <div class="col-md-3">
      <input type="text" name="name" class="form-control" placeholder="Member/Student Name">
    </div>
    <div class="col-md-3">
          <input type="text" name="roll" class="form-control" placeholder="Roll No">
    </div>
    <div class="col-md-3">
          <input type="text" name="mobile" class="form-control" placeholder="Phone Number">
    </div>


 
    
   



    <div class="col-md-3">
          <button type="submit" name="search" value="Submit" class="btn btn-primary">Search Student</button>
    </div>
  </div>

</form>

  <?php
} ?>
 <div class="table-responsive">
               
                <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center">ID</th>
                        <th class="center">Book </th>
                        <th class="center">Issue</th>
                        <th class="center">Due</th>
                        <th class="center">Return</th>
                         
                      </tr>
                    </thead>
                    <tbody>
  <?php 

if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM transactions WHERE status = 'Active' AND trans_student = '$field1AA' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM transactions WHERE status = 'Active' AND trans_student = '$field1AA' order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
if($sql->rowCount() > 0){
  
    foreach($wlvd as $rows){

      $field100A = $rows->id;
      $field101A = $rows->trans_book_name;
      $field102A = $rows->trans_issue_date;
      $field103A = $rows->trans_return_date;
      $field104A = $rows->trans_receive_date;
  ?>            
                      <tr>
                      <td class="center"><?php echo $field100A;?></td>
                      <td class="center"><?php echo $field101A;?></td>
                      <td class="center"><?php echo $field102A;?></td>
                      <td class="center"><?php echo $field103A;?></td>
                      <td class="center"><?php echo $field104A;?></td>
                       
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
}elseif ($website_real_type == 'Elearning' & $type == 'Delete') {
  $delete_statement = "UPDATE `$table_name` SET
      status   = 'Inactive'
      where id='".$delete_id."'";   
  
  
$sql_insert = $dbconn->prepare($delete_statement);
$sql_insert->execute();

  
  $message="Details successfully updated.";
  $status="success";
  header("Location: $redirection_page&id=$delete_id");
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
 
 
    