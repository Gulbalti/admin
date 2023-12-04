<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->


 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Users Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users Table</h5>

              <!-- Products Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Job</th>
                    <th scope="col">Country</th>
                    <th scope="col">Address</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 

                  include('includes/connect.php');

                  $users = "SELECT * FROM users ";
                  $run = mysqli_query($con, $users);
                  while($row= mysqli_fetch_array($run)){  ?>
                  <tr>
                    <th scope="row"><?php echo $row['user_id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['job']; ?></td>


                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                      <td><img width="100" height="100"src="assets/img/<?php echo $row['photo']; ?>"></td>


                        <td>
                            <?php 

                             $status= $row['status']; 

                              if ($status =='verified') {
                              // code...
                              echo' <span class="badge bg-success">'.$status.'</span></td>';
                            }


                              if ($status =='pendding') {
                              // code...
                              echo' <span class="badge bg-warning">'.$status.'</span></td>';
                            }
                                  if ($status =='unverify') {
                              // code...
                              echo' <span class="badge bg-danger">'.$status.'</span></td>';
                            }






                            ?>
                          </td>
                          <th><a href="users-profile.php?edit=<?php echo $row['user_id']; ?>">Edit</a></th>






            

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
    </section>

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
