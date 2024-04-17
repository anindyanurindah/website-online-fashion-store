<?php
$q = mysqli_query($con,"SELECT customer.nama, buku.judul, keranjang.total_harga, keranjang.qty, chekout.tanggal, chekout.status_terima FROM `chekout` 
JOIN keranjang ON keranjang.id_chekout = chekout.id_chekout 
JOIN customer ON customer.id_pembeli = chekout.id_pembeli 
JOIN buku ON buku.id_buku = keranjang.id_buku");
@$act = $_GET['act'];
if($act=="detail")
{
	include("detail_pembelian.php");
}else{
?>
<div class="row">
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
<b>Laporan Transaksi</b>
</div>
<table class="table table-bordered">
		<th style=" background: #E6E6FA; "><center>Nama Customer</center></th>
 		<th style=" background: #E6E6FA; "><center>Tanggal Order</center></th>
 		<th style=" background: #E6E6FA; "><center>Nama Produk</center></th>
 		<th style=" background: #E6E6FA; "><center>Qty</center></th>
 		<th style=" background: #E6E6FA; "><center>Status Terima</center></th>
 		<th style=" background: #E6E6FA; "><center>Total</center></th>
	<?php while($c=mysqli_fetch_array($q)){?>
	<tr>
		<td style="color: #ffffff"><center><?php echo $c['nama']; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['tanggal']; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['judul']; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['qty']; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['status_terima']; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['total_harga']; ?></center></td>
	</tr>
	<?php }} ?>
</table>
</div>