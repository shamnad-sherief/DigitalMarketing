<?php require_once("header.php");  ?><section class="wrapper">
<div class="table-agile-info">
<div class="row">
<div class="col-lg-8">
<section class="panel">
<?php 
require_once("../connectionclass.php");
$req_id=$_GET["req_id"];
$qry="select * from marketing_team join employee on(marketing_team.emp_id=employee.emp_id) join marketing_area on(marketing_area.mkt_id=marketing_team.mkt_id) where adv_req_id='$req_id'";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?> 
  <table class="table table-bordered" >
 <tr> 
   <th>EMPLOYEE NAME</th>  
   <th>MARKETTING AREA</th>  
   <th>CODE_NO</th>  
  <th></th> </tr> 
<?php  
 foreach($data as $row){
 ?> 
 <tr> 
<?php 
 $pk_key=$row['team_id'];
 ?>
  <td><?php  echo $row['emp_name']; ?>  </td> 
 <td><?php  echo $row['mkt_title']; ?>  </td> 
 <td><?php  echo $row['code_no']; ?>  </td> 
<td> 
  <a onclick='return confirm("are you sure want to delete")' class="btn btn-primary btn-xs"   href="deletemarketing_team.php?pk_key=<?php  echo $pk_key; ?>&ad_req_id=<?php  echo $row['adv_req_id']; ?> " >delete</a></td>
</tr>
<?php
}
?>
 </table> 
</section>
</div>


<div class="col-lg-4">
<section class="panel">
<header class="panel-heading"> ADD MARKETING_TEAM </header>

<div class="panel-body">
 <form method="post" action="marketing_team_ADD_exe.php">
<div class="form-group"> <label class="col-sm-12 control-label">EMPLOYEE NAME</label>  <div class='col-lg-12'>
<?php
$qry="select * from employee,login where employee.emp_email=login.username and login.status='active' order by emp_id desc";
$exe=$obj->GetTable($qry);
?>
<select  name='emp_id' id='emp_id' class="form-control">
<?php
 foreach ($exe as $value)
           {
			   ?>
			   <option value="<?php  echo  $value["emp_id"] ?>"><?php  echo  $value["emp_name"] ?></option>
			   <?php
		   }
?> 
</select> 
 <br></div><div class="form-group"> <label class="col-sm-12 control-label">MARKETTING AREA</label>  <div class='col-lg-12'>
 <?php
$qry="select * from marketing_area ";  
$exe=$obj->GetTable($qry);
?>
<select  name='mkt_id' id='mkt_id' class="form-control">
<?php
 foreach ($exe as $value)
           {
			   ?>
			   <option value="<?php  echo  $value["mkt_id"] ?>"><?php  echo  $value["mkt_title"] ?></option>
			   <?php
		   }
?> 
</select> 
 
 
 
 </div>
  <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-12">
                            <input type="hidden" value="<?php echo  $req_id  ?>" name="ad_req_id"   />
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