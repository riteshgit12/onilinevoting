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

  <script type="text/javascript">
  function saverecord()
  {
    var voterid=document.getElementById("txtid").value;
    var email=document.getElementById("txtemail").value;
    var password=document.getElementById("txtpassword").value;
    var name=document.getElementById("txtname").value;
    var gender=document.getElementById("txtgender").value;
    var fname=document.getElementById("txtfname").value;
    var address=document.getElementById("txtadd").value;
    var mobile=document.getElementById("txtmobile").value;

    if(voterid=="")
    {
      alert("Please enter voterid");
      document.getElementById("txtid").focus();
      return;
    }
    if(email=="")
    {
      alert("Please enter email");
      document.getElementById("txtemail").focus();
      return;
    }
    if(password=="")
    {
      alert("Please enter Passwod");
      document.getElementById("txtpassword").focus();
      return;
    }
    if(name=="")
    {
      alert("Please enter Name");
      document.getElementById("txtname").focus();
      return;
    }
    if(gender=="")
    {
      alert("Please select Gender");
      document.getElementById("txtgender").focus();
      return;
    }
    if(fname=="")
    {
      alert("Please enter Father/Husband Name");
      document.getElementById("txtfname").focus();
      return;
    }
    if(address=="")
    {
      alert("Please enter Address");
      document.getElementById("txtadd").focus();
      return;
    }
    if(mobile=="")
    {
      alert("Please enter Mobile Number");
      document.getElementById("txtmobile").focus();
      return;
    }

    var r=new XMLHttpRequest();
    var t=Math.random();
    r.onreadystatechange=function()
    {
      if(r.readyState==4)
      {
        //alert(r.responseText);
        loadrecord();
      }
    }
    r.open("post","ajax/savevoter.php?s="+t +"&voterid="+voterid +"&email="+email +"&password="+password +"&name="+name +"&gender="+gender +"&fname="+fname +"&address="+address +"&mobile="+mobile);
    r.send();

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
    r.open("post","ajax/loadvoter.php?s="+t);
    r.send();    
  }
</script>

</head>

<body onload="loadrecord()">

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
          <li><a href="voterreg.php">Voter Registration</a></li>
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
          <h2>Voter Registration</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="name">Voter ID</label>
                  <input type="text" name="name" class="form-control" id="txtid" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">email</label>
                  <input type="text" name="name" class="form-control" id="txtemail" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">Password</label>
                  <input type="Password" name="name" class="form-control" id="txtpassword" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="txtname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">Gender</label>
                 <select name="name" class="form-control" id="txtgender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>  
                  </select>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">Father/Husband Name</label>
                  <input type="text" name="name" class="form-control" id="txtfname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">Address</label>
                  <input type="text" name="name" class="form-control" id="txtadd" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">Mobile</label>
                  <input type="text" name="name" class="form-control" id="txtmobile" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                <div class="form-group col-md-12">
                  <input type="button" onclick="saverecord()" value="Save Record" name="name" class="btn btn-danger"  />
                  <div class="validate"></div>
                </div>
              </div>


            </div>

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

    

    <div class="footer-top">
    
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

</body>

</html>