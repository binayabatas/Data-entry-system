<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','kavre_municipality');
$sql="DELETE FROM personal_details WHERE person_id=$id";
mysqli_query($con,$sql);
header('location:personaldata.php');
?>