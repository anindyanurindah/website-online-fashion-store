<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Peek A book</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#929292;">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#" style="color:#fff; font-size:30px;">Peek A book</a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="color:#fff;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li><a href="" style="color:#fff;" ><span class="glyphicon glyphicon-list"> Kategori | </span></a>
<ul>
<li><?php include("kat.php");?></li>

</ul>
</li>
          <li class="a"><a href="cara_pesan.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> Cara Belanja | </span></a></li>
          <li class="a"><a href="login.php" style="color:#fff;"><span class="glyphicon glyphicon-log-in"> Login | </span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="row">
      <div class="col-md-4" style="margin:30px;">
     <img src="img/book.jpg">   
    </div>
      <div class="col-md-6" style="margin-left:70px;">
        <h2><b>Selamat datang di toko buku murah.<h1>Peek A book</h1></h2>
        <p>disini anda bisa membeli dan memesan buku dengan mudah, anda tinggal klik, maka buku sampai di tempat anda. tidak perlu lagi jauh jauh ke toko buku.</p>
      </div>
    </div>
    </div>
<div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#929292;color:#fff;line-height:60px;font-size:20px;">
<b>Buku Kami</b>
</div>
    <div class="container">
      <div class="row">
      <?php
      @$idkat = $_GET['id'] ;
      $qrybukukat = mysqli_query($con,"SELECT * from buku where id_ketegori='$idkat'");
      $qrybuku= mysqli_query($con,"SELECT * from buku");
      if($idkat==0){
      while($buku = mysqli_fetch_array($qrybuku)) {
      ?>
      
        <div class="col-md-4" style="margin-top:20px;">
        <div class="buku">
        <center><img src="gambar/<?php echo $buku['gambar'] ?>" style="margin-top:20px; width:200px;height:190px;"></center>
         <h3 style="text-align:center; color:#0000ff;"><?php echo $buku['judul'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $buku['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $buku['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $buku['id_buku'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
        <?php } }
        else{ while($buku1 = mysqli_fetch_array($qrybukukat)){?>
            <div class="col-md-4" style="margin-top:20px;">
        <div class="buku">
        <center><img src="gambar/<?php echo $buku1['gambar'] ?>" style="margin-top:20px;width:200px;height:190px;"></center>
        <h3 style="text-align:center; color:#0000ff; "><?php echo $buku1['judul'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $buku1['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $buku1['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $buku1['id_buku'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
          <?php }} ?>
      </div>

      <hr>

      
    </div> 
     
      <div class="footer" style="width:100%;height:270px;color:#fff;background:#929292;">
      <div class="row" style="background:#000000;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#ffffff"><h3><b>Tentang Peek-A-book</b></h3></li>
        </ul></center>
          <hr>
        <ul>
          <li><b>Peek-A-book</b> adalah</li>
          <li>Sebuah toko buku online</li>
          <li>yang menyediakan semua</li>
          <li>jenis buku dengan pemilihan</li>
          <li>berdasarkan kategori.</li>
        </ul>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#ffffff"><h3><b>Alamat Kami</b></h3></li>
        </ul></center>
          <hr>
    
          <ul>
          <li>Jl. Kenangan</li>
          <li>Hati Mantan</li>
          <li>Yang Terkenang</li>
          <li>Lautan Asmara Hitam</li>
          <li></li>
        </ul>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#ffffff"><h3><b>Contact Us</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-4">
          <a href=""><img src="images/fb.png" style="width:70px;height:75px;  "></a>
          </div>
          <div class="col-md-4">
          <a href=""><img src="images/gp.png" style="width:70px;height:75px;"></a>
          </div>
          <div class="col-md-4">
          <a href=""><img src="images/Twitter.png" style="width:70px;height:75px;"></a>
          </div>
         </div>
        </ul>
        </center>
      </div>
      </div>
      </div>
        <div class="copyright" style="line-height:50px;">
        <center>&copy; 2016 BcoderInc</center>
        </div>
      </div>
  </body>
</html>