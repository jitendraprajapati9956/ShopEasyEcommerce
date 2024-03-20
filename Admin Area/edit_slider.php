<?php /* video 170 start */

if(!isset($_SESSION['admin_email'])){
 echo "<script>window.open('login.php','_self')</script>"; 
} else{


?>
  

<?php
 if (isset($_GET['edit_slide'])){
     $edit_id=$_GET['edit_slide'];
    
     $edit_slide="select * from slider  where id='$edit_id'";

     $run_edit=mysqli_query($con,$edit_slide);

     $row_edit=mysqli_fetch_array($run_edit);
     
     $slide_id=$row_edit['id'];

     $slide_name=$row_edit['slider_name'];

     $slide_image=$row_edit['slider_image'];

 }

 ?>

<div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
              <li class="active">
                  <l class="fa fa-dashboard"></l>
                  dashboard/Edit slider
</li> 
</ol><!--col-lg-12 end-->
</div><!--row end-->
</div><!--breadcrumb end-->



<div class="row">

</div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa a-money fa-w"></i>edit slider
</h3>
</div>
<div class="panel-body">
    <form class="form-horizontal"  action="" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label class="col-md-3 control-label">slider name</label>
     
     <div class="col-md-6">

     <input type="text" name="slider_name" class="form-control"  value="<?php  echo $slide_name; ?>">
     </div>
        </div>
<div class="form-group">
            <label class="col-md-3 control-label">slider image</label>
            <div class="col-md-6">
            
            <input type="file" name="slider_image" class="form-control">
            <br>
            <img src="Slider Images/<?php   echo  $slide_image;  ?>" width="70" height="70">           
            </div>
</div>
      

<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-6">

    <input type="submit" name="update" value="update now" class="btn btn-primary form-control">

</div>
</div>
</form>
</div>
</div><!--col-lg-12 end-->
</div><!--row end-->
</div>
<?php


if (isset($_POST['update'])){
    $slide_name=$_POST['slider_name'];

    $slide_image=$_FILES['slider_image']['name'];

    $temp_name=$_FILES['slider_image']['tmp_name'];

    move_uploaded_file($temp_name,"Slider Images/$slide_image");

    $update_slide="update slider set slider_name='$slide_name',slider_image='$slide_image'  where  id='$slide_id'";

    $run_slide=mysqli_query($con,$update_slide);
    
  
    if($run_slide){
       echo "<script>alert('new slide inserted updated')</script>";

      echo "<script>windows.open('index.php?view_slider','_self')</script>"; 

        
   }  

   }
   ?>

<?php   }   ?> <!-- video 170 end -->









