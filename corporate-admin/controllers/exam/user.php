<?php
ob_start();
include('../../database.php');
DB::connect();
require_once("../../session.php");

 

$select_master_user= "SELECT * FROM `users` WHERE id = '$user_id' and  status = 'Active'";
$sql999=$dbconn->prepare($select_master_user);
$sql999->execute();
$wlvd999=$sql999->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd999 as $rows999);

$master_user_id = $rows999->id;
$master_user_name = $rows999->user_name;
$master_user_phone = $rows999->user_phone;
$master_user_role = $rows999->user_role;


//echo "$master_user_name";

?>