<?php /* video 160 start */
  
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
                  dashboard/view products categories
          </li>
 </ol>
      
     </div>
</div>

<div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                          <tr>
                            <th>Product category ID</th>
                            <th>Product  category Title</th>
                            <th>Product category Description</th>
                            <th>Delete Product  category </th>
                            <th>Edit Product  category </th>
                          </tr>
                    </thead>
                  <tbody>
   <?php
             $i=0;
             $get_p_cats="select * from product_categories";
             $run_p_cats=mysqli_query($con,$get_p_cats);
             while($row_p_cats=mysqli_fetch_array($run_p_cats)){
               $p_cat_id=$row_p_cats['p_cat_id'];
               $p_cat_title=$row_p_cats['p_cat_title'];
               
               $p_cat_desc=$row_p_cats['p_cat_desc'];
               $i++;

               ?>
               <tr>
                            <td><?php  echo $i; ?></td>
                          
                            <td><?php  echo $p_cat_title; ?></td>
                            <td width="300"><?php echo $p_cat_desc;  ?></td>

                            <td >
                                <a href="index.php?delete_p_cat=<?php  echo  $p_cat_id;  ?>">
                                <i class="fa fa-trash-o"></i>Delete
                                </a>
                            </td>

                            <td >
                                <a href="index.php?edit_p_cat=<?php  echo  $p_cat_id;  ?>">
                                <i class="fa fa-pencil"></i>EDIT
                                </a>
                            </td>   
               </tr>
               <?php }   ?>

                  </tbody>
        </table>
                </div>
</div>
<?php   }  ?> <!-- video 160 end -->