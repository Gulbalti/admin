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
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Categorys</h5>

              <!-- Form Bands -->
              <form method="post" action="forms-category.php" enctype="multipart/form-data">
                <div class="row mb-4">
                  <label for="inputText" class="col-sm-4 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="category" required='required' class="form-control">
                  </div>
                </div>
                 <div class="row mb-4">
                  <label for="inputText" class="col-sm-4 col-form-label">Category Icon</label>
                  <div class="col-sm-10">
                    <input type="file" name="category_icon" class="form-control">
                  </div>
                </div>
               

                <div class="row mb-4">
                  <div class="col-sm-10">
                    <button type="submit" name="addcategory" class="btn btn-primary">Add Category</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
        

            </div>
          </div>


       <?php 


        include('includes/connect.php');

        // Handle form data and image uploads
if (isset($_POST['addcategory'])) {
    $category = $_POST['category'];
    $bicon = $_FILES['category_icon']['name'];
    $bicontmp = $_FILES['category_icon']['tmp_name'];

    if(move_uploaded_file($bicontmp, "assets/category_images/$bicon")){



    // Insert product details into the database (sanitize and validate inputs as needed)
    $insert = "INSERT INTO category ( category_name, category_icon) VALUES ('$category', '$bicon')";
    $run = mysqli_query($con, $insert);

    if ($run) {
      
      echo "<script>alert('Category Created succsfully') </script>";
      exit();
    }} else {
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
