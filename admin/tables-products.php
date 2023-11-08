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

                   <td class="table-danger"><?php echo $row['pro_status']; ?></td>
                  <td><?php echo $row['pro_date']; ?></td>



            

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


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Active Table</h5>
              <p>Highlight a table row or cell by adding a <code>.table-active</code> class.</p>
              <!-- Active Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td class="table-active">Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td class="table-active">2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td class="table-active">Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Active Table -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tables without borders</h5>
              <p>Add <code>.table-borderless</code> for a table without borders.</p>
              <!-- Active Table -->
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Tables without borders -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table Variants</h5>
              <p>Use contextual classes <code>.table-primary .table-secondary .table-success .table-danger .table-warning .table-info .table-light .table-dark</code> to color tables, table rows or individual cells.</p>
              <!-- Table Variants -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Class</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Heading</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Default</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>

                  <tr class="table-primary">
                    <th scope="row">Primary</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                  <tr class="table-secondary">
                    <th scope="row">Secondary</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                  <tr class="table-success">
                    <th scope="row">Success</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                  <tr class="table-danger">
                    <th scope="row">Danger</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                  <tr class="table-warning">
                    <th scope="row">Warning</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                  <tr class="table-info">
                    <th scope="row">Info</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                  <tr class="table-light">
                    <th scope="row">Light</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                  <tr class="table-dark">
                    <th scope="row">Dark</th>
                    <td>Cell</td>
                    <td>Cell</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table Variants -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with hoverable rows</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bordered Table</h5>
              <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Bordered Table -->

              <p><a href="https://getbootstrap.com/docs/5.0/utilities/borders/#border-color" target="_blank">Border color utilities</a> can be added to change colors:</p>

              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Small tables</h5>
              <p>Add <code>.table-sm</code> to make any <code>.table</code> more compact by cutting all cell padding in half.</p>
              <!-- Small tables -->
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End small tables -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
