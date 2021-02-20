
<?php
require_once("header.php");
require_once('../connectionclass.php');
$obj = new Connectionclass();

$sid=$_GET['id'];
$sql="select * from employee where emp_id='$sid'";
$res=$obj->GetSingleRow($sql);

?>
<section class="wrapper">
        <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->


 <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Staff Edit
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post" action="codes/staff_exe.php?action=update&id=<?php echo $sid; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="emp_name" class="form-control" pattern="[a-zA-Z\s]+" title="Alphaber and Space Only" required="" placeholder="Full Name" value="<?php echo $res['emp_name'];?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label"> Address</label>
                        <div class="col-sm-6">
                            <input type="text" name="emp_address" class="form-control"   title="Alphaber and Space Only" required="" placeholder="Address" value="<?php echo $res['emp_address'];?>">
                        </div>
                    </div>

                    
 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mobile Number</label>
                        <div class="col-sm-6">
                            <input type="text" name="emp_phone" class="form-control" pattern="[9876][0-9]{9}" title="Enter a valid mobile number" maxlength="10" minlength="10" placeholder="Enter Mobile Number" required="" value="<?php echo $res['emp_phone'];?>">
                        </div>
                    </div>
                    

                     
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Update</button>
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
