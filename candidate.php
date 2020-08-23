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

  

</head>

<body onload="loadrecord()">

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
        <h1 class="text-light"><a><span>Online Polling</span></a></h1>
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
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>

    </div>
  </header><!-- End Header -->


  <main id="main">

 
  
  
  
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Candidate Information</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <form enctype="multipart/form-data" method="post" action="ajax/savecandidate.php" id="candidate-form" >
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="txtname">Candidate name</label>
                  <input type="text" name="candidatename" class="form-control" id="txtname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="txtgender">Gender</label>
                  <input type="text" name="gender" class="form-control" id="txtgender" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="txtmobile">Mobile</label>
                  <input type="text" name="mobile" class="form-control" id="txtmobile" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="txtadd">Address</label>
                  <input type="text" name="address" class="form-control" id="txtadd" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">Photo</label>
                  <input type="File" name="fileToUpload" class="form-control" id="txtphoto" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="txtpartyid">Party ID</label>
                  <input type="text" name="partyid" class="form-control" id="txtpartyid" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="txtseatid">Seat ID</label>
                  <input type="text" name="seatid" class="form-control" id="txtseatid" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="txtstatus">Election ID</label>
                  <input type="text" name="status" class="form-control" id="txtstatus" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <input type="submit" value="Save Record" name="name" class="btn btn-danger"  />
                  <div class="validate"></div>
                </div>
              </div>

            </form>
            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form  method="post" role="form" class="php-email-form">
              <div class="form-row" id="divelection">
              
                     
                          
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
            <h3>Ninestars</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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

   <script type="text/javascript">

  function saverecord()
  {
    $("#candidate-form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           },
           error:function(err){console.log(err);}
         });
    return false;

});
// });
    // var candidatename=document.getElementById("txtname").value;
    // var gender=document.getElementById("txtgender").value;
    // var mobile=document.getElementById("txtmobile").value;
    // var address=document.getElementById("txtadd").value;
    // var photo=document.getElementById("txtphoto").value;
    // var partyid=document.getElementById("txtpartyid").value;
    // var seatid=document.getElementById("txtseatid").value;
    // var status=document.getElementById("txtstatus").value;

    
    // if(candidatename=="")
    // {
    //   alert("Please enter candidate name");
    //   document.getElementById("txtname").focus();
    //   return;
    // }
    // if(gender=="")
    // {
    //   alert("Please enter gender");
    //   document.getElementById("txtgender").focus();
    //   return;
    // }
    // if(mobile=="")
    // {
    //   alert("Please select Mobile Number");
    //   document.getElementById("txtmobie").focus();
    //   return;
    // }
    // if(address=="")
    // {
    //   alert("Please enter Address");
    //   document.getElementById("txtadd").focus();
    //   return;
    // }
    // if(photo=="")
    // {
    //   alert("Please Upload Photo");
    //   document.getElementById("txtphotoo").focus();
    //   return;
    // }
    // if(partyid=="")
    // {
    //   alert("Please enter Party ID");
    //   document.getElementById("txtpartyid").focus();
    //   return;
    // }
    // if(seatid=="")
    // {
    //   alert("Please enter Seat IDD");
    //   document.getElementById("txtseatid").focus();
    //   return;
    // }

    // var r=new XMLHttpRequest();
    // var t=Math.random();
    // r.onreadystatechange=function()
    // {
    //   if(r.readyState==4)
    //   {
    //     alert(r.responseText);
    //     loadrecord();
    //   }
    // }
    // r.open("post","ajax/savecandidate.php?s="+t +"&candidatename="+candidatename +"&gender="+gender +"&mobile="+mobile +"&address="+address +"&photo="+photo +"&partyid="+partyid +"&seatid="+seatid +"status="+status);
    // r.send();

  }

  function loadrecord()
  {
      var r=new XMLHttpRequest();
    var t=Math.random();
    r.onreadystatechange=function()
    {
      if(r.readyState==4)
      {
         document.getElementById("divelection").innerHTML=r.responseText;
      }
    }
    r.open("post","ajax/loadcandidate.php?s="+t);
    r.send();    
  }
</script>

</body>

</html>