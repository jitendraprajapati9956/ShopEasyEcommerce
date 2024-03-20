<?php 
session_start();
include("Includes/db.php");
include("Functions/functions.php");
?>

<!DOCTYPE html> <!--video 36 start-->
<html>
   <head> 
        
        <link rel="stylesheet" href="Style/style.css">
        <link rel="stylesheet" href="Tools/fonts/css/font-awesome.min.css">
        <link rel="stylesheet" href="Tools/css/bootstrap.min.css">        
  </head>
      <body>
          <div id="top"> 
              <div class="container">
                  <div class="col-md-6 offer">
                     <a href="#" class="btn btn-success btn-sm">

                      <?php
                      if(!isset($_SESSION['customer_email'])){
                      echo "Welcome Guest";
                        } else{
                      echo "WELCOME " .$_SESSION['customer_email'] . "";
                        }

                        ?>

                     </a>
                     <a href="#">Shopping Cart Total Price:<?php totalPrice(); ?>,Total Items <?php items(); ?>
                     </a>
                  </div>

                  <div class="col-md-6">
                     <ul class="menu">
                         <li>
                             <a href="customer_registration.php">Register</a>
                         </li>

                         <li>
                         <?php
                                 if(!isset($_SESSION['customer_email'])){
                                 echo "<a href='checkout.php'>My Account</a>";

                                 } else{
                                 echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                                 }
                                 ?>
                         </li>

                         <li>
                             <a href="cart.php">Go To Cart</a>
                         </li>

                         <li>
                             <?php
                             if(!isset($_SESSION['customer_email'])){
                             echo "<a href='checkout.php'>LOGIN</a>";
                             } else{
                             echo "<a href='logout.php'>LOGOUT</a>";
                             }
                             ?>
                         </li>
                      </ul>
                  </div>
              </div>
          </div> 

            <div class="navbar navbar-default" id="navbar"> 
              <div class="container">
                 <div class="navbar-header">
                      <a class="navbar-brand-home" href="bootstrap.php">
                         <img src="Images/Desert.jpg" alt="Desert" height="50px" width="50px">
                         <!--<img src="Images/Hydrangeas.jpg" alt="Hydrangeas" class="visible-xs">-->
                      </a>

                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                         <span class="sr-only"> Toggle Navigation </span>
                         <i class="fa fa-align-justify"></i>
                      </button>

                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                         <span class="sr-only"></span>
                         <i class="fa fa-search"></i>
                      </button>
                  </div>

                 <div class="navbar-collapse collapse" id="navigation">
                     <div class="padding-nav">
                         <ul class="nav navbar-nav navbar-left">
                             <li >
                                 <a href="bootstrap.php"> Home </a>
                             </li>
                             <li>
                                 <a href="shop.php"> Shop </a>
                             </li>
                             <li>
                             <?php
                                 if(!isset($_SESSION['customer_email'])){
                                 echo "<a href='checkout.php'>My Account</a>";

                                 } else{
                                 echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                                 }
                                 ?>
                             </li>
                             <li class="active">
                                 <a href="cart.php"> Shopping Cart </a>
                             </li>
                             <li>
                                 <a href="contactus.php"> Contact Us </a>
                             </li>                    
                          </ul>
                     </div>
                       <a href="cart.php" class="btn navbar-btn btn-primary right">
                          <i class="fa fa-shopping-cart"></i>
                          <span> <?php items(); ?> items in cart </span>
                      </a>

                     <div class="navbar-collapse collapse right">
                          <button class="btn btn-primary navbar-btn" type="button"
                             data-toggle="collapse" data-target="#search">
                             <span class="sr-only"> Toggle Search </span>
                             <i class="fa fa-search"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div> 

          <div class="collapse clearfix" id="search"> 
             <form class="navbar-form" method="get" action="result.php">
                 <div class="input-group">
                     <input type="text" name="user_query" placeholder="Search"
                      class="form-control" required>
                      <span class="input-group-btn"></span>
                      <button type="submit" value="Search" name="search"
                         class="btn btn-primary">
                         <i class="fa fa-search"></i>
                      </button>
                  </div>
              </form>
          </div> 

          <div id="content">
              <div class="container">
                  <div class="col-md-12">
                      <ul class="breadcrumb">
                          <li> <a href="home.php"> Home </a></li>
                          <li>
                              Cart
                          </li>
                      </ul>
                  </div> <!-- video 36 end -->

                  <div class="col-md-9" id="cart"> <!-- video 37 start -->
                      <div class="box">
                          <form action="cart.php" method="post" enctype="multipart-form-data">
                              <h1> Shopping Cart </h1>
                              <?php /* video 90 start */

                                $ip_add=getUserIP();
                                $select_cart="select * from cart where ip_add='$ip_add'";
                                $run_cart=mysqli_query($con,$select_cart);
                                $count=mysqli_num_rows($run_cart);
                                ?> <!-- video 90 end -->

                              <p class="text-muted">currently you have <?php   echo  $count ?> items in your cart </p>
                              <div class="table-responsive"> <!-- video 37 end -->
                                  <table class="table"> <!-- video 38 start -->
                                      <thead>
                                          <tr>
                                              <th colspan="2"> Product </th>
                                              <th> Quantity </th>
                                              <th> Unit Price </th>
                                              <th> Size </th>
                                              <th colspan="1"> Delete </th>
                                              <th colspan="1"> Sub Total </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php /* video 91-92 start */
                                            $total=0;
                                            while($row_cart=mysqli_fetch_array($run_cart)){
                                            $pro_id=$row_cart['p_id'];
                                            $pro_size=$row_cart['size'];
                                            $pro_qty=$row_cart['qty'];
                                            $get_products="select * from products where product_id='$pro_id'";
                                            $run_products=mysqli_query($con,$get_products);
                                            while($row_products=mysqli_fetch_array($run_products))
                                             {
                                             $p_title=$row['product_title'];
                                             $p_img1=$row['product_img1'];
                                             $p_price=$row['product_price'];
                                             $sub_total=$row['product_price']*$pro_qty;
                                             $total += $sub_total;
                                             ?>
                                            <tr> 
                                              <td> <img src="Admin Area/Product Images/<?php echo $p_img1 ?>" class="img-responsive"></td>
                                              <td> <?php echo $p_title ?> </td>
                                              <td><?php echo $pro_qty   ?></td>
                                              <td><?php echo $p_price   ?></td>
                                              <td><?php echo $pro_size   ?></td>
                                              <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id   ?>"></td>
                                              <td><?php echo $sub_total   ?></td>
                                           </tr> <!-- video 91-92 end -->
                                      </tbody> <!-- video 38 end -->
                                      <tfoot> <!-- video 39 start -->
                                          <tr>
                                                
                                          </tr>
                                            <?php } } ?>                                        
                                      </tfoot>
                                  </table>
                              </div>
                              <div class="box-footer"> <!-- video 93-94 start -->
                                  <div class="pull-left">
                                      <h4> Total Price </h4>
                                  </div>
                                  <div class="pull-right">
                                    <h4> <?php echo $total; ?> </h4>
                                  </div>
                              </div>
                              <div class="box-footer">
                                  <div class="pull-left">
                                      <a href="bootstrap.php" class="btn btn-default">
                                          <i class="fa fa-chevron-left"> </i> Continue Shopping
                                      </a>
                                  </div>
                                  <div class="pull-right">
                                      <button class="btn btn-default" type="submit" name="update"
                                         value="update cart">
                                         <i class="fa fa-refresh"> Update Cart </i>
                                      </button> <!-- video 39 end -->
                                      <a href="checkout.php" class="btn btn-primary"> Proceed To Checkout
                                          <i class="fa fa-chevron-right"></i> <!-- video 40 start -->
                                      </a> 
                                  </div>
                              </div> 
                          </form>
                      </div>

                      <?php 
                      function update_cart(){
                      global $con;
                      if(isset($_POST['update'])){
                      foreach ($_POST['remove'] as $remove_id){
                      $delete_product="delete from cart where p_id='$remove_id' ";
                      $run_del=mysqli_query($con,$delete_product);
                      if($run_del){
                       echo "<script>
                          window.open('cart.php','_self')</script>";
                       }
                        }
                         }
                          }
                      echo @$up_cart=update_cart(); 
                        ?> <!-- video 93-94 end -->
                      
                      <div id="row same-height-row">
                          <div class="col-md-3 col-sm-6">
                              <div class="box same-height headline">
                                  <h3 class="text-center"> You May Also Like This Products </h3>
                              </div>
                          </div>

                          <div class="center-responsive col-md-3">
                              <div class="product same-height">
                                  <a href="">
                                      <img src="Admin Area/Product Images/Desert.jpg" class="img-responsive">
                                  </a>
                                  <div class="text">
                                      <h3><a href="details.php"> </a></h3>
                                      <p class="Price"></p>
                                  </div>
                              </div>
                          </div>

                          <div class="center-responsive col-md-3">
                             <div class="product same-height">
                                  <a href="">
                                      <img src="Admin Area/Product Images/Desert.jpg" class="img-responsive">
                                  </a>
                                  <div class="text">
                                      <h3><a href="details.php"> </a></h3>
                                      <p class="Price"></p>
                                  </div>
                              </div> 
                          </div>

                          <div class="center-responsive col-md-3">
                             <div class="product same-height">
                                  <a href="">
                                      <img src="Admin Area/Product Images/Desert.jpg" class="img-responsive">
                                  </a>
                                  <div class="text">
                                      <h3><a href="details.php"> </a></h3>
                                      <p class="Price"><?php echo $total ?></p>
                                  </div>
                              </div> 
                          </div>
                      </div>
                  </div>

                  <div class="col-md-3">
                      <div class="box" id="order-summary">
                          <div class="box-header">
                              <h3> Order Summary </h3>
                          </div>
                          <p class="text-muted">
                              Shipping And Additional Costs Are Calculted Based On The Values You Have Entered
                          </p>
                          <div class="table-responsive">
                              <table class="table">
                                  <tbody>
                                      <tr>
                                          <td> Order Subtotal </td>
                                          <th> <?php echo $total ?> </th>
                                      </tr>
                                      <tr>
                                          <td> Shipping Charge </td>
                                          <td> 0 </td>
                                      </tr>
                                      <tr>
                                          <td> Tax </td>
                                          <td> 0 </td>
                                      </tr>
                                      <tr class="total">
                                          <td> Total </td>
                                          <th> <?php echo $total ?> </th>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div> 
              </div>
          </div>  <!-- video 40 end -->

          <?php
          include("Includes/footer.php");
          ?> 

           <script src="Tools/js/jquery-3.6.0.min.js">
           </script> 

           <script src="Tools/js/bootstrap.min.js">
            </script>

           
      </body>
</html>

