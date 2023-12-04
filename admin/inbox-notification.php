<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Notification </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Notification </li>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#send-notification">Send Notification</button>
                </li>


                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#status-notification">Status Notification</button>
                </li>
            

              </ul>
              <div class="tab-content pt-2">

               

                <div class="tab-pane fade send-notification pt-3" id="send-notification">

                  <!-- send message Form -->
                    <form action="inbox-notification.php" method="post" class="form">

                           <div class="row mb-3">
                      <label for="to_name" class="col-md-4 col-lg-3 col-form-label">To Name:</label>
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
       <label for="to_name" class="col-md-4 col-lg-3 col-form-label">To Status:</label>
      <div class="col-md-8 col-lg-9">

    <select for="note_class_icon" class="form-control col-md-4 col-lg-3 col-form-label" name="note_class_icon" id="note_class_icon">
          <option value='selectname'>Select Status </option>
          <option value='bi bi-check-circle text-success'>Success</option>

          <option value='bi bi-exclamation-circle'>Warning </option>

          <option value='bi bi-x-circle text-danger'>Danger </option>


   
</select>
 
                      
                      </div>
                    </div>
                       

                        <div class="row mb-3">
                      <label for="note_title" class="col-md-4 col-lg-3 col-form-label">Note Title:</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="note_title" type="text" class="form-control" id="note_title">
                      </div>
                    </div>


                 
               

                    <div class="row mb-3">
                      <label for="message" class="col-md-4 col-lg-3 col-form-label">Note message</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="message" class="form-control" id="message" style="height: 100px"></textarea>
                      </div>
                    </div>



                    <div class="text-center">
                      <input type="submit" name="send" class="btn btn-primary" value="Send Notification">
                    </div>

                  </form><!-- End send message Form -->

<?php  


include('includes/connect.php');


  if (isset($_POST['send'])) {

        $to_name = $_POST['to_name'];
        $note_title= $_POST['note_title'];
        $note_class_icon= $_POST['note_class_icon'];

        $message = $_POST['message'];
      
      $query  = " INSERT INTO notifications (to_name , note_title , note_class_icon , note_message) VALUES ('$to_name','$note_title', '$note_class_icon','$message')";
      
      if(mysqli_query($con, $query )){
         echo "<script> window.open('inbox-notification.php?sent=Notification sent successfully.','_self')</script>";
         exit;
      } else
      {
         echo "Error occurred while updating the record!<BR>";
         echo "Reason: ", mysqli_error($con);
      }}
   
 

?>


                </div>


                   <div class="tab-pane fade status-notification pt-5" id="status-notification">

                  <?php 

                  include('includes/connect.php');

                   $sql = "SELECT * FROM notifications WHERE to_name='$name'";

                   $coln = mysqli_query($con, $sql);

                  if($row = mysqli_fetch_array($coln)){



                   ?>

                  <!-- sent message Form -->
  <form action="inbox-notification.php?del=<?php echo $row['note_id'];?>" method="post">
                    
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">

          <h5><span class="<?php echo $row['note_class_icon']; ?>"> </span> Notfication: title: <?php echo $row['note_title'];?></h5>
          <p>Notification Message:<br> <?php echo $row['note_message'];?></p>

          <b><?php echo $row['note_date']; ?> </b><br>
          <button class="btn btn-outline-danger" type="submit" name="delete">Delete Message</button>
        </div>
      </form><!-- End sent message Form -->

<?php  


include('includes/connect.php');


  if (isset($_GET['del'])) {

        $delid = $_GET['del'];
       
      
      $sql_del = " DELETE FROM notifications WHERE note_id='$delid'";
      
      if(mysqli_query($con, $sql_del)){
         echo "<script> alert('Notification message Deleted successfully.')</script>";
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
