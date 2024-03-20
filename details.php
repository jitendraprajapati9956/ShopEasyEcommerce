<?php 
session_start();
include("Includes/db.php");
include("Functions/functions.php");
?>

<?php /* video 80 start */
if (isset($_GET['pro_id'])){
    $pro_id=$_GET['pro_id'];
    $get_product="select * from products where product_id='$pro_id'";
    $run_product=mysqli_query($con,$get_product);
    $row_product=mysqli_fetch_array($run_product);
    $p_cat_id=$row_product['p_cat_id'];
    $p_title=$row_product['product_title'];
    $p_price=$row_product['product_price'];
    $p_id=$row_product['product_desc'];
    $p_id=$row_product['product_img1'];
    $p_img2=$row_product['product_img2'];
    $p_img3=$row_product['product_img3'];
    $get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
    $run_p_cat=mysqli_query($con,$get_p_cat);
    $row_p_cat=mysqli_fetch_array($run_p_cat);
    $p_cat_id=$row_p_cat['p_cat_id'];
    $p_cat_title=$row_p_cat['p_cat_title'];
}
?> <!-- video 80 end -->

<!DOCTYPE html> 
<html>
   <head> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="Style/style.css">
        <link rel="stylesheet" href="Tools/fonts/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
        </script>

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css"rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHS0D2xbE+QkPxCAFlNEevoEH3S10sibVcOQVnN" crossorigin="anonymous">
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
                     <a href="#">Shopping Cart Total Price:<?php totalPrice(); ?>,Total Items <?php items() ?>
                     </a>
                  </div>

                  <div class="col-md-6">
                     <ul class="menu">
                         <li>
                             <a href="customer_registration.php">Register</a>
                         </li>

                         <li>
                             <a href="checkout.php">My Account</a>
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
                      <a class="navbar-brand home" href="bootstrap.php">
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
                             <li class="active">
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
                             <li>
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
                              Shop
                          </li>
                          <li>
                             <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_title; ?></a>
                          </li>
                      </ul>
                  </div>

                  <div class="col-md-3">
                      <?php
                      include("Includes/sidebar.php");
                      ?>
                  </div>

                  <div class="col-md-9"> <!-- video 31 start -->
                     <div class="row" id="productmain">
                         <div class="col-sm-6">
                             <div id="mainimage">
                                 <div class="carousel slide" id="myCarousel" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                         <li data-target="#myCarousel" data-slide-to="1"></li>
                                         <li data-target="#myCarousel" data-slide-to="2"></li>
                                      </ol>

                                      <div class="carousel-inner">
                                          <div class="item active">
                                              <center>
                                                  <img src="Admin Area/Product Images/<?php echo $p_img2 ?>" class="img-responsive">
                                              </center>
                                          </div>

                                          <div class="item">
                                              <center>
                                                  <img src="Admin Area/Product Images/<?php echo $p_img2 ?>" class="img-responsive">
                                              </center>
                                          </div>

                                          <div class="item">
                                              <center>
                                                  <img src="Admin Area/Product Images/<?php echo $p_img3 ?>" class="img-responsive">
                                              </center>
                                          </div>
                                      </div>

                                      <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                         <span class="glyphicon glyphicon-chevron-left"></span>
                                         <span class="sr-only">Previous</span>
                                      </a>

                                      <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                         <span class="glyphicon glyphicon-chevron-right"></span>
                                         <span class="sr-only"></span>
                                      </a>
                                  </div>
                              </div>
                          </div> <!-- video 31 end -->

                          <div class="col-sm-6"> <!-- video 32 start -->
                             <div class="box">
                                 <h1 class="text-center"><?php echo $p_title; ?></h1>
                                 <?php addCart(); ?>
                                 <form action="details.php?addCart=<?php echo $pro_id ?>" method="post" class="form-horizontal"></form>
                                     <div class="form-group">
                                         <label class="col-md-5 control-label"> Product Quantity </label>
                                         <div class="col-md-7">
                                             <select name="product_qty" class="form-control">
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                             </select>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="col-md-5 control-label"> Product Size </label>
                                         <div class="col-md-7">
                                             <select name="product_size" class="form-control">
                                                 <option> Select A Size </option>
                                                 <option> Small </option>
                                                 <option> Medium </option>
                                                 <option> Large </option>
                                                 <option> Extra Large </option>
                                             </select>
                                         </div>
                                     </div> <!-- video 32 end -->

                                     <p class="Price"><?php echo $p_price; ?></p> <!-- video 33 start -->
                                       <p class="text-center buttons">
                                          <button class="btn btn-primary" type="submit">
                                             <i class="fa fa-shopping-cart"></i> Add To Cart
                                          </button>
                                      </p>
                                 </form>
                             </div>

                             <div class="col-xs-4">
                                 <a href="#" class="thumb">
                                     <img src="Admin Area/Product Images/<?php echo $p_img2 ?>" class="img-responsive">
                                 </a>
                             </div>

                             
                             <div class="col-xs-4">
                                 <a href="#" class="thumb">
                                     <img src="Admin Area/Product Images/<?php echo $p_img2 ?>" class="img-responsive">
                                 </a>
                             </div>

                             
                             <div class="col-xs-4">
                                 <a href="#" class="thumb">
                                     <img src="Admin Area/Product Images/<?php echo $p_img3 ?>" class="img-responsive">
                                 </a>
                             </div>
                          </div> 
                      </div> <!-- video 33 end -->

                      <div class="box" id="details"> <!-- video 34 start -->
                          <h4> Product Details </h4>
                          <p><?php echo $pro_desc; ?></p>
                          <h4> Size </h4>
                          <ul>
                              <li> Small </li>
                                  <li> Medium </li>
                              <li> Large </li>
                              <li> Extra Large </li>
                          </ul>
                      </div>

                      <div id="row same-height-row">
                          <div class="col-md-3 col-sm-6">
                              <div class="box same-height headline">
                                  <h3 class="text-center"> You May Also Like This Products </h3>
                              </div>
                          </div>
                          <?php /* video 81 start */
                          $get_product="select * from products order by 1 LIMIT 0,3";
                          $run_product=mysqli_query($con,$get_product);
                          while($row=mysqli_fetch_array($run_product)){
                          $pro_id=$row['product_id'];
                          $product_title=$row['product_title'];
                          $product_price=$row['product_price'];
                          $product_img1=$row['product_img1'];
                          echo "
                          <div class='center-responsive col-md-3 col-sm-6'>
                          <div class='product same-height'>
                          <a href='details.php?pro_id=$pro_id'>
                          <img src='Admin Area/Product Images/$product_img1' class='img-responsive'>
                          </a>
                          <div class='text'>
                          <h3><a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
                          <p class='price'> </p>
             
                           </div>
                           </div>
                           </div>
                             ";
        
                           }
                           ?> <!-- video 81 end -->
                      </div> 
                  </div>
              </div>
          </div>  <!-- video 34 end -->

          <?php
          include("Includes/footer.php");
          ?> 

           <script src="Tools/js/jquery-3.6.0.min.js">
           </script> 

           <script src="Tools/js/bootstrap.min.js">
            </script>

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
            </script>

          <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> -->
          <!-- </script> -->
      </body>
</html>