<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->


 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Product Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
     <div class="row">

        <div class="col-sm-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table Brands</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                 <?php 

                  include('includes/connect.php');

                  $brands = "SELECT * FROM brands ";
                  $run = mysqli_query($con, $brands);
                  while($row= mysqli_fetch_array($run)){  ?>
                  <tr>
                    <th><?php echo $row['brand_id']; ?></th>
                    <td><?php echo $row['brand_name']; ?></td>
                  <td><img width="100" height="100"src="assets/brand_images/<?php echo $row['brand_icon']; ?>"></td>

                  <td><a class="btn btn-warning" href="forms-brands.php?edit=<?php echo $row['brand_id']; ?>">Edit</a></td>
                 <td><a class="btn btn-danger"  href="tables-products.php?delb=<?php echo $row['brand_id']; ?>">Delete</a></td>
                  </tr>
                <?php } ?>
                 
                </tbody>

                <?php 


                include('includes/connect.php');

                if (isset($_GET['delb'])) {
                
                $delb = $_GET['delb'];

                $del_brand = " DELETE FROM brands WHERE brand_id='$delb'";

                $run_brand = mysqli_query($con, $del_brand);
                if ($run_brand) {
                  echo "<script> alert('Brand has been deleted')</script>";

                  exit;
                
                }

              }





                ?>

              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
        </div>


        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table Category</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Category Icon</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>


                   <?php 

                  include('includes/connect.php');

                  $category = "SELECT * FROM category ";
                  $run = mysqli_query($con, $category);
                  while($row= mysqli_fetch_array($run)){  ?>
                  <tr>
                    <th><?php echo $row['category_id']; ?></th>
                    <td><?php echo $row['category_name']; ?></td>
                  <td><img width="100" height="100"src="assets/category_images/<?php echo $row['category_icon']; ?>"></td>

                  <td><a class="btn btn-warning" href="forms-category.php?edit=<?php echo $row['category_id']; ?>">Edit</a></td>
                 <td><a class="btn btn-danger"  href="tables-products.php?delc=<?php echo $row['category_id']; ?>">Delete</a></td>
                  </tr>
                <?php } ?>
                 
                </tbody>

                <?php 


                include('includes/connect.php');

                if (isset($_GET['delc'])) {
                
                $delc = $_GET['delc'];

                $del_category = " DELETE FROM category WHERE category_id='$delc'";

                $run_category = mysqli_query($con, $del_category);
                if ($run_category) {
                  echo "<script> alert('category has been deleted')</script>";

                
                
                }

              }


                ?>

             
          
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
        </div>
    
      </div>
    </section>

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
