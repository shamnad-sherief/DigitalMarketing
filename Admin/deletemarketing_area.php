<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$pk_key=$_REQUEST["pk_key"];
$qry="delete from marketing_area where  mkt_id=$pk_key "; 
 $row=$obj->Manipulation($qry); 
header("location:marketing_area_Show.php");
?>