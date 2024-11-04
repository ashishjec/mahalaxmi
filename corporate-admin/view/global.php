<?php 

//Database Connectivity  Starts
ob_start();
include('settings/database.php');
DB::connect();
require_once("settings/session.php");
 


 
$select_master_user= "SELECT * FROM `users` WHERE id = '$user_id' and  status = 'Active'";
 $sql999=$dbconn->prepare($select_master_user);
 $sql999->execute();
 $wlvd999=$sql999->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd999 as $rows999);
 
$master_user_id = $rows999->id;
$master_user_name = $rows999->user_name;
$master_user_phone = $rows999->user_phone;
$master_user_role = $rows999->user_role;



 $select_websites= "SELECT * FROM `websites` WHERE website_owner = '$master_user_id' and status = 'Active'";
 $sql998=$dbconn->prepare($select_websites);
 $sql998->execute();
 $wlvd998=$sql998->fetchAll(PDO::FETCH_OBJ);
 foreach($wlvd998 as $rows998);

 $website_real_owner_id = $rows998->website_owner;
 $website_real_id = $rows998->id;
 $website_real_type = $rows998->website_type;
 $website_real_expiry = $rows998->website_expiry;
 $website_real_registration = $rows998->website_registration;
 $website_real_name = $rows998->website_name;
 $website_real_email = $rows998->website_email;
 //echo "hello----";
 //echo "$website_real_name";


// File Request Starts 

include('view/header.php');
include('view/page_loader.php');

echo '<div id="wrapper">';
include('view/sidebar.php');
echo '<body>';
include('view/top_bar.php');



$request_body = $_REQUEST['action'];

$load_body = "functions/$request_body.php";

 
include("$load_body");
include('view/footer.php');
include('view/theme_switch.php');
include('view/scripts.php');

;?>