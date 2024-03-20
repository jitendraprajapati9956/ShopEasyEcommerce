<?php /* video 159 start */
  
  if(!isset($_SESSION['admin_email'])){
   echo "<script>window.open('login.php','_self')</script>"; 
  } else{
?>
 <div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
          <li>
          <i class="fa fa-dashboard"></i>
                  dashboard/Insert products category
          </li>
 </ol>

      </div>
 </div>
 <div class="row">

<div class="col-lg-12">

<div class="panel panel-default">

<div class="panel-heading">

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i>view Products category
</h3>
</div>

<div class="panel-body">

<form class="form-horizontal" action="" method="post" >

<div class="form-group">

<label class="col-md-3 control-label">Product  category title  </label>
<div class="col-md-6">
  
<input type="text" name="p_cat_title" class="form-control" >

</div>

</div>


<div class="form-group">

<label class="col-md-3 control-label">Product Category Description </label>

<div class="col-md-6">

<textarea type="text" name="p_cat_desc" class="form-control" >

</textarea>

</div>

</div>

<div class="form-group">

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit"  name="submit"  value="submit now"    class="btn btn-primary form-control"  >

</div>

</div>

</form>

</div>

</div>

</div>
 
</div>
 
<?php 
   if(isset($_POST['submit'])){
$p_cat_title=$_POST['p_cat_title'];

$p_cat_desc=$_POST['p_cat_desc'];

$insert_p_cat="insert into product_categories(p_cat_title,p_cat_desc) values('$p_cat_title','$p_cat_desc')";

$run_p_cat=mysqli_query($con,$insert_p_cat);

if($run_p_cat){

    echo "<script>alert('new product category has been inserted')</script>"; 

    echo "<script>window.open('index.php?view_p_cat','_self')</script>"; 

}

   }

   ?>

   <?php }  ?> <!-- video 159 end -->