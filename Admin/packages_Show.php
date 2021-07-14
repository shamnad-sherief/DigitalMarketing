<?php require_once("header.php");  ?>
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
  <a class="btn btn-primary" href="packages_ADD.php">create new   </a> 
  <table class="table table-bordered" >
 <tr> 
   <th>TITLE</th>  
   <th>DESCRIPTION</th>  
   <th>AMOUNT</th>  
   <th>NO_DAYS</th>  
  <th></th> </tr> 
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['package_id'];
 ?>
  <td><?php  echo $row['title']; ?>  </td> 
 <td><?php  echo $row['description']; ?>  </td> 
 <td><?php  echo $row['amount']; ?>  </td> 
 <td><?php  echo $row['no_days']; ?>  </td> 
<td> <a class="btn btn-primary btn-xs" href="packages_EDIT.php?pk_key=<?php  echo $pk_key; ?> " >edit</a> 
  <a onclick='return confirm("are you sure want to delete")' class="btn btn-primary btn-xs"   href="deletepackages.php?pk_key=<?php  echo $pk_key; ?> " >delete</a></td>
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