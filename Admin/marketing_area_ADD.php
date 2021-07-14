<?php require_once("header.php");  ?><section class="wrapper">
<div class="form-w3layouts">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading"> ADD MARKETING_AREA </header>

<div class="panel-body">
 <form method="post" action="marketing_area_ADD_exe.php">
<div class="form-group"> <label class="col-sm-3 control-label">MKT_TITLE</label> <div class='col-lg-6'><input required class='form-control' type='text' name='mkt_title' id='mkt_title'/></div>
<br></div><div class="form-group"> <label class="col-sm-3 control-label">MKT_TYPE</label> 

<div class='col-lg-6'>
<select name='mkt_type' id='mkt_type'>
<option>Social Media</option>
<option>Email</option>
<option>Website</option>

</select>
 

</div>
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