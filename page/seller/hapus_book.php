<?php
include('../../config.php');
$bk=$_GET['id'];
mysqli_query($con,"DELETE FROM buku WHERE id_buku='$bk'");
header("location:index.php?page=buku");
 ?>