<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->


 <main id="main" class="main">

    <div class="pagetitle">
      <h1>News Articals Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">News Articals</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Insert News</h5>

             <!-- Product Post Form -->

             <form action="insert-news.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="pro_name">New title:</label>
                <input type="text" class="form-control" name="news_title" required>
            </div>


            <div class="form-group">
                <label for="pro_name">New Description :</label>
                <textarea col='4' row='4' class="form-control" name="news_description" required>

              </textarea>            </div>

     
              <div class="form-group">
                             <label for="category">Your Name:</label>
    <select class="form-control" name="name" id="user">
          <option value='user'>user</option>

      <?php

      include('includes/connect.php');

      $user = "SELECT * FROM users WHERE name='$name'";

      $run = mysqli_query($con, $user);

      while($row = mysqli_fetch_array($run)){?>

        <option value='<?php echo $row['name']; ?>'><?php echo $row['name']; ?></option>
    
    <?php } ?>
</select>
 
            </div>
            <div class="form-group">
                <label for="image">Product Images:</label>
                <input type="file" class="form-control-file p-2" name="news_image" required>
            </div>
            <div class="form-group">
            <input  type="submit" name="sendnews" value="Send News" class="btn btn-primary text-center ">
          </div>
        </form>
      </div>
    </div>
  </div>

        <?php 


        include('includes/connect.php');

        // Handle form data and image uploads
if (isset($_POST['sendnews'])) {
    $news_title = $_POST['news_title'];
    $news_description = $_POST['news_description'];
    $name = $_POST['name'];


   

$image= $_FILES['news_image']['name'];
$imageTmpName = $_FILES['news_image']['tmp_name'];
 move_uploaded_file($imageTmpName, "assets/news_images/$image");
$insert = "INSERT INTO news_and_articles (news_title ,news_image,news_by ,news_description) 
VALUES ('$news_title','$image','$name','$news_description')";
    $run = mysqli_query($con, $insert);

    if ($run) {
      
      echo "<script>alert('News sent succsfully') </script>";
    }

 else {
    echo "Missing required fields.";
}}



?>

              <!-- End Product Post Form -->



            </div>
          </div>

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">News Table</h5>

              <!-- Products Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">New Title</th>
                    <th scope="col">New sent by </th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Post Date</th>
                    <th scope="col">Option</th>


                  </tr>
                </thead>

                <tbody>
                  <?php 

                  include('includes/connect.php');

                  $news = " SELECT * FROM news_and_articles  WHERE news_by='$name' ";
                  $run = mysqli_query($con, $news);
                  while($row= mysqli_fetch_array($run)){  ?>
                  <tr>
                    <th scope="row"><?php echo $row['news_id']; ?></th>
                    <td><?php echo $row['news_title']; ?></td>
                    <td><?php echo $row['news_by']; ?></td>
                    <td><img width="100" height="100"src="assets/news_images/<?php echo $row['news_image']; ?>"></td>
                    <td><?php echo $row['news_status']; ?></td>
                    <td><?php echo $row['news_date']; ?></td>
                    <td><a class="btn btn-danger" href="insert-news.php?delnews=<?php echo $row['news_id']; ?>">Delete</a></td>






                  </tr>
                <?php } ?>



                <?php 


                include('includes/connect.php');

                if (isset($_GET['delnews'])) {
                
                $delnews = $_GET['delnews'];

                $del_news = " DELETE FROM news_and_articles  WHERE news_by='$name' ";
                $run_news = mysqli_query($con, $del_news);
                if ($run_news) {
                  echo "<script> alert('news has been deleted')</script>";

                
                
                }

              }


                ?>
               
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
