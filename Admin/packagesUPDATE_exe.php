<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$title=$_POST['title'] ; 
$description=$_POST['description'] ; 
$amount=$_POST['amount'] ; 
$no_days=$_POST['no_days'] ; 
$pk_key=$_REQUEST['package_id'];
$qry="update packages set title='$title' ,description='$description' ,amount='$amount' ,no_days='$no_days'  where package_id=$pk_key "; 
 $obj->Manipulation($qry); 
header("location:packages_Show.php");
?>