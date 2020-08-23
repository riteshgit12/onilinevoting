<?php
$con=mysqli_connect('localhost','root','','election') or die("Error in collection");
$id=$_GET['id'];
$q= "DELETE FROM notification WHERE id=$id";
mysqli_query($con,$q);
header('location:notification.php')
?>