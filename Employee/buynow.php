<?php 
@session_start();
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$email_id=$_SESSION['email'] ; 
$package_id=$_GET['package_id'] ; 
$date=date("Y-m-d") ; 
$qry="insert into advertisement_request(email_id,package_id,date)values('$email_id','$package_id','$date')"; 
 $data=$obj->Manipulation($qry); 
 if($data['status']=='true')
				{
				   
					 echo $obj->alert("Successfully added","dashboard.php");
			        }
				else
				{
				     echo $obj->alert('Registration process failed,Try again',"dashboard.php");
				} 
?>