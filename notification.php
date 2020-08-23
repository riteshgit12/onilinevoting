
<?php
        include 'conn.php';
        session_start();
?>

<?php
include 'conn.php';
if(isset($_POST['done'])) {

    $title= $_POST['title'];
    $desc= $_POST['des'];


$qe = "INSERT INTO `notification`(`title`, `desc`) VALUES ('$title','$desc')";
  $query=mysqli_query($con, $qe);
    header("Location: notification.php");
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
</head>
<body>

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

<div class="col-lg-6 m-auto">
  <form method="post">  
<br><br><br><br>  <div class="card">
    <div class="card-header bg-dark">
     <h2 class="text-warning text-center">Notifications</h2> 
    </div>
      <label>Title</label>
      <input type="text" name="title" class="form-control" required="Enter title"> <br>
      <label>description</label>
      <input type="text" name="des" class="form-control" required="Enter title">  <br>
      <button class="btn btn-success" type="submit" name="done">Submit</button>

  </div>
  </form>

</div>

<br><div class="container">  
  <div class="col-lg-12"></div>
      <table class="table table-striped table-hover table-bordered text-center">
        <tr>
          <th>S.No.</th>
          <th>Title</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
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
          <td><button class="btn-success"><a class="text-white" href="edit.php?id=<?php echo $res['id'];?>">Edit</a></button></td>
          <td><button class="btn-danger"><a class="text-white" href="delete.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
        </tr> 
  <?php
    }

  ?>
      </table>

  </div>    
    
</body>
</html>