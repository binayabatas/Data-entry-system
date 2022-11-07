<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','kavre_municipality');
$sql="DELETE FROM industrial_details WHERE industry_id=$id";
mysqli_query($con,$sql);
header('location:industrialdata.php');
?>