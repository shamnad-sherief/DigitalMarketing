
<?php
require_once("header.php");
?>

	<script type="text/javascript" src="../chart/highcharts.js"></script>  
	<script type="text/javascript" src="../chart/jquery.highchartTable.js"></script>  

<script>
$(document).ready(function() {
  $('table.highchart').highchartTable();
});

</script>
 	<style>
			body{
				text-align: center;
				font-family: Arial, sans-serif;
				font-size: 12px;
			}
						
			div.main{
				margin: auto;
				text-align: left;
				width: 720px;
			}
		
			
			
		</style>
<!--main content start-->
<!--<section id="main-content">-->
	<section class="wrapper">
		<!-- //market-->
		<?php 
require_once("../connectionclass.php");
$req_id= $_GET["req_id"];
$qry="select * from advertisement_request join cutomer on(email=email_id) join packages p on(advertisement_request.package_id=p.package_id) where ad_request_id=$req_id";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 
 ?>
 <div class="table-agile-info">
<div class="row">
<div class="col-lg-12">
<section class="panel">

  
  <table class="table table-bordered" >
 <tr> 
   <th>CUSTOMER</th>  
   <th>PACKAGE NAME</th>  
   <th>DATE</th>  
 
 </tr> 
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['ad_request_id'];
 ?>
  <td><?php  echo $row['full_name']; ?><br> <?php  echo $row['address']; ?> </td> 
 <td><?php  echo $row['title']; ?>  </td> 
 <td><?php  echo $row['date']; ?>  </td> 
  
 </tr>
<?php
}
?>
 </table> 
 
		<div class="market-updates">
			 <header class="panel-heading"> ADVERTISEMENT HITS </header>

			 <table class="highchart" data-graph-container-before="1" data-graph-type="column">
  <thead>
      <tr>
          <th>Marketing Area</th>
          <th>Hits</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $qry="select * from marketing_area ";  
  
$data=$obj->GetTable($qry);
 
 foreach($data as $row){
	 $mkt_id =$row["mkt_id"];
	 $count=0;
	 $qry="select count(*) from advertisements where code_no=(select code_no from marketing_team where adv_req_id=$req_id and mkt_id=$mkt_id)";
	 $count=$obj->GetSingleData($qry);
 ?> 
 <tr> 
 
  <td><?php  echo $row['mkt_title']; ?>  </td> 
 <td><?php  echo  $count ?> </td> 
 </tr>
<?php
}
?>
       
  </tbody>
</table>
			
		   <div class="clearfix"> </div>
		</div>	
	 
</section>
</div>
</div>
	 
</section>
<?php
require_once("footer.php");
?>