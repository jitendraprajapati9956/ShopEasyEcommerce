<?php /* video 178 start */

if(!isset($_SESSION['admin_email'])){
 echo "<script>window.open('login.php','_self')</script>"; 
} else{


?>


  <div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
              <li class="active">
                  <l class="fa fa-dashboard"></l>
                  dashboard/Insert user
</li> 
</ol><!--col-lg-12 end-->
</div><!--row end-->
</div><!--breadcrumb end-->

<div class="row">
    <div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa a-money fa-w"></i>Insert user
</h3>
</div>
<div class="panel-body">
<form class="form-horizontal"  action="" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label class="col-md-3 control-label">user name</label>
            <div class="col-md-6">

          <input type="text" name="admin_name" class="form-control" required>
      </div>
         </div>

          <div class="form-group">
            <label class="col-md-3 control-label">user email</label>
            <div class="col-md-6">
            <input type="text" name="admin_email" class="form-control" required>
     </div>
       </div>

       <div class="form-group">
            <label class="col-md-3 control-label">user password</label>
            <div class="col-md-6">

          <input type="password" name="admin_pass" class="form-control" required>
      </div>
         </div>

          <div class="form-group">
            <label class="col-md-3 control-label">user country</label>
            <div class="col-md-6">
            <input type="text" name="admin_country" class="form-control" required>
     </div>
       </div>

       <div class="form-group">
            <label class="col-md-3 control-label">user job</label>
            <div class="col-md-6">
            <input type="text" name="admin_job" class="form-control" required>
     </div>
       </div>
       <div class="form-group">
            <label class="col-md-3 control-label">user contact</label>
            <div class="col-md-6">
            <input type="text" name="admin_contact" class="form-control" required>
     </div>
       </div>
       <div class="form-group">
            <label class="col-md-3 control-label">user about</label>
            <div class="col-md-6">
            <input type="text" name="admin_about" class="form-control" required>
     </div>
       </div>
       <div class="form-group">
            <label class="col-md-3 control-label">user image</label>
            <div class="col-md-6">
            <input type="file" name="admin_image" class="form-control" required>
     </div>
       </div>
          <div class="form-group">
     <label class="col-md-3 control-label"></label>
     <div class="col-md-6">

        <input type="submit" name="submit" value="insert user" class="btn btn-primary form-control">



    </div>
          </div>
</form>
</div>
</div>
    </div>
</div>
<?php
if(isset($_POST['submit'])){

$admin_name=$_POST['admin_name'];
$admin_email=$_POST['admin_email'];
$admin_pass=$_POST['admin_pass'];
$admin_country=$_POST['admin_country'];
$admin_job=$_POST['admin_job'];
$admin_contact=$_POST['admin_contact'];
$admin_about=$_POST['admin_about'];

$admin_image=$_FILES['admin_image']['name'];
$temp_admin_image=$_FILES['admin_image']['tmp_name'];

move_uploaded_file($temp_admin_image,"Admin_Images/$admin_image");

$insert_admins="insert into admins(admin_name,admin_email,admin_pass,admin_image,admin_contact,admin_country,admin_job,admin_about) 
values('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_contact','$admin_country','$admin_job','$admin_about')";

$run_admins=mysqli_query($con,$insert_admins);

if($run_admins){

    echo "<script>alert(' One  user has been inserted')</script>"; 

    echo "<script>window.open('index.php?view_users','_self')</script>"; 



}

}

?>
<?php   }   ?> <!-- video 178 end -->
  