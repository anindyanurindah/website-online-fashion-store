<?php
include"../../config.php";
session_start();
$id_pembeli = $_SESSION['id_pembeli'];
$q_aman = mysqli_query($con,"SELECT * from chekout where id_pembeli='$id_pembeli' && active='T'");
$aman = mysqli_num_rows($q_aman);
if($aman==0)

{
$id_buku = $_POST['id_buku'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];
$total_harga = $qty*$harga;
$qrybuku = mysqli_query($con,"SELECT * from keranjang where id_buku='$id_buku'");
$q_stok = mysqli_query($con,"SELECT * from buku where id_buku='$id_buku'");
$d_stok = mysqli_fetch_array($q_stok);
$stok = $d_stok['stok'];
$siso_stok = $stok-$qty;
mysqli_query($con,"UPDATE buku set stok='$siso_stok' where id_buku='$id_buku'");
$data = mysqli_fetch_array($qrybuku);
$idbuk = $data['id_buku'];
if($id_buku==$idbuk)
{
	$q_qty = mysqli_query($con,"SELECT * from keranjang where id_buku='$id_buku'");
	$data_qty = mysqli_fetch_array($q_qty);
	$qty1 = $data_qty['qty'];
	$qty2 = $qty1 + $qty;
	$tot = $harga * $qty2;
mysqli_query($con,"UPDATE keranjang set id_pembeli='$id_pembeli',id_buku='$id_buku',qty='$qty2',harga='$harga',total_harga='$tot' where id_buku='$id_buku'");
header("location:detail.php?page=keranjang");
}

else{
mysqli_query($con,"INSERT into keranjang set id_pembeli='$id_pembeli',id_buku='$id_buku',qty='$qty',harga='$harga',total_harga='$total_harga'");
header("location:detail.php?page=keranjang");
}
}
else if($aman>=1)
{
	header("location:index.php?pesan=blok");
}
?>