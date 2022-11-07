<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','kavre_municipality');
$sql="DELETE FROM organization_details WHERE organization_id=$id";
mysqli_query($con,$sql);
header('location:organizationaldata.php');
?>