<?php
require_once("../../connectionclass.php");
$obj=new ConnectionClass();

$action=$_REQUEST['action'];

if($action=='insert')
{

	$emp_name=$_POST['emp_name'];
	$emp_address=$_POST['emp_address'];
	$emp_gender=$_POST['emp_gender'];
	$emp_phone=$_POST['emp_phone'];
	$emp_joindate=$_POST['emp_joindate'];
	$emp_email=$_POST['emp_email'];
	$emp_password=$_POST['emp_password'];
	$emp_type='staff';

	
	$check_in_login="select count(*) from login where username='$emp_email'";
	$check_count=$obj->GetSingleData($check_in_login);
	if($check_count!=0)
	{
		echo $obj->alert("Email already existed","../add_staff.php");

	}
	else
	{
				
			$qry1="insert into employee(emp_name,emp_address,emp_gender,emp_phone,emp_joindate,emp_email,emp_password,emp_type)values('$emp_name','$emp_address','$emp_gender','$emp_phone','$emp_joindate','$emp_email','$emp_password','$emp_type')";
			$result=$obj->Manipulation($qry1);

			$qry2="insert into login(username,password,usertype,status) values('$emp_email','$emp_password','employee','active')";
			$result2=$obj->Manipulation($qry2);
//var_dump($result);
//var_dump($result2);
				if($result['status']=='true' && $result2['status']=='true')
				{
				   
					echo $obj->alert("Successfully added","../view_staff.php");
			        }
				else
				{
				     echo $obj->alert('Registration process failed,Try again','../add_staff.php');
				}
			}
}

elseif($action=='inactive' || $action=='active')
{
	$empid=$_REQUEST['id'];
	
}

else if($action=='remove')
{
	$empid=$_REQUEST['id'];
	//$rto_office_id=$_REQUEST['rto_office_id'];
	$qry2="delete from employee where emp_id ='$empid'";
	
	$rt="delete from login where username=(select emp_email from employee where emp_id=$empid)";
	$rtt=$obj->Manipulation($rt);
	$result1=$obj->Manipulation($qry2);
	//echo $result1['Status'];
	if($result1['status']=='true' && $rtt['status']=='true')
	{
		echo $obj->alert('Successfully Deleted','../view_staff.php');
		//header('Location:../view_rto_office.php');
	}
	else
	{
		echo $obj->alert('Try again','../view_staff.php');
	}
}
//..................UPDATE......................
else if($action=='update')
{
	$empid=$_REQUEST['id'];
	$emp_name=$_REQUEST['emp_name'];
	$emp_phone=$_REQUEST['emp_phone'];
	$emp_address=$_REQUEST['emp_address'];
	//$staff_status='active';

	$qry3="update employee set emp_name='$emp_name',emp_phone='$emp_phone', emp_address='$emp_address' where emp_id ='$empid'";
	$result=$obj->Manipulation($qry3);
	
	//echo $result;
	//echo $qry3;
	if($result['status']=='true')
	{
	echo $obj->alert('Successfully updated','../view_staff.php');
	}
	else
	{
	echo $obj->alert('Updation process failed,Try again','../view_staff.php?empid='.$empid);
	}
}
?>