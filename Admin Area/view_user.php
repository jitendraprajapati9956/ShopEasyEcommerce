<?php /* video 179 start */

if(!isset($_SESSION['admin_email'])){
 echo "<script>window.open('login.php','_self')</script>"; 
} else{


?>


  <div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
              <li class="active">
                  <l class="fa fa-dashboard"></l>
                  dashboard/view user
</li> 
</ol><!--col-lg-12 end-->
</div><!--row end-->
</div><!--breadcrumb end-->

<div class="row">
    <div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa a-money fa-w"></i>view user
</h3>
</div>

<div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                          <tr>
                           
                            <th>  user  name</th>
                            <th> customer email</th>
                            <th>customer  image</th>
                            <th>customer  country </th>
                            <th> customer job</th>
                            
                            <th>customer delete</th>
                          </tr>
                    </thead>
                  <tbody>
                  <?php
$get_admin="select * from admins";

$run_admin=mysqli_query($con,$get_admin);

while($row_admin=mysqli_fetch_array($run_admin)){

    $admin_id=$row_admin['admin_id'];
$admin_name=$row_admin['admin_name'];
$admin_email=$row_admin['admin_email'];
$admin_image=$row_admin['admin_image'];
$admin_country=$row_admin['admin_country'];
$admin_job=$row_admin['admin_job'];


?>
<tr>
    <td><?php echo $admin_name;  ?></td>
    <td><?php echo $admin_email;  ?></td>
    <td><img src="admin_images/<?php echo $admin_image;  ?>" width="60" height="60"></td>
    <td><?php echo $admin_country;  ?></td>
    <td><?php echo $admin_job;  ?></td>
<td>
<a href="index.php?user_delete=<?php echo $admin_id; ?>" >
<i class="fa fa-trash-o">delete</i>
</a>
</td>
</tr>
<?php  }  ?>
                  </tbody>
                  </table>
                </div>
</div>
</div>
    </div>
</div>
<?php  }   ?> <!-- video 179 end -->
