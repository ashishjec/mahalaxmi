<?php 
error_reporting(1);
session_start();


$host_name = "localhost";
$database = "library"; // Change your database name
$dbusername = "root"; // Your database user id
$dbpassword = ""; // Your password
$dbh = null;

//$project_name = "Pioneer Syndicate";

//define('APP_URL', 'http://localhost/erp_final');

require '../../classes/DB.php';
require '../../classes/AUTH.php';
require '../../classes/ROLE.php';


DB::connect();
?>