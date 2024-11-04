<?php

ob_start();
include('settings/database.php');
DB::connect();
//require_once("check.php");

$id = $_REQUEST['id'];
$start = $_REQUEST['start'];


if(isset($_POST['register'])){

	$user_name    =  $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_phone = $_POST['user_phone'];
	$user_password = $_POST['user_password'];
	$user_role = $_POST['user_role'];
     $user_status = $_POST['user_status'];
  

  $temp_password= md5($user_password);
     


     $insert_bookings = "INSERT `users` SET

	user_name   = '".addslashes($user_name)."',
     user_email   = '".addslashes($user_email)."',
     user_phone   = '".addslashes($user_phone)."',
     user_password   = '$temp_password',
     user_role   = 'Student',
	status   = 'Active'";


$sql_insert = $dbconn->prepare($insert_bookings);
$sql_insert->execute();
$myid = $dbconn->lastInsertId();

	$message="Details successfully updated.";
	$status="success";
	header("Location: authentication.php?action=RegisterMessage&id=$myid");


}

if(isset($_POST['login'])){
     
     $user_phone = $_POST['user_phone'];
     $user_password = $_POST['user_password'];
     $password = md5($user_password);
     
     
    $select  = "select * from `users` WHERE user_phone = '".$user_phone."' and user_password = '$password' ";
    $sql=$dbconn->prepare($select);
    $sql->execute();
    $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
     if($sql->rowCount() > 0){
    foreach($wlvd as $row5)
    {
      
            $_SESSION['user_id'] = $row5->id;  
            $_SESSION['user_name'] = $row5->user_name; 
            $_SESSION['user_role'] = $row5->user_role; 
            
            if ($_SESSION['user_role'] == 'Student') {
                header("Location: index.php?action=Dashboard");
            }elseif ($_SESSION['user_role'] == 'Customer') {
                header("Location: index.php?action=Welcome");
            } elseif ($_SESSION['user_role'] == 'Admin') {
                header("Location: index.php?action=Welcome");
            }        
            
      
          
     
       
    }
     
   } else {
      $error = "Invalid Mobile Number And Password";  
   }
     }
          
          
          if (isset($_GET['action'])) {
              $action=$_GET['action'];
               switch($action) {
               case "lo":                    
                    $msg="You are now logged out.";
                    break;
               }
               
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login To Your Portal</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->


<!-- Start wrapper-->
 <div id="wrapper">

	   <div class="card-authentication2 mx-auto my-3">
	    <div class="card-group">
	    	<div class="card mb-0">
	    	   <div class="bg-signup2"></div>
	    		<div class="card-img-overlay rounded-left my-5">
                 <h2 class="text-white">Login</h2>
                 <h1 class="text-white">To Your Portal</h1>
                 <p class="card-text text-white pt-3">Login to your portal and gets tons of exciting new features and updates.</p>
             </div>
	    	</div>

	    	<?php

	    	$action = $_REQUEST['action'];

	    	if ($action == 'Register') {
	    		?>


	    	<div class="card mb-0">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="assets/images/logo-icon.png" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Sign Up</div>
					   <form id="formID" class="m-t-30" method="post" action="">
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputName" class="sr-only">Name</label>
							  <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Name">
							  <div class="form-control-position">
								  <i class="icon-user"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
							  <input type="text" id="exampleInputEmailId" name="user_email" class="form-control" placeholder="Email ID">
							  <div class="form-control-position">
								  <i class="icon-envelope-open"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Phone</label>
							  <input type="text" id="exampleInputPassword" name="user_phone" class="form-control" placeholder="Phone">
							  <div class="form-control-position">
								  <i class="icon-phone"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="text" id="exampleInputPassword" name="user_password" class="form-control" placeholder="Password">
							  <div class="form-control-position">
								  <i class="icon-key"></i>
							  </div>
						   </div>
						  </div>
						  
						  <div class="form-group">
						   <div class="icheck-material-primary">
			                <input type="checkbox" id="user-checkbox" checked="" />
			                <label for="user-checkbox">I Accept terms & conditions</label>
						  </div>
						 </div>
						  <br>
						  <br>
						  <br>
						  <br>
						 <input type="submit" class="btn btn-primary btn-block waves-effect waves-light" name="register" value="Register Now">
						 </form>
						 <div class="text-center pt-3">
						  
						 <!--- Social Login Hidden ->
						 
						 <div class="form-row mt-4">
						  <div class="form-group mb-0 col-6">
						   <button type="button" class="btn bg-facebook text-white btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
						 </div>
						 <div class="form-group mb-0 col-6 text-right">
						  <button type="button" class="btn bg-twitter text-white btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
						 </div>
						</div>


						<--Social Login Ends ---->
							<div style="padding-bottom: 100px"></div>

						 <hr>

						 <p class="text-dark">Already have an account? <a href="authentication.php?action=Login"> Sign In here</a></p>
						 </div>
					
				 </div>
				</div>
	    	</div>

	    		<?php
	    	} elseif ($action == 'Login') {
	    		?>


	    	<div class="card mb-0">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="assets/images/logo-icon.png" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Sign In</div>
					     <form id="formID" class="m-t-30" method="post" action="">
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputName" class="sr-only">Registered Phone</label>
							  <input type="text" id="user_phone" name="user_phone" class="form-control" placeholder="Registered Phone">
							  <div class="form-control-position">
								  <i class="icon-phone"></i>
							  </div>
						   </div>
						  </div>
						   						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="password" id="exampleInputPassword" name="user_password" class="form-control" placeholder="Password">
							  <div class="form-control-position">
								  <i class="icon-key"></i>
							  </div>
						   </div>
						  </div>
						  
						   <div class="form-group">
						   <div class="icheck-material-primary">
			                <input type="checkbox" id="user-checkbox" checked="" />
			                <label for="user-checkbox">I Accept terms & conditions</label>
			                <br>
			                <br>
			                <br>
			                <br>
						  </div>
						 </div>
						  
						 <input type="submit" class="btn btn-primary btn-block waves-effect waves-light" name="login" value="Login Now">
						 </form>

						 <div class="text-center pt-3">
						  
						 <!--- Social Login Hidden ->
						 
						 <div class="form-row mt-4">
						  <div class="form-group mb-0 col-6">
						   <button type="button" class="btn bg-facebook text-white btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
						 </div>
						 <div class="form-group mb-0 col-6 text-right">
						  <button type="button" class="btn bg-twitter text-white btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
						 </div>
						</div>


						<--Social Login Ends ---->
							<div style="padding-bottom: 100px"></div>

						 <hr>

						 <p class="text-dark">Create A New Account? <a href="authentication.php?action=Register"> Sign Up here</a></p>
						 </div>
				 </div>
				</div>
	    	</div>

	    		<?php
	    	}  elseif ($action == 'RegisterMessage') {
	    		?>


	    	<div class="card mb-0">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="assets/images/logo-icon.png" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Registration Status</div>
					     
						<p style="text-align: center;">

							<?php

							$pid = $_REQUEST['id'];
							if($id !=''){
 $select_bookings= "SELECT * FROM `users` WHERE id = '".$_REQUEST['id']."'";
 $sql=$dbconn->prepare($select_bookings);
 $sql->execute();
 $wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd as $rows);
}
 
$user_name = $rows->user_name;
$user_phone = $rows->user_phone;   
$user_password = $rows->user_password;   

  /* 

$mss = "Dear $user_name, 
Greetings from WeBotApp!
Use your Username = $user_phone and Password = $user_password.

Regards";  
$encodedMessage = urlencode($mss); 

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://103.233.79.246/submitsms.jsp?user=PabanPT&key=14e4082d07XX&mobile=91$cus_mobile&message=$encodedMessage&senderid=RPSCAB&accusage=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} 
else {
  echo $response;
}  

*/

							if ($pid == 0) {
								echo "Dear $user_name, your registration is unsuccesful. <br>
								Kindly try again changing your phone number<br>
								";
							}else {
								echo "Dear $user_name, your registration is successful. <br>
								You can now login with your registered mobile number and password<br>
								";
							}

							?>

						</p>

						 <hr>

						 <p class="text-dark">Already have an account? <a href="authentication.php?action=Login"> Sign In</a></p>
						 <p class="text-dark">Already have an account? <a href="authentication.php?action=Register"> Sign Up </a></p>
						 </div>
					 
				 </div>
				</div>
	    	</div>

	    		<?php
	    	}  

	    	elseif ($action == 'ForgetPassword') {

	    		?>

	    	<div class="card mb-0">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="assets/images/logo-icon.png" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Forgot Password</div>
					    <form>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputName" class="sr-only">Name</label>
							  <input type="text" id="exampleInputName" class="form-control" placeholder="Name">
							  <div class="form-control-position">
								  <i class="icon-user"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
							  <input type="text" id="exampleInputEmailId" class="form-control" placeholder="Email ID">
							  <div class="form-control-position">
								  <i class="icon-envelope-open"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="text" id="exampleInputPassword" class="form-control" placeholder="Password">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
							  <input type="password" id="exampleInputRetryPassword" class="form-control" placeholder="Retry Password">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="icheck-material-primary">
			                <input type="checkbox" id="user-checkbox" checked="" />
			                <label for="user-checkbox">I Accept terms & conditions</label>
						  </div>
						 </div>
						 <button type="button" class="btn btn-primary btn-block waves-effect waves-light">Sign Up</button>
						 <div class="text-center pt-3">
						 <p>or Sign up with</p>
						 <div class="form-row mt-4">
						  <div class="form-group mb-0 col-6">
						   <button type="button" class="btn bg-facebook text-white btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
						 </div>
						 <div class="form-group mb-0 col-6 text-right">
						  <button type="button" class="btn bg-twitter text-white btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
						 </div>
						</div>

						 <hr>

						 <p class="text-dark">Already have an account? <a href="authentication-signin2.html"> Sign In here</a></p>
						 </div>
					</form>
				 </div>
				</div>
	    	</div>
	    		<?php
	    	}

	    	elseif ($action == 'Logout') {
	    		session_start();
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
	session_destroy();
}
 echo '<script language="javascript">window.parent.location.href="authentication.php?action=Login";</script>';

	    	}


	    	?>

	     </div>
	    </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	</div><!--wrapper-->


   		 
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
 
</body>
</html>
