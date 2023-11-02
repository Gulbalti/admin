<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->

 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Brand</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Brand</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Brands</h5>

              <!-- Form Bands -->
              <form method="post" action="forms-brands.php" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Brand Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="brand" class="form-control">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Brand Icon</label>
                  <div class="col-sm-10">
                    <input type="file" name="brand_icon" class="form-control">
                  </div>
                </div>
               

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" name="addbrand" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
        

            </div>
          </div>


       <?php 


        include('includes/connect.php');

        // Handle form data and image uploads
if (isset($_POST['addbrand'])) {
    $brand = $_POST['brand'];
    $bicon = $_FILES['brand_icon']['name'];
    $bicontmp = $_FILES['brand_icon']['tmp_name'];

     move_uploaded_file($bicontmp, "assets/brand_images/$bicon");



    // Insert product details into the database (sanitize and validate inputs as needed)
    $insert = "INSERT INTO brands ( brand_name, brand_icon) VALUES ('$brand', '$bicon')";
    $run = mysqli_query($con, $insert);

    if ($run) {
      
      echo "<script>alert('Brand submited succsfully') </script>";
    } else {
    echo "Missing required fields.";
}}

$conn->close();

?>


      
      </div>
    </div>
    
    </section>

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
