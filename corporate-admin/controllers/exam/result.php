<?php
ob_start();
include('../../database.php');
DB::connect();
require_once("../../session.php");


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
$table_id = $_GET['exam'];
$exam_id = $_GET['exam'];
$paper_name = $_GET['paper'];
// For Displaying the table

$select_table= "SELECT * FROM `$table_name`  WHERE status = 'Active' and id = '$table_id' ";
 $sql1=$dbconn->prepare($select_table);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);
 $course_content_name  = $rows1->web_products_name;
 $course_content_id  = $rows1->id;


 
  
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
			<div class="col-md-12" style="text-align: center; font-size: 25px;"><strong>Analysis</strong></div>


			<div class="col-md-6" style="text-align: left;">
				<strong>Total Number of Questions: </strong><?php 
				$temp_total_questions = $rows1->web_products_questions;
				echo  $temp_total_questions?>
			</div>
			
			<div class="col-md-6" style="text-align: right;">
				<strong>Marks Obtained: </strong>
<?php 

//Calculate Total Number Of InCorrect Answers
$marks_obtained = 0;
$query883  = "SELECT SUM(`std_exm_rsp_marks`) as marks_obtained_no FROM student_exam_responses 
where 
std_exm_rsp_user_id = '$master_user_id' and 
std_exm_rsp_exam_id = '$exam_id' and 
status = 'Active'";
$sql883=$dbconn->prepare($query883);
$sql883->execute();
$wlvd883=$sql883->fetchAll(PDO::FETCH_OBJ);
if($sql883->rowCount() > 0){
	foreach($wlvd883 as $row883)
	{
		$marks_obtained = $row883->marks_obtained_no;
		echo "$marks_obtained";
	}
}					



				?>


				 / <?php echo  $rows1->web_products_time?> 
				
			</div>

			<div class="col-md-6" style="text-align: left;">
				<div class="row">
					<div class="col-md-6"><strong>Correct Answers: </strong><?php 

//Calculate Total Number Of Correct Answers
$correct_answers = 0;
$query881  = "SELECT COUNT(`id`) as correct_no FROM student_exam_responses 
where 
std_exm_rsp_user_id = '$master_user_id' and 
std_exm_rsp_exam_id = '$exam_id' and 
std_exm_correct_wrong = 'Correct' and 
status = 'Active'";
$sql881=$dbconn->prepare($query881);
$sql881->execute();
$wlvd881=$sql881->fetchAll(PDO::FETCH_OBJ);
if($sql881->rowCount() > 0){
	foreach($wlvd881 as $row881)
	{
		$correct_answers = $row881->correct_no;
		echo "$correct_answers";
	}
}					



				?> </div>
					<div class="col-md-6"><strong>Incorrect Answers: </strong><?php 

//Calculate Total Number Of InCorrect Answers
$incorrect_answers = 0;
$query882  = "SELECT COUNT(`id`) as incorrect_no FROM student_exam_responses 
where 
std_exm_rsp_user_id = '$master_user_id' and 
std_exm_rsp_exam_id = '$exam_id' and 
std_exm_correct_wrong = 'InCorrect' and 
status = 'Active'";
$sql882=$dbconn->prepare($query882);
$sql882->execute();
$wlvd882=$sql882->fetchAll(PDO::FETCH_OBJ);
if($sql882->rowCount() > 0){
	foreach($wlvd882 as $row882)
	{
		$incorrect_answers = $row882->incorrect_no;
		echo "$incorrect_answers";
	}
}					



				?></div>
				</div>
				
			</div>

			<div class="col-md-6" style="text-align: left;">

				<div class="row">
				
					<div class="col-md-6" style="text-align:left">
				<strong>Total Time: </strong><?php 
				$temp_total_time_prev = $rows1->web_products_time;
				$temp_total_time = $temp_total_time_prev;
				echo  "$temp_total_time";?>
				
				Minutes(s)
				</div>
				<div class="col-md-6" style="text-align: right;">
				<strong>Time Taken: </strong>
<?php 

//Calculate Total Time Taken
$time_taken = 0;
//$query883  = "SELECT IFNULL(SEC_TO_TIME( SUM( TIME_TO_SEC( `st_timer_time_diff` ) ) ),'00:00:00') AS sum_time_taken FROM student_timer 
$query883  = "SELECT SUM( `st_timer_time_diff` ) AS sum_time_taken FROM student_timer 
where 
st_timer_student = '$master_user_id' and 
st_timer_exam = '$exam_id' ";
$sql883=$dbconn->prepare($query883);
$sql883->execute();
$wlvd883=$sql883->fetchAll(PDO::FETCH_OBJ);
if($sql883->rowCount() > 0){
	foreach($wlvd883 as $row883)
	{
		$time_taken = $row883->sum_time_taken;
		//$time_taken = $row883->sum_time_taken;
		//$time_taken_calc = substr("$time_taken",0,8);

		//$timesplit=explode(':',$time_taken_calc);
	    //$min=($timesplit[0]*60)+($timesplit[1])+($timesplit[2]>30?1:0);
	    $min= ($time_taken / 60);
	    echo $min.' Min(s)' ; // 62 Min


	}
}					



				?>
				 
			</div>

				</div>
		</div>



			 
			<div class="col-md-12">
				
					<table class="table">
						<thead style="background-color: #6610f2; color: #fff">
							<tr>
								<td><strong>Section</strong></td>
								<td><strong>Section Name</strong></td>
								<td><strong>Question</strong></td>
								 
								 
							</tr>
						</thead>
						<tbody style="background-color: #c7e1f6; color: #000">
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
								<td style="background-color: #c3d7e0; padding: 20px">
<?php									
$select_table2= "SELECT * FROM `questions`  WHERE status = 'Active' and ques_section_id = '$field1' ";
 $sql2=$dbconn->prepare($select_table2);
 $sql2->execute();
 $wlvd2=$sql2->fetchAll(PDO::FETCH_OBJ);
if($sql2->rowCount() > 0){
  
    foreach($wlvd2 as $rows2){
    	$question_id = $rows2->id;
    	$question_name = $rows2->ques_question;
    	$option1 = $rows2->ques_option_1;
    	$option2 = $rows2->ques_option_2;
    	$option3 = $rows2->ques_option_3;
    	$option4 = $rows2->ques_option_4;
    	$option5 = $rows2->ques_option_5;
    	$correct_answer = $rows2->ques_correct_answer;
    ?>
    	Question: <?php echo ++$b?>:- <?php echo $question_name?> <br>


    	<div class="row">
    		<div class="col-md-3" style="background-color: #8bc34a">
		<strong>Options:</strong><br>
 		<?php 
 		if ($option1 != '') {
 			echo "1) $option1 <br>";
 		}if ($option2 != '') {
 			echo "2) $option2 <br>";
 		}if ($option3 != '') {
 			echo "3) $option3 <br>";
 		}if ($option4 != '') {
 			echo "4) $option4 <br>";
 		}if ($option5 != '') {
 			echo "5) $option5 <br>";
 		}
 		?>
 		 </div>
		 
 		 <div class="col-md-3" style="background-color: #cddc39">
		<strong>Correct Answer:</strong><br>
		<?php 

		 

		if ($correct_answer == $option1) {
			echo "1) ";
		}elseif ($correct_answer == $option2) {
			echo "2) ";
		}elseif ($correct_answer == $option3) {
			echo "3) ";
		}elseif ($correct_answer == $option4) {
			echo "4) ";
		}elseif ($correct_answer == $option5) {
			echo "5) ";
		}

		echo $correct_answer;

		?> <br>
		</div>

		<div class="col-md-3" style="background-color: #ffc107">
		<strong>Your Answer:</strong><br>
	 

		<?php 

$select_table3= "SELECT * FROM `student_exam_responses`  WHERE status = 'Active' and std_exm_rsp_user_id = '$master_user_id' and std_exm_question_no = 
'$question_id' order by id DESC LIMIT 1";
$sql3=$dbconn->prepare($select_table3);
$sql3->execute();
$wlvd3=$sql3->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd3 as $rows3);
$my_answer = $rows3->std_exm_rsp_answer;
echo "$my_answer";
 



 

	 
		?>

	</div>

	<div class="col-md-3" style="background-color: #ff5722">
		<strong>Marks Obtained:</strong><br>
		<?php									
$select_table3= "SELECT * FROM `student_exam_responses`  WHERE status = 'Active' and std_exm_rsp_user_id = '$master_user_id' and std_exm_question_no = 
'$question_id' order by id DESC LIMIT 1";
$sql3=$dbconn->prepare($select_table3);
$sql3->execute();
$wlvd3=$sql3->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd3 as $rows3);
 
    	$std_exm_rsp_marks = $rows3->std_exm_rsp_marks;
    	echo "$std_exm_rsp_marks";
    	echo "  /  ";
    	if ($std_exm_rsp_marks < 0) {
    		echo substr("$std_exm_rsp_marks",1);
	 	}else{
	 		echo "$std_exm_rsp_marks";
	 	}
     
    ?>
	</div>
		</div>

	 <br>

		
		<br>
		<hr>
		<?php }} ?>							

								</td>
								 
								 


								 
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
               <!--
                  <a href="result.php?exam=<?php echo $table_id?>" class="btn btn-secondary">Check Analysis </a>
                -->  
          </div>         
				 


			 
<?php 


}else{

  


    
}

?>			
			<div class="col-md-4">
				<?php 
				
  $select_result_status= "SELECT * FROM `student_result`  WHERE status = 'Active' and stre_stud_id = '$master_user_id' and stre_Exam_id = '$exam_id' ";
 $sql33=$dbconn->prepare($select_result_status);
 $sql33->execute();
 $wlvd33=$sql33->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd33 as $rows33);
 $stre_exm_id  = $rows33->id;

 if ($stre_exm_id == '') {
 	$insert_result = "INSERT `student_result` SET
   stre_question_no = '$temp_total_questions', 
   stre_marks_obtained = '$marks_obtained',
   stre_correct_answers = '$correct_answers',
   stre_incorrect_answers = '$incorrect_answers',
   stre_total_time = '$temp_total_time',
   stre_time_taken = '$min',
   stre_Exam_id = '$exam_id',
   stre_stud_id = '$master_user_id',
   status = 'Active'";    
  
  
$sql_insert = $dbconn->prepare($insert_result	);
$sql_insert->execute();



 
 }


 echo "============ $min ==============";
				?>
			</div>
		</div>
		
	</div>
</body>
</html>