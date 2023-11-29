

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

            <!-- Reports -->
            <div class="col-12">
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
                  <h4 class="card-title">Reports <span>/Today</span></h4>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>


                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Products',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
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
                        <th scope="col">Delete</th>

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
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

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
                  <h4 class="card-title">Top Selling <span>| Today</span></h4>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

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
 

              <div class="activity ">
                 <!-- Your content goes here -->

    

                <?php 

                include('includes/connect.php');

                $active =" SELECT * FROM login_status ";
                $run_active = mysqli_query($con, $active);

                while($row = mysqli_fetch_array($run_active)){ ?>

                <div class="activity-item d-flex">
                  <div class="activite-label"><?php echo $row['date']; ?></div><br><br>
                  <?php 

                   $status = $row['status'];


                  if ($status =='active') {
                    echo "<i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>";
                  }

                  if ($status=='inactive'){
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

                <?php 

                $news = " SELECT * FROM news_and_articles ";

                $run_news = mysqli_query($con, $news);

                foreach ($run_news as  $row) {  ?>
                <div class="post-item clearfix">
                  <img src="assets/img/<?php echo $row['news_image']; ?>" alt="">
                  <h4><a href="#"><?php echo $row['news_title']; ?></a></h4>
                  <p><?php echo $row['news_description']; ?></p>
                 <p><b><?php echo $row['news_date']; ?></b></p>

                </div>

              <?php } ?>

               
              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->


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


                 <script>
        // Assume you have a JSON response
        //var jsonResponse = { message:'Page will reload in 10 seconds.'};

        // Convert the JSON object to a string
        var jsonString = JSON.stringify();

        // Display the JSON message on the page
        document.body.innerHTML += '<div class="card">'+ jsonString + '</div>';

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
