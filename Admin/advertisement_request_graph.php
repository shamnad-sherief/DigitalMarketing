<?php require_once("header.php");  ?><section class="wrapper">
<div class="table-agile-info">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<?php 
require_once("../connectionclass.php");
$qry="select * from advertisement_request join cutomer on(email=email_id) join packages p on(advertisement_request.package_id=p.package_id) ";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?>
  
  <table class="table table-bordered" >
 <tr> 
   <th>CUSTOMER</th>  
   <th>PACKAGE NAME</th>  
   <th>DATE</th>  
  <th>#</th>  
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
 <td><a class="btn btn-danger" href="adv_chart.php?req_id=<?php  echo $row['ad_request_id']; ?>">SHOW GRAPH</a>   </td> 
 </tr>
<?php
}
?>
 </table> 
</section>
</div>
</div>
</div>
</section>
<?php require_once("footer.php");  ?>