<?php
ob_start();
include('../../settings/database.php');
DB::connect();
require_once("../../settings/session.php");

echo "jhhjh";
//Select User

$select_master_user= "SELECT * FROM `users` WHERE id = '$user_id' and  status = 'Active'";
$sql999=$dbconn->prepare($select_master_user);
$sql999->execute();
$wlvd999=$sql999->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd999 as $rows999);

$master_user_id = $rows999->id;
$master_user_name = $rows999->user_name;
$master_user_phone = $rows999->user_phone;
$master_user_role = $rows999->user_role;


// Select User Ends



$table_name = 'web_products';
$table_id = $_GET['section_id'];
$paper_name = $_GET['paper'];
// For Displaying the table

$select_table= "SELECT * FROM `$table_name`  WHERE status = 'Active' and id = '$table_id' ";
 $sql1=$dbconn->prepare($select_table);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);
 $course_content_name  = $rows1->web_products_name;
 $course_content_id  = $rows1->id;








 
  // For Submitting The Form

if(isset($_POST['start'])){
  
  $start_exam = "INSERT `student_exams` SET
  std_exm_user_id   = '$master_user_id',
  std_exm_exam_id   = '$course_content_id',
  std_exm_last_attempt_id   = '0',
  std_exm_final_submit = 'NO',
  status   = 'Active'";   
  
  
$sql_insert = $dbconn->prepare($start_exam);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();
  
  $message="Details successfully updated.";
  $status="success";


//Select Section Name:

 $select_section= "SELECT * FROM `course_contents`  WHERE status = 'Active' and crs_cnt_course_id = '$course_content_id' order by id desc";
 $sql22=$dbconn->prepare($select_section);
 $sql22->execute();
 $wlvd22=$sql22->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd22 as $rows22);
 $crs_cnt_name  = $rows22->crs_cnt_name;
 $section_idd  = $rows22->id;
 $crs_time  = $rows22->crs_time;


  header("Location: exam.php?id=$table_id&section=$section_idd&question=0&exam=$course_content_id");
  
    
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Exam Portal</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>


	<div class="container-fluid">

		<div class="row" style="background-color: #6610f2; padding-top:25px; padding-bottom: 25px">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="text-align: center; color:#fff; font-size: 30px ">Exam Portal Name</div>
			<div class="col-md-4"></div>
		</div>


		<div class="row">
			<div class="col-md-12" style="text-align: center;"><strong>Please read the following instructions carefully</strong></div>
			<div class="col-md-6">
				<strong>Total Number of Questions: </strong><?php echo  $rows1->web_products_questions?>
				<br>
				<strong>Total Available Time: </strong><?php echo  $rows1->web_products_time?> Minutes
			</div>
			<div class="col-md-6"></div>
			<div class="col-md-12">
				
					<table class="table">
						<thead>
							<tr>
								<td><strong>Section</strong></td>
								<td><strong>Section Name</strong></td>
								<td><strong>Total Questions</strong></td>
								<td><strong>Max Score</strong></td>
								<td><strong>Time (Minutes)</strong></td>
								<td><strong>Language</strong></td>
							</tr>
						</thead>
						<tbody>
							<?php
$select_table= "SELECT * FROM `course_contents`  WHERE status = 'Active' and crs_cnt_course_id = '$table_id' ";
 $sql1=$dbconn->prepare($select_table);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
if($sql1->rowCount() > 0){
  
    foreach($wlvd1 as $rows1){
$field1 = $rows1->id;
$field2 = $rows1->crs_cnt_name;
$field3 = $rows1->crs_max_questions;
$field4 = $rows1->crs_time;
$field5 = $rows1->crs_score;
$field6 = $rows1->crs_language;
							?>
							<tr>
								<td><?php echo ++$a?></td>
								<td><?php echo $field2?></td>
								<td><?php echo $field3?></td>
								<td><?php echo $field4?></td>
								<td><?php echo $field5?></td>
								<td><?php echo $field6?></td>
								 
							</tr>

							<?php }}
							?>
						</tbody>
					</table>
			</div>
		</div>

		<div class="row" style="margin-top: 100px">
			<div class="col-md-4"></div>

			<?php

$select_exam= "SELECT * FROM `student_exams`  WHERE status = 'Active' and std_exm_user_id = '$master_user_id' and std_exm_exam_id = '$course_content_id' ";
 $sql3=$dbconn->prepare($select_exam);
 $sql3->execute();
 $wlvd3=$sql3->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd3 as $rows3);
 $std_exm_id  = $rows3->id;
 $std_exm_last_attempt_id  = $rows3->std_exm_last_attempt_id;
 $std_exm_last_section_id  = $rows3->std_exm_last_section_id;
 $std_exm_exam_id  = $rows3->std_exm_exam_id;
 $std_exm_final_submit  = $rows3->std_exm_final_submit;



 if ($std_exm_last_attempt_id  == 0) {
 	$temp_std_exm_last_attempt_id = 0;
 }else{
 	$temp_std_exm_last_attempt_id = ($std_exm_last_attempt_id - 1); 
 }

if ($std_exm_id == '' & $std_exm_last_attempt_id != 'LAST') {
	?>

			 
			<div class="col-md-4" style="text-align: center;">
				<form id="formID" class="m-t-30" method="post" action="" enctype="multipart/form-data">
       
               
                  <button type="submit"  name="start" value="Submit" class="btn btn-primary">Start Exam</button>
                  
                  </form>

				 


			</div>

<?php 


}elseif ($std_exm_id != '' & $std_exm_last_attempt_id == 'LAST' & $std_exm_final_submit == 'YES') {
	?>

			 
			 
       <div class="col-md-4" style="text-align: center;">
               
                  <a href="result.php?exam=<?php echo $table_id?>" class="btn btn-secondary">Check Analysis </a>
                  
          </div>         
				 


			 
<?php 


}else{

$select_exam_response= "SELECT * FROM `student_exam_responses`  WHERE status = 'Active' and std_exm_rsp_user_id = '$master_user_id' and std_exm_rsp_exam_id = '$std_exm_id'  order by id asc";
 $sql4=$dbconn->prepare($select_exam_response);
 $sql4->execute();
 $wlvd4=$sql4->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd4 as $rows4);
 $std_exm_sl_no  = $rows4->std_exm_sl_no;
 $std_exm_question_no  = $rows4->std_exm_question_no;
	?>

	<div class="col-md-4" style="text-align: center;">
				<a href="exam.php?id=<?php echo $table_id?>&question=<?php echo   
				$temp_std_exm_last_attempt_id ?>&exam=<?php echo $std_exm_id?>&que=<?php echo $std_exm_question_no?>&section=<?php echo $std_exm_last_section_id?>" class="btn btn-warning">Resume Exam  
</a>
			</div>

	<?php
}

?>			
			<div class="col-md-4"></div>
		</div>
		
	</div>
</body>
</html>