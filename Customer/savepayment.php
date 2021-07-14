<?php
@session_start();
require_once("../connectionclass.php");
 
 
$obj = new ConnectionClass();
   $amount=$_POST['amount'];
   $cardno=$_POST['cardno'];
   $expiryyear=$_POST['expiryyear'];
   $expirymonth=$_POST['expirymonth'];
  // $reg_place=$_POST['place'];
   $cvv=$_POST['cvv'];
 
$expiry=  $expirymonth."/".$expiryyear;
$email_id= $_SESSION["email"];
$package_id=$_POST['package_id'] ;
$date=date("Y-m-d") ; 
$checkbank="select amount from bank where card_no='$cardno' and cvv='$cvv' and expiry='$expiry'";
$resultcount=$obj->GetSingleData($checkbank);
if($resultcount=="")
{
 
  echo $obj->alert("Card Not exists","buynow.php?package_id=".$package_id);  
}
else if($amount>$resultcount){
	echo $obj->alert("Insufficient Balance","buynow.php?package_id=".$package_id);
}else
{
	$sql="insert into advertisement_request(email_id,package_id,date)values('$email_id','$package_id','$date')"; 
	$exe=$obj->Manipulation($sql);
	$q="update bank set amount=amount-$amount where card_no='$cardno' and cvv='$cvv' and expiry='$expiry'";
	$exe1=$obj->Manipulation($q);
	//var_dump($exe);
	if($exe['status']=='true' && $exe1['status']=='true')
	{
		 
		 
		 echo $obj->alert("Payment Successfully Completed..","dashboard.php");      	
		 
	}
	else
	{
		 

		 echo $obj->alert("Something Went Wrong","buynow.php?package_id=".$package_id);
	}


}
?>