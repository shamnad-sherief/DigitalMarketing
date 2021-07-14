<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$pk_key=$_REQUEST["pk_key"];
$qry="delete from packages where  package_id=$pk_key "; 
 $row=$obj->Manipulation($qry); 
header("location:packages_Show.php");
?>