<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->

 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Products Post Form</h5>

              <!-- Product Post Form -->

             <form action="insert_product.php" method="POST" enctype="multipart/form-data">
            
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

      $user = "SELECT * FROM customers ";

      $run = mysqli_query($con, $user);

      while($row = mysqli_fetch_array($run)){?>

        <option value='<?php echo $row['fullname']; ?>'><?php echo $row['fullname']; ?></option>
    
    <?php } ?>
</select>
 
            </div>
            <div class="form-group">
                <label for="images">Product Images:</label>
                <input type="file" class="form-control-file" name="images[]" accept="image/*" multiple required>
            </div>
            <br>
            <div class="form-group">
            <input  type="submit" name="addproduct" value="Add Product" class="btn btn-primary">
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

$conn->close();

?>

              <!-- End Product Post Form -->


    </section>

  </main><!-- End #main -->

 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
