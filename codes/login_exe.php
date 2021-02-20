<?php
session_start();

require_once('../connectionclass.php');
$obj=new Connectionclass();
$username=$_POST['uname'];
$password=$_POST['password'];
$qry="select usertype from login where username='$username'and password='$password' and status='active'";
$usertype=$obj->GetSingleData($qry);
$_SESSION['email']=$username;
//var_dump($exe);

	if($usertype=='admin')
	{
	header("location:../Admin/dashboard.php");
	}
	elseif($usertype=='customer')
	{
		header("location:../Customer/dashboard.php");
	}
	elseif($usertype=='employee')
	{
		header("location:../Employee/dashboard.php");
	}
	

	else
	{
		echo $obj->alert("Invalid username or password","../login/login.php");
	}
?>