<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Message</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Message</li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#send-message">Send Message</button>
                </li>


                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#inbox-message">Inbox Message</button>
                </li>


                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sent-message">Sent Message</button>
                </li>

             

            

              </ul>
              <div class="tab-content pt-2">

               

                <div class="tab-pane fade sent-message pt-3" id="send-message">

                  <!-- send message Form -->
                    <form action="inbox-message.php" method="post">
                   

                    <div class="row mb-3">
                         <input name="profileid" type="hidden" class="form-control" value="<?php echo $row['user_id']; ?>">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Name</label>
                      <div class="col-md-8 col-lg-9">


                        <input name="name" type="text" class="form-control" id="Name" value="<?php echo $row['name']; ?>">

                         <input name="photo" type="hidden" class="form-control" id="photo" value="<?php echo $row['photo']; ?>">
                      </div>
                    </div>
                       <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $row['email']; ?>">
                      </div>
                    </div>

                        <div class="row mb-3">
                      <label for="subject" class="col-md-4 col-lg-3 col-form-label">subject</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="subject" type="text" class="form-control" id="subject" value="<?php echo $row['subject']; ?>">
                      </div>
                    </div>


                 
               

                    <div class="row mb-3">
                      <label for="message" class="col-md-4 col-lg-3 col-form-label">message</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="message" class="form-control" id="message" style="height: 100px"><?php echo $row['message']; ?></textarea>
                      </div>
                    </div>

                 

                   

                

                    <div class="text-center">
                      <input type="submit" name="send" class="btn btn-primary" value="Send Message">
                    </div>
                  </form><!-- End send message Form -->

<?php  


include('includes/connect.php');


  if (isset($_POST['send'])) {

        $name = $_POST['name'];
        $photo = $_POST['photo'];

        $email = $_POST['email'];
        $subject= $_POST['subject'];
        $message = $_POST['message'];
      
      $sql = " INSERT INTO messages (person_name,email,person_image,subject ,message) VALUES('$name','$email','$photo','$subject','$message') ";
      
      if(mysqli_query($con, $sql)){
         echo "<script> alert('Message sent successfully.')</script>";
         exit;
      } else
      {
         echo "Error occurred while updating the record!<BR>";
         echo "Reason: ", mysqli_error($con);
      }}
   
 

?>


                </div>



                <div class="tab-pane fade sent-message pt-3" id="sent-message">

                  <?php 

                  include('includes/connect.php');

                   $sql = "SELECT * FROM messages ";

                   $col = mysqli_query($con, $sql);

                   $row = mysqli_fetch_array($col);



                   ?>

                  <!-- send message Form -->
                    <form action="inbox-message.php?del=<?php echo $row['user_id'];?>" method="post">
                   

                    <div class="row mb-3">
                       
                      <label for="name" class="col-md-4 col-lg-3 col-form-label">Name <?php echo $row['name']; ?></label>
                     
                    </div>
                       <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email:<?php echo $row['email']; ?></label>
                 
                    </div>

                        <div class="row mb-3">
                      <label for="subject" class="col-md-4 col-lg-3 col-form-label">subject:<?php echo $row['subject']; ?></label>
                     
                    </div>


                 
               

                    <div class="row mb-3">
                      <label for="message" class="col-md-4 col-lg-3 col-form-label">message:<?php echo $row['message']; ?></label>
                    
                    </div>

                     <div class="row mb-3">
                      <label for="date" class="col-md-4 col-lg-3 col-form-label">date:<?php echo $row['message_date']; ?></label>
                    
                    </div>

                    <div class="text-center">
                      <a href="inbox-message.php?del=<?php echo $row['person_id']; ?>">Delete Message</a>
                    </div>
                  </form><!-- End send message Form -->

<?php  


include('includes/connect.php');


  if (isset($_GET['del'])) {

        $delid = $_GET['del'];
       
      
      $sql_del = " DELETE FROM messages WHERE person_id='$delid'";
      
      if(mysqli_query($con, $sql_del)){
         echo "<script> alert('Message Deleted successfully.')</script>";
         exit;
      } else
      {
         echo "Error occurred while updating the record!<BR>";
         echo "Reason: ", mysqli_error($con);
      }}
   
   mysqli_close($con);
 

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
