<?php
include"../../config.php";
$no = 1;
$qry_buku = mysqli_query($con,"SELECT * from buku");
?>
<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
<a href="index.php?page=input_buku" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> ADD PRODUCT</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_buku.php");
}
?>
							
							<table style="margin-top:20px;">
								<tr>
							 
								<th><center>No</center></th>
								<th><center>Nama Produk</center></th>
								<th><center>Merek</center></th>
								<th><center>jenis Bahan</center></th>
								<th><center>Gambar</center></th>
								<th><center>Kota</center></th>
								<th><center>Harga</center></th>
								<th><center>Stok</center></th>
								<th><center>Aksi</center></th>
							</tr>
								<?php while($data = mysqli_fetch_array($qry_buku)) { ?>
								<tr>
								 <td><?php echo $no++ ?></td>
								 <td><?php echo $data['judul'] ?></td>
								 <td><?php echo $data['penerbit'] ?></td>
								 <td><?php echo $data['pengarang'] ?></td>
								 <td><center><img src="../../gambar/<?php echo $data['gambar'] ?>" style="width:100px;"></center></td>
								 <td><?php echo $data['halaman'] ?></td>
								 <td>Rp.<?php echo number_format($data['harga']); ?>,-</td>
								 <td><?php echo $data['stok'] ?></td>
								 <td><a href="index.php?page=editbuku&id=<?php echo $data['id_buku']; ?>"><center><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a href="hapus_book.php?id=<?php echo $data['id_buku']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></center></a></td>
								</tr>
								<?php } ?>
							</table>
 						</div>
                    </div>
</div>