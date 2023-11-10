<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->

 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
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
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


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
                    

                    <?php 

                    $status = $row['pro_status'];

                    if ($status =='verified') {
                      // code...
                      echo "<td><a class='btn btn-success'>".$status."</a></td>";
                    }else{

                      echo "<td><a class='btn btn-danger'>".$status."</a></td>";

                    }




                     ?>
                   
                      <td><?php echo $row['pro_date']; ?></td>
                      <td><a class="btn btn-warning" href="edit_product.php?edit=<?php echo $row['product_id']; ?>">Edit</a></td>
                      <td><a class="btn btn-danger" href="tables-data.php?del=<?php echo $row['product_id']; ?>">Delete</a></td>




                  </tr>
                <?php } ?>
               
                </tbody>

                <?php 


                  include('includes/connect.php');

                  if (isset($_GET['del'])) {

                    $get_del = $_GET['del'];
                    
                    $product = "DELETE FROM products WHERE product_id ='$get_del'";

                    $run = mysqli_query($con, $product);

                    if ($run) {
header('location:header.php?login has been successfuly');

                      exit();



                    
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
