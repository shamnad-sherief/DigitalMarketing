<?php require_once("header.php");  ?><section class="wrapper">
<div class="form-w3layouts">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$pk_key=$_REQUEST['pk_key'];
 $qry="select * from marketing_area where mkt_id='$pk_key' ";
 $row=$obj->getSingleRow($qry); ?>
<header class="panel-heading"> EDIT MARKETING_AREA </header>

<div class="panel-body">
 <form method="post" action="marketing_areaUPDATE_exe.php"> <table> <tr>
 <td>MKT_TITLE</td><td> <input class="form-control"  required="" type="text" name="mkt_title" value="<?php echo $row["mkt_title"] ?>" /></td><tr>
 <td>MKT_TYPE</td><td> <input class="form-control"  required="" type="text" readonly name="mkt_type" value="<?php echo $row["mkt_type"] ?>" /></td> <tr><td colspan="2" align="right">
<input type="hidden" name="pk_key" value="<?php echo $row["mkt_id"] ?>" />
<input  class="btn btn-success" type="submit" value="submit">
</td></tr></table> 
 </div>
</form></section>
</div>
</div>
</div>
</section>
<?php require_once("footer.php");  ?>