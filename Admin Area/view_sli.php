<?php /* video 168 start */

if(!isset($_SESSION['admin_email'])){
 echo "<script>window.open('login.php','_self')</script>"; 
} else{


?>
  <div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
              <li class="active">
                  <i class="fa fa-dashboard"></i>
                  dashboard/view slider
</li> 
</ol><!--col-lg-12 end-->
</div><!--row end-->
</div><!--breadcrumb end-->

<div class="row">
  <div class="col-lg-12">
     <div class="panel panel-default">
         <div class="panel-heading">
              <h3 class="panel-title">
                 <i class="fa fa-money fa-fw"></i> View Product
              </h3>
         </div>
     </div>
  </div>

<?php
 
 $get_slides="select * from slider";

 $run_slides=mysqli_query($con,$get_slides);

 while($row_slides=mysqli_fetch_array($run_slides)){

   $slide_id=$row_slides['id'];

   $slide_name=$row_slides['slider_name'];

   $slide_image=$row_slides['slider_image'];

 ?>
<div class="col-lg-3 col-md-3">

<div class="panel panel-primary">

<div class="panel-heading">

<h3 class="panel-title"  align="center">

<?php echo  $slide_name;  ?>
</h3>

</div>

<div class="panel-body">
  <form class="form"> </form>

<img src="Slider Images/<?php  echo  $slide_image;  ?>" class="img-responsive">

</div>

<div class="panel-footer">

<center>

<a href="index.php?delete_slide=<?php  echo $slide_id;  ?>" class="pull-left">

<i class="fa fa-trash-o"></i>DELETE

</a>
<a href="index.php?edit_slide=<?php  echo $slide_id;  ?>" class="pull-right">

<i class="fa fa-pencil"></i>Edit

</a>
<div class="clearfix">


</div>

</center>

</div>

</div>

</div>

<?php  }  ?>
</div>

</div>
</div>

</div>

<?php  }  ?> <!-- video 168 end -->

