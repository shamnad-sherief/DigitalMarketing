
<?php 
require_once("header.php");

$username=$_SESSION['email'] ;
?>
<section class="wrapper">
<div class="table-agile-info">
<div class="row">
<div class="col-lg-12">
<section class="panel">
			 <?php 
require_once("../connectionclass.php");
$qry="select * from packages ";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?> 
 
<?php  
 foreach($data as $row){
 ?> 
 
<?php 
 $pk_key=$row['package_id'];
 ?>
 
 <div class="jumbotron col-md-4">
    <h3 class="text-center text-primary"><?php  echo $row['title']; ?>  </h3>
    <p><?php  echo $row['description']; ?>  </p>
	<p>Duration  <span class="badge badge-success"><?php  echo $row['no_days']; ?> </span> Days </p>
	<button class="btn btn-danger btn-block"><i class="fa fa-inr"></i> <?php  echo $row['amount']; ?> </button>
	<hr>
	<?php
	$qry="select ad_request_id from advertisement_request where email_id='$username'and package_id='$pk_key'";
	  $ad_request_id=$obj->GetSingleData($qry);
	if($ad_request_id!=""){
		?>
		<a class="btn btn-warning btn-xs" href="adv_chart.php?req_id=<?php  echo $ad_request_id; ?>">SHOW GRAPH</a> 
	<a href="#" class="btn btn-info btn-xs pull-right">Booked</a>
		
	<?php
	}else{
	?>
	
	<a href="buynow.php?package_id=<?php  echo $row['package_id']; ?>" class="btn btn-info btn-xs pull-right">Buy Now</a>
	<?php
	
	}	
	?>
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