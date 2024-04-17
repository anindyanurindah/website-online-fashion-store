<?php
include"config.php";
$kat = mysqli_query($con,"SELECT * from kategori");
while($data_kat = mysqli_fetch_array($kat)){
?>
<li><a href="index.php?id=<?php echo $data_kat['id_ketegori'] ?>"><?php echo $data_kat['kategori']; ?></a></li>
<?php } ?>