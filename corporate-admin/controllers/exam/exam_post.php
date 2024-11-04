<?php
ob_start();
include('../../database.php');
DB::connect();
require_once("../../session.php");


//Set Timezone

date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d H:i:s");
$today = date("Y-m-d");






//Select User Starts

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






// Get variables from url

 
$table_id = $_GET['id'];
$paper_name = $_GET['paper'];
$question = $_GET['question'];
$que = $_GET['que'];
$exam = $_GET['exam'];










// For selecting the exam name

$select_table= "SELECT * FROM `web_products`  WHERE status = 'Active' and id = '$table_id' ";
 $sql1=$dbconn->prepare($select_table);
 $sql1->execute();
 $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd1 as $rows1);
 $course_content_name  = $rows1->web_products_name;









//For Selecting the exam section name first
 $section = $_GET['section'];
	$select_table2= "SELECT * FROM `course_contents`  WHERE status = 'Active' and crs_cnt_course_id = '$table_id' and id > '$section' order by id desc";
 $sql2=$dbconn->prepare($select_table2);
 $sql2->execute();
 $wlvd2=$sql2->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd2 as $rows2);
 $crs_cnt_name  = $rows2->crs_cnt_name;
 $course_content_id  = $rows2->id;
 $crs_time  = $rows2->crs_time;
 



//For Selecting the exam section name second
$select_table2B= "SELECT * FROM `course_contents`  WHERE status = 'Active' and crs_cnt_course_id = '$table_id' order by id desc";
 $sql2B=$dbconn->prepare($select_table2B);
 $sql2B->execute();
 $wlvd2B=$sql2B->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd2B as $rows2B);
 $crs_cnt_nameB  = $rows2B->crs_cnt_name;
 $course_content_idB  = $rows2B->id;
 $crs_timeB  = $rows2B->crs_time;











//For Calculating the Time Difference
$start_time_diff = "UPDATE `student_timer` SET 
`st_timer_time_diff` = (`st_timer_time_end` - `st_timer_time`)
WHERE
st_timer_exam = '$exam' AND st_timer_student = '$master_user_id'";   
  
  
$sql_insert = $dbconn->prepare($start_time_diff);
$sql_insert->execute();




 //Time Left Calculation
//echo "=========== $crs_time";
$time_used = 0;
$time_used  = "SELECT SUM(`st_timer_time_diff`) as time_used FROM student_timer where st_timer_student = '$master_user_id' and st_timer_exam = '$exam' ";
$sql7=$dbconn->prepare($time_used);
$sql7->execute();
$wlvd7=$sql7->fetchAll(PDO::FETCH_OBJ);
if($sql7->rowCount() > 0){
	foreach($wlvd7 as $row7)
	{
		$time_used = $row7->time_used;
		//echo "$time_used =============";


	}
}


//Now Lets Calculated time left

$total_time = $crs_time;
$total_time_used = ($time_used / 60 );
$total_time_left = number_format($total_time - $total_time_used);
$new_time = date('Y-m-d H:i:s', strtotime("now + $total_time_left minutes"));
//echo "=======$new_time=========";



//Timeout Action
if ($total_time_used > $total_time) {
	//header("Location: time_up.php");
	?><script>
	alert('Time Over For This Exam!');
	window.close();
	</script>
	<?php
}


//Timer Section

$timer_question = ($question + 1 );

$select_timer_1= "SELECT * FROM `student_timer`  
WHERE  
st_timer_student = '$master_user_id' and 
st_timer_question = '$timer_question'  and
st_timer_exam = '$exam' 
order by id asc";
 $sql5=$dbconn->prepare($select_timer_1);
 $sql5->execute();
 $wlvd5=$sql5->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd5 as $rows5);
 $st_timer_time  = $rows5->st_timer_time;
 $st_timer_time_end  = $rows5->st_timer_time_end;
  

 //echo "==========  $st_timer_time";



 

if ($st_timer_time == '' & $st_timer_time_end == '') {
	$start_timer = "INSERT `student_timer` SET
   st_timer_student = '$master_user_id', 
   st_timer_exam = '$exam',
   st_timer_question = '$timer_question',
   st_timer_time = '$timestamp'";    
  
  
$sql_insert = $dbconn->prepare($start_timer);
$sql_insert->execute();
}elseif ($st_timer_time != '' & $st_timer_time_end != '') {
	$start_timer = "INSERT `student_timer` SET
   st_timer_student = '$master_user_id', 
   st_timer_exam = '$exam',
   st_timer_question = '$timer_question',
   st_timer_time = '$timestamp'";    
  
  
$sql_insert = $dbconn->prepare($start_timer);
$sql_insert->execute();
}elseif($st_timer_time_end == ''){



	if(isset($_POST['submitNext'])){

	$temp_que_no = $_POST['temp_que_no'];
	$temp_option = $_POST['option'];

	
  
  $start_exam = "UPDATE `student_timer` SET
   st_timer_time_end = '$timestamp'
   WHERE
   st_timer_student = '$master_user_id' AND
   st_timer_exam = '$exam' AND
   st_timer_question = '$timer_question'";
  
  
$sql_insert = $dbconn->prepare($start_exam);
$sql_insert->execute();


 
  
    
	}
 }

 





if ($question == 0) {
	$question_noo = 0;
}else{
	$question_noo = ($question + 1); 
}

 

if ($que == '') {
		$temp_que = $_POST['que'];
	}else{
		$temp_que = ($_GET['que'] + 1);
	}


 

 // For Submitting The Form

if(isset($_POST['submitNext'])){

	$temp_que_no = $_POST['temp_que_no'];
	$temp_option = $_POST['option'];

	
  
  $start_exam = "INSERT `student_exam_responses` SET
   std_exm_rsp_user_id = '$master_user_id',
   std_exm_rsp_exam_id = '$exam',
   std_exm_sl_no = '$temp_que_no',
   std_exm_section_no = '$course_content_id',
   std_exm_question_no = ($que + 1),
   std_exm_rsp_answer = '$temp_option',
  status   = 'Active'";   
  
  
$sql_insert = $dbconn->prepare($start_exam);
$sql_insert->execute();


$start_exam1 = "UPDATE `student_exams` SET
   std_exm_last_attempt_id = '$temp_que_no',
   std_exm_last_section_id = '$course_content_id'
   WHERE
   id = '$exam' AND std_exm_user_id = '$master_user_id'";   
  
  
$sql_insert = $dbconn->prepare($start_exam1);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();
 



 
  $message="Details successfully updated.";
  $status="success";
   
  header("Location: exam.php?id=$table_id&question=$temp_que_no&que=$temp_que&exam=$exam&section=$course_content_id");
  
    
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
			<div class="col-md-4" style="text-align: left; color:#fff; font-size: 20px "><?php echo $course_content_name ?> </div>
			<div class="col-md-4" style="text-align: center; color:#fff; font-size: 30px ">Exam Portal Name</div>
			<div class="col-md-4"></div>
		</div>
<?php
$question_no = ($question + 1);
 

$select_table3= "SELECT * FROM `questions`  WHERE status = 'Active' and ques_section_id = '$course_content_id' and id > '$que' order by id desc";
 $sql3=$dbconn->prepare($select_table3);
 $sql3->execute();
 $wlvd3=$sql3->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd3 as $rows3);
 $question_id  = $rows3->id;
 $option1  = $rows3->ques_option_1;
 $option2  = $rows3->ques_option_2;
 $option3  = $rows3->ques_option_3;
 $option4  = $rows3->ques_option_4;
 $option5  = $rows3->ques_option_5;





 
if ($question_id == '') {

$start_exam1 = "UPDATE `student_exams` SET
std_exm_last_attempt_id = 'LAST',
std_exm_last_section_id = '$course_content_id'
WHERE
id = '$exam' AND std_exm_user_id = '$master_user_id'";   
  
  
$sql_insert = $dbconn->prepare($start_exam1);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();

$start_exam = "UPDATE `student_timer` SET
   st_timer_time_end = '$timestamp'
   WHERE
   st_timer_student = '$master_user_id' AND
   st_timer_exam = '$exam' AND
   st_timer_question = '$timer_question'";
  
  
$sql_insert = $dbconn->prepare($start_exam);
$sql_insert->execute();
$getSection = $_GET['section'];
header("Location: exam_post.php?id=$table_id&question=0&que=0&exam=$exam&PreviousSection=$getSection");


	?>
		<div class="row" style="padding-top: 100px; ">
			<div class="col-md-12" style="text-align: center; font-size: 30px; ">You have reached the end of the question paper
			</div>
			<div class="col-md-12" style="text-align: center; font-size: 20px; padding-bottom: 40px">Review the answers and if you are ready, you can submit it for evaluation.
			</div>

			 
			<div class="col-md-6" style="text-align: right;">
				<a href="exam.php?id=<?php echo $table_id?>&question=0&exam=<?php echo $exam?>" class="btn btn-warning btn-lg btn-block">Start Over Again</a>
			</div>
			<div class="col-md-6" style="text-align: left;">

<?php

if(isset($_POST['evaluation'])){
$start_exam1 = "UPDATE `student_exams` SET
std_exm_last_attempt_id = 'LAST',
std_exm_last_section_id = '$course_content_id',
std_exm_final_submit = 'YES'
WHERE
id = '$exam' AND std_exm_user_id = '$master_user_id'";   
  
  
$sql_insert = $dbconn->prepare($start_exam1);
$sql_insert->execute();
 
 header("Location: result.php?id=$table_id&exam=$exam");
}

?>
				<form  method="POST" >
					<button name="evaluation" class="btn btn-success btn-lg btn-block">Submit For Evaluation</button>
				</form>
				
			</div>
		</div>
	<?php
}elseif($std_exm_last_attempt_id == 'LAST'){


?>
<div class="row" style="padding-top: 100px; ">
			<div class="col-md-12" style="text-align: center; font-size: 30px; ">Marksheet
			</div>
			<div class="col-md-12" style="text-align: center; font-size: 20px; padding-bottom: 40px">Review the answers and if you are ready, you can submit it for evaluation.
			</div>

			 
			<div class="col-md-6" style="text-align: right;">
				<a href="exam.php?id=<?php echo $table_id?>&question=0&exam=<?php echo $exam?>" class="btn btn-warning btn-lg btn-block">Start Over Again</a>
			</div>
			<div class="col-md-6" style="text-align: left;">
				<a href="#" class="btn btn-success btn-lg btn-block">Submit For Evaluation</a>
			</div>
		</div>
<?php
}
else{

?>


		<div class="row">

<!--- Exam Loop Starts Here--->	

		
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12" style="text-align: left; padding: 25px"><strong>Section Name: </strong><?php echo $crs_cnt_name?></div>
					<hr>
				<!--- Question No Starts-->
					<div class="col-md-12">
					<strong>Question No: </strong><?php echo  $question_no ?>
					</div>
				<!--- Question No Ends-->

				<!-- Individual Questions Starts-->	
					<div class="col-md-12">
						<strong>Question: </strong>
						<?php echo $rows3->ques_question;?>
					</div>

				<!-- Individual Questions Ends-->

<form id="formID" class="m-t-30" method="post" action="" enctype="multipart/form-data">


<?php 

// For Selecting the question
$selected_answer= "SELECT * FROM `questions`  WHERE status = 'Active' and ques_section_id = '$course_content_id' and id > '$que' order by id desc";
 $sql3=$dbconn->prepare($selected_answer);
 $sql3->execute();
 $wlvd3=$sql3->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd3 as $rows3);
 $question_id  = $rows3->id;


// For selecting the answer or response

 if ($que == '') {
 	$selected_answer_response= "SELECT * FROM `student_exam_responses`  WHERE status = 'Active' and std_exm_rsp_user_id = '$master_user_id' and std_exm_rsp_exam_id = '$exam' and std_exm_question_no = '1' order by id asc";

 }elseif ($que != '') {
 	$selected_answer_response= "SELECT * FROM `student_exam_responses`  WHERE status = 'Active' and std_exm_rsp_user_id = '$master_user_id' and std_exm_rsp_exam_id = '$exam' and std_exm_question_no = ($que + 1) order by id asc";
 }
 $sql9=$dbconn->prepare($selected_answer_response);
 $sql9->execute();
 $wlvd9=$sql9->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd9 as $rows9);
 $temp_response_option  = $rows9->std_exm_rsp_answer;
  
//echo "=========  $temp_response_option ============";
  

?>
				<!-- Individual Options Starts-->	
					<div class="col-md-12">
						<strong>Options: </strong>
						<div class="row">

							<?php
							if ($option1 != '') {
							?>
							<div class="col-md-12">
								
								<input type="checkbox" id="option" <?php if ( $temp_response_option == $option1) {
									echo "checked";
								} ?> name="option" value="<?php echo "$option1"?>">

								<label for="vehicle1"> <?php echo "$option1"?></label><br>


							</div>

							<?php 
							}
							else{

							}
							?>

							<?php
							if ($option2 != '') {
							?>
							<div class="col-md-12">
								
								<input type="checkbox" id="option" <?php if ( $temp_response_option == $option2) {
									echo "checked";
								} ?> name="option" value="<?php echo "$option2"?>">

								<label for="vehicle1"> <?php echo "$option2"?></label><br>


							</div>

							<?php 
							}
							else{

							}
							?>


							<?php
							if ($option3 != '') {
							?>
							<div class="col-md-12">
								
								<input type="checkbox" id="option" <?php if ( $temp_response_option == $option3) {
									echo "checked";
								} ?> name="option" value="<?php echo "$option3"?>">

								<label for="vehicle1"> <?php echo "$option3"?></label><br>


							</div>

							<?php 
							}
							else{

							}
							?>



							<?php
							if ($option4 != '') {
							?>
							<div class="col-md-12">
								
								<input type="checkbox" id="option" <?php if ( $temp_response_option == $option4) {
									echo "checked";
								} ?> name="option" value="<?php echo "$option4"?>">

								<label for="vehicle1"> <?php echo "$option4"?></label><br>


							</div>

							<?php 
							}
							else{

							}
							?>





							<?php
							if ($option5 != '') {
							?>
							<div class="col-md-12">
								
								<input type="checkbox" id="option" <?php if ( $temp_response_option == $option5) {
									echo "checked";
								} ?> name="option" value="<?php echo "$option5"?>">

								<label for="vehicle1"> <?php echo "$option5"?></label><br>


							</div>

							<?php 
							}
							else{

							}
							?>




						</div>
					</div>

				<!-- Individual Options Ends-->	


				<!-- Answer Submit Starts-->
				<div class="row" style="margin-top: 100px">
			<div class="col-md-4" style="text-align: left;">
				 
				<?php
if ($que == '') {
	# code...
}else{
	?>
<a href="exam.php?id=<?php echo $table_id?>&exam=<?php echo $exam?>&question=<?php echo ($question_no - 2)?>&que=<?php 

$select_table4= "SELECT * FROM `questions`  WHERE status = 'Active' and ques_section_id = '$course_content_id' and id < '$que' order by id desc";
 $sql4=$dbconn->prepare($select_table4);
 $sql4->execute();
 $wlvd4=$sql4->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd4 as $rows4);
 $question_id_prev  = $rows4->id;
 echo $question_id_prev;

				?>" class="btn btn-secondary btn-lg btn-block">Previous Question</a>
	<?php
}
				?>
			</div>
			<div class="col-md-4" style="text-align: center;">
				
				<!---

				<a href="exam.php?id=<?php echo $table_id?>&question=<?php echo $question_no?>&que=<?php echo $question_id?>" class="btn btn-primary btn-lg btn-block">Submit & Next</a>
				--->


				
       				<input type="hidden" name="que" value="<?php echo $question_id?>">
       				<input type="hidden" name="temp_que_no" value="<?php echo $question_no?>">
               
                  <button type="submit"  name="submitNext" value="Submit" class="btn btn-primary btn-lg btn-block">Submit & Next</button>
                  
                  



			</div>
</form>			
			<div class="col-md-4" style="text-align: right;">
				<a href="exam.php?id=<?php echo $table_id?>&question=<?php echo $question_no?>&que=<?php echo $question_id?>" class="btn btn-warning btn-lg btn-block">Mark For Review</a>
			</div>
		</div>			 
				<!-- Answer Submit Ends-->	 		 
			 
				</div>
			</div>


<!--- Exam Loop Ends Here--->			

			<div class="col-md-3" style="border-style: solid; border-size:1px; border-color: #959299">
				<div class="row" style="text-align: center; padding-top: 20px">
					<div class="col-md-12">
						<strong>Time Left</strong>
						<p style ="text-align:center; font-size:30px; color:red;" id="demo"></p>
                  <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("<?php echo $new_time?>").getTime();
                    
                    // Update the count down every 1 second
                    var x = setInterval(function() {
                    
                      // Get today's date and time
                      var now = new Date().getTime();
                        
                      // Find the distance between now and the count down date
                      var distance = countDownDate - now;
                        
                      // Time calculations for days, hours, minutes and seconds
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        
                      // Output the result in an element with id="demo"
                      document.getElementById("demo").innerHTML =  hours + "h "
                      + minutes + "m " ;
                        
                      // If the count down is over, write some text 
                      if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                      }
                    }, 1000);
                </script>
                  
                  <!----Countdown Script Ends--->
					</div>
				</div>
				<div class="row" style="text-align: center; padding-top: 20px">

<?php

//while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
//{ 

$select_table4= "SELECT * FROM `questions`  WHERE status = 'Active' and ques_section_id = '$course_content_id'  order by id asc";
 $sql4=$dbconn->prepare($select_table4);
 $sql4->execute();
 $wlvd4=$sql4->fetchAll(PDO::FETCH_OBJ);

 if($sql4->rowCount() > 0){
 	 foreach($wlvd4 as $rows4){
 $question_id  = $rows4->id;
 $temp_question_prev = ($question_id - 1);
  

  
 
  
 
 

?>   
	<div class="col-md-2" style="background-color: <?php 
//colors inside loop 
 
	
$selected_answer_response_2= "SELECT * FROM `student_exam_responses`  WHERE status = 'Active' and std_exm_rsp_user_id = '$master_user_id' and std_exm_rsp_exam_id = '$exam'  and std_exm_question_no = '$question_id' order by id desc";
 
 
 $sql10=$dbconn->prepare($selected_answer_response_2);
 $sql10->execute();
 $wlvd10=$sql10->fetchAll(PDO::FETCH_OBJ);
 if($sql10->rowCount() > 0){
 	 foreach($wlvd10 as $rows10){
 $temp_response_option_2  = $rows10->std_exm_rsp_answer;


 
		 if ($temp_response_option_2 != '') {
		 	echo "green";
		 }else{
		 	echo "red";
		 }
}}

	?>; padding:10px; margin:2px; border-color:black; border-style: solid;;border-size:2px"><a style="color:#000" href="exam.php?id=<?php echo $table_id?>&question=<?php echo $i++?>&que=<?php echo $temp_question_prev?>&exam=<?php echo $exam?>"><?php echo ++$a?></a></div>

<?php }} ?>  				
			</div>
		</div>

	<?php
	}

	?>

</div>
		
		
	</div>
</body>
</html>