<?php
require_once("header.php");
?>
    <section class="wrapper">
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Change Password
                        </header>
                      <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post" action="codes/change_pswd_exe.php">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Current Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="cpswd" class="form-control" required="" placeholder=" Current Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">New Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="newpswd" class="form-control" required="" placeholder=" New Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Confirm Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="conpswd" class="form-control" required="" placeholder=" Confirm Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
              
                    
                  
                    
                </form>
            </div>
                    </section>

            </div>
            
        </div>
       

       
      

        

        <!-- page end-->
        </div>
</section>
 



    <?php
      require_once("footer.php");
     ?>