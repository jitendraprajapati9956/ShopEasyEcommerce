<?php /* video 164 start */
  
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
                  dashboard/view  categories
          </li>
 </ol>
      
     </div>
</div>


<div class="row">
       <div class="col-lg-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                      <i class="fa fa-money fa-fw"></i> View catergories
                  </h3>

               </div>

<div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                          <tr>
                            <th> category ID</th>
                            <th>  category Title</th>
                            <th> category Description</th>
                            <th>Delete  category </th>
                            <th>Edit  category </th>
                          </tr>
                    </thead>
                  <tbody>
   <?php
             $i=0;
             $get_cats="select * from  categories";
             $run_cats=mysqli_query($con,$get_cats);
             while($row_cats=mysqli_fetch_array($run_cats)){
               $cat_id=$row_cats['cat_id'];
               $cat_title=$row_cats['cat_title'];
               
               $cat_desc=$row_cats['cat_desc'];
               $i++;

               ?>
               <tr>
                            <td><?php  echo $i; ?></td>
                          
                            <td><?php  echo $cat_title; ?></td>
                            <td width="300"><?php echo $cat_desc;  ?></td>

                            <td >
                                <a href="index.php?delete_cat=<?php  echo  $cat_id;  ?>"><i class="fa fa-trash-o"></i>
                                Delete
                            </a>
                                
                            </td>

                            <td >
                                <a href="index.php?edit_cat=<?php  echo  $cat_id;  ?>"><i class="fa fa-pencil"></i>EDIT
                            </a>
                                
                            </td>   
               </tr>
               <?php }   ?>

                  </tbody>
        </table>
                </div>
</div>
<?php   }  ?> <!-- video 164 end -->