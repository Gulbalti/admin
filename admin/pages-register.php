<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register Admin </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Admin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                         <!-- Profile Edit Form -->

    
       
        <div class="row">
          <div class="col-sm-12">
            <div class="subscription-input-group">
              <form action="pages-register.php" method="post">
            <div class="mb-3">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" name="fullname" required>
            </div>
           
           
            <div class="mb-3">
                <label for="about">About Me:</label>
                <textarea class="form-control" name="about" required></textarea>
            </div>
            <div class="mb-3">
                <label for="company">Company:</label>
                <input type="text" class="form-control" name="company">
            </div>
            <div class="mb-3">
                <label for="job">Job Title:</label>
                <input type="text" class="form-control" name="job">
            </div>
            <div class="mb-3">
                <label for="country">Country:</label>
                <input type="text" class="form-control" name="country">
            </div>
            <div class="mb-3">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="mb-3">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
                <div class="mb-3">
                <label for="password">Password </label>
                <input type="password" class="form-control" name="password" required>
            </div>
          
          <div class="mb-3">
         
            <button type="submit" name="register" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <?php


  include('includes/connect.php');


if (isset($_POST['register'])) {

// Prepare and execute the SQL query to insert data securely
$fullname = $_POST['fullname'];

$about = $_POST['about'];
$company = $_POST['company'];
$job = $_POST['job'];
$country = $_POST['country'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];




$sql = " INSERT INTO profiles (fullname,about, company, job, country, address, phone, email,photo,password) VALUES ('$fullname','$about', '$company', '$job', '$country', '$address',' $phone', '$email','Notimage','$password')";

  $run = mysqli_query($con, $sql);
   if ($run) {

session_start();
   
    $_SESSION['fullname'] = $fullname;


header('location:header.php?login has been successfuly');
                    }else{
                      echo "<script>alert('Username or Password incorrect!') </script>";
                    
                  

                  }



}



?>

            </div>
          </div>  
        </div>
      


    





                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>