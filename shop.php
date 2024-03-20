<?php 
session_start();
include("Includes/db.php");
include("Functions/functions.php");
?>

<!DOCTYPE html> <!--video 23 start-->
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
                             <li class="active">
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
                      </ul>
                  </div>

                  <div class="col-md-3">
                      <?php
                      include("Includes/sidebar.php");
                      ?>
                  </div> <!--video 23 end-->

                  <div class="col-md-9"> <!-- video 27-28 start -->
                     <?php /* video 73-74-75 start */
                     if(!isset($_GET['p_cat'])){
                     if(!isset($_GET['cat_id'])){
                     echo "
                        
                      <div class='box'>
                          <h1>shop</h1>
                          <p>IF you want domain name and shared hosting plan in low price then please visit or shared hosting</p>
                          </div>
                          ";
        
                       }
                      }
                     ?>
                      
                      
                      <div class="row">
                         <?php
                         if(!isset($_GET['p_cat'])){
                          if(!isset($_GET['cat_id'])){
                    
                         $per_page=6;
                         if(isset($_GET['page'])){
                           $page=$_GET['page'];
                         } else {
                            $page=1;
                         } 
            
                         $start_from=($page-1) * $per_page;
                         $get_product="select * form products order by 1 DESC LIMIT $start_from, $per_page";
                         $run_pro=mysqli_query($con,$get_product);
                         while ($row=mysqli_fetch_array($run_pro)) {
                         $pro_id=$row['product_id'];
                         $pro_title=$row['product_title'];
                         $pro_price=$row['product_price'];
                         $pro_img1=$row['product_img1'];
                            
                           echo  "
                           <div class='col-md-4 col-sm-6 center-responsive'>
                           <div class='product'>
                              <a href='details.php?pro_id=$pro_id'>
                               <img  class='img-responsive' src='Admin Area/Product Images/$pro_img1' >
                              </a>
                              <div class='text'>
                                <h3><a href='details.php?pro_id'=$pro_id>$pro_title </a></h3>
                           <p class='price'> INR $pro_price </p>
                           <p class='buttons'>
                           <a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details </a>
                           <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'>
                            Add to cart </a>
                           </p>
                           </div>
                           </div>
                           </div>
                           ";
                         }
                         ?>
                      </div>
                  </div> <!-- video 27-28 end -->   
                          
                  
                      
                      <center> <!-- video 30 start -->
                          <ul class="pagination">
                          <?php
                          $query="select * from products";
                          $result=mysqli_query($con,$query);
                          $total_record=mysqli_num_rows($result);
                          $total_pages=ceil($total_record / $per_page);
                         echo "
                          <li>
                             <a href='shop.php?page=1'> ".'first page'."</a>
                          </li>
                          "; 
                          for($i=1; $i<=$total_pages; $i++){
                         echo "
                          <li> 
                             <a href='shop.php?page=".$i."'> ".$i."</a>
                          </li>
                          "; 
                         };
                         echo "
                          <li>
                             <a href='shop.php?page=$total_pages'> ".'last page'."</a>
                          </li>
                         ";   
                 
                         }
                         }
                
                          ?>
                          </ul>
                      </center> <!-- video 73-74-75 end -->
                      
                         <?php
                  
                           getPcatPro();
                           getCatPro()
                          ?>
                      
                  </div>
              </div> <!-- video 30 end -->
           
     
              

          <?php
          include("Includes/footer.php");
          ?> 

           <script src="Tools/js/jquery-3.6.0.min.js">
           </script> 

           <script src="Tools/js/bootstrap.min.js">
            </script>
      </body>
</html>