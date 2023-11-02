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
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" name="brand">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" name="category">
            </div>
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" class="form-control" name="user_id" required>
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

        <?php 


        include('includes/connect.php');

        // Handle form data and image uploads
if (isset($_POST['addproduct'])) {
    $pro_name = $_POST['pro_name'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $user_id = $_POST['user_id'];


     // Handle image uploads
    if (isset($_FILES['images']) && count($_FILES['images']['name']) > 0) {

        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $images= $_FILES['images']['name'][$i];
            $imageTmpName = $_FILES['images']['tmp_name'][$i];

            move_uploaded_file($imageTmpName, "assets/product_images/.$images");

        }}

    // Insert product details into the database (sanitize and validate inputs as needed)
    $insert = "INSERT INTO products ( pro_name, brand, category, user_id, images) VALUES ('$pro_name', '$brand', '$category', '$user_id', '$images')";
    $run = mysqli_query($con, $insert);

    if ($run) {
      
      echo "<script>alert('Product submited succsfully') </script>";
    }

  


}

 else {
    echo "Missing required fields.";
}

$conn->close();

?>

              <!-- End Product Post Form -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Multi Columns Form</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword5">
                </div>
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
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
