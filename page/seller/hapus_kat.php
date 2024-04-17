<?php
include('../../config.php');
$bk=$_GET['id'];
mysqli_query($con,"DELETE FROM kategori WHERE id_ketegori='$bk'");
header("location:index.php?page=kategori");
 ?>