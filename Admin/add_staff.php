
<?php
require_once("header.php");
require_once('../connectionclass.php');
$obj = new Connectionclass();

?>
<section class="wrapper">
        <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->


 <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Employee
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post" action="codes/staff_exe.php?action=insert" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="emp_name" class="form-control" pattern="[a-zA-Z\s]+" title="Alphaber and Space Only" required="" placeholder="Full Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" col-sm-3 control-label">Address</label>
                        <div class="col-lg-6">
                            <textarea name="emp_address" class="form-control" required=""></textarea>                            
                        </div>
                    </div>  

                     <div class="form-group">
                        <label class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-6">
                            <select name="emp_gender" required="" class="form-control">
                                <option value="">--Select Gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                
                            </select>
                        </div>
                    </div>
                  


                    <div class="form-group">
                        <label class=" col-sm-3 control-label">Email</label>
                        <div class="col-lg-6">
                            <input type="email" name="emp_email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Invalid Email Format" placeholder="Enter email id" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mobile Number</label>
                        <div class="col-sm-6">
                            <input type="text" name="emp_phone" class="form-control" pattern="[9876][0-9]{9}" title="Enter a valid mobile number" maxlength="10" minlength="10" placeholder="Enter Mobile Number" required="">
                        </div>
                    </div>
                    

                     <div class="form-group">
                        <label class="col-sm-3 control-label">Join Date</label>
                        <div class="col-sm-6">
                            <input type="date" name="emp_joindate" class="form-control"  required="">
                        </div>
                    </div>
                   
                    

                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="emp_password" class="form-control"  required="" placeholder="Enter Password">
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                    
                   <!-- <div class="position-center">
                                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
                            
                    </div>-->
                    
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
