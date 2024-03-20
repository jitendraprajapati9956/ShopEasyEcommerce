<div class="box"> <!-- video 47 start -->
  <center>
      <h1>
         My Order
      </h1>
      <p> If You Have Any Questions,Please Feel Free From To <a href="../contactus.php">
          Contact Us </a>,Our Customer Service Center Is Working For You 24/7.
      </p>  
  </center> <!-- video 47 end -->
  <hr> <!-- video 48 start -->
  <div class="table-responsive">
      <table class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th> Sr.No </th>
                  <th> Due Amount </th>
                  <th> Invoice Number </th>
                  <th> Quantity </th>
                  <th> Size </th>
                  <th> Order Date </th>
                  <th> Paid/Unpaid </th>
                  <th> Status </th>
              </tr>
          </thead>
          <tbody>
                     <?php /* video 117-118 start */
                      $customer_session=$_SESSION['customer_email'];
                      $get_customer="select * from custommers where customer_email='$customer_session'";
                      $run_cust=mysqli_query($con,$get_customer);
                      $row_cust=mysqli_fetch_array($run_cust);
                      $customer_id=$row_cust['customer_id'];
                      $get_order="select * from customer_order where customer_id='$customer_id'";
                      $run_order=mysqli_query($con,$get_order);
                      $i=0;
                      while ($row_order=mysqli_fetch_array($run_order)) {
                         $order_id=$row_order['order_id'];
                         $order_due_amount=$row_order['due_amount'];
                         $order_invoice=$row_order['invoice_no'];
                         $order_qty=$row_order['qty'];
                         $order_size=$row_order['size'];
                         $order_date=substr($row_order['order_date'], 0,11);
                         $order_status=$row_order['order_status'];
                         $i++;
                         if ($order_status=='pending') {
                             $order_status="unpaid";
                             # code...
                         } else{
                             $order_status="paid";
                         }
                     ?>
                   <tr>
                       <td><?php echo $i ?></td>
                       <td><?php echo $order_due_amount ?></td>
                       <td><?php echo $order_invoice ?></td>
                       <td><?php echo $order_qty ?></td>
                       <td><?php echo $order_size ?></td>
                       <td><?php echo $order_date ?></td>
                       <td><?php echo $order_status ?></td>
                       <td><a href="confirm.php?order_id=<?php echo $order_id   ?>" target="_blank" class="btn btn-primary btn-sm">
                           confirm if paid
                       </td>
                  </tr>
                    <?php } ?> <!-- video 117-118 end -->
          </tbody>
      </table> <!-- video 48 end -->
  </div>
</div>