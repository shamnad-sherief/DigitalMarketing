<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$emp_id=$_POST['emp_id'] ; 
$mkt_id=$_POST['mkt_id'] ;
$ad_req_id =$_POST['ad_req_id'] ;
$code_no=time() ; 
$qry="insert into marketing_team(emp_id,mkt_id,code_no,adv_req_id)values('$emp_id','$mkt_id','$code_no','$ad_req_id')"; 
 $data=$obj->Manipulation($qry); 
 
 header("location:marketing_team_Show.php?req_id=".$ad_req_id);
?>