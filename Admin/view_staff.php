<?php
require_once("header.php");
require_once('../connectionclass.php');
$obj = new Connectionclass();
$qry="select * from employee,login where employee.emp_email=login.username and login.status='active' order by emp_id desc";
$exe=$obj->GetTable($qry);
//var_dump($exe);
?>
<!--main content start-->
  <section class="wrapper">
    <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Employee List
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">Sl.No</th>
            <th>Employee Details</th>
           
            <th>Join Date</th>
            <th>Type</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          
        <?php
          $i=1;
          foreach ($exe as $value)
           {
          ?>
          <tr data-expanded="true">
            <td><?php  echo $i++; ?></td>
            <td><b><?php  echo $value['emp_name']; ?></b><br>
             Address : <?php  echo $value['emp_address']; ?><br>
             Phone : <?php  echo $value['emp_phone']; ?><br>
             Email : <?php  echo $value['emp_email']; ?>

            </td>
            <td><?php  echo date('d-m-Y',strtotime($value['emp_joindate'])); ?></td>
            <td><?php  echo $value['usertype']; ?></td>
            <td><?php  echo $value['status']; ?></td>
            
            <td>
               <a href="edit_staff.php?id=<?php echo $value['emp_id']; ?>" class="btn btn-success btn-sm">Edit</a>
              <a onclick="return confirm('Are you sure?');" href="codes/staff_exe.php?action=remove&id=<?php  echo $value['emp_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
              
              
            </td>
            
          </tr>
         
         <?php

           }
         ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 

<!--main content end-->
<?php
require_once("footer.php");
?>