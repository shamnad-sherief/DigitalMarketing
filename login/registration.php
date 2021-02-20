           <?php require_once('header.php');  ?>
 <style>
 label{
	 color:white;
 }
 </style>
 <h1 class="title-agile text-center">Register Now</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
           <div class="panel-body">
 <form method="post" action="cutomer_ADD_exe.php">
<div class="form-group"> <label class="col-sm-3 control-label">FULL_NAME</label> <div class='wthree-field'><input required class='form-control' type='text' name='full_name' id='full_name'/></div>
<br></div><div class="form-group"> <label class="col-sm-3 control-label">ADDRESS</label> <div class='wthree-field'><input required class='form-control' type='text' name='address' id='address'/></div>
<br></div>

<div class="form-group"> <label class="col-sm-3 control-label">PHONE</label> <div  class='wthree-field'><input pattern="[9876][0-9]{9}" title="Enter a valid mobile number" maxlength="10" minlength="10" required class='form-control' type='text' name='phone' id='phone'/></div>
<br></div>
<div class="form-group"> <label class="col-sm-3 control-label">WEB ADDRESS</label> <div  class='wthree-field'><input     required class='form-control' type='url' placeholder="http://example.com" name='web_address' id='web_address'/></div>
<br></div>
<div class="form-group"> <label class="col-sm-3 control-label">EMAIL</label> <div class='wthree-field'><input required class='form-control' type='email' name='email' id='email'/></div>
<br></div>  
<div class="form-group"> <label class="col-sm-3 control-label">PASSWORD</label> <div class='wthree-field'><input required class='form-control' type='password' name='password' id='password'/></div>
<br></div>  


<div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div></div>
</form></section>




		  <?php require_once('footer.php');  ?>