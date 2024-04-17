<?php
include('../../config.php');
$kd=$_GET['id'];
$id = $_GET['id_pembeli'];
$qry = mysqli_query($con,"SELECT * from chekout where id_pembeli='$id' && status_terima='sudah diterima'");
$a = mysqli_num_rows($qry);
if ($a=="belum diterima") 
{
echo "<script>alert('Customer belum Mengkonfirmasi bahwa Dia sudah menerima barang.'); window.location = 'index.php?page=laporan'</script>";
}
else{
mysqli_query($con,"UPDATE chekout set active='F' where id_chekout='$kd'");
header("location:index.php?page=laporan");}
 ?>