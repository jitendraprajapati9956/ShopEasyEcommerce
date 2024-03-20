<?php /* video 126 start */
   $c_email=$_SESSION['customer_email'];
   if(isset($_POST['yes'])){
       $delete_q="delete from custommers where  customer_email='$c_email'";
       $run_q=mysqli_query($con,$delete_q);
       if($run_q) {
           session_destroy();
           echo "<script>alert('you account has been deleted')</script>";
           echo "<script>window.open('../bootstrap.php','_self')</script>";    
        }
     }
?> <!-- video 126 end -->

<div class="box"> <!-- video 55 start -->
  <center>
     <h1> Do You Really Want To Delete Your Account </h1>
      <form action="" method="post">
         <input type="submit" name="yes" value="Yes,I Want To Delete" class="btn btn-danger">
         <input type="submit" name="no" value="No,I Dont Want" class="btn btn-primary">
      </form>
  </center> <!-- video 55 end -->
</div>