<?php
$q = mysqli_query($con,"SELECT * FROM chekout WHERE active='T'");
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
 		<th style=" background: #E6E6FA; "><center>Status Terima</center></th>
 		<th style=" background: #E6E6FA; "><center>Aksi</center></th>
	<?php while($c=mysqli_fetch_array($q)){?>
	<tr>
		<td style="color: #ffffff"><center><?php $data=mysqli_fetch_array(mysqli_query($con,"SELECT * from customer where id_pembeli='$c[id_pembeli]'"));$nama=$data['nama']; echo $nama; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['tanggal']; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['status_terima']; ?></center></td>
 		<td style="color: #ffffff"><center><a href="index.php?page=laporan&act=detail&id=<?php echo $c['id_pembeli']; ?> "><span class="glyphicon glyphicon-eye-open"></span></a> | <a href="konfirmasi_transaksi.php?id=<?php echo $c['id_chekout']; ?>&id_pembeli=<?php echo $c['id_pembeli']; ?>"><span class="glyphicon glyphicon-check"></span></a></center></td>
	</tr>
	<?php }} ?>
</table>
</div>