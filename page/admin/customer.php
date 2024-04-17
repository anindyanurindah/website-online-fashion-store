<?php
$q = mysqli_query($con,"SELECT * FROM customer");
?>
<div class="row">
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
<b>DATA CUSTOMER</b>
</div>
<table class="table table-bordered">
	<tr>
		<th style=" background: #E6E6FA; "><center>Nama Customer</center></th>
 		<th style=" background: #E6E6FA; "><center>Username</center></th>
 		<th style=" background: #E6E6FA; "><center>Password</center></th>
 		<th style=" background: #E6E6FA; "><center>Aksi</center></th>
 	</tr>
	<?php while($c=mysqli_fetch_array($q)){?>
	<tr>
		<td style="color: #ffffff"><?php echo $c['nama']; ?></td>
 		<td style="color: #ffffff"><?php echo $c['username']; ?></td>
 		<td style="color: #ffffff"><?php echo $c['password']; ?></td>
 		<td style="color: #ffffff"><center><a href="hapus_cus.php?id=<?php echo $c['id_pembeli']; ?> "><span class="glyphicon glyphicon-trash"></span></a></center></td>
	</tr>
	<?php } ?>
</table>
</div>