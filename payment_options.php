<div class="box"> <!-- video 109 start -->
       
<?php /* video 112 start */
       $session_email=$_SESSION['customer_email'];
       $select_customer="select * from custommers where customer_email='$session_email'";
       $run_cust=mysqli_query($con,$select_customer);       
       $row_customer=mysqli_fetch_array($run_cust);
       $customer_id=$row_customer['customer_id'];
       
       ?> <!-- video 112 end -->

           <h1 class="text-center">Payment options</h1>
           <p class="lead text-center">
                <a href="order.php?c_id=<?php echo $customer_id ?>"> pay offline </a>
            </p>
            <center>
            <p class="lead">
                <a href="#">pay with paypal 
                <img src="Images/Desert.jpg" width="500" height="270" class="img-responsive"></a>
            </p>
         </center>
</div> <!-- video 109 end -->
