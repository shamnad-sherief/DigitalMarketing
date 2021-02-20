<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$full_name=$_POST['full_name'] ; 
$address=$_POST['address'] ; 
$phone=$_POST['phone'] ; 
$email=$_POST['email'] ;
$web_address=$_POST['web_address'] ;

$password=$_POST['password'] ; 

	$check_in_login="select count(*) from login where username='$email'";
	$check_count=$obj->GetSingleData($check_in_login);
	if($check_count!=0)
	{
		echo $obj->alert("Email already existed","registration.php");

	}
	else
	{
      $qry2="insert into login(username,password,usertype,status) values('$email','$password','customer','active')";
			$result2=$obj->Manipulation($qry2);
 $qry="insert into cutomer(full_name,address,phone,email,web_address)values('$full_name','$address','$phone','$email','$web_address')"; 
 $result=$obj->Manipulation($qry); 
				if($result['status']=='true' && $result2['status']=='true')
				{
				   
				 echo $obj->alert("Successfully added","../index.php");
			        }
				else
				{
				      echo $obj->alert('Registration process failed,Try again','registration.php');
				}
 

	}

 
?>