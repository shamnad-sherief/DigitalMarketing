<?php require_once("header.php");  ?><section class="wrapper">
<div class="form-w3layouts">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading"> ADD PACKAGES </header>

<div class="panel-body">
 <form method="post" action="packages_ADD_exe.php">
<div class="form-group"> <label class="col-sm-3 control-label">TITLE</label> <div class='col-lg-6'><input required class='form-control' type='text' name='title' id='title'/></div>
<br></div><div class="form-group"> <label class="col-sm-3 control-label">DESCRIPTION</label> <div class='col-lg-6'><input required class='form-control' type='text' name='description' id='description'/></div>
<br></div><div class="form-group"> <label class="col-sm-3 control-label">AMOUNT</label>  <div class='col-lg-6'><input required class='form-control' type='number' name='amount' id='amount'/></div>
 <br></div><div class="form-group"> <label class="col-sm-3 control-label">NO_DAYS</label>  <div class='col-lg-6'><input required class='form-control' type='number' name='no_days' id='no_days'/></div>
 <br></div>  <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div></div>
</form></section>
</div>
</div>
</div>
</section>
<?php require_once("footer.php");  ?>