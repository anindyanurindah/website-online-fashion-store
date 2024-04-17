<?php
include('../../config.php');
$cus=$_GET['id'];
mysqli_query($con,"DELETE FROM checkout WHERE id_checkout='$cus'");
header("location:index.php?page=customer");
?>