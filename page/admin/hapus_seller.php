<?php
include('../../config.php');
$cus=$_GET['id'];
mysqli_query($con,"DELETE FROM customer WHERE id_seller='$cus'");
header("location:index.php?page=customer");
?>