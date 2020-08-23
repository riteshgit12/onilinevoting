<?php
        include 'conn.php';
        session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Polling</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v2.0.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Online Polling</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="notifications.php">Notification</a></li>
          <li><a href="adminlogin.php">Admin Login</a></li>
          <li><a href="../voter/voterlogin.php">Voter Login</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>

    </div>
  </header><!-- End Header -->


  
  <div class="col-lg-6 m-auto">
  <form action="" method="post">  
<br><br><br><br>  <div class="card">
    <div class="card-header bg-dark">
     <h2 class="text-warning text-center">Admin Login</h2> 
    </div>
      <label>Admin ID</label>
      <input type="text" name="user" class="form-control" required="Enter title"> <br>
      <label>Password</label>
      <input type="password" name="password" class="form-control" required="Enter title">  <br>
      <button class="btn btn-success" name="btn">Login</button>

  </div>
  </form>
  <?php
    if(isset($_POST['btn'])) {
    $email=$_POST['user'];
    $pass=$_POST['password'];

    $qe = "SELECT * FROM admin WHERE user='$email' && password='$pass'";
    $query=mysqli_query($con, $qe);
    $to= mysqli_num_rows($query);
    if($to==1){
      $_SESSION['user']=$email;
    header("location: election.php");
 }
else echo "Login failed!";
}
      ?>

</div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>