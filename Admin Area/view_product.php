<?php /* video 155-156 start */ 
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>"; 
} else{
?>

<div class="row">
  <div class="col-lg-12">
      <ol class="breadcrumb">
          <li class="active">
             <i class="fa fa-dashboard"></i>Dashboard/View product
          </li>
      </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
     <div class="panel panel-default">
         <div class="panel-heading">
              <h3 class="panel-title">
                 <i class="fa fa-money fa-fw"></i> View Product
              </h3>
         </div>
         <div class="panel-body">
             <div class="table-responsive">
                 <table class="table table-bordered table-hover table-striped">
                     <thead>
                          <tr>
                             <th>Product ID</th>
                             <th>Product Title</th>
                             <th>Product Image</th>
                             <th>Product Price</th>
                             <th>Product Keyword</th>
                             <th>Product Date</th>
                             <th>Product Delete</th>
                             <th>Product Edit</th>
                          </tr>
                     </thead>
                     <tbody>
                         <?php
                         $i=0;
                         $get_product="select * from products";
                         $run_p=mysqli_query($con,$get_product);
                         while($row=mysqli_fetch_array($run_p)){
                         $pro_id=$row['product_id'];
                         $product_title=$row['product_title'];
                         $product_img2=$row['product_img2'];
                         $product_price=$row['product_price'];
                         $product_keyword=$row['product_keyword'];
                         $date=$row['date'];
                         $i++;
                         ?>
                         <?php   }   ?>
                          <tr>
                             <td><?php  echo $i ?></td>
                             <td><?php  echo $product_title ?></td>
                             <td><img src="Product Images/<?php  echo $product_img2; ?>" width="20" height="40" ></td>
                             <td> <?php  echo $product_price ?> </td>
                             <td> <?php  echo $product_keyword ?> </td>
                             <td> <?php  echo $date ?> </td>
                              <td >
                                  <a href="index.php?delete_product=<?php  echo  $pro_id;  ?>">
                                     <i class="fa fa-trash-o"></i>Delete
                                  </a>
                              </td>
                              <td >
                                  <a href="index.php?edit_product=<?php  echo  $pro_id;  ?>">
                                     <i class="fa fa-pencil">EDIT</i>
                                  </a>
                              </td>   
                          </tr>  
                          <?php } ?>
                     </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div> <!-- video 155-156 end -->


