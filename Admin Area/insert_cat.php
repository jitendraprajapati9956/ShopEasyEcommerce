<?php /* video 163 start */

if(!isset($_SESSION['admin_email'])){
 echo "<script>window.open('login.php','_self')</script>"; 
} else{


?>
  <div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
              <li>
                  <l class="fa fa-dashboard"></l>
                  dashboard/Insert category
</li> 
</ol><!--col-lg-12 end-->
</div><!--row end-->
</div><!--breadcrumb end-->

<div class="row">

</div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa a-money fa-w"></i>Insert category
</h3>
</div>
<div class="panel-body">
    <form class="form-horizontal"  action="" method="post" >
        <div class="form-group">
            <label class="col-md-3 control-label">Category  title</label>
     
     <div class="col-md-6">

     <input type="text" name="cat_title" class="form-control">
     </div>
        </div>
<div class="form-group">
            <label class="col-md-3 control-label">category Description</label>
            <div class="col-md-6">
            <textarea name="cat_desc" class="form-control" >

            </textarea>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-6">

    <input type="submit" name="submit" value="insert category" class="btn btn-primary form-control">
</div>
</div>
</form>
</div>
</div><!--col-lg-12 end-->
</div><!--row end-->
</div>
<!--col-lg-12 end-->

<?php
 if (isset($_POST['submit'])){
     $cat_title=$_POST['cat_title'];
     $cat_desc=$_POST['cat_desc'];
     
    $inset_cat="insert into categories (cat_title,cat_desc)
      values('$cat_title','$cat_desc')";
 
    $run_cat=mysqli_query($con,$inset_cat);

    if($run_cat){
       echo "<script>alert('category inserted suceessfully')</script>";
       echo "<script>windows.open('index.php?view_categories','_self')</script>"; 
    }

    }
    ?>

<?php   }   ?> <!-- video 163 end -->
