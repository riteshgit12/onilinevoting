<!DOCTYPE html>
<html>
<head>
  <title>Online Polling</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Online Election</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="notifications.php">Notification</a></li>
          <li><a href="adminlogin.php">Admin Login</a></li>
          <li><a href="../voter/voterlogin.php">Voter Login</a></li>
          <li><a href="#contact">Contact Us</a></li>
            </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<div class="col-lg-6 m-auto mr-auto">
<br><br><br><br><br>  <div class="card">
    <div class="card-header bg-light">
     <h2 class="text-success text-center">Notifications</h2> 
    </div>
  </div>
</div>
<br><div class="container">  
  <div class="col-lg-12"></div>
      <table class="table table-striped table-hover table-bordered text-center">
        <tr>
          <th>S.No.</th>
          <th>Title</th>
          <th>Description</th>
        </tr>

<?php
include 'conn.php';

    $qe = "select * from notification";
    $quer=mysqli_query($con,$qe);
    while ($res=mysqli_fetch_array($quer)) {
 ?>
        <tr>
          <td><?php echo $res['id'];?></td>
          <td><?php echo $res['title'];?></td>
          <td><?php echo $res['desc'];?></td>
          </tr> 
  <?php
    }

  ?>
      </table>

  </div>
</body>
</html>