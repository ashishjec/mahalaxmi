<?php

ob_start();
include('database.php');


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Controller Sync</title>
</head>
<body onload="document.forms['form1'].submit()">


<!--
<form method="GET" action="" name="form1" id="myform" >
-->

<form method="GET" action="" >
     <input type="text" name="rm_amount" value="<?php 


$query1= "SELECT * FROM `users` where status = 'Active' order by id asc";
   $sql1=$dbconn->prepare($query1);
   $sql1->execute();

   $wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
   foreach($wlvd1 as $rows1){
  $user_name = $rows1->user_name;
   


   echo "$user_name, ";
 }
?>">

<input type="submit" name="submit" value="submit">
</form>


<script>            
    document.addEventListener("DOMContentLoaded", function(event) {
            document.createElement('form').submit.call(document.getElementById('myform'));
            });         
</script>
</body>
</html>