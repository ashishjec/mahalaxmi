<?php

$table_name = 'membership';
$redirection_page = "index.php?action=Members-Edit";
$action_name = "action=$page_name";
$type = $_REQUEST['type'];
$edit_id = $_REQUEST['edit_id'];
$delete_id = $_REQUEST['delete_id'];
$search = $_REQUEST['search'];
$name = $_REQUEST['name'];
$roll = $_REQUEST['roll'];
$mobile = $_REQUEST['mobile'];
$session = $_REQUEST['session'];
$class = $_REQUEST['class'];
$stream = $_REQUEST['stream'];
$semester = $_REQUEST['semester'];
$major = $_REQUEST['major'];

 

// For Displaying the table

if ($search == '') {
  if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE  status = 'Active'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);

}elseif ($search == 'Submit' & $name != '') {


   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' AND mem_name LIKE '%$name%'  order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE status = 'Active' AND mem_name LIKE '%$name%'    order by id desc LIMIT $offset, $no_of_records_per_page";
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


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' AND mem_roll LIKE '%$roll%'   order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE status = 'Active' AND mem_roll LIKE '%$roll%'  order by id desc LIMIT $offset, $no_of_records_per_page";
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


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' AND mem_mobile LIKE '%$mobile%' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE status = 'Active' AND mem_mobile LIKE '%$mobile%'  order by id desc LIMIT $offset, $no_of_records_per_page";
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


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' AND mem_session = '$session'  AND mem_class = '$class'  AND mem_semester = '$semester'  AND mem_stream = '$stream'  AND mem_major = '$major'   order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE status = 'Active' AND mem_session = '$session'  AND mem_class = '$class'  AND mem_semester = '$semester'  AND mem_stream = '$stream'  AND mem_major = '$major' order by id desc LIMIT $offset, $no_of_records_per_page";
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
       <a href="index.php?action=Members-Edit" class="btn btn-success btn-lg btn-block ">Add New</a>
       <!-- Button trigger modal -->
 

 



     </div>
     
     </div>




<div class="row">
        
 
                
          
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-user"></i> All Books</div>
            
            <div class="card-body">

              <form   method="GET" action="">


  <div class="row" style="margin-bottom: 10px;">
    <input type="hidden" name="action" value="All-Members">
    <div class="col-md-4">
      <input type="text" name="name" class="form-control" placeholder="Member/Student Name">
    </div>
    <div class="col-md-4">
          <input type="text" name="roll" class="form-control" placeholder="Roll No">
    </div>
    <div class="col-md-4">
          <input type="text" name="mobile" class="form-control" placeholder="Phone Number">
    </div>


</div>
<div class="row" style="margin-bottom:10px">
    
    <div class="col-md-2">
           
          <select name="session" class="form-control" >
             
            <option value="">Session</option>
             <?php  
                        $select_bookings= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Session'";
                       $sql11=$dbconn->prepare($select_bookings);
                       $sql11->execute();
                       $wlvd11=$sql11->fetchAll(PDO::FETCH_OBJ);
                       if($sql11->rowCount() > 0){
                        foreach($wlvd11 as $rows11){
                       $cs_name = $rows11->cs_name;
                       ?>
                        <option><?php  echo $cs_name;?></option>
                         <?php }} ?>
          </select>
    </div>

    
    <div class="col-md-2">
           
          <select name="class" class="form-control" >
             
            <option value="">Class</option>
             <?php  
                        $select_bookings2= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Class'";
                       $sql121=$dbconn->prepare($select_bookings2);
                       $sql121->execute();
                       $wlvd121=$sql121->fetchAll(PDO::FETCH_OBJ);
                       if($sql121->rowCount() > 0){
                        foreach($wlvd121 as $rows121){
                       $cs_name2 = $rows121->cs_name;
                       ?>
                        <option><?php  echo $cs_name2;?></option>
                         <?php }} ?>
          </select>
    </div>

    
    <div class="col-md-2">
           
          <select name="semester" class="form-control" >
             
            <option value="">Semester</option>
             <?php  
                        $select_bookings3= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Semester'";
                       $sql131=$dbconn->prepare($select_bookings3);
                       $sql131->execute();
                       $wlvd131=$sql131->fetchAll(PDO::FETCH_OBJ);
                       if($sql131->rowCount() > 0){
                        foreach($wlvd131 as $rows131){
                       $cs_name3 = $rows131->cs_name;
                       ?>
                        <option><?php  echo $cs_name3;?></option>
                         <?php }} ?>
          </select>
    </div>

    
    <div class="col-md-2">
           
          <select name="stream" class="form-control" >
             
            <option value="">Stream</option>
             <?php  
                        $select_bookings4= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Stream'";
                       $sql141=$dbconn->prepare($select_bookings4);
                       $sql141->execute();
                       $wlvd141=$sql141->fetchAll(PDO::FETCH_OBJ);
                       if($sql141->rowCount() > 0){
                        foreach($wlvd141 as $rows141){
                       $cs_name4 = $rows141->cs_name;
                       ?>
                        <option><?php  echo $cs_name4;?></option>
                         <?php }} ?>
          </select>
    </div>

    
    <div class="col-md-2">
           
          <select name="major" class="form-control" >
             
            <option value="">Major</option>
             <?php  
                        $select_bookings5= "SELECT * FROM `class_structure` where status = 'Active' and cs_type = 'Major'";
                       $sql151=$dbconn->prepare($select_bookings5);
                       $sql151->execute();
                       $wlvd151=$sql151->fetchAll(PDO::FETCH_OBJ);
                       if($sql151->rowCount() > 0){
                        foreach($wlvd151 as $rows151){
                       $cs_name5 = $rows151->cs_name;
                       ?>
                        <option><?php  echo $cs_name5;?></option>
                         <?php }} ?>
          </select>
    </div>



    <div class="col-md-2">
          <button type="submit" name="search" value="Submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

</form>


              
              <div class="table-responsive">
               
                <table class="table table-hover" id="sample-table-1">
                    <thead class="thead-dark">
                      <tr>
                        <th class="center">ID</th>
                        <th class="center">Name</th>
                        <th class="center">Roll</th>
                        <th class="center">Mobile</th>
                        <th class="center">Session</th>
                        <th class="center">Class</th>
                        <th class="center">Semester</th>
                        <th class="center">Stream</th>
                        <th class="center">Major</th>
                        <th class="center">Action</th>  
                      </tr>
                    </thead>
                    <tbody>
     <?php

//while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
//{ 
if($sql->rowCount() > 0){
  
    foreach($wlvd as $rows){
$field1 = $rows->id;
$field2 = $rows->mem_name;
$field3 = $rows->mem_roll;
$field4 = $rows->mem_mobile;
$field5 = $rows->mem_session;
$field6 = $rows->mem_class;
$field7 = $rows->mem_semester;
$field8 = $rows->mem_stream;
$field9 = $rows->mem_major;

 
 
?>                  
                      <tr>
                      <td class="center"><?php echo $field1;?></td>
                      <td class="center"><?php echo $field2;?></td>
                      <td class="center"><?php echo $field3;?></td>
                      <td class="center"><?php echo $field4;?></td>
                      <td class="center"><?php echo $field5;?></td>
                      <td class="center"><?php echo $field6;?></td>
                      <td class="center"><?php echo $field7;?></td>
                      <td class="center"><?php echo $field8;?></td>
                      <td class="center"><?php echo $field9;?></td>
                       
                      <td class="center">
                        <a href="<?php echo $redirection_page;?>&edit_id=<?php echo $field1;?>&type=Edit"target="_self" ><i class="fa fa-edit"></i> </a> 
                      
                      <a href="<?php echo $redirection_page;?>&edit_id=<?php echo $field1;?>&type=Delete"target="_self" ><i class="fa fa-trash"></i> </a> 
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
 
 
    