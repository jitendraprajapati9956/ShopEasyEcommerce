<?php /* video 173 start */
  
  if(!isset($_SESSION['admin_email'])){
   echo "<script>window.open('login.php','_self')</script>"; 
  } 
  else{

?>

<div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
          <li class="active">
          <i class="fa fa-dashboard"></i>
                  dashboard/view  orders
          </li>
 </ol>
      
     </div>
</div>

<div class="row">
       <div class="col-lg-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                      <i class="fa fa-money fa-fw"></i> View orders
                  </h3>

               </div>

               <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                          <tr>
                            <th>order NO</th>
                            <th> customer email</th>
                            <th> invoice no</th>
                            <th>product title</th>
                            <th>product qty </th>
                            <th>product size</th>
                            <th>order date</th>
                            <th>total amount</th>
                          </tr>
                    </thead>
                  <tbody>
                      <?php
                          
                          $i=0;
                          $get_orders="select * from customer_order";
                          $run_orders=mysqli_query($con,$get_orders);

                          while($row_orders=mysqli_fetch_array($run_orders)){

                            $order_id=$row_orders['order_id'];
                            $c_id=$row_orders['customer_id'];
                            $invoice_no=$row_orders['invoice_no'];
                            $product_id=$row_orders['product_id'];
                            $qty=$row_orders['qty'];
                            $size=$row_orders['size'];
                            $order_date=$row_orders['order_date'];
                            $due_amount=$row_orders['due_amount'];
                            $order_status=$row_orders['order_status'];

                            $get_products="select * from products where product_id='$product_id'";
                            $run_products=mysqli_query($con,$get_products);
                            $row_products=mysqli_fetch_array($run_products);
                            $product_title=$row_products['product_title'];
                            $i++;
                            
                            ?>

                          <tr> 
  
                                 <td><?php   echo $i;   ?>   </td>
  
                                <td>
                                  <?php
                                   
                                     $get_customer="select  *  from customers where  customer_id='$c_id'";

                                     $run_customer=mysqli_query($con,$get_customer);

                                     $row_customer=mysqli_fetch_array($run_customer);

                                     $customer_email=$row_customer['customer_email'];

                                     echo $customer_email;
                ?>
                                </td>
                              <td>
                                   <td bgcolor="yellow"><?php echo $invoice_no;  ?></td>

                                   <td><?php   echo $product_title;   ?>   </td>

                                   <td><?php   echo $qty;   ?>   </td>

                                   <td><?php   echo $size;   ?>   </td>

                                    <td><?php   echo $order_date;   ?>   </td>

                                    <td><?php   echo $due_amount;   ?>   </td>
                                 <td>
                                   <?php
                                    
                                     if($order_status=='pending'){
                                         echo $order_status='pending';

                                     }
                                    else{
                                        echo $order_status='complete';
                                    }
                                  ?>
                          
                                 </td>

                                 <td>
                                   <a href="index.php?order_delete=<?php  echo $order_id;  ?>">
                                     <i class="fa fa-trash-o"></i> delete
                                
                                </a>


                                 </td>
                              </td>
                          </tr>
                          <?php   }  ?>
                  </tbody>
                  </table>
                </div>
               </div>
           </div>
       </div>
</div>
<?php     }    ?> <!-- video 173 end -->







