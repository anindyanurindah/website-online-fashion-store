<?php
include"../../config.php";
$no = 1;
$qry_kategori = mysqli_query($con,"SELECT * from kategori");
?>
<div class="row">
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px; margin-bottom:25px;">
<b>Data Kategori</b>
</div>
<a href="index.php?page=kategori&aksi=input" class="btn btn-success" style="margin:17px;"><span class="glyphicon glyphicon-plus"> TAMBAH KATEGORI</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_kat.php");
}
else if($aksi=="edit")
{
	include("edit.php");
}
?>
<table class="table table-bordered">
 	<tr>
		<th style=" background: #E6E6FA; "><center>No</center></th>
		<th style=" background: #E6E6FA; "><center>Kategori</center></th>
		<th style=" background: #E6E6FA; "><center>Aksi</center></th>
	</tr>
	<?php
	 while($data = mysqli_fetch_array($qry_kategori)) { ?>
	<tr>
		 <td style="color: #ffffff"><?php echo $no++ ?></td>
		 <td style="color: #ffffff"><?php echo $data['kategori'] ?></td>
		 <td style="color: #ffffff"><a href="index.php?page=kategori&aksi=edit&id=<?php echo $data['id_ketegori']; ?>"><center><span class="glyphicon glyphicon-pencil"></span></a> || <a href="hapus_kat.php?id=<?php echo $data['id_ketegori']; ?>"><span class="glyphicon glyphicon-trash"></span></center></a></td>
	</tr>
	<?php } ?>
</table>
</div>