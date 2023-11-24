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
              <h5 class="card-title">Insert Products</h5>

             <!-- Product Post Form -->

             <form action="insert-products.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="pro_name">Product Name:</label>
                <input type="text" class="form-control" name="pro_name" required>
            </div>
            <div class="form-group">
                <label for="brand">Select Brand:</label>
    <select class="form-control" name="brand" id="brand">
      <?php

      include('includes/connect.php');

      $brand = "SELECT * FROM brands ";

      $run = mysqli_query($con, $brand);

      while($row = mysqli_fetch_array($run)){?>

        <option value='<?php echo $row['brand_name']; ?>'><?php echo $row['brand_name']; ?></option>
    
    <?php } ?>
</select>

            </div>
           
            <div class="form-group">
                             <label for="category">Select category:</label>
    <select class="form-control" name="category" id="category">
      <?php

      include('includes/connect.php');

      $category = "SELECT * FROM category ";

      $run = mysqli_query($con, $category);

      while($row = mysqli_fetch_array($run)){?>

        <option value='<?php echo $row['category_name']; ?>'><?php echo $row['category_name']; ?></option>
    
    <?php } ?>
</select>
 
            </div>
              <div class="form-group">
                             <label for="category">Select user:</label>
    <select class="form-control" name="user" id="user">
      <?php

      include('includes/connect.php');

      $user = "SELECT * FROM users WHERE name='$name'";

      $run = mysqli_query($con, $user);

      while($row = mysqli_fetch_array($run)){?>

        <option value='<?php echo $row['name']; ?>'><?php echo $row['name']; ?></option>
    
    <?php } ?>
</select>
 
            </div>
            <div class="form-group">
                <label for="images">Product Images:</label>
                <input type="file" class="form-control-file p-2" name="images[]" accept="image/*" multiple required>
            </div>
            <div class="form-group">
            <input  type="submit" name="addproduct" value="Add Product" class="btn btn-primary text-center ">
          </div>
        </form>
      </div>
    </div>
  </div>

        <?php 


        include('includes/connect.php');

        // Handle form data and image uploads
if (isset($_POST['addproduct'])) {
    $pro_name = $_POST['pro_name'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $user = $_POST['user'];


     // Handle image uploads
    if (isset($_FILES['images']) && count($_FILES['images']['name']) > 0) {

        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $images= $_FILES['images']['name'][$i];
            $imageTmpName = $_FILES['images']['tmp_name'][$i];

            move_uploaded_file($imageTmpName, "assets/product_images/$images");

        }}

    // Insert product details into the database (sanitize and validate inputs as needed)
    $insert = "INSERT INTO products ( pro_name, brand, category, user, images) VALUES ('$pro_name', '$brand', '$category', '$user', '$images')";
    $run = mysqli_query($con, $insert);

    if ($run) {
      
      echo "<script>alert('Product submited succsfully') </script>";
    }

 else {
    echo "Missing required fields.";
}}



?>

              <!-- End Product Post Form -->



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
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Post Date</th>
                    <th scope="col">Delete</th>


                  </tr>
                </thead>

                <tbody>
                  <?php 

                  include('includes/connect.php');

                  $products = "SELECT * FROM products WHERE user='$name'";
                  $run = mysqli_query($con, $products);
                  while($row= mysqli_fetch_array($run)){  ?>
                  <tr>
                    <th scope="row"><?php echo $row['product_id']; ?></th>
                    <td><?php echo $row['pro_name']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['brand']; ?></td>
                    <td><img width="100" height="100"src="assets/product_images/<?php echo $row['images']; ?>"></td>
                    <td>  <?php 

                   $status = $row['pro_status'];

if ($status =='pending') {
echo "<i class='bi bi-circle-fill activity-badge text-warning align-self-start'><b> ".$status."</b> </i>";
}
if ($status =='verified') {
echo "<i class='bi bi-circle-fill activity-badge text-success align-self-start'><b> ".$status."</b> </i>";
}

if ($status =='unverify') {
echo "<i class='bi bi-circle-fill activity-badge text-danger align-self-start'><b> ".$status."</b> </i>";
}








                  ?></td>
                    <td><?php echo $row['pro_date']; ?></td>
                   <td><a class="btn btn-danger" href="status-product.php?del=<?php echo $row['product_id']; ?>">Delete</a></td>



                  </tr>
                <?php } ?>

                 <?php 


                include('includes/connect.php');

                if (isset($_GET['del'])) {
                
                $del = $_GET['del'];

                $del_product = " DELETE FROM products WHERE product_id='$del'";

                $run_product = mysqli_query($con, $del_product);
                if ($run_product) {
                  echo "<script> window.open('status-product.php?product=product has been deleted','_self')</script>";

                  exit;
                
                }

              }





                ?>

               
                </tbody>
              </table>
              <!-- End Products Table  -->
            </div>
          </div>


        </div>
      </div>



    </section>

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
