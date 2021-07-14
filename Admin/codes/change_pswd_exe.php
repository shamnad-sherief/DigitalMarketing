<?php
session_start();
require_once("../../connectionclass.php");
$obj=new Connectionclass();
$email=$_SESSION['email']; 
 $currentpassword=$_POST["cpswd"];
 $newpassword=$_POST["newpswd"];
 $confirmpassword=$_POST["conpswd"]; 
 $qry="select password from login where username='$email'"; 
 $password=$obj->GetSingleData($qry);
 if($password==$currentpassword)
 {
 	if($newpassword==$confirmpassword)
 	{
		 $qry="update login set password='$newpassword' where username='$email'";
		 $result=$obj->Manipulation($qry);
		 if($result['status']=="true")
		 {
			 //echo $obj->alert("successfully updated","../adminhome.php");
		 	echo $obj->alert("successfully updated","../dashboard.php");
		 }
		 else
		 {
			 echo $obj->alert("Failed ,try again","../changepassword.php");		 
		 }
	}
	else
	{
		echo $obj->alert("Failed ,try again","../changepassword.php");
	}
 }
 else
 {
    echo $obj->alert("Check Current Password","../changepassword.php");
 }
 ?>