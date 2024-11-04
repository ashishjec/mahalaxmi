<?php
session_start();
ob_start();
/******     *Condition*                  *True*             *False***/
$user_id=isset($_SESSION["user_id"])?$_SESSION["user_id"]:"";
if($user_id==0)
{
	header("Location:authentication.php?action=Login");
}
else if($user_id=='')
{
	header("Location:authentication.php?action=Login");
}
//session_destroy();
?>
<? ob_end_flush();?>