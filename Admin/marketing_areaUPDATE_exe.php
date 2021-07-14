<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$mkt_title=$_POST['mkt_title'] ; 
$mkt_type=$_POST['mkt_type'] ; 
$pk_key=$_REQUEST['mkt_id'];
$qry="update marketing_area set mkt_title='$mkt_title' ,mkt_type='$mkt_type'  where mkt_id=$pk_key "; 
 $obj->Manipulation($qry); 
header("location:marketing_area_Show.php");
?>