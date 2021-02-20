<?php
session_start();
$email_id=$_SESSION['email_id'];
$random=$_SESSION['random'];
$code=$_POST['code'];
require_once("../ConnectionClass.php");
if($random==$code)
{
	header("location:../login/resetpassword.php");
}
else
{
	$obj=new ConnectionClass();
	echo $obj->alert("invalid code","../login/entercode.php");
}
?>