<?php require_once("header.php");  ?><section class="wrapper">
<div class="form-w3layouts">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<?php 
require_once("../connectionclass.php");
$obj=new connectionclass() ; 
$pk_key=$_REQUEST['pk_key'];
 $qry="select * from packages where package_id='$pk_key' ";
 $row=$obj->getSingleRow($qry); ?>
<header class="panel-heading"> EDIT PACKAGES </header>

<div class="panel-body">
 <form method="post" action="packagesUPDATE_exe.php"> <table> <tr>
 <td>TITLE</td><td> <input class="form-control"  required="" type="text" name="title" value="<?php echo $row["title"] ?>" /></td><tr>
 <td>DESCRIPTION</td><td> <input class="form-control"  required="" type="text" name="description" value="<?php echo $row["description"] ?>" /></td><tr>
 <td>AMOUNT</td><td> <input class="form-control"  required="" type="text" name="amount" value="<?php echo $row["amount"] ?>" /></td><tr>
 <td>NO_DAYS</td><td> <input class="form-control"  required="" type="text" name="no_days" value="<?php echo $row["no_days"] ?>" /></td> <tr><td colspan="2" align="right">
<input type="hidden" name="pk_key" value="<?php echo $row["package_id"] ?>" />
<input  class="btn btn-success" type="submit" value="submit">
</td></tr></table> 
 </div>
</form></section>
</div>
</div>
</div>
</section>
<?php require_once("footer.php");  ?>