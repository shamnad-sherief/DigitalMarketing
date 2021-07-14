<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$pk_key=$_REQUEST["pk_key"];
$ad_req_id=$_REQUEST["ad_req_id"];

$qry="delete from marketing_team where  team_id=$pk_key "; 
 $row=$obj->Manipulation($qry); 
 header("location:marketing_team_SHOW.php?req_id=".$ad_req_id);
?>