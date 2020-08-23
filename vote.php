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
          <li class="<seatinfo>"><a href="seatinfo.php">Seat Information</a></li>
          <li><a href="election.php">Election</a></li>
          <li><a href="partyinfo.php">Party Information</a></li>
          <li><a href="candidate.php">Candidate</a></li>
          <li><a href="vote.php">Vote</a></li>
          <li ><a href="voterreg.php">Voter Registration</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>

    </div>
  </header><!-- End Header -->


  <main id="main">

 
  
  
  
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Vote</h2>
        </div>

    

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form  method="post" role="form" class="php-email-form">
              <div class="form-row">
              
                      <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Vote ID</th>
                              <th>Voter ID</th>
                              <th>Candidate ID</th>
                              <th>Seat ID</th>
                            </tr>
                          </thead>
                          <tbody>
<?php
include 'conn.php';

    $qe = "select * from vote";
    $quer=mysqli_query($con,$qe);
    while ($res=mysqli_fetch_array($quer)) {
 ?>
        <tr>
          <td><?php echo $res['voteid'];?></td>
          <td><?php echo $res['voterid'];?></td>
          <td><?php echo $res['candidateid'];?></td>
          <td><?php echo $res['seatid'];?></td>
          </tr> 
  <?php
    }

  ?>
                          </tbody>
                      </table>
                          
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

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