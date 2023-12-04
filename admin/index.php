

  <!-- ======= Header ======= -->
<?php include('includes/header.php');?>
      

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h4 class="card-title">Products Unverify <span>| Today</span></h4>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                  
                    <?php 

                    include('includes/connect.php');

                 $sql = "SELECT * from products where pro_status='unverify' ";

if ($pro_unver = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowpro = mysqli_num_rows( $pro_unver );
    

 } ?>
                    <div class="ps-3">
                      <h6><?php echo $rowpro; ?></h6>

                      <?php 

                      if ($rowpro >= 1000/100 ) {
                      
                      echo '<span class="text-success small pt-1 fw-bold">'.$rowpro.'%</span> <span class="text-muted small pt-2 ps-1">increase</span>';

                      } else {
                      
                      echo '<span class="text-danger small pt-1 fw-bold">'.$rowpro.'%</span> <span class="text-muted small pt-2 ps-1">decrease </span>';

                      }





                      ?>
                 

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>


                <div class="card-body">
                  <h4 class="card-title">Products Live <span>| This Month</span></h4>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-diagram-2-fill"></i>
                    </div>

                     <?php 

                    include('includes/connect.php');

                 $sql = "SELECT * from products where pro_status='verified' ";

if ($product = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $product );
    

 } ?>
                    <div class="ps-3">
                      <h6><?php echo $rowcount; ?></h6>

                      <?php 

                      if ($rowcount >= 1000/100 ) {
                      
                      echo '<span class="text-success small pt-1 fw-bold">'.$rowcount.'%</span> <span class="text-muted small pt-2 ps-1">increase</span>';

                      } else {
                      
                      echo '<span class="text-danger small pt-1 fw-bold">'.$rowcount.'%</span> <span class="text-muted small pt-2 ps-1">decrease </span>';

                      }





                      ?>
                 
                   
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h4 class="card-title">Users <span>| This Year</span></h4>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>

                 
                     <?php 

                    include('includes/connect.php');

                 $sql = "SELECT * from users ";

if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    

 } ?>
                    <div class="ps-3">
                      <h6><?php echo $rowcount; ?></h6>

                      <?php 

                      if ($rowcount >= 1000/100 ) {
                      
                      echo '<span class="text-success small pt-1 fw-bold">'.$rowcount.'%</span> <span class="text-muted small pt-2 ps-1">increase</span>';

                      } else {
                      
                      echo '<span class="text-danger small pt-1 fw-bold">'.$rowcount.'%</span> <span class="text-muted small pt-2 ps-1">decrease </span>';

                      }





                      ?>
                 
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

         

            <!-- Recent posts -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h4 class="card-title">Recent Posts <span>| Today</span></h4>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">PID#</th>
                        <th scope="col">User</th>
                        <th scope="col">Product</th>
                        <th scope="col">Status</th>
                        <th scope="col">Update</th>

                      </tr>
                    </thead>
                    <tbody>
                       <?php 

                    include('includes/connect.php');

                 $sql = "SELECT * from products ";

                     $run = mysqli_query($con, $sql);

                     while($row = mysqli_fetch_array($run)){  ?>
                      <tr>
                        <th scope="row"><a href="#"><?php echo $row['product_id']; ?></a></th>
                        <td><?php echo $row['user']; ?></td>
                     <td><?php echo $row['pro_name']; ?></td>
                     <td>
                            <?php 

                             $status= $row['pro_status']; 

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
                          <td><a class="btn btn-warning" href="edit_product.php?edit=<?php echo $row['product_id']; ?>">Edit</a></td>
                               <td><a class="btn btn-danger" href="index.php?del=<?php echo $row['product_id']; ?>">Delete</a></td>




                      </tr>

                    <?php } 

                    if (isset($_GET['del'])) {


                      $delid = $_GET['del'];

                      $prodel = "DELETE FROM products WHERE product_id='$delid'";

                      $run = mysqli_query($con, $prodel);

                      if($run){
                      echo "<script> window.open('index.php?deleted=unverify product deleted','_self')</script>";
                      }
                      // code...
                    }






                    ?>
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Posts -->



              <!-- Recent users -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h4 class="card-title">Recent Users <span>| Today</span></h4>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">UID#</th>
                        <th scope="col">User</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Option</th>

                      </tr>
                    </thead>
                    <tbody>
                       <?php 

                    include('includes/connect.php');

                 $sql = "SELECT * from users ";

                     $run = mysqli_query($con, $sql);

                     while($row = mysqli_fetch_array($run)){  ?>
                      <tr>
                        <th scope="row"><a href="#"><?php echo $row['user_id']; ?></a></th>
                        <td><?php echo $row['name']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td>
                            <?php 

                             $status= $row['status']; 

                              if ($status =='active') {
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
                          <td><a class="btn btn-warning" href="edit_user.php?edit=<?php echo $row['user_id']; ?>">Edit</a></td>
                               <td><a class="btn btn-danger" href="index.php?del=<?php echo $row['user_id']; ?>">Delete</a></td>




                      </tr>

                    <?php } 

                    if (isset($_GET['del'])) {


                      $delid = $_GET['del'];

                      $prodel = "DELETE FROM users WHERE user_id='$delid'";

                      $run = mysqli_query($con, $prodel);

                      if($run){
                      echo "<script> window.open('index.php?deleted=unverify user deleted','_self')</script>";
                      }
                      // code...
                    }






                    ?>
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Users -->

         
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">

              <h4 class="card-title">Active Users <span>| Today</span></h4>
 

              <div class="activity online ">
                 <!-- Your content goes here -->

    

                <?php 

                include('includes/connect.php');

                $active =" SELECT * FROM users order by status='online' AND name='$name' limit 10 ";
                $run_active = mysqli_query($con, $active);

                while($row = mysqli_fetch_array($run_active)){ ?>

                <div class="activity-item d-flex">
                  <div class="activite-label"><?php echo $row['date']; ?></div><br><br>
                  <?php 

                   $status = $row['status'];


                  if ($status =='online') {
                    echo "<i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>";
                  }else {
                    echo "<i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>";
                  }




                  ?>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark"><?php echo  $row['name'];?></a>
                    <a href="index.php?remove=<?php echo $row['user_id'];?>" class="fw-bold bi bi-trash"></a>

                  </div>
                </div><!-- End activity item-->

              <?php } 


              if (isset($_GET['remove'])) {
                
                $remove_id = $_GET['remove'];

                $active =" DELETE FROM login_status WHERE user_id='$remove_id' ";
                $run_active = mysqli_query($con, $active);
              }







               ?>

              
              </div>

        
                           

            </div>
          </div><!-- End Recent Activity -->

        

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h4 class="card-title">Website Traffic <span>| Today</span></h4>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h4 class="card-title">News &amp; Updates <span>| Today</span></h4>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->


                 <script>
       

        // Display the JSON message on the page
        document.body.innerHTML += '<div class="online"></div>';

        // Reload the page after 3 seconds
        setTimeout(function() {
            location.reload();
        }, 10000);
    </script>

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
