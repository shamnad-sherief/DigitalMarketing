<?php require_once("header.php");  ?><section class="wrapper">
<div class="table-agile-info">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<?php 
require_once("../connectionclass.php");
$qry="select * from cutomer ";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?>
  <a class="btn btn-primary" href="cutomer_ADD.php">create new   </a> 
  <table class="table table-bordered" >
 <tr> 
   <th>FULL_NAME</th>  
   <th>ADDRESS</th>  
   <th>PHONE</th>  
   <th>EMAIL</th>  
  </tr> 
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['cust_id'];
 ?>
  <td><?php  echo $row['full_name']; ?>  </td> 
 <td><?php  echo $row['address']; ?>  </td> 
 <td><?php  echo $row['phone']; ?>  </td> 
 <td><?php  echo $row['email']; ?>  </td> 
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