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
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products Table</h5>

              <!-- Products Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">User</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Post Date</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 

                  include('includes/connect.php');

                  $products = "SELECT * FROM products ";
                  $run = mysqli_query($con, $products);
                  while($row= mysqli_fetch_array($run)){  ?>
                  <tr>
                    <th scope="row"><?php echo $row['product_id']; ?></th>
                    <td><?php echo $row['pro_name']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['brand']; ?></td>
                    <td><?php echo $row['user']; ?></td>
                      <td><img width="100" height="100"src="assets/product_images/<?php echo $row['images']; ?>"></td>

                   <td class="table-danger"><?php echo $row['pro_status']; ?></td>
                  <td><?php echo $row['pro_date']; ?></td>



            

                  </tr>
                <?php } ?>
               
                </tbody>
              </table>
              <!-- End Products Table  -->
            </div>
          </div>

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products Table</h5>

              <!-- Products Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">User</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Post Date</th>


                  </tr>
                </thead>

                <tbody>
                  <?php 

                  include('includes/connect.php');

                  $products = "SELECT * FROM products ";
                  $run = mysqli_query($con, $products);
                  while($row= mysqli_fetch_array($run)){  ?>
                  <tr>
                    <th scope="row"><?php echo $row['product_id']; ?></th>
                    <td><?php echo $row['pro_name']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['brand']; ?></td>
                    <td><?php echo $row['user']; ?></td>
                    <td><img width="100" height="100"src="assets/product_images/<?php echo $row['images']; ?>"></td>
                    <td><?php echo $row['pro_status']; ?></td>
                    <td><?php echo $row['pro_date']; ?></td>


                  </tr>
                <?php } ?>
               
                </tbody>
              </table>
              <!-- End Products Table  -->
            </div>
          </div>


        </div>
      </div>
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
        <div class="row">
          <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bordered Table</h5>
              <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Bordered Table -->

            </div>
          </div>
        </div>



<div class="col-lg-6">
  <div class="card">

              <h5 class="card-title">Bordered Table</h5>
              <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>

              <p><a href="https://getbootstrap.com/docs/5.0/utilities/borders/#border-color" target="_blank">Border color utilities</a> can be added to change colors:</p>

<div class="card-body">
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>
        </div>

         

        </div>
      </div>
    </section>

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
