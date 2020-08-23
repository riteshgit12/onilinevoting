<?php
$con=mysqli_connect('localhost','root','','election') or die("Error in collection");
if (isset($_POST['submit'])) {
    $id= $_GET['id'];
  	$title= $_POST['titl'];
    $desc= $_POST['descr'];
	$q = "UPDATE `notification` SET `id`='$id',`title`='$title',`desc`='$desc' WHERE id='$id'";
 $run= mysqli_query($con, $q);

 header("location: notification.php");
}
?>

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
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  
</head>
<body>
<div action="" class="col-lg-6 m-auto">
  <form method="post">  
  <div class="card">
    <div class="card-header bg-dark">
     <h2 class="text-warning text-center">Edit Notifications</h2> 
    </div>
      <label>Title</label>
      <input type="text" name="titl" class="form-control" required="Enter title"> <br>
      <label>description</label>
      <input type="text" name="descr" class="form-control" required="Enter title">  <br>
      <button class="btn btn-success" type="submit" name="submit">Submit</button>

  </div>
  </form>

</div>

</body>
</html>