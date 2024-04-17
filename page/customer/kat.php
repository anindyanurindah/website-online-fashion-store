	<?php
include('../../config.php');
$kat="select * from kategori";
$hasil=mysqli_query($con,$kat);
while($get_data=mysqli_fetch_array($hasil)){

	?><li style=""><a href="index.php?page=detail&id=<?=$get_data['id_ketegori']?>">
		<?php echo $get_data['kategori']?>
	</a></li>
	<?php
	}
	?>
