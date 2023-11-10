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
              <h5 class="card-title"> Products Edit Form</h5>

              <!-- Product Post Form -->

              <?php 


              if (isset($_GET['edit'])) { 
                  
                 $getedit = $_GET['edit'];

                  $product = "SELECT * FROM products WHERE product_id='$getedit'";

                  $run = mysqli_query($con, $product);

                  $row = mysqli_fetch_array($run);

              }


                  ?>
              

             <form action="edit_product.php?edit=<?php echo $row['product_id']; ?>" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="pro_name">Product Name:</label>

                <input type="text" class="form-control" name="pro_name" value="<?php echo $row['pro_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" value="<?php echo $row['brand']; ?>"  name="brand">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" value="<?php echo $row['category']; ?>"  name="category">
            </div>
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" class="form-control" name="user" value="<?php echo $row['user']; ?>"  required>
            </div>
            <div class="form-group">
                <label for="images">Product Images:</label>
                <img src="assets/product_images/<?php echo $row['images']; ?>">
                <input type="file" class="form-control-file" name="images" value="<?php echo $row['images']; ?>" >
            </div>
            <br>
            <div class="form-group">
            <input  type="submit" name="update" value="Edit Product" class="btn btn-warning">
          </div>
        </form>
      </div>
    </div>
  </div>

        <?php 





        include('includes/connect.php');

        // Handle form data and image uploads
if (isset($_POST['update'])) {

    $getedit = $_GET['edit'];


    $pro_name = $_POST['pro_name'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $user = $_POST['user'];
     $images= $_FILES['images']['name'];
    $imageTmpName = $_FILES['images']['tmp_name'];

    if(move_uploaded_file($imageTmpName, "assets/product_images/$images")){

   $update = "UPDATE products SET pro_name='$pro_name', brand='$brand', category='$category', user='$user', images='$images', pro_status='verified'  WHERE product_id='$getedit'";
    $run = mysqli_query($con, $update);

    if ($run) {
      
      echo "<script>window.open('edit_product.php?Updaded Success fully','_self') </script>";
    }

 else {
    echo "Missing required fields.";
}}

}

$conn->close();

?>

              <!-- End Product Post Form -->


    </section>

  </main><!-- End #main -->

 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
