<?php /* video 166 start */
  
  
  if(!isset($_SESSION['admin_email'])){
   echo "<script>window.open('login.php','_self')</script>"; 
  } else{

?>
<?php
if(isset($_GET['edit_cat'])){
   $edit_id=$_GET['edit_cat'];
   $edit_cat="select * from categories where cat_id='$edit_id'";
   $run_edit=mysqli_query($con,$edit_cat);
   $row_edit=mysqli_fetch_array($run_edit);
   $c_id=$row_edit['cat_id'];
   $c_title=$row_edit['cat_title'];
   $c_desc=$row_edit['cat_desc'];

  
}
?>

  <div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
              <li>
                  <i class="fa fa-dashboard"></i>
                  dashboard/Edit  category
</li> 
</ol><!--col-lg-12 end-->
</div><!--row end-->
</div><!--breadcrumb end-->

<div class="row">

<div class="col-lg-12">

<div class="panel panel-default">

<div class="panel-heading">

<h3 class="panel-title">
 
<i class="fa fa-money fa-fw"></i>Edit  category

</h3>

</div>

<div class="panel-body">

<form class="form-horizontal"  action=""  method="post" >

<div class="form-group">

<label class="col-md-3 control-label">  category title  </label>
<div class="col-md-6">

<input type="text" name="cat_title" class="form-control"  value="<?php echo $c_title; ?>">

</div>

</div>

<div class="form-group">

<label class="col-md-3 control-label">category  Description</label>

<div class="col-md-6">


<textarea  type="text" name="cat_desc" class="form-control">
<?php echo $c_desc;  ?>
</textarea>
</div>
</div>


<div class="form-group">

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit"  name="update"  value="Update  category"    class="btn btn-primary form-control"  >

</div>

</div>

</form>

</div>

</div>
</div>
</div>


<?php

if(isset($_POST['update'])){

$cat_title=$_POST['cat_title'];
$cat_desc=$_POST['cat_desc'];

$update_cat="update categories set cat_title='$cat_title',cat_desc='$cat_desc' where cat_id='$c_id'";

$run_cat=mysqli_query($con,$update_cat);

if($run_cat){

   echo "<script>alert('one category has been updated')</script>"; 

   echo "<script>window.open('index.php?view_cats','_self')</script>"; 

}
}
?>
<?php   }    ?> <!-- video 166 end -->