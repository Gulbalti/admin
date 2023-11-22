<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->


 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Category Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
  
        <div class="row">

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Insert Category</h5>

             
              <!-- Form category -->
              <form method="post" action="insert-category.php" enctype="multipart/form-data">
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

              </form><!-- End category-->
              <?php 


        include('includes/connect.php');

        // Handle form data and image uploads
if (isset($_POST['addcategory'])) {
    $category = $_POST['category'];
    $cicon = $_FILES['category_icon']['name'];
    $cicontmp = $_FILES['category_icon']['tmp_name'];

     move_uploaded_file($cicontmp, "assets/category_images/$cicon");



    // Insert product details into the database (sanitize and validate inputs as needed)
    $insert = "INSERT INTO category(category_name,category_icon) VALUES ('$category','$cicon')";
    $run = mysqli_query($con, $insert);

    if ($run) {
      
      echo "<script>alert('category submited succsfully') </script>";
    } else {
    echo "Missing required fields.";
}}


?>

        

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

                  <td><a class="btn btn-warning" href="insert-category.php?edit=<?php echo $row['category_id']; ?>">Edit</a></td>
                 <td><a class="btn btn-danger"  href="insert-category.php?delc=<?php echo $row['category_id']; ?>">Delete</a></td>
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
                  echo "<script>window.open('insert-category.php?category=category has been deleted','_self')</script>";

                
                
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
