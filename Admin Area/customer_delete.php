<?php /* video 172 start */
  
  if(!isset($_SESSION['admin_email'])){
   echo "<script>window.open('login.php','_self')</script>"; 
  } else{

?>
<?php
if(isset($_GET['customer_delete'])){
   $delete_id=$_GET['customer_delete'];
   $delete_customer="delete from custommers where customer_id='$delete_id'";
   $run_delete=mysqli_query($con,$delete_customer);
   if($run_delete){

    echo "<script>alert(' customer has been deleted')</script>"; 

    echo "<script>window.open('index.php?view_customers','_self')</script>"; 
   }                 
       }
?>
<?php  }   ?> <!-- video 172 end -->
