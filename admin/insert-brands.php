<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->


 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Insert Brand</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Brands</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
     <div class="row">



        <div class="col-sm-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Insert Brands</h5>

               <!-- Form Bands -->
              <form method="post" action="insert-brands.php" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Brand Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="brand" required="required" class="form-control">
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
                    <button type="submit" name="addbrand" class="btn btn-primary">Add Brand</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->




            </div>
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


?>





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

                  <td><a class="btn btn-warning" href="edit-brands.php?edit=<?php echo $row['brand_id']; ?>">Edit</a></td>
                 <td><a class="btn btn-danger"  href="insert-brands.php?delb=<?php echo $row['brand_id']; ?>">Delete</a></td>
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
                  echo "<script> window.open('insert-brands.php?brand=Brand has been deleted','_self')</script>";

                  exit;
                
                }

              }





                ?>

              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
        </div>


      </div>
    </section>

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
