<?php
include"../../config.php";
session_start();
$id_pembeli = $_SESSION['id_pembeli'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['nomor_tlp'];
$tanggal = $_POST['tanggal'];

if (mysqli_query($con,"INSERT INTO chekout set id_pembeli='$id_pembeli',nama='$nama',alamat='$alamat',nomor_tlp='$tlp',tanggal='$tanggal',active='T'")) {
  $last_id = mysqli_insert_id($con);
  mysqli_query($con,"UPDATE keranjang set id_chekout='$last_id' where id_pembeli='$id_pembeli'");
}
header("location:cara_pesan.php?page=pembelian_selesai");
?>