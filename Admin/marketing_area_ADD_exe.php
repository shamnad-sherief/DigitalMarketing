<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$mkt_title=$_POST['mkt_title'] ; 
$mkt_type=$_POST['mkt_type'] ; 
$qry="insert into marketing_area(mkt_title,mkt_type)values('$mkt_title','$mkt_type')"; 
 $data=$obj->Manipulation($qry); 
var_dump($data);header("location:marketing_area_SHOW.php");
?>