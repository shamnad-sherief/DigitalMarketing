<?php require_once("header.php");  ?><section class="wrapper">
<div class="table-agile-info">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<?php 
require_once("../connectionclass.php");
$qry="select * from marketing_area ";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?>
  <a class="btn btn-primary" href="marketing_area_ADD.php">create new   </a> 
  <table class="table table-bordered" >
 <tr> 
   <th>MKT_TITLE</th>  
   <th>MKT_TYPE</th>  
  <th></th> </tr> 
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['mkt_id'];
 ?>
  <td><?php  echo $row['mkt_title']; ?>  </td> 
 <td><?php  echo $row['mkt_type']; ?>  </td> 
<td> <a class="btn btn-primary btn-xs" href="marketing_area_EDIT.php?pk_key=<?php  echo $pk_key; ?> " >edit</a> 
  <a onclick='return confirm("are you sure want to delete")' class="btn btn-primary btn-xs"   href="deletemarketing_area.php?pk_key=<?php  echo $pk_key; ?> " >delete</a></td>
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