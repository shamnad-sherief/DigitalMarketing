<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$title=$_POST['title'] ; 
$description=$_POST['description'] ; 
$amount=$_POST['amount'] ; 
$no_days=$_POST['no_days'] ; 
$qry="insert into packages(title,description,amount,no_days)values('$title','$description','$amount','$no_days')"; 
 $data=$obj->Manipulation($qry); 
var_dump($data);header("location:packages_Show.php");
?>