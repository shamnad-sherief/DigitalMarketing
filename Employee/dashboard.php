
<?php 
require_once("header.php");

$username=$_SESSION['email'] ;
$qry="select emp_id from employee where emp_email='$username'";
$emp_id=$obj->GetSingleData($qry);
?>
<section class="wrapper">
<div class="table-agile-info">
<div class="row">
<div class="col-lg-12">
<section class="panel">
			 <?php 
require_once("../connectionclass.php");
$qry="select * from marketing_team join employee on(marketing_team.emp_id=employee.emp_id) join marketing_area on(marketing_area.mkt_id=marketing_team.mkt_id) join advertisement_request on(advertisement_request.ad_request_id=marketing_team.adv_req_id) join cutomer on(cutomer.email=advertisement_request.email_id) join packages on(packages.package_id=advertisement_request.package_id) where employee.emp_id=$emp_id ";  
 
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?> 
 
<?php  
 foreach($data as $row){
 ?> 
 
<?php 
 $pk_key=$row['package_id'];
 ?>
 <div class="col-md-4">
 <div class="jumbotron panel-body  ">
    <h3 class="text-center text-primary"><?php  echo $row['title']; ?>  </h3>
    <p><?php  echo $row['description']; ?>  </p>
	<p>Duration  <span class="badge badge-success"><?php  echo $row['no_days']; ?> </span> Days </p>
	<button class="btn btn-danger btn-block"><i class="fa fa-globe"></i> <?php  echo $row['web_address']; ?> </button>
	<hr>
	 <p>Marketing Area : <?php  echo $row['mkt_title']; ?></p>
	 <p>Link Address :<p>
	 <?php
	   $link = $row['web_address']."?q=". $row['code_no'];  
	 ?>
	 <input type="text" value="<?php echo $link  ?>"  />
	 <a href="adv_chart.php?req_id=<?php  echo $row['adv_req_id']; ?>" class="htn btn-primary pull-right" >Show Hits</a>
  </div>
  </div>
  
  
 
  
<?php
}
?>
 	
			 
		</section>
</div>
</div>
</div>
</section>
<?php
require_once("footer.php");
?>