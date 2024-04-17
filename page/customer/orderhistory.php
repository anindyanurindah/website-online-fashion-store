<?php
include"../../config.php";
$id_pembeli = $_SESSION['id_pembeli'];
$q = mysqli_query($con,"SELECT chekout.nama, buku.judul, keranjang.total_harga, keranjang.qty, chekout.tanggal, chekout.status_terima FROM `chekout` 
JOIN keranjang ON keranjang.id_chekout = chekout.id_chekout 
JOIN customer ON customer.id_pembeli = chekout.id_pembeli 
JOIN buku ON buku.id_buku = keranjang.id_buku where chekout.id_pembeli='$id_pembeli'");
$cek_cekout = mysqli_num_rows($q);
?>
<div class="jumbotron" style="background-color: #505050">
	<?php if($cek_cekout >= 1){ ?>
<table class="table table-bordered">
	<tr style="color: #000000">
		<th style=" background: #E6E6FA; "><center>Nama Penerima</center></th>
 		<th style=" background: #E6E6FA; "><center>Tanggal Order</center></th>
 		<th style=" background: #E6E6FA; "><center>Nama Produk</center></th>
 		<th style=" background: #E6E6FA; "><center>Qty</center></th>
 		<th style=" background: #E6E6FA; "><center>Status Terima</center></th>
 		<th style=" background: #E6E6FA; "><center>Total</center></th>
 	</tr>
	<?php while($c=mysqli_fetch_array($q)){?>
	<tr>
		<td><center><?php echo $c['nama']; ?></center></td>
 		<td><center><?php echo $c['tanggal']; ?></center></td>
 		<td><center><?php echo $c['judul']; ?></center></td>
 		<td><center><?php echo $c['qty']; ?></center></td>
 		<td><center><?php echo $c['status_terima']; ?></center></td>
 		<td><center><?php echo $c['total_harga']; ?></center></td>
	</tr>
	<?php } ?>
</table>
<?php } else { ?>
	<h4>Belum Ada History Transaksi!</h4>
	<?php } ?>
</div>