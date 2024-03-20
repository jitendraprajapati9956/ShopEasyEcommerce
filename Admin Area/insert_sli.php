<?php /* video 167 start */

if(!isset($_SESSION['admin_email'])){
 echo "<script>window.open('login.php','_self')</script>"; 
} else{


?>
  <div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
              <li>
                  <i class="fa fa-dashboard"></i>
                  dashboard/Insert slider
</li> 
</ol><!--col-lg-12 end-->
</div><!--row end-->
</div><!--breadcrumb end-->

<div class="row">

</div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-money fa-w"></i>Insert slider
</h3>
</div>
<div class="panel-body">
    <form class="form-horizontal"  action="" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label class="col-md-3 control-label">slider name:</label>
     
     <div class="col-md-6">

     <input type="text" name="slider_name" class="form-control">
     </div>
        </div>
<div class="form-group">
            <label class="col-md-3 control-label">slider image:</label>
            <div class="col-md-6">
            <input type="file" name="slider_image"  class=" form-control">

</div>
</div>


<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-6">

    <input type="submit" name="submit" value="submit now" class="btn btn-primary form-control">



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
     $slider_name=$_POST['slider_name'];

     $slider_image=$_FILES['slider_image']['name'];

     $temp_name=$_FILES['slider_image']['tmp_name'];
     
     $view_slides="select * from slider";
     
     $view_run_slides=mysqli_query($con,$view_slides);
     
     $count=mysqli_num_rows($view_run_slides);
   
     if($count<4){
         move_uploaded_file($temp_name,"Slider Images/$slider_image");

         $insert_slider="insert into slider (slider_name,slider_image) values('$slider_name','$slider_image')";
            
         $run_slider=mysqli_query($con,$insert_slider);
    
       echo "<script>alert('new slide inserted suceessfully')</script>";
       echo "<script>windows.open('index.php?view_slider','_self')</script>"; 
    
    }  else{

        echo "<script>alert('you have inserted 4 sliders suceessfully')</script>";

    }


    }
    ?>

<?php   }   ?> <!-- video 167 end -->
 