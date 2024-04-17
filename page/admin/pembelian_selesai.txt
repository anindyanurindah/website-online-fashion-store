<!-- <div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:#929292;color:#fff;line-height:60px;font-size:20px;">
<b>Pembelian Selesai</b>
</div>
<?php
$id_pembeli = $_SESSION['id_pembeli'];
$query_checkout = mysqli_query($con,"SELECT * from  chekout where id_pembeli='$id_pembeli'");
$data_chekout = mysqli_fetch_array($query_checkout);
?>
<h3><b>Data Penerima :</b></h3>
<table>
	<tr>
		<td><p><b>Nama</b></p></td>  	<td>: <?php echo $data_chekout['nama']; ?></td>
	</tr>

	<tr>
		<td><p><b>Alamat</b></p></td>	<td>: <?php echo $data_chekout['alamat']; ?></td>
	</tr>

	<tr>
		<td><p><b>Nomor Telepon</b></p></td>	<td>: <?php echo $data_chekout['nomor_tlp']; ?></td>
	</tr>
</table>
<h3><b>Data Order</b></h3>
<?php
$qry = mysqli_query($con,"SELECT * from keranjang where id_pembeli='$id_pembeli'");
?>
<div class="jumbotron" style="background-color: #505050">
<table class="table table-bordered">
	<th>Nama Produk</th><th>harga</th><th>qty</th><th>total harga</th>
	<?php while($keranjang=mysqli_fetch_array($qry)){?>
		<tr>
		<td><?php
		$q = mysqli_query($con,"SELECT * from buku where id_buku='$keranjang[id_buku]'");
		$d = mysqli_fetch_array($q);
		$judul = $d['judul']; echo $judul;
		$qbyar = mysqli_fetch_array(mysqli_query($con,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id_pembeli'"));
		$bayar = $qbyar['total_bayar'];
		?>
			
		</td>
		<td><?php echo $keranjang['harga'] ?></td>
		<td><?php echo $keranjang['qty']?></td>
		<td><?php echo $keranjang['total_harga']?></td>
		</tr>
<?php } ?>
<tr>
	<td colspan="3">Total harga keseluruhan</td><td><?php echo $bayar;  ?></td>
</tr>
<tr>
	<td colspan="3">Ongkos Kirim (Paten)</td><td>Rp.20,000,00</td>
</tr>
<tr>	
	<td colspan="3">Total Bayar</td><td>Rp.<?php $t_bayar=$bayar+20000; echo number_format($t_bayar); ?>,00</td>
</tr> -->




<!-- //Menambahkan kode JavaScript untuk mengupdate waktu secara periodik
<
echo '<p id="countdown"></p>';
echo '<script>'
echo 'var countdown = new Date("' . $batas_pembayaran . '").getTime();';
echo 'var x = setInterval(function() {';
echo '  var now = new Date().getTime();';
echo '  var distance = countdown - now;';
echo '  var days = Math.floor(distance / (1000 * 60 * 60 * 24));';
echo '  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));';
echo '  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));';
echo '  document.getElementById("countdown").innerHTML = "Batas Pembayaran: " + days + " hari, " + hours + " jam, " + minutes + " menit";';
echo '  if (distance < 0) {';
echo '    clearInterval(x);';
echo '    document.getElementById("countdown").innerHTML = "Batas Pembayaran Telah Berakhir";';
echo '  }';
echo '}, 1000);';
echo '</script>';
?> -->

<h3><b>Data Penerima :</b></h3>

</table>
<p>Selanjutnya anda harus megirimkan uang yang tertera pada total bayar ke <b>No Rek 00112233</b> atas nama <b>Admin</b>. Setelah melakukan pembayaran anda bisa mengonfirmasi melalulu <b>No.Tlp. 088237478997</b>. <a href="index.php" class="btn btn-danger"> Selesai</a> </p>
<title>Countdown Pembayaran (24 Jam)</title>
  <script>
    // Set waktu akhir pembayaran dalam 24 jam
    var countDownDate = new Date();
    countDownDate.setHours(countDownDate.getHours() + 24);

    // Update countdown setiap 1 detik
    var countdown = setInterval(function() {
      // Dapatkan tanggal dan waktu saat ini
      var now = new Date().getTime();

      // Hitung selisih antara waktu akhir dan waktu saat ini
      var distance = countDownDate - now;

      // Hitung waktu dalam jam, menit, dan detik
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Tampilkan waktu dalam elemen dengan id "countdown"
      document.getElementById("countdown").innerHTML = hours + " jam, " + minutes + " menit, " + seconds + " detik ";

      // Jika waktu countdown berakhir, tampilkan pesan
      if (distance < 0) {
        clearInterval(countdown);
        document.getElementById("countdown").innerHTML = "Waktu pembayaran telah berakhir.";
		$bk=$_GET['id'];
		mysqli_query($con,"DELETE FROM checkout WHERE id_checkout='$bk'");
      }
    }, 1000);
  </script>
  <body>
  <h1>Countdown Pembayaran (24 Jam)</h1>
  <p id="countdown"></p>
</body>
</div>
