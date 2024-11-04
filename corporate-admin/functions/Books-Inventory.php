<?php

$table_name = 'books';
$redirection_page = "index.php?action=Books-Inventory-Edit";
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


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' AND book_name LIKE '%$name%' AND book_type = '$bookType' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE status = 'Active' AND book_name LIKE '%$name%'  AND book_type = '$bookType'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
}elseif ($search == 'Submit' & $author != '') {
   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' AND book_author LIKE '%$author%' AND book_type = '$bookType' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE status = 'Active' AND  book_author LIKE '%$author%' AND book_type = '$bookType'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
}elseif ($search == 'Submit' & $isbn != '') {
   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' AND book_isbn LIKE '%$isbn%'  AND book_type = '$bookType' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE status = 'Active' AND  book_isbn LIKE '%$isbn%' AND book_type = '$bookType'  order by id desc LIMIT $offset, $no_of_records_per_page";
$sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
}elseif ($search == 'Submit' & $publisher != '') {
   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;


$select_enquiry="SELECT * FROM $table_name WHERE status = 'Active' AND book_isbn = '$isbn'  AND book_publisher LIKE '%$publisher%' order by id desc";
 $sql=$dbconn->prepare($select_enquiry);
 $sql->execute();
  
        
        $total_rows = $sql->fetchColumn();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $select_enquiry = "SELECT * FROM $table_name WHERE status = 'Active' AND  book_isbn = '$isbn' AND book_publisher LIKE '%$publisher%'  order by id desc LIMIT $offset, $no_of_records_per_page";
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
       <a href="index.php?action=Books-Inventory-Edit" class="btn btn-success btn-lg btn-block ">Add New</a>
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
    <input type="hidden" name="action" value="Books-Inventory">
    <div class="col-md-2">
      <input type="text" name="name" class="form-control" placeholder="Book Name">
    </div>
    <div class="col-md-2">
          <input type="text" name="author" class="form-control" placeholder="Author Name">
    </div>
    <div class="col-md-2">
          <input type="text" name="isbn" class="form-control" placeholder="ISBN Name">
    </div>
    <div class="col-md-2">
          <input type="text" name="publisher" class="form-control" placeholder="Publisher Name">
    </div>
    <div class="col-md-2">
           
          <select name="bookType" class="form-control" required="">
             
            <option>Physical</option>
            <option>E-Book</option>
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
                        <th class="center">Category</th>
                        <th class="center">Author</th>
                        <th class="center">Language</th>
                        <th class="center">Stock</th>
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
$field2 = $rows->book_name;
$field3 = $rows->book_category;
$field4 = $rows->book_author;
$field5 = $rows->book_language;
$field6 = $rows->book_quantity;

 
 
?>                  
                      <tr>
                      <td class="center"><?php echo $field1;?></td>
                      <td class="center"><?php echo $field2;?></td>
                      <td class="center"><?php echo $field3;?></td>
                      <td class="center"><?php echo $field4;?></td>
                      <td class="center"><?php echo $field5;?></td>
                      <td class="center"><a href="index.php?action=Book-Stock&edit_id=<?php echo $field1;?>"target="_self" ><span style="font-size: 16px"><i class="fa fa-plus-circle"></i></span> </a> <?php echo $field6;?> </td>
                       
                      <td class="center">
                        <a href="<?php echo $redirection_page;?>&edit_id=<?php echo $field1;?>&type=View"target="_self" ><i class="fa fa-eye"></i></a> 

                        


                        <a href="<?php echo $redirection_page;?>&edit_id=<?php echo $field1;?>&type=Edit"target="_self" ><i class="fa fa-edit"></i> </a> 
                      
                      <a  onclick="return confirm('Are you sure to delete this record?')" href="<?php echo $redirection_page;?>&edit_id=<?php echo $field1;?>&type=Delete"target="_self" ><i class="fa fa-trash"></i> </a> 
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
 
 
    