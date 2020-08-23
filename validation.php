<?php
include("../connection.php");
if(isset($_POST["btn"]))
{
  $user=$_POST["admin"];
  $password=$_POST["password"];
  $q=mysqli_query($con,"select * from admin where user='$user' AND password='$password'");
  if(mysqli_num_rows($q)>1)
  {
    ?>
  <script> 
  alert('user and password not mached')
  window.open('adminlogin.php','self')
  </script>
  <?php
  }
  else
  {
    $data=mysqli_fetch_assoc($q);
    $id=$data['id'];

    echo "id=".$id";
  }
}
?>