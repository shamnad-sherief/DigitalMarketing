
<?php 
require_once("header.php");

$username=$_SESSION['email'] ;
?>
<section class="wrapper">
<div class="table-agile-info">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<?php
$package_id=$_GET['package_id'] ; 
require_once('../connectionclass.php');
$obj=new ConnectionClass();

$data= $obj->GetTable("select * from packages where package_id=$package_id");
   foreach($data as $row){
	   
	$amount= $row["amount"];
	   
	   
?>

<!-- services -->
<section class="panel  ">
	<div class="panel-body  ">
		<h2 class="heading mb-5">Package  <strong> We provide </strong> <hr></h2>
		<div class="row">
			<div class="col-md-6  "  >
				 	 
						<h3><?php echo  $row["title"]     ?></h3>
						 
				 
					
					 
						<p class="mt-2"><?php echo  $row["description"]     ?></p>
			</div>
					 
				  
			 
			<div class="col-md-4 text-left">
				 <div class="panel-body" style="border:2px solid red;border-radius:5px">
                            <div class="position-center">
                               <form class="form-horizontal" method="post"  action="savepayment.php">
 
 <div class="form-group">
                                    <label for="exampleInputAmount1">Amount</label>
                                    <input type="text" class="form-control" required id="exampleInputAmount" placeholder="Amount" name="amount" value="<?php echo  $amount  ?>" readonly  >
                                </div>
                               <div class="form-group">
                                    <label for="exampleInputCardNumber1">CardNumber</label>
                                    <input type="number" class="form-control" required id="exampleInputCardNumber1" placeholder="CardNumber" name="cardno">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputExpiryear1">Expiryear</label>
                                    <input type="number" class="form-control" required id="exampleInputExpiryear1" placeholder="Expiryear" name="expiryyear">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputExpirMonth">Expiry Month</label>
                                    <input type="text" class="form-control" required id="exampleInputExpirMonth1" placeholder="ExpirMonth" name="expirymonth">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputCwno">Cvvno</label>
                                    <input type="number" class="form-control" required id="exampleInputCwno" placeholder="CVV" name="cvv">
                                 <input type="hidden" class="form-control" id="exampleInputCwno" placeholder="package_id" name="package_id" value="<?php echo  $row["package_id"] ?>">
                                </div>
 


     <div class="form-group">
	 <div class="col-sm-12">
	 
	 <input type="hidden" name="rid"   id="rid"   />
	 
           <button type="submit" class="btn btn-danger pull-right">PAY</button>
				</div>
</div>

					</form>
 


							   </div>
											 
						</div>
					 
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<?php
   }
?>
</div>
</div>
</div>
</section>
<?php
require_once("footer.php");
?> 