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

            include('includes/connect.php');

               $name = $_SESSION['name'];


             $user = " SELECT * FROM users WHERE name='$name' ";

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
                    <form action="inbox-message.php" method="post" class="form">

                           <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">To Name:</label>
                      <div class="col-md-8 col-lg-9">

    <select for="to_name" class="form-control col-md-4 col-lg-3 col-form-label" name="to_name" id="to_name">
          <option value='selectname'>Select Name </option>

      <?php

      include('includes/connect.php');

    $user = " SELECT * FROM users  ";

      $run = mysqli_query($con, $user);

      while($col = mysqli_fetch_array($run)){?>

        <option value='<?php echo $col['name']; ?>'><?php echo $col['name']; ?></option>
    
    <?php } ?>
</select>
 
                      
                      </div>
                    </div>
                       <div class="row mb-3">
                      <label for="from_name" class="col-md-4 col-lg-3 col-form-label">From: <?php echo $row['name']; ?></label>
                        <input name="from_name" type="hidden" class="form-control" id="from_name" value="<?php echo $row['name']; ?>">
                    
                    </div>

 
        
                      <div class="col-md-8 col-lg-9">

                         <input name="photo" type="hidden" class="form-control" id="photo" value="<?php echo $row['photo']; ?>">
                      
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

        $to_name = $_POST['to_name'];
        $from_name = $_POST['from_name'];

        $photo = $_POST['photo'];

        $email = $_POST['email'];
        $subject= $_POST['subject'];
        $message = $_POST['message'];
      
      $sql = " INSERT INTO messages (to_name,from_name,email,person_image,subject ,message) VALUES('$to_name','$from_name','$email','$photo','$subject','$message') ";
      
      if(mysqli_query($con, $sql)){
         echo "<script> window.open('inbox-message.php?sent=Message sent successfully.','_self')</script>";
         exit;
      } else
      {
         echo "Error occurred while updating the record!<BR>";
         echo "Reason: ", mysqli_error($con);
      }}
   
 

?>


                </div>


                   <div class="tab-pane fade inbox-message pt-5" id="inbox-message">

                  <?php 

                  include('includes/connect.php');

                   $sql = "SELECT * FROM messages WHERE to_name='$name'";

                   $col = mysqli_query($con, $sql);

                  if($row = mysqli_fetch_array($col)){



                   ?>

                  <!-- sent message Form -->
  <form action="inbox-message.php?del=<?php echo $row['person_id'];?>" method="post">
                    
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <img src="assets/img/<?php echo $row['person_image']; ?>" width="60px" height="60px" alt="Profile" class="rounded-circle">

          <h4>From : <?php echo $row['from_name']; ?></h4><hr>
          <h5>Subject: <?php echo $row['subject'];?></h5>
          <p>Message:<br> <?php echo $row['message'];?></p>

          <b><?php echo $row['message_date']; ?> </b><br>
          <button class="btn btn-outline-danger" type="submit" name="delete">Delete Message</button>
        </div>
      </form><!-- End sent message Form -->

<?php  


include('includes/connect.php');


  if (isset($_GET['del'])) {

        $delid = $_GET['del'];
       
      
      $sql_del = " DELETE FROM messages WHERE person_id='$delid'";
      
      if(mysqli_query($con, $sql_del)){
         echo "<script> alert('Inbox message Deleted successfully.')</script>";
         exit;
      } else
      {
         echo "Error occurred while updating the record!<BR>";
         echo "Reason: ", mysqli_error($con);
      }}
   
   mysqli_close($con);
 

?>


<?php }else{

  echo "No messages";
} ?>

             
               

                 

                </div>
              </div>



                <div class="tab-pane fade sent-message pt-5" id="sent-message">

                  <?php 

                  include('includes/connect.php');

                   $sql = "SELECT * FROM messages WHERE from_name='$name'";

                   $col = mysqli_query($con, $sql);

                  if($row = mysqli_fetch_array($col)){



                   ?>

                  <!-- sent message Form -->
  <form action="inbox-message.php?del=<?php echo $row['person_id'];?>" method="post">
                    
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <img src="assets/img/<?php echo $row['person_image']; ?>" width="60px" height="60px" alt="Profile" class="rounded-circle">

          <h4>Sent to: <?php echo $row['to_name']; ?></h4><hr>
          <h5>Subject: <?php echo $row['subject'];?></h5>

          <p>Message:<br> <?php echo $row['message'];?></p>

          <b><?php echo $row['message_date']; ?> </b><br>
          <button class="btn btn-outline-danger" type="submit" name="delete">Delete Message</button>
        </div>
      </form><!-- End sent message Form -->

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

<?php }else{

  echo "Sent messages not here ";
} ?>

               

                 

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
