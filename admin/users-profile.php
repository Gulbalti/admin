<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <?php     


            if (isset($_GET['id'])) {

              $search = $_GET['id'];

              $user = " SELECT * FROM users WHERE name='$search' limit 1 ";

            }

            if (isset($_GET['edit'])) {

              $u_id = $_GET['edit'];

             $user = " SELECT * FROM  users WHERE  user_id ='$u_id'";

            }
            else{


             $name =$_SESSION['name']; 


             $user = " SELECT * FROM users WHERE name='$name' ";

           }

             $run_user = mysqli_query($con, $user);

             $row = mysqli_fetch_array($run_user);





            ?>

      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/<?php echo $row['photo']; ?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $row['name']; ?></h2>
              <h3><?php echo $row['job']; ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</a>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"> <?php echo $row['about']; ?></p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label "> Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['name']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['company']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['job']; ?>r</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['country']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['address']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['phone']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['email']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                   <?php 

                   $status =$row['status'];

                   if ($status =='verified') {
                     
                     echo '<div class="col-sm-2 col-md-4 btn-success btn">'.$status.' </div>';

                   } else{

                     echo '<div class="col-sm-2 col-md-4 btn-danger btn">'.$status.' </div>';


                   }



                    ?>





                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
<form action="" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/<?php echo $row['photo']; ?>" alt="Profile">
                        <div class="pt-2">

                          <input type="file" name="image" class=" btn-sm" title="Upload new profile image">
                          <a href="users-delete.php?photo=<?php echo $id=$row['user_id']; ?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                         <input name="profileid" type="hidden" class="form-control" value="<?php echo $row['user_id']; ?>">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Name</label>
                      <div class="col-md-8 col-lg-9">


                        <input name="proid" type="text" class="form-control" id="Name" value="<?php echo $row['user_id']; ?>">


                        <input name="name" type="text" class="form-control" id="Name" value="<?php echo $row['name']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px"><?php echo $row['about']; ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="<?php echo $row['company']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="<?php echo $row['job']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="<?php echo $row['country']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="<?php echo $row['address']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $row['phone']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $row['email']; ?>">
                      </div>
                    </div>
                      <div class="row mb-3">
                      <label for="Status" class="col-md-4 col-lg-3 col-form-label">Status</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="status" type="status" class="form-control" id="status" value="<?php echo $row['status']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="<?php echo $row['twitter']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="<?php echo $row['facebook']; ?>">
                      </div>
                    </div>

               

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="<?php echo $row['linkedin']; ?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <input type="submit" name="update" class="btn btn-primary" value="Save Changes">
                    </div>
                  </form><!-- End Profile Edit Form -->

<?php  


include('includes/connect.php');


  if (isset($_POST['update'])) {

    
        $proid = $_POST['proid'];

        $name = $_POST['name'];
        $about = $_POST['about'];
        $company = $_POST['company'];
        $job = $_POST['job'];
        $country = $_POST['country'];
        $address = $_POST['address'];
         $phone = $_POST['phone'];
          $email = $_POST['email'];
          $status = $_POST['status'];


           $image = $_FILES['image']['name'];
           $imagetmp = $_FILES['image']['tmp_name'];

            // Process the uploaded file (e.g., move it to a directory, validate, etc.)
           
            if (move_uploaded_file($imagetmp, "assets/img/$image")) {
                // Insert image information into the database

      $sql = "UPDATE users SET name='$name', about='$about', company='$company', job='$job', country='$country', address='$address', phone='$phone', email='$email', photo='$image', status='$status' WHERE user_id ='$proid'";
      
      if(mysqli_query($con, $sql)){
         echo "<script> alert('Data updated successfully.')</script>";
         exit();
      } else
      {
         echo "Error occurred while updating the record!<BR>";
         echo "Reason: ", mysqli_error($con);
      }}
   }
   mysqli_close($con);
 

?>


                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->


                
                  <form method="post" action="users-profile.php">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="test" value="" placeholder="Please Enter Old Password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" value="" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" value="" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" name="change" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

               <?php 


               include('includes/connect.php');


               if (isset($_POST['change'])) {

                $password = $_POST['password'];
                if (empty($password)) {
              echo "<script> alert('Please Enter Old Password')</script>";

              exit();
            
                }
                $newpass = $_POST['newpassword'];
                $renewpass = $_POST['renewpassword'];

                if ($newpass !== $renewpass) {

         echo "<script> alert('Password not match!')</script>";

         exit();
                
                
                }
                
        
    
      $sql = "UPDATE users SET  password='$newpass' WHERE password ='$password'";
      
       if(mysqli_query($con, $sql)){
         echo "<script> alert('Password changed successfully.')</script>";
        
      }else
      {
         echo "<script> alert('Your password incorrect!') </script>";
         echo "Reason: ", mysqli_error($con);
      }
   }

 







               ?>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 
  <!-- ======= Footer ======= -->

  <?php include('includes/footer.php'); ?>

  <!-- End Footer -->
